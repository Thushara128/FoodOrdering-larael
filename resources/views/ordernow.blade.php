@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <table class="table table-hover">
            
            <tbody>
              <tr>
                <td>Amount</td>
                <td>$ {{$total}}</td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery</td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>${{$total+10}}</td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="post">
              @csrf
              <div class="form-group">
                  <label for="email">Email address:</label>
                  <textarea name="address" placeholder="Enter Your Address" class="form-control" placeholder="Enter email" id="email"></textarea>
               
                </div>
                <div class="form-group">
                  <label for="pwd">Payment Method</label><br>
                  <input type="radio" value="cash" name="payment"><span> Online payment</span><br><br>
                  <input type="radio" value="cash" name="payment"><span> EMI payment</span><br><br>
                  <input type="radio"value="cash" name="payment"><span> On Delivery</span><br><br>
                </div>
                <button type="submit" class="btn btn-primary">OrderNOW</button>
              </form><br>
        </div>
     </div>
</div>
@endsection  