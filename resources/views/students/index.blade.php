@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Students</h1>
    <a href="{{ route('student.create') }}" class="btn btn-primary">Add Student</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($students as $student)
                <tr>
                    <td>{{ $student->id }}</td>
                    <td>{{ $student->name }}</td>
                    <td>{{ $student->email }}</td>
                    <td>
                        <a href="{{ route('student.show', $student) }}" class="btn btn-info">View</a>
                        <a href="{{ route('student.edit', $student) }}" class="btn btn-warning">Edit</a>
                        <form action="{{ route('student.destroy', $student) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
