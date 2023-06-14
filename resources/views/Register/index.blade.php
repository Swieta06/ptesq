{{-- @extends('layouts.main') --}}
@extends('layouts.main') 
@section('container')
    <main class="form-signin w-100 m-auto">
    <form action="/register" method="POST">
        @csrf
      <h1 class="h3 mb-3 fw-normal text-center">Please Register</h1>
      <div class="form-floating">
        <input type="text" name="name" class="form-control" id="name" placeholder="name">
        <label for="name">Name</label>
      </div>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
  

      <button class="w-100 btn btn-lg btn-danger" type="submit">Register</button>

    </form>
    <small class="d-block text-center mt-3">Already Register? <a class="link-danger"href="/login">Login Now!</a></small>
  </main>
@endsection 