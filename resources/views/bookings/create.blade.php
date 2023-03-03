@extends('layouts.layout')
@section('title' , 'booking')

@section('content')
 <!-- Contact Start -->
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h1>Book the trip</h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <div id="success"></div>
                    <form action="/tour/{{$tour->id}}/booking" method="POST" name="sentMessage" id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="user_name"  name="user_name" placeholder="Please enter your name"
                                required="required" data-validation-required-message="Please enter your name " />
                                <p class="help-block text-danger"></p>
                                @error('user_name')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email"  name="email" placeholder="Please enter your email"
                                required="required" data-validation-required-message="Please enter your email " />
                            <p class="help-block text-danger"></p>
                            @error('email')
                            <p class="help-block text-danger">{{$message}}</p>
                            @enderror
                        </div>
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="number" name="phone_number" class="form-control p-4" id="phone_number" placeholder=" Please enter your phone number "
                                    required="required" data-validation-required-message="Please enter  phone" />
                                <p class="help-block text-danger"></p>
                                @error('phone_number')
                                <p class="help-block text-danger">{{$message}}</p>
                                @enderror
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" name="members" id="members" placeholder="Please enter  members"
                                    required="required" data-validation-required-message="Please enter  members" />
                                <p class="help-block text-danger"></p>
                                @error('members')
                                <p class="help-block text-danger">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">creat</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection