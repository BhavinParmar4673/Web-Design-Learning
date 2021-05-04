@extends('Admin.master')
@section('title','Login Form')
@section('content')
<div class="d-flex login-container">
    <form class="login-form p-4">
      <h1 class="offset-sm-3 text-center mb-5">Tedera</h1>
        <div class="form-group row">
          <label for="staticEmail" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="text" class="form-control rounded-border-form">
          </div>
        </div>
        <div class="form-group row">
          <label for="inputPassword" class="col-sm-3 col-form-label">Password</label>
          <div class="col-sm-9">
            <input type="password" class="form-control rounded-border-form">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-3"></div>
          <div class="col-sm-9 d-flex justify-content-between">
            <a href="{{url('reset')}}">Forgot Password?</a>
            <button type="submit" class="btn rounded-button">Login</button>
          </div>
        </div>
      </form>
</div>
@endsection
    
