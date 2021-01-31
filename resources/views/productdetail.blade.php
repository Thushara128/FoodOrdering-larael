
@extends('master')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6 photo">
<img class="detail-img" src={{$product['gallery']}}>
        </div>
        <div class="col-sm-6 detail">
            <a href="Home">Go Back</a>
            <h2>{{$product['dish_name']}}</h2>
            <h4>Price:{{$product['price']}}</h4>
            <h4>Description:{{$product['description']}}</h4>
                <h4>Available:{{$product['available']}} only/-</h4>
                <br>
               <form action="/add_to_cart" Method="POST">
                   @csrf
                   <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary">Add to Cart</button>
               </form> <br>
               <button class="btn btn-success">Buy Now</button>
          
            </div>
    </div>
</div>
<br>
<br>
{{View::make('footer')}}
@endsection 