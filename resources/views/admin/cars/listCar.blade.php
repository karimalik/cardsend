@extends('layouts.admin')

@section('admin-title')
    Admin DashBoard | CarSend
@endsection


@section('admin-content')
    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Liste Des Voitures</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="{{ route('welcome.index') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li>Liste Des Voitures</li>
                </ul>
            </div>
            <!-- Card -->
            <a href="" class="btn btn-info text-white"> Ajouter Une Voiture</a>
            <!-- DataTales Example -->
            <div class="card shadow mb-4 mt-3">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary"> <i class="fa fa-car"></i> Liste Des Voitures</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>Marque</th>
                                <th>Modele</th>
                                <th>Prix</th>
                                <th>Cree Par</th>
                                <th>Date De Creation</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($cars as $car)
                                <tr>
                                    <td>{{ $car->marque }}</td>
                                    <td>{{ $car->modele }}</td>
                                    <td>{{ $car->prix }}</td>
                                    <td>{{ $car->use->name }}</td>
                                    <td>{{ $car->created_at }}</td>
                                    <td>
                                        <a href="" class="btn btn-warning"><i class="fa fa-eye" ></i></a>
                                    </td>
                                </tr>

                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
    </main>
@endsection


