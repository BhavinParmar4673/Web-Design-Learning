@extends('Admin.master')
@section('title','Notification')
@section('content')
<div class="container">
    <h3 class="py-5">Notifications</h3>




        <div class="row">
            <div class="col-lg-5 col-sm-12 mb-3 lg-mb-0">
                <button class="btn btn-message"><i class="fa fa-plus pr-2"></i>Add Message</button>
            </div>
            <div class="d-flex col-lg-4 col-sm-12">
                <input type="text" class="form-control rounded-message" placeholder="01-02-2021">
                <label for="staticEmail" class="col-form-label px-1">-</label>
                <input type="text" class="form-control rounded-message" placeholder="01-02-2021">
                <div class="form-group ml-1">
                    <select class="form-control rounded-icon">
                    <option selected="selected">Receiver</option>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                    </select>
                </div>
            </div>
            <div class="d-flex col-lg-3 col-sm-12">
                <div class="form-group">
                    <select class="form-control rounded-icon">
                    <option selected="selected">Status</option>
                    <option>option 1</option>
                    <option>option 2</option>
                    <option>option 3</option>
                    <option>option 4</option>
                    <option>option 5</option>
                    </select>
                </div>
                <div class="form-group search_field mx-1">
                    <input type="text" class="form-control rounded-icon" placeholder="Search">
                        <i class="fa fa-search"></i>
                </div>
            </div>

        </div>


    <div class="table-responsive-lg">
        <table class="table borderless">
            <tr>
                <th scope="col">Title</th>
                <th scope="col">Message</th>
                <th scope="col">Receiver</th>
                <th scope="col">Data created</th>
                <th scope="col">Data Sent</th>
                <th scope="col">Satus</th>
                <th></th>
            </tr>
            <tbody class="table-text">
            <tr>
                <td>New Update to all users</td>
                <td>There has been a new update to our latest app. Please download for security reason.</td>
                <td>All Users</td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td></td>
                <td class="text-warning">Pending</td>
                <td><i class="fa fa-pencil-square-o fa-md" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>New Update to all users</td>
                <td>There has been a new update to our latest app. Please download for security reason.</td>
                <td>Owners</td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td class="text-success">Send</td>
                <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>New Update to all users</td>
                <td>There has been a new update to our latest app. Please download for security reason.</td>
                <td>Managers</td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td class="text-success">Send</td>
                <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>New Update to all users</td>
                <td>There has been a new update to our latest app. Please download for security reason.</td>
                <td>Mala Tuta</td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td class="text-success">Send</td>
                <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>New Update to all users</td>
                <td>There has been a new update to our latest app. Please download for security reason.</td>
                <td>Mala Tuta</td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td class="text-success">Send</td>
                <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
            </tr>
            <tr>
                <td>New Update to all users</td>
                <td>There has been a new update to our latest app. Please download for security reason.</td>
                <td>Customers</td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td><p><i class="fa fa-clock-o" aria-hidden="true"></i> 13:45 <br>
                    <i class="fa fa-calendar" aria-hidden="true"></i> 12.03.2021</p>
                </td>
                <td class="text-success">Send</td>
                <td><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>
       
 
@endsection
