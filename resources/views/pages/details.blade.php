@extends('layouts.app')

@section('title')
CarSend | Detail
@endsection

@section('content')
<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url({{ asset('Cars/' . $car->image) }});"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
            <div class="col-md-9 ftco-animate pb-5">
                <p class="breadcrumbs"><span class="mr-2"><a href="{{ url('/') }}">Accueil <i
                                class="ion-ios-arrow-forward"></i></a></span> <span>Details <i
                            class="ion-ios-arrow-forward"></i></span></p>
                <h1 class="mb-3 bread">{{ $car->marque }}</h1>
            </div>
        </div>
    </div>
</section>


<section class="ftco-section ftco-car-details">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="car-details">
                    <div class="img rounded" style="background-image: url({{ asset('Cars/' . $car->image) }});"></div>
                    <div class="text text-center">
                        <span class="subheading">{{ $car->marque }}</span>
                        <h2>{{ $car->modele }}</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-dashboard"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Killometrage
                                    <span>{{ $car->killometrage }}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-pistons"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Transmission
                                    <span>{{ $car->transmission }}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-car-seat"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Moteur
                                    <span>{{ $car->moteur }}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="flaticon-diesel"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Carburant
                                    <span>{{ $car->carburant }}</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md d-flex align-self-stretch ftco-animate">
                <div class="media block-6 services">
                    <div class="media-body py-md-4">
                        <div class="d-flex mb-3 align-items-center">
                            <div class="icon d-flex align-items-center justify-content-center"><span
                                    class="fa fa-money-bill text-primary"></span></div>
                            <div class="text">
                                <h3 class="heading mb-0 pl-3">
                                    Prix
                                    <span>{{ $car->prix }} XFA</span>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 pills">
                <div class="bd-example bd-example-tabs">
                    <div class="d-flex justify-content-center">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

                            <li class="nav-item">
                                <a class="nav-link active" id="pills-description-tab" data-toggle="pill"
                                    href="#pills-description" role="tab" aria-controls="pills-description"
                                    aria-expanded="true">Features</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill"
                                    href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer"
                                    aria-expanded="true">Description</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review"
                                    role="tab" aria-controls="pills-review" aria-expanded="true">Contact</a>
                            </li>
                        </ul>
                    </div>

                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-description" role="tabpanel"
                            aria-labelledby="pills-description-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Marque: {{ $car->marque }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Modele: {{ $car->modele }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Carrosserie: {{ $car->carrosserie }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Killometrage: {{ $car->killometrage }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Annee: {{ $car->annee }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Moteur: {{ $car->moteur }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Couleur: {{ $car->couleur }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Etat: {{ $car->etat }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Carburant: {{ $car->carburant }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Transmission: {{ $car->transmission }}</li>
                                    </ul>
                                </div>
                                <div class="col-md-4">
                                    <ul class="features">
                                        <li class="check"><span class="ion-ios-checkmark"></span>Volant: {{ $car->volant }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Climatisation: {{ $car->climatisation }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Prix: {{ $car->prix }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Negociable: {{ $car->negociable }}</li>
                                        <li class="check"><span class="ion-ios-checkmark"></span>Nombre De Place: {{ $car->nombre_place }}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-manufacturer" role="tabpanel"
                            aria-labelledby="pills-manufacturer-tab">
                            <p>{{ $car->description }}</p>
                        </div>

                        <div class="tab-pane fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
                            <div class="row">
                                <div class="col-md-7">
                                    <h3 class="head">Coordonees du vendeur:</h3>
                                    <div class="review d-flex">
                                        <ul class="pills-review-tab">
                                            <li class="check"> <strong>Nom: {{ $car->user->name }}</strong></li>
                                            <li class="check"> <strong>Nom: {{ $car->user->telephone }}</strong></li>
                                            <li class="check"> <strong>Email: {{ $car->user->email }}</strong></li>
                                            <li class="check"> <strong>Addresse: {{ $car->user->addresse }}</strong></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection