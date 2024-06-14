@extends('layout')
@section('title', 'Registration')

@section('content')
    <div class="container d-flex align-items-center justify-content-center" style="min-height: 50vh;">
        <div class="card" style="width: 500px;">
            <div class="card-body">
                <h5 class="card-title text-center mb-4">Registration</h5>
                <form action="{{ route('registration.post') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Fullname</label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>
                    <button type="submit" class="btn btn-success w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
