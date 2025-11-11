@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <h1 class="mt-4">Admin Dashboard</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-primary text-white mb-4">
                <div class="card-body">Total Students</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <h2>{{ $totalStudents }}</h2>
                </div>
            </div>
        </div>
    </div>
    
    <div class="card mb-4">
        <div class="card-header">
            <i class="fas fa-table mr-1"></i>
            Quick Actions
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-3">
                    <a href="{{ route('admin.students.create') }}" class="btn btn-success btn-block">
                        <i class="fas fa-plus"></i> Add New Student
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="{{ route('admin.students') }}" class="btn btn-primary btn-block">
                        <i class="fas fa-list"></i> View All Students
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection