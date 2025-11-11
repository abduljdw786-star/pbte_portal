@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">{{ isset($student) ? 'Edit' : 'Add' }} Student</h1>

    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-user-plus mr-1"></i>
            Student Information
        </div>
        <div class="card-body">
            <form action="{{ isset($student) ? route('admin.students.update', $student) : route('admin.students.store') }}" method="POST">
                @csrf
                @if(isset($student)) @method('PUT') @endif

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Roll Number *</label>
                            <input type="text" name="roll_no" class="form-control" 
                                   value="{{ old('roll_no', $student->roll_no ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Serial Number *</label>
                            <input type="text" name="serial_no" class="form-control" 
                                   value="{{ old('serial_no', $student->serial_no ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Student Name *</label>
                            <input type="text" name="student_name" class="form-control" 
                                   value="{{ old('student_name', $student->student_name ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Father Name *</label>
                            <input type="text" name="father_name" class="form-control" 
                                   value="{{ old('father_name', $student->father_name ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Registration Number *</label>
                            <input type="text" name="registration_no" class="form-control" 
                                   value="{{ old('registration_no', $student->registration_no ?? '') }}" required>
                        </div>
                    </div>
                    
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>College Name *</label>
                            <input type="text" name="college_name" class="form-control" 
                                   value="{{ old('college_name', $student->college_name ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Program Duration *</label>
                            <input type="text" name="program_duration" class="form-control" 
                                   value="{{ old('program_duration', $student->program_duration ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Program Name *</label>
                            <input type="text" name="program_name" class="form-control" 
                                   value="{{ old('program_name', $student->program_name ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Obtained Marks *</label>
                            <input type="number" name="obtained_marks" class="form-control" 
                                   value="{{ old('obtained_marks', $student->obtained_marks ?? '') }}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Total Marks *</label>
                            <input type="number" name="total_marks" class="form-control" 
                                   value="{{ old('total_marks', $student->total_marks ?? '') }}" required>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Grade *</label>
                            <input type="text" name="grade" class="form-control" 
                                   value="{{ old('grade', $student->grade ?? '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Award Date *</label>
                            <input type="date" name="award_date" class="form-control" 
                                   value="{{ old('award_date', isset($student) ? $student->award_date->format('Y-m-d') : '') }}" required>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Printed Date *</label>
                            <input type="date" name="printed_date" class="form-control" 
                                   value="{{ old('printed_date', isset($student) ? $student->printed_date->format('Y-m-d') : '') }}" required>
                        </div>
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success">
                    {{ isset($student) ? 'Update' : 'Create' }} Student
                </button>
                <a href="{{ route('admin.students') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection