@extends('admin.layouts.admin_layouta')
@section('title' , 'Creat_Tours')

@section('content')
 <!-- Contact Start -->
 <div class="container-fluid py-5">
    <div class="container py-5">
        <div class="text-center mb-3 pb-3">
            <h1>Edit Blog </h1>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="contact-form bg-white" style="padding: 30px;">
                    <div id="success"></div>
                    <form action="/admins/blogs/{{$blog->id}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method("PATCH")
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="title" value="{{$blog->title}}"  name="title"
                                required="required" data-validation-required-message="Please enter a title" />
                            <p class="help-block text-danger"></p>
                            @error('title')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="control-group">
                            <textarea class="form-control py-3 px-4" rows="5" name="body" id="description" placeholder="description"
                                required="required"
                                data-validation-required-message="Please enter your description">{{$blog->body}}</textarea>
                            <p class="help-block text-danger"></p>
                            @error('body')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
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