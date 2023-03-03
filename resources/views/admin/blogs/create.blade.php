@extends('admin.layouts.admin_layouta')
@section('title' , 'Creat_Blog')

@section('content')
<!-- Contact Start -->
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h1>Create a new Blog </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <div id="success"></div>
                    <form action="/admins/blogs" method="POST"  enctype="multipart/form-data">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="title"  name="title" placeholder="title"
                                required="required" data-validation-required-message="Please enter a title" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control py-3 px-4" rows="5" name="body" id="body" placeholder="description"
                                required="required"
                                data-validation-required-message="Please enter your description"></textarea>
                            <p class="help-block text-danger"></p>
                            @error('body')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label id="image">Add image</label>
                            <div class="custom-file">
                                <input type="file" name="image" id="image" class="custom-file-inbut" >
                                <label for="image" id="image-lable" class="custom-file-lable text-left" ></label>

                            </div>
                            @error('image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
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
