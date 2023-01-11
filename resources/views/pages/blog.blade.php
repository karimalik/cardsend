@extends('layouts.app')

@section('title')
Blog : CarSend
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/teams1.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Home <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Blog <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Blog</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 heading-section text-center ftco-animate">
                <span class="subheading">Blog</span>
                <h2>Recent Blog</h2>
            </div>
        </div>
        <div class="row d-flex">
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_1.jpg');">
                    </a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div><a href="#">Jan 8, 2023</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry justify-content-end">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_2.jpg');">
                    </a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div><a href="#">Jan 8, 2023</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-flex ftco-animate">
                <div class="blog-entry">
                    <a href="blog-single.html" class="block-20" style="background-image: url('assets/images/image_3.jpg');">
                    </a>
                    <div class="text pt-4">
                        <div class="meta mb-3">
                            <div><a href="#">Jan 8, 2023</a></div>
                            <div><a href="#">Admin</a></div>
                        </div>
                        <h3 class="heading mt-2"><a href="#">Why Lead Generation is Key for Business Growth</a></h3>
                        <p><a href="#" class="btn btn-primary">Read more</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
