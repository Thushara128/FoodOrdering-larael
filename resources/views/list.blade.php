@extends('master')
@section('content')
<h1>Food Details</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif

<table class="table table-hover">

  <thead>

    <tr>
      <th scope="col">#</th>
      <th scope="col">Dish Name</th>
      <th scope="col">Availability</th>
      <th scope="col">Price</th>
      <th scope="col">Description</th>
      <th scope="col">Image</th>
      <th>Operation</th>
    </tr>
  </thead>
  <tbody>
  @foreach($data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>{{$item->dish_name}}</td>
      <td>{{$item->available}}</td>
      <td>{{$item->price}}</td>
      <td>{{$item->description}}</td>
      <td><img class="trending-img" src="{{$item->gallery}}"></td>
      <td><a href="delete/{{$item->id}}"><i class="fa fa-trash"></i></a></td>
        <td>
        <form action="/add_to_cart" Method="POST">
          @csrf
          <input type="hidden" name="product_id" value="{{$item['id']}}">
       <button class="btn btn-info">Add to Cart</button>
      </form>
</td>
    </tr>
    </tr>
    @endforeach
  </tbody>
</table>
{{View::make('footer')}}
@stop
