@extends('layouts.layout')
@section('title' , 'All_Tours')
@section('content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Let's Discover The World Together</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Tours & Travel</h4>
                            <h1 class="display-3 text-white mb-md-4">Discover Amazing Places With Us</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-dark" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                <h1>Pefect Tour Packages</h1>
            </div>
            <div class="row">
                @foreach($tours as $tour)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-responsive img-rounded"style="max-height: 300px; max-width: 300px;" src="{{asset("/storage/$tour->image")}}" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{$tour->time}} days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{count($tour->booking)}} Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="/tours/{{$tour->id}}">{{$tour->title}}</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-2">{{$tour->price}} $</h5>
                                    @if (auth()->user())
                                        @if($tour->user_id == auth()->user()->id)
                                        <span class="btn btn-warning mt-1">Booked up</span>
                                        @else
                                        <form action="/user_booking/{{$tour->id}}/edit" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                            <input type="submit" class="btn btn-primary mt-1" value="Book Now" >
                                        </form>
                                        @endif
                                    @else
                                        <a href="tour/{{$tour->id}}/booking/create" class="btn btn-primary mt-1">Book Now</a>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Packages End -->
@endsection