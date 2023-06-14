@extends('dashboard.layouts.main')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h2">Add New Product</h1>
      
    </div>
  </main>
  <div class="col-lg-8">
  <form method="POST" action="/dashboard/products" enctype="multipart/form-data">
    @csrf
    @if (session()->has('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
     {{session('success')}}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
      @endif
    <div class="mb-3">
      <label for="name"  class="form-label">Product Name</label>
      <input type="text" class="form-control" id="name" name="name">
    </div>
     <div class="mb-3">

        <label for="category_id"  class="form-label" >Product Category</label>
        <select class="form-select " name="category_id" id="category_id" aria-label="Default select example">
            @foreach($categories as $c) 
            @if(old('category_id')==$c->id)
            <option value={{$c->id}} selected>{{$c->name}}</option> 
            @else
            <option value={{$c->id}} >{{$c->name}}</option>
            @endif
            @endforeach
          </select>
    </div>  
    {{-- <div class="mb-3">
      <label for="category_id"  class="form-label">Category</label>
      <input type="text" class="form-control" id="category_id" name="category_id">
    </div> --}}
      <div class="mb-3">
        <label for="price"  class="form-label">Product Price</label>
        <input type="text" class="form-control" id="name" name="price">
      </div>
      <div class="mb-3">
        <label for="image" class="form-label">Post Image</label>
        <input class="form-control" type="file" id="image" name="image">
      </div>
      <div class="mb-3">
        <label for="description" class="form-label">Product description</label>
        <textarea class="form-control" id="description" name="description" rows="3"></textarea>
      </div>
     

    <button type="submit" class="btn btn-primary">Add Product</button>
  </form>
</div>

@endsection