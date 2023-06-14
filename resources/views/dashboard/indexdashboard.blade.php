@extends('dashboard.layouts.main')
@section('container')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
  <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Dashboard</h1>
  </div>
</main>
<div class="table-responsive col-lg-8">
  @if (session()->has('success'))
  <div class="alert alert-success alert-dismissible fade show" role="alert">
   {{session('success')}}
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
 </div>
    @endif
    <a href ="/dashboard/products/create"class="btn btn-primary mb-3">Add New Product</a>
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">image</th>
          <th scope="col">Name</th>
          <th scope="col">category</th>
          <th scope="col">Price</th>
          <th scope="col">Description</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($product as $item)
        <tr>
            <td>{{$item->id}}</td>
            <td> <img src="{{asset('uploads/img_products/'.$item->image) }} " class="card-img-top" width="70px" height="70px" alt="..."></td>
          <td>{{$item->name}}</td>
          <td>{{$item->category->name}}</td>
          <td>{{$item->price}}</td>
          <td>{{$item->description}}</td>
          <td>
            <a href="/dashboard/products/{{$item->id}}/edit"class="badge btn-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/products/{{$item->id}}" method="post" class="d-line">

               @csrf
              @method('delete')
           
              <button type="submit" class="badge bg-danger border-0" onclick="return confirm('Are you sure deleted product?')"><span data-feather="x-circle"></span></button>
            </form>
    
            </td>
        </tr> 
        @endforeach
       
        
      </tbody>
    </table>
  </div>
@endsection