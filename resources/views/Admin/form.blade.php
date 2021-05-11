@extends('Admin.master')
@section('title','Jquery Form')
@section('content')

<div class="container py-5">
    <div id="form-content-section">
        <form class="form" method="POST">
                <div class="form-content basic active py-4">
                    <div class="timeline-div mb-5">
                        <ul class="timeline">
                        <li class="step step01 active"><span> Step 1</span></li>
                        <li class="step step02" ><span>Step 2</span></li>
                        <li class="step step03" ><span>Step 3</span></li>
                        <li class="step step04"><span>Step 4</span></li>
                        </ul>
                    </div>
                        <h2 class="text-center my-5">Step 1</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="firstname">First and Last Name*</label>
                                <input type="text" class="form-control" name="fname" id="name">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="phonenumber">Phone Number*</label>
                                <input type="text" class="form-control" name="phone" id="phone">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="email">Email Address*</label>
                                <input type="email" class="form-control" name="email" id="email">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="password">Password*</label>
                                <input type="password" class="form-control" name="password" id="password">
                            </div>
                        </div>
                         <div class="button-row d-flex justify-content-lg-end">
                             <button type="button" class="btn btn-success next">Continue to next Step</button>
                        </div>
                </div>
                
        
                <div class="form-content location">
                    <div class="timeline-div mb-5">
                        <ul class="timeline">
                        <li class="step step01"><span> Step 1</span></li>
                        <li class="step step02 active" ><span>Step 2</span></li>
                        <li class="step step03" ><span>Step 3</span></li>
                        <li class="step step04"><span>Step 4</span></li>
                        </ul>
                    </div>
                    <h2 class="text-center my-5">Step 2</h2>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label for="address">Address 1*</label>
                            <input type="text" class="form-control" name="address" id="address">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="city">City / Town *</label>
                            <input type="text" class="form-control" name="city" id="city">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="country">Country *</label>
                            <select id="inputState" class="form-control" name="country">
                                <option >Niue</option>
                                <option>india</option>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="regno">Registration No*</label>
                            <input type="password" class="form-control" name="regno" id="regno">
                        </div>
                    </div>
                    <div class="button-row d-flex justify-content-end">
                        <button type="button" class="btn btn-light prev ml-2" id="back">back</button>
                        <button type="button" class="btn btn-warning ml-2" id="skip">skip</button>
                        <button type="submit" class="btn btn-success next ml-2">Continue</button>
                    </div>
                </div>
          

      
                <div class="form-content account">
                    <div class="timeline-div mb-5">
                        <ul class="timeline">
                        <li class="step step01"><span> Step 1</span></li>
                        <li class="step step02" ><span>Step 2</span></li>
                        <li class="step step03 active" ><span>Step 3</span></li>
                        <li class="step step04"><span>Step 4</span></li>
                        </ul>
                    </div>
                        <h2 class="text-center my-5">Step 3</h2>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <label for="accountname">Account Name*</label>
                                <input type="text" class="form-control" name="accountname" id="accountname">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="demo">Demo</label>
                                <input type="text" class="form-control" id="demo">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inout">Inout</label>
                                <input type="text" class="form-control" id="inout">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="customFile">Information</label>
                                <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile">
                                <label class="custom-file-label" for="customFile">Choose file</label>
                                </div>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="number">Number*</label>
                                <input type="text" class="form-control" name="accountno" id="number">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputnumber">InputNumber</label>
                                <input type="text" class="form-control" id="inputnumber">
                            </div>
                        </div>
                        <div class="button-row d-flex justify-content-lg-end">
                            <button type="button" class="btn btn-light prev ml-2">back</button>
                            <button type="button" class="btn btn-warning ml-2">skip</button>
                            <button type="submit" class="btn btn-success next ml-2">Continue</button>
                        </div>
            
                </div>

                <div class="form-content end">
                    <div class="timeline-div mb-5">
                        <ul class="timeline">
                        <li class="step step01"><span> Step 1</span></li>
                        <li class="step step02" ><span>Step 2</span></li>
                        <li class="step step03" ><span>Step 3</span></li>
                        <li class="step step04 active"><span>Step 4</span></li>
                        </ul>
                    </div>
                    <h4 class="text-center my-5">Thanks A Fill A Form</h4>
                </div>
        </form>
    </div>
</div>

@section('script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js"></script>
<script>

$(document).ready(function(){

    $(".form").validate({
        rules: {
            fname: "required",
            phone: {
                required: true,
                number: true
            },
            email: {
                required: true,
				email: true
            },
            password: {
					required: true,
					minlength: 5
			},
            address : "required",
            city    : "required",
            country : {
                selectcheck: true
            },
            regno : "required",
            accountname : "required",
            accountno : {
                required: true,
                number: true
            },

        },
        messages: {
            fname: "Please specify your First and last name",
            phone: {
                required : "Please specify your Phone no",
                number    : "Your phone number must be at least 10 number long"
            },
            password: {
					required: "Please provide a password",
					minlength: "Your password must be at least 5 characters long"
				},
            email: "Please enter a valid email address",
            address: "Please specify your Adrees",
            city: "Please specify your City",
            regno: "Please specify your registration no",
            accountname : "Please specify your account name",
            accountno: {
                required : "Please specify your Phone no",
                number    : "Your phone number must be at least 10 number long"
            }


        }
    });

    $.validator.addMethod('selectcheck', function (value) {
        return (value != '0');
    }, "Country required");
    
    $(".step01").click( function() {
        $(".basic").addClass("active").siblings().removeClass("active");
    });

    $(".step02").click( function() {
        $(".location").addClass("active").siblings().removeClass("active");
    });

    $(".step03").click( function() {
        $(".account").addClass("active").siblings().removeClass("active");
    });

    $(".step04").click( function() {
        $(".end").addClass("active").siblings().removeClass("active");
    });

   $('.next').click(function(){
       if( $(".form").valid() == true){
       $(this).parents(".form-content").hide();
       $(this).parents(".form-content").next().show();
       }
   })

   $('.prev').click(function(){
       $(this).parents(".form-content").hide();
       $(this).parents(".form-content").prev().show();
   })

})
  
</script>
@endsection
@endsection