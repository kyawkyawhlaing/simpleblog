@extends('welcome')
@section('title','Login Page')
@section('content')
<div class="container">
    <div class="card card-body bg-light mb-2">
        <form method="post">
          @csrf 
          @include('alert')
            <div class="form-group">
              <label for="Email">User Email</label>
              <input type="email" class="form-control" id="#" name="email" placeholder="Enter Email">
            </div>
            <div class="form-group">
              <label for="Password1">Password</label>
              <input type="password" class="form-control" id="password" name="password" placeholder="Password">
            </div>
            <button type="submit" class="btn btn-carrot">Login</button>
            <a class="float-right text-carrot" href="{{url('register')}}">
               Register
            </a>  

        </form>
    </div>
</div>
@endsection