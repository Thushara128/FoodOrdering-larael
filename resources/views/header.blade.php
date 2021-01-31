<?php
use App\Http\Controllers\ProductController;

$total=0;
if(Session::has('user')){
  $total=ProductController::cartitem();
}
?>
<header class="header bg-white">
    <div class="container-flex" style="padding-left: 20px;">
      <nav class="navbar navbar-expand-lg navbar-light py-3 px-lg-0"><a class="navbar-brand" href="/"><span class="font-weight-bold text-uppercase text-dark">RESTO</span></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item">
              <!-- Link--><a class="nav-link active" href="/">Home</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="/myorder">Orders</a>
            </li>
            <li class="nav-item">
              <!-- Link--><a class="nav-link" href="/list">List</a>
            </li>

            <li class="nav-item dropdown"><a class="nav-link dropdown-toggle" id="pagesDropdown" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
           
              <div class="dropdown-menu mt-3" aria-labelledby="pagesDropdown"><a class="dropdown-item border-0 transition-link" href="/">Homepage</a><a class="dropdown-item border-0 transition-link" href="/">Products</a><a class="dropdown-item border-0 transition-link" href="/cartlist">Shopping cart</a><a class="dropdown-item border-0 transition-link" href="/myorder">OrderDetail</a></div>
            </li>
            <li> <form action="/search"  class="navbar-form navbar-left">
              <div class="form-group">
                <input type="text" name="query" class="form-control search-box" placeholder="search">
              </div>
            </li>
            <li><button type="submit" class="btn btn-primary">Search</button></li>
            </form>
         
         
          </ul>
          
          <ul class="navbar-nav ml-auto">               
            <li class="nav-item"><a class="nav-link" href="/cartlist"> <i class="fas fa-dolly-flatbed mr-1 text-gray"></i>Cart({{$total}})</a></li>
           @if(Session::has('user'))
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{Session::get('user')['name']}}
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="/logout">Logout</a>
              </div>
            </li>
            @else
            <li class="nav-item"><a class="nav-link" href="/login"> <i class="fas fa-user mr-1 text-gray"></i>Login</a></li>
            <li class="nav-item"><a class="nav-link" href="/register"> <i class="fas fa-user mr-1 text-gray"></i>Register</a></li>
            @endif
          </ul>
        </div>
      </nav>
    </div>
  </header>