@extends('layouts.layout')
@section('title' , 'about')
@section('content')
<!-- About Start -->
<div class="container-fluid py-5">
    <div class="container pt-5">
        <div class="row">
            <div class="col-lg-6" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100" src="img/about.jpg" style="object-fit: cover;">
                </div>
            </div>
            <div class="col-lg-6 pt-5 pb-lg-5">
                <div class="about-text bg-white p-4 p-lg-5 my-lg-5">
                    <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h6>
                    <h1 class="mb-3">We Provide Best Tour Packages In Your Budget</h1>
                    <p>Dolores lorem lorem ipsum sit et ipsum. Sadip sea amet diam dolore sed et. Sit rebum labore sit sit ut vero no sit. Et elitr stet dolor sed sit et sed ipsum et kasd ut. Erat duo eos et erat sed diam duo</p>
                    <div class="row mb-4">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-1.jpg" alt="">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-2.jpg" alt="">
                        </div>
                    </div>
                    <a href="" class="btn btn-primary mt-1">Book Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
<!-- Team Start -->
<div class="container-fluid py-5">
    <div class="container pt-5 pb-3">
        <div class="text-center mb-3 pb-3">
            <h6 class="text-primary text-uppercase" style="letter-spacing: 5px;">Guides</h6>
            <h1>Our Travel Guides</h1>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-1.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">Guide Name</h5>
                        <p class="m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-2.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">Guide Name</h5>
                        <p class="m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-3.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">Guide Name</h5>
                        <p class="m-0">Designation</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                <div class="team-item bg-white mb-4">
                    <div class="team-img position-relative overflow-hidden">
                        <img class="img-fluid w-100" src="img/team-4.jpg" alt="">
                        <div class="team-social">
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-primary btn-square" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="text-center py-4">
                        <h5 class="text-truncate">Guide Name</h5>
                        <p class="m-0">Designation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->
@endsection