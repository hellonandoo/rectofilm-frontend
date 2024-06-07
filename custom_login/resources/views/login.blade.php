@extends('layout')
@section('title', 'Registrasi')

@section('content')
    <div class="container">
        <form action="{{route('login')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
    </div>
@endsection