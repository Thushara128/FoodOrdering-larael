@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-md-10">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach($order as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
                <a href="detail/{{$item->id}}">
                    <img class="trending-img" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-md-6">
                    <div class="">
                      <h2>Name: {{$item->dish_name}}</h2>
                      <p>Delivery Staus: {{$item->status}}</p>
                      <p>Address: {{$item->address}}</p>
                      <p>Payment: Satus {{$item->payment_status}}</p>
                      <p>Payment Method: {{$item->payment_method}}</p>
                    </div>
             </div>
            </div>
            @endforeach
        </div>
     </div>
</div>
@endsection  