@extends('layouts.admin')

@section('admin-title')
    Admin Dashboard
@endsection

@section('admin-content')
    <!--Main container start -->
    <main class="ttr-wrapper">
        <div class="container-fluid">
            <div class="db-breadcrumb">
                <h4 class="breadcrumb-title">Dashboard</h4>
                <ul class="db-breadcrumb-list">
                    <li><a href="{{ route('welcome.index') }}"><i class="fa fa-home"></i>Home</a></li>
                    <li>Dashboard</li>
                </ul>
            </div>
            <!-- Card -->
            <div class="row">
                <div class="col-md-8 col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="widget-card widget-bg1">
                        <div class="wc-item">
                            <h4 class="wc-title">
                                Total Cars
                            </h4>
                            <span class="wc-des">
								All Cars
							</span>
                            <span class="wc-stats">
								<span class="counter">{{ $allCars }}</span>
							</span>

                        </div>
                    </div>
                </div>
                <div class="col-md-8 col-lg-3 col-xl-3 col-sm-6 col-12">
                    <div class="widget-card widget-bg2">
                        <div class="wc-item">
                            <h4 class="wc-title">
                                Total Users
                            </h4>
                            <span class="wc-des">
								All Users
							</span>
                            <span class="wc-stats counter">
								{{ $allUsers }}
							</span>
                        </div>
                    </div>
                </div>

            </div>
            <!-- Card END -->
            <div class="row">

                <div class="col-lg-12 m-b30">
                    <div class="widget-box">
                        <div class="wc-title">
                            <h4>  <i class="fa fa-calendar" ></i> &nbsp; Calendrier Des Boost</h4>
                        </div>
                        <div class="widget-inner">
                            <div id="calendar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
