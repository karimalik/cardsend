@extends('layouts.app')

@section('title')
Accueil : CarSend : Vente et achats de vehicule
@endsection

@section('content')
<div class="hero-wrap ftco-degree-bg" style="background-image: url('assets/images/image_3.jpg');"
    data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center justify-content-center">
            <div class="col-lg-8 ftco-animate">
                <div class="text w-100 text-center mb-md-5 pb-md-5">
                    <h1 class="mb-4 typingText" id="textAnimate">Bienvenue Chez CarSend</h1>
                    <p style="font-size: 18px;">
                        Votre plateforme web de vente &amp; achat de véhicule. vendez & achetez facilement votre
                        véhicule en ligne.
                    </p>

                </div>
            </div>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12	featured-top">
                <div class="row no-gutters">
                    <div class="col-md-4 d-flex align-items-center ">
                        <form action="#" class="request-form ftco-animate bg-primary">
                            <h2>Faites Votre Recherches</h2>
                            <div class="form-group">
                                <label for="" class="label">Ville</label>
                                <input type="text" class="form-control" placeholder="Douala" name="ville">
                            </div>
                            <div class="form-group">
                                <label for="" class="label">Marque</label>
                                <input type="text" class="form-control" placeholder="Toyota">
                            </div>
                            <div class="d-flex">
                                <div class="form-group mr-2">
                                    <label for="" class="label">Modele</label>
                                    <input type="text" class="form-control" name="modele" placeholder="Berline">
                                </div>
                                <div class="form-group ml-2">
                                    <label for="" class="label">Prix</label>
                                    <input type="text" class="form-control" name="prix" placeholder="100000">
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="Rechercher" class="btn btn-secondary py-3 px-4">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-8 d-flex align-items-center">
                        <div class="services-wrap rounded-right w-100">
                            <h3 class="heading-section mb-4">Trouvez La Voiture De Vos Rêve</h3>
                            <div class="row d-flex mb-4">
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="icon-location-arrow"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Entrez Votre Ville</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="icon-automobile"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Entrez La Marque</h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 d-flex align-self-stretch ftco-animate">
                                    <div class="services w-100 text-center">
                                        <div class="icon d-flex align-items-center justify-content-center"><span
                                                class="icon-money"></span></div>
                                        <div class="text w-100">
                                            <h3 class="heading mb-2">Entrez Le Prix</h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p><a href="{{ route('cars.create') }}" class="btn btn-primary py-3 px-4">Vendre Ma Voiture</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>


<section class="ftco-section ftco-no-pt bg-light">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Nos Offres</span>
                <h2 class="mb-2">Véhicules En Vedette</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="carousel-car owl-carousel">
                    @foreach ($cars as $car)
                    <div class="item">
                        <div class="car-wrap rounded ftco-animate">
                            <div class="img rounded d-flex align-items-end"
                                style="background-image: url({{ asset('Cars/' . $car->image) }});">
                            </div>
                            <div class="text">
                                <h2 class="mb-0"><a href="{{ route('booking.show', $car->id) }}">{{ $car->marque }}</a></h2>
                                <div class="d-flex mb-3">
                                    <span class="cat">{{ $car->modele }}</span>
                                    <p class="price ml-auto">XFA {{ $car->prix }}</p>
                                </div>
                                <p class="d-flex mb-0 d-block"><a href="{{ route('booking.show', $car->id) }}" class="btn btn-primary py-2 mr-1">Acheter
                                    </a> <a href="{{ route('booking.show', $car->id) }}" class="btn btn-secondary py-2 ml-1">Détails</a></p>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url('assets/images/fun.jpg');">
            </div>
            <div class="col-md-6 wrap-about ftco-animate">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">A Propos</span>
                    <h2 class="mb-4">Bienvenu Chez CarSend</h2>

                    <p>
                        Première plateforme web de vente et achat de véhicules en ligne au <strong>Cameroun</strong>.
                        Nous vous facilitons la vente et l'achat de votre automobile. Si vous souhaitez achetez un
                        véhicule d'ocassioin ou neuf
                        en fonction de votre budget, trouvez les meilleurs choix de vehicule sur
                        <strong>CarSend</strong> , trouvez des centaines de marques et des modèles.
                    </p>
                    <p>
                        Besoins de vendre votre véhicule au <strong>Cameroun</strong>, n'hesitez pas une seule adresse
                        <strong>CarSend</strong>
                        Que vous souyez un concessionnaire ou un particulier, vous pouvez vendre votre véhicule.
                        Il vous suffit juste de créer votre compte c'est totalement gartuit et de poster votre vehicule
                        pour sa mise en vente.
                    </p>

                    <p><a href="{{ route('cars.create') }}" class="btn btn-primary py-3 px-4">Vendre Ma Voiture</a></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Nos Valeurs</span>
                <h2 class="mb-3">Nos Valeurs</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="icon-handshake-o"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Conseil</h3>
                        <p>
                            Nous sommes proches de vous et travaillons à développer une relation personnalisée avec
                            chacun de vous.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="icon-business_center"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Professionalisme</h3>
                        <p>
                            Nous sommes proches de vous et travaillons de façon professionnel avec chacun de vous.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="icon-heart-o"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Ouverture</h3>
                        <p>
                            Nous sommes ouvert au monde et nous nous adaptons à votre évolution.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="services services-2 w-100 text-center">
                    <div class="icon d-flex align-items-center justify-content-center"><span
                            class="icon-security"></span></div>
                    <div class="text w-100">
                        <h3 class="heading mb-2">Securité</h3>
                        <p>
                            Nous sommes proches de vous et travaillons à développer une relation personnalisée avec
                            chacun de vous.
                        </p>
                    </div>
                </div>
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
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/images/image_1.jpg');">
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
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/images/image_2.jpg');">
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
                    <a href="blog-single.html" class="block-20"
                        style="background-image: url('assets/images/image_3.jpg');">
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

{{-- <section class="ftco-counter ftco-section img bg-light" id="section-counter">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="60">0</strong>
                        <span>Year <br>Experienced</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="1090">0</strong>
                        <span>Total <br>Cars</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text text-border d-flex align-items-center">
                        <strong class="number" data-number="2590">0</strong>
                        <span>Happy <br>Customers</span>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 justify-content-center counter-wrap ftco-animate">
                <div class="block-18">
                    <div class="text d-flex align-items-center">
                        <strong class="number" data-number="67">0</strong>
                        <span>Total <br>Branches</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
@endsection

@section('extra-js')
<script>
    console.clear();
    function typingEffect(element,speed){
    let text=element.innerHTML;
    element.innerHTML="";
    var i=0;
    var timer=setInterval(function(){
        if(i<text.length){
        element.append(text.charAt(i))
        i++;
        }else{
        clearInterval(timer);
        }
    },speed)

    }

    const textAnimate =document.querySelector('#textAnimate');
    typingEffect(textAnimate,150);
</script>
@endsection
