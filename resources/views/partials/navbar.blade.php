<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
    <div class="container ">
      <a class="navbar-brand" href="#">PetsQu</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link {{($tittle==="home")?'active':''}}"  href="/home">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{( $tittle==="product")?'active':''}}" href="/product">Product</a>
          </li>
       

          {{-- <li class="nav-item">
            <a class="nav-link {{( $tittle==="product")?'active':''}}" href="/categories">categories</a>
          </li> --}}
          {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              Category
            </a>
            <ul class="dropdown-menu">
              //  <li><a class="dropdown-item" href="/categories/{{$product->categories->id}}">food</a></li>
                <li><a class="dropdown-item" href="#">Tools</a></li>
              </ul>
          </li> --}}
       </ul>
        <ul class="navbar-nav ms-auto">
            <li class="nav-item ">
                <a class="nav-link {{( $tittle==="Login")?'active':''}}" href="/login"><i class="bi bi-box-arrow-in-right"></i> Login</a>
          </li>
       </ul>
      </div>
    </div>
  </nav>