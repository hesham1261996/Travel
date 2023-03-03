@extends('layouts.layout')
@section('title' , 'welcome')
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
                <?php $i=1 ; ?>
                @foreach($tours as $tour)
                <?php
                if ($i >= 4){
                    break ;
                }
                $i++ ?>
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
                @if (count($blogs) > 3)
                <a href="/alltours">show more</a>
                @endif
            </div>
        </div>
    </div>
    <!-- Packages End -->
    <!-- Feature Start -->
    <div class="container-fluid pb-5">
        <div class="container pb-5">
            <div class="row">
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-money-check-alt text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Competitive Pricing</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-award text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Best Services</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="d-flex mb-4 mb-lg-0">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-primary mr-3" style="height: 100px; width: 100px;">
                            <i class="fa fa-2x fa-globe text-white"></i>
                        </div>
                        <div class="d-flex flex-column">
                            <h5 class="">Worldwide Coverage</h5>
                            <p class="m-0">Magna sit magna dolor duo dolor labore rebum amet elitr est diam sea</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    {{-- start statistic --}}
    <div id="fh5co-counter-section" class="fh5co-counters">
        <div class="container">
            <div class="row">
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="100" data-to="{{count($users)}}" data-speed="1000"
                            data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Number of members</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="100" data-to="{{count($tours)}}" data-speed="1000"
                        data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Number of tours</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="100" data-to="{{count($admins)}}" data-speed="1000"
                        data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">managers</span>
                </div>
                <div class="col-md-3 text-center">
                    <span class="fh5co-counter js-counter" data-from="100" data-to="{{count($blogs)}}" data-speed="1000"
                        data-refresh-interval="50"></span>
                    <span class="fh5co-counter-label">Number &amp; Blogs</span>
                </div>
            </div>
        </div>
    </div>
    {{-- End statistic --}}
        <!-- Testimonial Start -->
        <div class="container-fluid py-5">
            <div class="container pt-5 pb-3">
                <div class="text-center mb-3 pb-3">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Packages</h6>
                    <h1>Pefect Tour Blogs</h1>
                </div>
                <div class="row">
                    <?php $i=1 ; ?>
                    @foreach($blogs as $blog)
                    <?php
                    if ($i >= 4){
                        break ;
                    }
                    $i++ ?>
                    <div class="col-lg-4 col-md-6 mb-4">
                        <div class="package-item bg-white mb-2">
                            <img class="img-responsive img-rounded"style="max-height: 300px; max-width: 300px;" src="{{asset("/storage/$blog->image")}}" alt="">
                            <div class="p-4">
                                <a class="h5 text-decoration-none" href="/blogs/{{$blog->id}}">{{Str::limit($blog->title,60)}}</a>
                                <p>{{Str::limit($blog->body,60)}}</p>
                                <div class="border-top mt-4 pt-4">
                                    <div class="d-flex justify-content-between">
                                        <a href="blogs/{{$blog->id}}" class="btn btn-primary mt-1">show</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @if (count($blogs) > 3)
                        <a href="/blogs">show more</a>
                    @endif
                </div>
            </div>
        </div>
        <!-- Testimonial End -->
    <div id="hotel-facilities">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center">
                        <h2>Hotel Facilities</h2>
                    </div>
                </div>
            </div>

            <div id="tabs">
                <nav class="tabs-nav">
                    <a href="#" class="active" data-tab="tab1">
                        <i class="flaticon-restaurant icon"></i>
                        <span>Restaurant</span>
                    </a>
                    <a href="#" data-tab="tab2">
                        <i class="flaticon-cup icon"></i>
                        <span>Bar</span>
                    </a>
                    <a href="#" data-tab="tab3">

                        <i class="flaticon-car icon"></i>
                        <span>Pick-up</span>
                    </a>
                    <a href="#" data-tab="tab4">

                        <i class="flaticon-swimming icon"></i>
                        <span>Swimming Pool</span>
                    </a>
                    <a href="#" data-tab="tab5">

                        <i class="flaticon-massage icon"></i>
                        <span>Spa</span>
                    </a>
                    <a href="#" data-tab="tab6">

                        <i class="flaticon-bicycle icon"></i>
                        <span>Gym</span>
                    </a>
                </nav>
                <div class="tab-content-container">
                    <div class="tab-content active show" data-tab-content="tab1">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/tab_img_1.jpg" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Restaurant</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati
                                        incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore,
                                        reprehenderit illum dolorem quae facilis reiciendis quas similique totam
                                        sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit
                                        molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque
                                        blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem
                                        officiis placeat dignissimos molestias temporibus, in! Minima quod,
                                        consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab2">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/tab_img_2.jpg" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Bars</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati
                                        incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore,
                                        reprehenderit illum dolorem quae facilis reiciendis quas similique totam
                                        sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit
                                        molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque
                                        blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem
                                        officiis placeat dignissimos molestias temporibus, in! Minima quod,
                                        consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab3">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/tab_img_3.jpg" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Pick Up</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati
                                        incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore,
                                        reprehenderit illum dolorem quae facilis reiciendis quas similique totam
                                        sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit
                                        molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque
                                        blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem
                                        officiis placeat dignissimos molestias temporibus, in! Minima quod,
                                        consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab4">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/tab_img_4.jpg" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Swimming Pool</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati
                                        incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore,
                                        reprehenderit illum dolorem quae facilis reiciendis quas similique totam
                                        sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit
                                        molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque
                                        blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem
                                        officiis placeat dignissimos molestias temporibus, in! Minima quod,
                                        consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab5">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/tab_img_5.jpg" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Spa</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati
                                        incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore,
                                        reprehenderit illum dolorem quae facilis reiciendis quas similique totam
                                        sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit
                                        molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque
                                        blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem
                                        officiis placeat dignissimos molestias temporibus, in! Minima quod,
                                        consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content" data-tab-content="tab6">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-6">
                                    <img src="images/tab_img_6.jpg" class="img-responsive" alt="Image">
                                </div>
                                <div class="col-md-6">
                                    <span class="super-heading-sm">World Class</span>
                                    <h3 class="heading">Gym</h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Molestias officia
                                        perferendis modi impedit, rem quasi veritatis. Consectetur obcaecati
                                        incidunt, quae rerum, accusamus sapiente fuga vero at. Quia, labore,
                                        reprehenderit illum dolorem quae facilis reiciendis quas similique totam
                                        sequi ducimus temporibus ex nemo, omnis perferendis earum fugit impedit
                                        molestias animi vitae.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam neque
                                        blanditiis eveniet nesciunt, beatae similique doloribus, ex impedit rem
                                        officiis placeat dignissimos molestias temporibus, in! Minima quod,
                                        consequatur neque aliquam.</p>
                                    <p class="service-hour">
                                        <span>Service Hours</span>
                                        <strong>7:30 AM - 8:00 PM</strong>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Service Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Services</h6>
                <h1>Tours & Travel Services</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-route mx-auto mb-4"></i>
                        <h5 class="mb-2">Travel Guide</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-ticket-alt mx-auto mb-4"></i>
                        <h5 class="mb-2">Ticket Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="service-item bg-white text-center mb-2 py-5 px-4">
                        <i class="fa fa-2x fa-hotel mx-auto mb-4"></i>
                        <h5 class="mb-2">Hotel Booking</h5>
                        <p class="m-0">Justo sit justo eos amet tempor amet clita amet ipsum eos elitr. Amet lorem est amet labore</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
    <!-- Destination Start -->
    <div class="container-fluid py-5">
        <div class="container pt-5 pb-3">
            <div class="text-center mb-3 pb-3">
                <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Destination</h6>
                <h1>Explore Top Destination</h1>
            </div>
            <div class="row">
                @foreach($tours as $tour)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="destination-item position-relative overflow-hidden mb-2">
                        <img class="img-fluid" src="{{asset("/storage/$tour->image")}}" alt="">
                        <a class="destination-overlay text-white text-decoration-none" href="">
                            <h5 class="text-white">India</h5>
                            <span>100 Cities</span>
                        </a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Destination Start -->
    <!-- Registration Start -->
    <div class="container-fluid bg-registration py-5" style="margin: 90px 0;">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-7 mb-5 mb-lg-0">
                    <div class="mb-4">
                        <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Mega Offer</h6>
                        <h1 class="text-white"><span class="text-primary">30% OFF</span> For Honeymoon</h1>
                    </div>
                    <p class="text-white">Invidunt lorem justo sanctus clita. Erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                        ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea ipsum est
                        dolor</p>
                    <ul class="list-inline text-white m-0">
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Labore eos amet dolor amet diam</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Etsea et sit dolor amet ipsum</li>
                        <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Diam dolor diam elitripsum vero.</li>
                    </ul>
                </div>
                <div class="col-lg-5">
                    <div class="card border-0">
                        <div class="card-header bg-primary text-center p-4">
                            <h1 class="text-white m-0">Sign Up Now</h1>
                        </div>
                        <div class="card-body rounded-bottom bg-white p-5">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <!-- Email Address -->
                                <div>
                                    <x-input-label for="email" :value="__('Email')" />
                                    <x-text-input id="email" class="form-control p-4"  type="email" name="email" :value="old('email')" required  />
                                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                </div>

                                <!-- Password -->
                                <div class="mt-4">
                                    <x-input-label for="password" :value="__('Password')" />

                                    <x-text-input id="password" class="form-control p-4"
                                                    type="password"
                                                    name="password"
                                                    required autocomplete="current-password" />

                                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                </div>

                                <!-- Remember Me -->
                                <div class="block mt-4">
                                    <label for="remember_me" class="inline-flex items-center">
                                        <input id="remember_me" type="checkbox" class="rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800" name="remember">
                                        <span class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
                                    </label>
                                </div>

                                <div class="flex items-center justify-end mt-4">
                                    @if (Route::has('password.request'))
                                        <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('password.request') }}">
                                            {{ __('Forgot your password?') }}
                                        </a>
                                    @endif

                                    <x-primary-button class="btn btn-primary btn-block py-3">
                                        {{ __('Log in') }}
                                    </x-primary-button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Registration End -->
@endsection
