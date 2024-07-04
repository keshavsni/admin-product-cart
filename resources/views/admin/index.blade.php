@extends('main.admin.layout')

@section('title', 'Dashboard')

@section('content')
    <div class="pcoded-content">

        <div class="page-header card">
            <div class="row align-items-end">
                <div class="col-lg-8">
                    <div class="page-header-title">
                        <div class="d-inline">
                            <h5>Dashboard</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="pcoded-inner-content">
            <div class="main-body">
                <div class="page-wrapper">
                    <div class="page-body">

                        <div class="row">
                            <div class="col-xl-4 col-md-4">
                                <div class="card prod-p-card" style="background:#b7cde8;">
                                    <div class="card-body">
                                        <a href="">
                                            <div class="row align-items-center m-b-30">
                                                <div class="col text-center">
                                                    <h6 class="m-b-5 text-white f-26">Total</h6>
                                                    <h3 class="m-b-0 f-w-700 text-white"></h3>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fa fa-users f-40" aria-hidden="true"
                                                        style="width:60px; height:60px; font-size:38px"></i>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>



                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

