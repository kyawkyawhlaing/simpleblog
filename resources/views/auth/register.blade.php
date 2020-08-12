@extends('welcome')
@section('title','register page')
@section('content')

<div class="col-md-8 offset-2 card card-body bg-light mb-2 ">
<form method = "post">
@csrf
@include ('alert')
    <legend class="text-center "><h2>Register Form</h2></legend>
    <div class="form-group">
                <label for="username">User Name</label>
                <input type="text" class="form-control" id="#" name="name"  placeholder="User Name">
    </div>
    <div class="form-group">
      <label for="Email1">Email address</label>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
    </div>
    <div class="form-group">
      <label for="Password">Password</label>
      <input type="password" class="form-control" id="exampleInputPassword1"  name="password" placeholder="Password">
    </div>
    <div class="form-group">
        <label for="comfirmpassword">Comfirm Password</label>
      <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
    </div>
    <button type="submit" class="btn btn-primary float-right mb-1">Register</button>
    <div class="clearfix"></div>
</form>
</div>

@stop