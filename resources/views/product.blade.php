@extends('layouts.main')
@section('container')

<h1>Product Page</h1>
<div class="btn-group">
    <button type="button" class="btn btn-danger dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
      Categories
    </button>
    <ul class="dropdown-menu">
       @foreach($categories as $item) 
      <li><a class="dropdown-item" href="/categories/{{$item->id}}">{{$item->name}}</a></li>
      @endforeach
  </div>
  <div class="row mt-4 ">  
    @foreach ($product as $item)
    <div class="col-md-4 mb-4">
        <div class="card " style="width: 19rem;">
        <img src="{{asset('uploads/img_products/'.$item->image) }} " class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">{{$item->name}}</h5>    
            <h4>Rp.{{$item->price}}</h4>
            <a href="/categories/{{$item->category->id}}"> <p>Category : {{$item->category->name}}</p></a>
            <p class="card-text">{{$item->description}}</p>
            <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>  
    </div> 
  
    @endforeach
</div>   
@endsection