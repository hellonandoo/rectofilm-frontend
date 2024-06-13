@extends('layout')
@section('title', 'registration')

@section('content')
    <div class="container">
      <div class="mt-5">
        
      </div>
        <form action="{{route('registration.post')}}" method="POST" class="ms-auto me-auto mt-auto" style="width: 500px">
          @csrf
            <div class="mb-3">
              <label class="form-label">Fullname</label>
              <input type="text" class="form-control" name="name">
            </div>
            <div class="mb-3">
              <label class="form-label">Email address</label>
              <input type="email" class="form-control" name="email">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Password</label>
              <input type="password" class="form-control" name="password">
            </div>
            <button type="submit" class="btn btn-success">Submit</button>
          </form>
    </div>
@endsection