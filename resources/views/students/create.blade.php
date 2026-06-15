@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form action="{{ route('student.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Name:</label>
                        <input name ="name" type="text" class="form-control" id="name">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email:</label>
                        <input name="email" type="email" class="form-control" id="email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone:</label>
                        <input name="phone" type="text" class="form-control" id="phone">
                    </div>
                    <button type="submit" class="btn btn-primary">Add Student</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
@endsection
