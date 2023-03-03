@extends('layouts.layout')
@section('title' , 'show-blog')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset("storage/$blog->image")}}"style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h1 class="mb-3">{{$blog->title}}</h1>
                        <p>{{$blog->body}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About end -->
@endsection