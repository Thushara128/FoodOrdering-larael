@extends('master')
@section('content')
<!-- Card -->
<div class="login">
<div class="container">
<div class="row">
    <div class="col-4 mx-auto mt-4">

  
      <h5 class="text-center mt-1 mb-4">Sign In</h5>
  
      <form action="login" method="POST">
        <div class="form-group">
          @csrf

            <label for="defaultForm-email1">Your email</label>
          <input type="email" name="email" id="defaultForm-email1" class="form-control">
        
        </div>
        <div class="md-form md-outline">
            <label for="defaultForm-pass1">Your password</label>
          <input type="password" name="password" id="defaultForm-pass1" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">LogIn</button>
      </form>
  
    </div>
  
  </div>
    </div>
</div>
  <!-- Card -->
@endsection 