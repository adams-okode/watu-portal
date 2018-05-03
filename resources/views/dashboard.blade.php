@extends('layouts.master')
@section('title')
    Dashboard
@stop
@section('content')
      
            <div class="container-fluid">
                
                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="btn-group pull-right m-t-15">
                            <button type="button" class="btn btn-custom dropdown-toggle waves-effect waves-light"
                                    data-toggle="dropdown" aria-expanded="false">Settings <span class="m-l-5"><i
                                    class="fa fa-cog"></i></span></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#">Action</a>
                                <a class="dropdown-item" href="#">Another action</a>
                                <a class="dropdown-item" href="#">Something else here</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Separated link</a>
                            </div>

                        </div>
                        <h4 class="page-title">Dashboard</h4>
                    </div>
                </div>

                @include('layouts.alerts')
                <div class="row">
                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-layers float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Orders</h6>
                            <h2 class="m-b-20" data-plugin="counterup">1,587</h2>
                            <span class="label label-success"> +11% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-paypal float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Revenue</h6>
                            <h2 class="m-b-20">$<span data-plugin="counterup">46,782</span></h2>
                            <span class="label label-danger"> -29% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-chart float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Average Price</h6>
                            <h2 class="m-b-20">$<span data-plugin="counterup">15.9</span></h2>
                            <span class="label label-pink"> 0% </span> <span class="text-muted">From previous period</span>
                        </div>
                    </div>

                    <div class="col-xs-12 col-md-6 col-lg-6 col-xl-3">
                        <div class="card-box tilebox-one">
                            <i class="icon-rocket float-right text-muted"></i>
                            <h6 class="text-muted text-uppercase m-b-20">Product Sold</h6>
                            <h2 class="m-b-20" data-plugin="counterup">1,890</h2>
                            <span class="label label-warning"> +89% </span> <span class="text-muted">Last year</span>
                        </div>
                    </div>
                </div>
                <!-- end row -->

        </div> <!-- container -->
@stop