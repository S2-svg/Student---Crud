@extends('layouts.app')
@section('content')
    <div class="container">
        @include('partials.navbar')
        <a href="{{ route('student.create') }}" class="btn btn-primary my-3">Add New Student</a>
        <table class=" table">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($students as $index => $student)
                    <tr>
                        <td>{{ $index + 1 }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->phone }}</td>
                        <td>
                            <a href=""data-bs-toggle="modal" data-bs-target="#showStudent{{ $student->id }}"
                                class="btn btn-primary">
                                <i class="fa-solid fa-eye"></i>
                            </a>
                            <a href="{{ route('student.edit', $student->id) }}" class="btn btn-warning"><i
                                    class="fa-solid fa-pen-to-square"></i></a>
                            <a href=""data-bs-toggle="modal" data-bs-target="#deleteStudent{{ $student->id }}"
                                class="btn btn-danger">
                                <i class="fa-solid fa-trash"></i>
                            </a>

                            @include('students.show')
                            @include('students.delete')
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
