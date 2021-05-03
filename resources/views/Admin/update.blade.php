@extends('Admin.master')
@section('title','Update Form')
@section('content')
<div class="container">
<h2 class="py-3">Settings</h2>
<div class="d-flex py-5">
    <form class="login-form">
        <div class="form-group row">
          <label for="first name" class="col-sm-3 col-form-label">First Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control rounded-border">
          </div>
        </div>
        <div class="form-group row">
          <label for="last name" class="col-sm-3 col-form-label">Last Name</label>
          <div class="col-sm-9">
            <input type="text" class="form-control rounded-border">
          </div>
        </div>
        <div class="form-group row">
          <label for="email" class="col-sm-3 col-form-label">Email</label>
          <div class="col-sm-9">
            <input type="text" class="form-control rounded-border">
          </div>
        </div>
        <div class="form-group row">
          <label for="phone" class="col-sm-3 col-form-label">Phone</label>
          <div class="col-sm-9">
            <input type="phone" class="form-control rounded-border">
          </div>
        </div>
        <div class="form-group row">
          <div class="col-sm-3"></div>
          <div class="col-sm-9 d-flex justify-content-between">
            <a href="{{url('reset')}}">Reset Password</a>
            <button type="submit" class="btn rounded-button">Update</button>
          </div>
        </div>
      </form>
</div>
</div>
@endsection

    
