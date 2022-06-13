@extends('layouts.container')
@section('content')
    <div class="container">
        <img src="../assets/img/imazy.jpg" class="w-100" height="350">
        <div class="row mt-2">
            <div class="col-md-4">
                <div class="card card-secondary">
                    <div class="card-body skew-shadow">
                        <h1>3,072</h1>
                        <h5 class="op-8">Total conversations</h5>
                        <div class="pull-right">
                            <h3 class="fw-bold op-8">88%</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark bg-warning-gradient">
                    <div class="card-body bubble-shadow">
                        <h1>188</h1>
                        <h5 class="op-8">Total Sales</h5>
                        <div class="pull-right">
                            <h3 class="fw-bold op-8">25%</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-dark bg-primary2">
                    <div class="card-body curves-shadow">
                        <h1>12</h1>
                        <h5 class="op-8">New Users</h5>
                        <div class="pull-right">
                            <h3 class="fw-bold op-8">70%</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
