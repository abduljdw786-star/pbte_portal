<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        $totalStudents = Student::count();
        return view('admin.dashboard', compact('totalStudents'));
    }

    public function students()
    {
        $students = Student::all();
        return view('admin.students', compact('students'));
    }

    public function create()
    {
        return view('admin.student-form');
    }

    public function store(Request $request)
    {
        $request->validate([
            'roll_no' => 'required|unique:students',
            'serial_no' => 'required',
            'student_name' => 'required',
            'father_name' => 'required',
            'registration_no' => 'required',
            'college_name' => 'required',
            'program_duration' => 'required',
            'program_name' => 'required',
            'obtained_marks' => 'required|integer',
            'total_marks' => 'required|integer',
            'grade' => 'required',
            'award_date' => 'required|date',
            'printed_date' => 'required|date',
        ]);

        Student::create($request->all());

        return redirect()->route('admin.students')
            ->with('success', 'Student added successfully!');
    }

    public function edit(Student $student)
    {
        return view('admin.student-form', compact('student'));
    }

    public function update(Request $request, Student $student)
    {
        $request->validate([
            'roll_no' => 'required|unique:students,roll_no,' . $student->id,
            'serial_no' => 'required',
            'student_name' => 'required',
            'father_name' => 'required',
            'registration_no' => 'required',
            'college_name' => 'required',
            'program_duration' => 'required',
            'program_name' => 'required',
            'obtained_marks' => 'required|integer',
            'total_marks' => 'required|integer',
            'grade' => 'required',
            'award_date' => 'required|date',
            'printed_date' => 'required|date',
        ]);

        $student->update($request->all());

        return redirect()->route('admin.students')
            ->with('success', 'Student updated successfully!');
    }

    public function destroy(Student $student)
    {
        $student->delete();
        return redirect()->route('admin.students')
            ->with('success', 'Student deleted successfully!');
    }
}