@extends('Admin.master')
@section('title','Notification')
@section('content')
<div class="container my-4">

    <div class="inside_pushdiv card" id="closeablecard">
        <div class="card-header bg-transparent border-bottom-0 ml-auto">
            <button data-dismiss="alert" data-target="#closeablecard" type="button" class="close" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>

        <div class="card-body">
            <h3 class="pb-5">Send Push Notifications</h3>
            <form>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="staticEmail" class="col-sm-3 col-form-label">Title</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control rounded-border"  placeholder="Notification Title">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label">Receiver</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control rounded-border" placeholder="All Users">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Message</label>
                            <div class="col-sm-9">
                                    <textarea class="form-control rounded-border"  rows="3" placeholder="Notification Messages"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Item Photo</label>
                            <div class="col-sm-4">
                                <input type="file" class="custom-file-input cursor-pointer" onchange="readURL(this);" id="attachment" name="attachment"/>
                                <label for="attachment" class="form-control rounded-border-file text-center">
                                <span class="rounded2r">Upload</span>
                                <span id="filename"></span>
                                <!-- insert filename using javaScript    when file has uploaded -->
                                </label>
                            </div>
                            <div class="col-sm-2">
                                 <img src="https://source.unsplash.com/user/erondu/daily" class="img-div"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">URL</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control rounded-border"  placeholder="Link when notification is clicked">
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group row">
                            <label for="exampleFormControlTextarea1" class="col-sm-3 col-form-label">Date</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control rounded-border" placeholder="Now">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12 d-flex justify-content-end">
                        <button type="submit" class="btn rounded-btn-push">Send</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<script>
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();

        reader.onload = function (e) {
            $('.img-div')
                .attr('src', e.target.result);
        };

        reader.readAsDataURL(input.files[0]);
    }
}
</script>
@endsection