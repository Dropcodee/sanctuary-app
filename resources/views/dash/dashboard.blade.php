@extends('layouts.admin')

@section('title', 'Dashboard Page')

@section('header-title', 'Sanctuary Unit Member Dashboard')
@section('header-desc', 'Overview of all the units activities and yours as well.')

@section('content')
    <div class="row">
        <!-- metric -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Customers</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">32,100 </h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success">
                        <i class="fa fa-fw fa-caret-up"></i><span>5.27%</span>
                    </div>
                </div>
                <div id="sparkline-1"></div>
            </div>
        </div>
        <!-- /. metric -->
        <!-- metric -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Order</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">4,200 </h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-danger">
                        <i class="fa fa-fw fa-caret-down"></i><span>1.08%</span>
                    </div>
                </div>
                <div id="sparkline-2"></div>
            </div>
        </div>
        <!-- /. metric -->
        <!-- metric -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Revenue</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">$5,656</h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-danger">
                        <i class="fa fa-fw fa-caret-down"></i><span>7.00%</span>
                    </div>
                </div>
                <div id="sparkline-3">
                </div>
            </div>
        </div>
        <!-- /. metric -->
        <!-- metric -->
        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="text-muted">Growth</h5>
                    <div class="metric-value d-inline-block">
                        <h1 class="mb-1 text-primary">+28.45% </h1>
                    </div>
                    <div class="metric-label d-inline-block float-right text-success">
                        <i class="fa fa-fw fa-caret-up"></i><span>4.87%</span>
                    </div>
                </div>
                <div id="sparkline-4"></div>
            </div>
        </div>
        <!-- /. metric -->
    </div>

@endsection
