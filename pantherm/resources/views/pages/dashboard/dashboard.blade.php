@extends('layouts.appmain')

@section('container')
        <div class="container-fluid card">
            <div class="card-body">
                <h5 class="h5 mb- font-weight-bold text-gray-800 ">Selamat {{ $welcome }}<span class="font-weight-bold text-gray-800 shadow-lg ml-2 rounded px-1">{{ Auth::user()->name }}</span></h5>
                <span class="font-weight-bold text-gray-600">
                    <i class="pl-2 fa-solid fa-calendar"></i>
                    <?php
                    echo date('l, d/m/Y');
                    ?>
                </span>
                <span class="font-weight-bold text-gray-600">
                    <i class="pl-2 fa-regular fa-clock"></i>
                    <?php
                    echo date('H:i:s a');
                    ?>
                </span>
            </div>
        </div>
    <div class="container-fluid p-5 bg-white shadow-lg rounded">
                <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h4 mb-0 font-weight-bold text-gray-600"><i class="fa-solid fa-chart-pie"></i> DATA PANTHER MANIA.ID</h1>

        </div>

        <!-- Content Row -->
        <div class="row">

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    DATA MEMBER</div>
                                    <span>{{ $data_member }}</span>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('img/logo/peoplelogo.png') }}" width="40px" height="40px" alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-success shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                    DATA USER </div>
                                    <span>{{ $data_user }}</span>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('img/logo/team.png') }}" width="40" height="40" alt=""
                                    srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    AGENDA</div>
                                    <span>{{ $data_agendak }}</span>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('img/logo/timetable.png') }}" width="40" height="40"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div style="color:rgb(226, 127, 6);" class="text-xs font-weight-bold text-bold  text-uppercase mb-1">
                                    PRODUCTS DATA</div>
                                    <span>{{ $data_products }}</span>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('img/logo/brand-identity.png') }}" width="40" height="40"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-danger shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                                    DAFTAR AGENDA DATA</div>
                                    <span>{{ $data_daftar_agenda }}</span>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('img/logo/timetable.png') }}" width="40" height="40"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pending Requests Card Example -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-warning shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div style="color:rgb(226, 127, 6);" class="text-xs font-weight-bold text-bold  text-uppercase mb-1">
                                    ORDER PRODUCTS DATA</div>
                                    <span>{{ $data_orders }}</span>
                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                            </div>
                            <div class="col-auto">
                                <img src="{{ asset('img/logo/brand-identity.png') }}" width="40" height="40"
                                    alt="" srcset="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{--  --}}
        </div>
    </div>


@endsection

