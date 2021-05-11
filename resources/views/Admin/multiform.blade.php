@extends('Admin.master')
@section('title','Jquery Form')
@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="multistep-container">
                <div class="multistep-form-area">

                    <div class="form-box">
                        <ul class="active-button">
                            <li class="active">Step 1<span class="round-btn">1</span>
                            <li>Step 2<span class="round-btn">2</span>
                            <li>Step 3<span class="round-btn">3</span>
                            <li>Step 4<span class="round-btn">4</span>
                        </ul>

                        <h4>Step 1</h4>
                        <form action="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="firstname">First and Last Name*</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phonenumber">Phone Number*</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address*</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password*</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-lg-end">
                                <button type="button" class="btn btn-success next">Continue to next Step</button>
                            </div>
                        </form>
                    </div>

                    <div class="form-box">
                        <ul class="active-button">
                            <li class="active">Step 1<span class="round-btn">1</span>
                            <li>Step 2<span class="round-btn">2</span>
                            <li>Step 3<span class="round-btn">3</span>
                            <li>Step 4<span class="round-btn">4</span>
                        </ul>

                        <h4>Step 1</h4>
                        <form action="">
                           <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address">Address 1*</label>
                            <input type="text" class="form-control" id="address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="city">City / Town *</label>
                            <input type="text" class="form-control" id="city">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">Country *</label>
                            <select id="inputState" class="form-control">
                                <option selected>Niue</option>
                                <option>india</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="regno">Registration No*</label>
                            <input type="password" class="form-control" id="regno">
                        </div>
                    </div>
                    <div class="d-flex justify-content-end">
                        <button type="button" class="btn btn-light back ml-2" id="back">back</button>
                        <button type="button" class="btn btn-warning ml-2" id="skip">skip</button>
                        <button type="submit" class="btn btn-success next ml-2">Continue</button>
                    </div>
                        </form>
                    </div>

                    <div class="form-box">
                        <ul class="active-button">
                            <li class="active">Step 1<span class="round-btn">1</span>
                            <li>Step 2<span class="round-btn">2</span>
                            <li>Step 3<span class="round-btn">3</span>
                            <li>Step 4<span class="round-btn">4</span>
                        </ul>

                        <h4>Step 1</h4>
                        <form action="">
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="firstname">First and Last Name*</label>
                                    <input type="text" class="form-control" id="name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phonenumber">Phone Number*</label>
                                    <input type="text" class="form-control" id="phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email Address*</label>
                                    <input type="email" class="form-control" id="email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password*</label>
                                    <input type="password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="d-flex justify-content-lg-end">
                                <button type="button" class="btn btn-success next">Continue to next Step</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection