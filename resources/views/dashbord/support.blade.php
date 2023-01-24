@extends('layouts.main')

@section('title2')
    Cpanel | CarSend
@endsection

@section('content-main')
    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">
            <h1 class="app-page-title">Support</h1>
            <hr class="mb-4">
            <div class="alert alert-warning" role="alert">
                <i class="fa fa-warning"></i>&nbsp; Vous recontrez des problèmes? alors pas de panique. laissez
                nous un message et un de nos agents vous contactera.
            </div>
            <div class="row g-4 settings-section">
                <div class="col-12 col-md-12">
                    <div class="app-card app-card-settings shadow-sm p-4">
                        <div class="app-card-body">
                            <form class="settings-form" method="POST" action="{{ route('support.store') }}"
                                  enctype="multipart/form-data">
                                @csrf
                                <div class="mb-3">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value=""
                                           placeholder="Ducobu" required>
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" placeholder="ducobu@outlook.fr" name="email"
                                           value="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="sujet" class="form-label">Sujet</label>
                                    <input type="text" class="form-control" id="sujet" name="sujet"
                                           placeholder="probleme de boost" value="">
                                </div>
                                <div class="mb-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" placeholder="Laissez votre message ici" id="message"
                                              name="message" style="height: 100px"></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="status" class="form-label">Status</label>
                                    <select class="form-select form-control" aria-label="status" name="status">
                                        <option value="Publier" selected>Publier</option>
                                        <option value="En Attente">En Attente</option>
                                    </select>
                                </div>
                                <button type="submit" class="btn app-btn-primary">Envoyer</button> <a
                                    href="{{ route('home') }}" class="btn btn-secondary">Retour</a>
                            </form>
                        </div>
                        <!--//app-card-body-->

                    </div>
                    <!--//app-card-->
                </div>
            </div>
            <!--//row-->
        </div>
        <!--//container-fluid-->
    </div>
    <!--//app-content-->
@endsection

@section('extra-js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
            integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    @if (Session::has('success'))
        <script>
            swal("Good", "{!! Session::get('success') !!}", "success",{
                button: "OK"
            })
        </script>
    @endif

@endsection
