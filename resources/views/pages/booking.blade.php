@extends('layouts.app')

@section('title')
Booking : CarSend : Achat de vehicule au cameroun et en afrique
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('assets/images/cars.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Booking <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">Booking</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            @foreach ($cars as $car)
            <div class="col-md-4">
                <div class="car-wrap rounded ftco-animate">
                    <div class="img rounded d-flex align-items-end"
                        style="background-image: url({{ asset('Cars/' . $car->image) }});">
                    </div>
                    <div class="text">
                        <h2 class="mb-0"><a href="{{ route('booking.show', $car->id) }}">{{ $car->marque }}</a></h2>
                        <div class="d-flex mb-3">
                            <span class="cat">{{ $car->modele }}</span>
                            <p class="price ml-auto">XFA{{ $car->prix }}</p>
                        </div>
                        <p class="d-flex mb-0 d-block"><a href="#" class="btn btn-primary py-2 mr-1">Acheter</a> <a
                                href="{{ route('booking.show', $car->id) }}" class="btn btn-secondary py-2 ml-1">Details</a></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <p>{{ $cars->links() }}</p>
    </div>
</section>
@endsection: