@extends('master')
@section('content')
<!-- Card -->

<div class="custom-login">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
           @foreach ($products as $item)
           
            
              <div class="carousel-item {{$item['id']==1?'active':''}}">
                <a href="productdetail/{{$item['id']}}">
              <img class="img-slider" src={{$item['gallery']}} alt="First slide">
              <div class="carousel-caption d-none d-md-block">
                <h5>{{$item['dish_name']}}</h5>
                <p>{{$item['description']}}</p>
              </div>
            </div></a>
           @endforeach
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

     <div class="trending-wrapper">
      
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Top trending products</h2>
                    <div class="col-md-3">
              @foreach ($products as $item)
             
                <div class="trending-item">
                  <a href="productdetail/{{$item['id']}}">
                  <div class="product text-center">
                      <div class="position-relative mb-3"> 
                   <img class="trending-img" src={{$item['gallery']}} alt="First slide">
                   <div class="text-center">
                     <h5>{{$item['dish_name']}}</h5>
                     <p>$.{{$item['price']}}</p>
                   </div>
               
                 </div>
                </div>
              </a>
                 </div>
            </div>
        
              
           
           @endforeach
         
           {{View::make('footer')}}
 
        @endsection 
        