@extends('layouts.auth')

@section('container')
<div class="row">
  <div class="col-lg-12">
    <div class="p-5">
      <div class="text-center">
        <h1 class="h4 text-gray-900 mb-4">Login Page</h1>
      </div>
      @if(session()->has('message'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('message') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      @endif
      <form class="user">
        <div class="form-group">
          <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address...">
        </div>
        <div class="form-group">
          <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary btn-user btn-block">
          Login
        </button>
      </form>
      <hr>
      {{-- <div class="text-center">
        <a class="small" href="forgot-password.html">Forgot Password?</a>
      </div> --}}
      <div class="text-center">
        <a class="small" href="{{ '/register' }}">Create an Account!</a>
      </div>
    </div>
  </div>
</div>
@endsection