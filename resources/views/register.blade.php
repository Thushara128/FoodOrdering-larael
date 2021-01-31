@extends('master')
@section('content')
<!-- Card -->
<div class="login">
<div class="container">
<div class="row">
    <div class="col-4 mx-auto mt-4">

  
      <h5 class="text-center mt-1 mb-4">RegisterNow</h5>
  
      <form action="register" method="POST">
        @csrf
        <div class="form-group">
            <label for="defaultForm-email1">UserName</label>
          <input type="text" name="name" id="defaultForm-email1" class="form-control">
        
        </div>
        <div class="form-group">
            <label for="defaultForm-email1">Your email</label>
          <input type="email" name="email" id="defaultForm-email1" class="form-control">
        
        </div>
        <div class="md-form md-outline">
            <label for="defaultForm-pass1">Your password</label>
          <input type="password" name="password" id="defaultForm-pass1" class="form-control">

        </div>
        <button type="submit" class="btn btn-primary mt-4 mb-4">Register</button>
      </form>
  
    </div>
  
  </div>
    </div>
</div>
  <!-- Card -->
@endsection 