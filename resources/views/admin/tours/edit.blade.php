@extends('admin.layouts.admin_layouta')
@section('title' , 'Edit_Tours')

@section('content')
 <!-- Contact Start -->
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h1>Edit tour </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <div id="success"></div>
                    <form action="/admins/tours/{{$tour->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="title" value="{{$tour->title}}"  name="title"
                                required="required" data-validation-required-message="Please enter a title" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control py-3 px-4" rows="5" name="description" id="description" placeholder="description"
                                required="required"
                                data-validation-required-message="Please enter your description">{{$tour->description}}</textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-row">
                            <div class="control-group col-sm-6">
                                <input type="text" name="price" value="{{$tour->price}}" class="form-control p-4" id="price" placeholder=" price"
                                    required="required" data-validation-required-message="Please enter  price" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="control-group col-sm-6">
                                <input type="text" class="form-control p-4" value="{{$tour->time}}" name="time" id="time" placeholder="Your time"
                                    required="required" data-validation-required-message="Please enter  time" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="custom-file">
                            <input type="file" name="image" id="image" class="custom-file-inbut" >
                            <label for="image" id="image-lable" class="custom-file-lable text-left" ></label>

                        </div>
                        @error('image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                        <div class="text-center">
                            <button class="btn btn-primary py-3 px-4" type="submit" id="sendMessageButton">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->
@endsection