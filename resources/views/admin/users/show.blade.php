@extends('layouts.admin')

@section('admin-title')
Dashbord Admin | CarSend
@endsection

@section('admin-content')
<!--Main container start -->
<main class="ttr-wrapper">
    <div class="container-fluid">
        <div class="db-breadcrumb">
            <h4 class="breadcrumb-title">Ajouter Un Utilisateur</h4>
            <ul class="db-breadcrumb-list">
                <li><a href="{{ route('welcome.index') }}"><i class="fa fa-home"></i>Home</a></li>
                <li>Ajouter Un Utilisateur</li>
            </ul>
        </div>
        <div class="row">
            <!-- Your Profile Views Chart -->
            <div class="col-lg-12 m-b30">
                <div class="widget-box">
                    <div class="wc-title">
                        <h4> <i class="fa fa-car"></i> &nbsp; Ajout D'Un Utilisateurs</h4>
                    </div>
                    <div class="widget-inner">
                        <form method="POST" action="#" class="edit-profile m-b30" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="ml-auto">
                                        <h3>1. Basic info</h3>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Nom</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $user->name }}" name="name" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Email</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $user->email }}" name="email" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Telephone</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $user->telephone }}" name="telephone" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Addresse</label>
                                    <div>
                                        <input class="form-control" type="text" value="{{ $user->addresse }}" name="addresse" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Password</label>
                                    <div>
                                        <input class="form-control" type="password" value="" name="password" readonly>
                                    </div>
                                </div>
                                <div class="form-group col-6">
                                    <label class="col-form-label">Role</label>
                                    <div>
                                        <select class="form-select form-control" aria-label="role"
                                            name="role" readonly>
                                            <option selected>{{ $user->role }}</option>
                                            {{-- <option value="admin">Admin</option> --}}
                                        </select>
                                    </div>
                                </div>

                                <div class="col-12">
                                   <a href="{{ route('user.index') }}" class="btn btn-primary"> Retour </a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<div class="ttr-overlay"></div>
@endsection

{{-- @section('admin-extra-js')
  <script>
    $(document).ready(function (){
        $('input[type="file"]').imageuploadify();
    });
  </script>
@endsection --}}
