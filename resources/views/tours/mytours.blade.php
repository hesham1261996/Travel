@extends('layouts.layout')
@section('title' , 'my_tours')
@section('content')

    <!-- About End -->
    
    <!-- Packages Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">My Tours</h6>
                <h1>My Tours</h1>
            </div>
            <div class="row">
                @foreach($user_tours as $tour)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="package-item bg-white mb-2">
                        <img class="img-responsive img-rounded"style="max-height: 300px; max-width: 300px;" src="{{asset("/storage/$tour->image")}}" alt="">
                        <div class="p-4">
                            <div class="d-flex justify-content-between mb-3">
                                <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{$tour->Time}} days</small>
                                <small class="m-0"><i class="fa fa-user text-primary mr-2"></i>{{count($tour->booking)}} Person</small>
                            </div>
                            <a class="h5 text-decoration-none" href="/tours/{{$tour->id}}">{{$tour->title}}</a>
                            <div class="border-top mt-4 pt-4">
                                <div class="d-flex justify-content-between">
                                    <h5 class="m-2">{{$tour->price}} $</h5>
                                    @if (auth()->user())
                                        <form action="/user_booking/{{$tour->id}}/edit" method="post">
                                            @csrf
                                            @method('PATCH')
                                            <input type="hidden" name="user_id" value="{{auth()->user()->id}}">
                                            <input type="submit" class="btn btn-primary mt-1" value="Book Now" >
                                        </form>
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
@endsection