@extends('Admin.master')
@section('title','Notification')
@section('content')
<div class="container">

    <h3 class="py-5">Languages</h3>

    <div class="row">
        <div class="col-lg-12">
            <a href="{{url('slider')}}" class="btn btn-message"><i class="fa fa-plus pr-2"></i>Add Slider</a>
        </div>

        <div class="col-lg-12 col-sm-12">
            <div class="table-responsive-sm">
                <table class="table borderless">
                    <tr>
                        <th scope="col">Item Name</th>
                        <th scope="col">Start Date</th>
                        <th scope="col">Expiry Date</th>
                        <th scope="col">Assigned</th>
                        <th scope="col">Active</th>
                        <th scope="col"></th>
                        <th></th>
                    </tr>
                    <tbody class="table-text">
                        <tr>
                            <td><div class="table-img">
                                <img src="https://source.unsplash.com/user/erondu/daily" class="img-div"/>
                                <strong class="text-center px-2">Slider Name</strong>
                                </div>
                            </td>
                            <td>12.11.2021</td>
                            <td>16.12.2022</td>
                            <td>Restaurants Name</td>
                            <td> 
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input active" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1" class="sr-only"></label>
                                  </div>

                            </td>
                            <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <td><div class="table-img">
                                <img src="https://source.unsplash.com/user/erondu/food" class="img-div"/>
                                <strong class="text-center px-2">Slider Name</strong>
                                </div>
                            </td>
                            <td>12.11.2021</td>
                            <td>16.12.2022</td>
                            <td>Web Link</td>
                            <td> 
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1" class="sr-only"></label>
                                  </div>

                            </td>
                            <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
                        </tr>
                        <tr>
                            <td><div class="table-img">
                                <img src="https://source.unsplash.com/user/erondu/daily" class="img-div"/>
                                <strong class="text-center px-2">Slider Name</strong>
                                </div>
                            </td>
                            <td>12.11.2021</td>
                            <td>16.12.2022</td>
                            <td>All Restaurants</td>
                            <td> 
                                <div class="custom-control custom-switch">
                                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                    <label class="custom-control-label" for="customSwitch1" class="sr-only"></label>
                                  </div>

                            </td>
                            <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>


</div>

@endsection