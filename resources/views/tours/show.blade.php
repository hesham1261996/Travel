@extends('layouts.layout')
@section('title' , 'show')

@section('content')
    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5">
            <div class="row">
                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="{{asset("storage/$tour->image")}}"style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-6 pt-5 pb-lg-5">
                    <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">{{$tour->price}}$</h6>
                        <h1 class="mb-3">{{$tour->title}}</h1>
                        <p>{{$tour->description}}</p>
                        <small class="m-0"><i class="fa fa-calendar-alt text-primary mr-2"></i>{{$tour->time}} days</small>
                        <div class="row mb-4">
                            <div class="col-6">
                                <img class="img-fluid" src="{{asset('img/about-1.jpg')}}" alt="">
                            </div>
                            <div class="col-6">
                                <img class="img-fluid" src="{{asset('img/about-2.jpg')}}" alt="">
                            </div>
                        </div>
                        
                        <a href="/register" class="btn btn-primary mt-1">Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About end -->
    {{-- stat comment --}}
    <div class="row d-flex justify-content-center">
      <div class="col-md-8 col-lg-6">
        <div class="card shadow-0 border" style="background-color: #f0f2f5;">
          <div class="card-body p-4">

            @foreach ($tour->comments as $comment)
            <div class="card mb-4">
              <div class="card-body">
                <p>{{Str::limit($comment->body)}}</p>
                <div class="d-flex justify-content-between">
                  <div class="d-flex flex-row align-items-center">
                    <img class="rounded-circle" src="{{asset("/storage/".$comment->user->image)}}" alt="avatar" width="40"
                      height="40" />
                    <p class="small mb-0 ms-2">{{$comment->user->name}}</p>
                  </div>
                  <div class="d-flex flex-row align-items-center">
                    <p class="small text-muted mb-0">{{ \Carbon\Carbon::parse($comment->created_at)->format('h-t-s')}}</p>
                    <i class="far fa-thumbs-up mx-2 fa-xs text-black" style="margin-top: -0.16rem;"></i>
                    <p class="small text-muted mb-0">3</p>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
            @if (auth()->user())
            <div class="form-outline mb-4">
              <form action="/tour/{{$tour->id}}/user/{{auth()->user()->id}}" method="POST">
                @csrf
                <input type="text" name="body" class="form-control" placeholder="Type comment..." />
                <button type="submit" class="btn btn-primary">Comment</button>
              </form>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    {{-- End comment --}}
@endsection