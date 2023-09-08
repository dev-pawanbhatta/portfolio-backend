@extends('admin.layouts.main')

@section('title')
    Dashboard | {{ config('app.name') }}
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}">
@endsection

@section('content')
    <div class="row g-3">
        <div class="col-lg-12">
            <div class="row g-3">
                <div class="col-lg-4">
                    <div class="card box-1 boxes">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>Total Users</span>
                                    <h4 class='pb-3'><b>277</b></h4>
                                </div>
                                <div>
                                    <i class='fa-solid fa-user fs-4 p-2 icon'></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <span class="badge">+95%</span>
                                    <span> Last Month</span>
                                </div>
                                <div>
                                    <i class='fa-solid fa-ellipsis-vertical' id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <div class="dropdown">
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card box-2 boxes">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>Total Orders</span>
                                    <h4 class='pb-3'><b>277</b></h4>
                                </div>
                                <div>
                                    <i class='fa-solid fa-shopping-cart fs-4 p-2 icon'></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <span class="badge">-30%</span>
                                    <span> Last Month</span>
                                </div>
                                <div>
                                    <i class='fa-solid fa-ellipsis-vertical' id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <div class="dropdown">
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                                            <li><a class="dropdown-item" href="#">Last Year</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="card box-3 boxes">
                        <div class="card-body">
                            <div class="d-flex justify-content-between">
                                <div>
                                    <span>Total Products</span>
                                    <h4 class='pb-3'><b>277</b></h4>
                                </div>
                                <div>
                                    <i class='fa-solid fa-shopping-bag fs-4 p-2 icon'></i>
                                </div>
                            </div>
                            <div class="d-flex justify-content-between mt-3">
                                <div>
                                    <span class="badge">+95%</span>
                                    <span> Last Month</span>
                                </div>
                                <div>
                                    <i class='fa-solid fa-ellipsis-vertical' id="dropdownMenuLink" data-bs-toggle="dropdown"
                                        aria-expanded="false"></i>
                                    <div class="dropdown">
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                            <li><a class="dropdown-item" href="#">Last Week</a></li>
                                            <li><a class="dropdown-item" href="#">Last Month</a></li>
                                            <li><a class="dropdown-item" href="#">Last Year</a></li>
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
    {{-- <div class="row my-3">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-header">Sales Analytics</div>
                <div class="card-body">
                    <canvas id="sales-analytics" height="300px"></canvas>
                </div>
            </div>
        </div>
    </div> --}}
@endsection
