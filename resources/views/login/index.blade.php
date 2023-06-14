@extends('layouts.main') 
@section('container')
    <main class="form-signin w-100 m-auto">
    <form action="/login" methode="POST">
   @csrf
   @if (session()->has('success'))
   <div class="alert alert-success alert-dismissible fade show" role="alert">
    {{session('success')}}
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
  </div>
     @endif
      <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
      <div class="form-floating">
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
        <label for="email">Email address</label>
      </div>
      <div class="form-floating">
        <input type="password" name="password" class="form-control" id="password" placeholder="Password">
        <label for="password">Password</label>
      </div>
  

      <button class="w-100 btn btn-lg btn-danger" type="submit">Login in</button>

    </form>
    <small class="d-block text-center mt-3">Not Register? <a class="link-danger"href="/register">Reginter Now!</a></small>
  </main>
</div>
@endsection