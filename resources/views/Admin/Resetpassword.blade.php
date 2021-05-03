@extends('Admin.master')
@section('title','Reset Password')
@section('content')
 <section class="reset">
     <div class="d-flex justify-content-center align-items-center login-container bg-white">
        <div class="inside_div align-items-center card" id="closeablecard">
            <div class="card-header bg-transparent border-bottom-0 ml-auto">
                <button data-dismiss="alert" data-target="#closeablecard" type="button" class="close" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
            <div class="card-body">
                <form class="login-form">
                    <div class="form-group">
                        <input type="text" class="form-control rounded-border" placeholder="Current Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control rounded-border" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control rounded-border" placeholder="Repeat New Password">
                    </div>
                    <div class="form-group pt-4 d-flex justify-content-center">
                        <button type="submit" class="btn rounded-btn">Reset Password</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>
 </section>
@endsection