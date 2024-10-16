@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Students</h1>
    <form action="{{ route('student.update', $student) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{ $student->name }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ $student->email }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Update Student</button>
        <a href="{{ route('student.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
