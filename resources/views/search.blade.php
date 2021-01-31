@extends('master')
@section('content')


     <div class="trending-wrapper">
      
            <p class="small text-muted small text-uppercase mb-1">Made the hard way</p>
            <h2 class="h5 text-uppercase mb-4">Search products</h2>
          
            
             
             
                <div class="searched-item">
                    <div class="col-sm-4">
                        <a href="#">Filter Products </a>
                    </a>
                </div>
                @foreach ($products as $item)
                        <a href="productdetail/{{$item->id}}">
                            <div class="product text-center">
                        
                             <img class="trending-img" src={{$item->gallery}} alt="First slide">
                             <div class="">
                               <h5>{{$item->dish_name}}</h5>
                               <p>{{$item->price}}</p>
                               <p>{{$item->description}}</p>
                             </div>
                            </div>
                      
                      
                        </a>
                        @endforeach
                    </div>
                  
        
         
                </div>
  
              
         
          
 
        @endsection 