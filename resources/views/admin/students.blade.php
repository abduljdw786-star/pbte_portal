@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Students Management</h1>
    
    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <div class="card mb-4">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center">
                <span><i class="fas fa-table mr-1"></i>All Students</span>
                <a href="{{ route('admin.students.create') }}" class="btn btn-primary">Add New Student</a>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Roll No</th>
                            <th>Student Name</th>
                            <th>Father Name</th>
                            <th>College</th>
                            <th>Program</th>
                            <th>Grade</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($students as $student)
                        <tr>
                            <td>{{ $student->roll_no }}</td>
                            <td>{{ $student->student_name }}</td>
                            <td>{{ $student->father_name }}</td>
                            <td>{{ $student->college_name }}</td>
                            <td>{{ $student->program_name }}</td>
                            <td>{{ $student->grade }}</td>
                            <td>
                                <a href="{{ route('result.show', $student->roll_no) }}" 
                                   class="btn btn-info btn-sm" target="_blank">View Result</a>
                                <a href="{{ route('admin.students.edit', $student) }}" 
                                   class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.students.destroy', $student) }}" 
                                      method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" 
                                            onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection