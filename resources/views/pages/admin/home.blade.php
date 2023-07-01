@extends('layouts.app')
@extends('pages.layouts.master')


    @section('content')

<body>
<div class="container-scroller d-flex">

        <!-- partial -->
        <div class="container-fluid ">
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
    <div class="row">               

        <div class="col-12 col-xl-6 grid-margin stretch-card">
        <div class="row w-100 flex-grow">
            <div class="col-md-12 grid-margin stretch-card">
            <div class="card" style="width: 300px; margin-right: 20px;">
                <div class="row no-gutters">
                    <div class="col-sm-5">
                        <img  src=assets/image/tenant.png alt="tenants" id="image_dif">
                    </div>
                    <div class="col-sm-7">
                        <div class="card-body">
                            <h5 class="card-title">Current tenants</h5>
                            <p class="card-text">{{$count}} Students</p>
                            <a href="{{route('housingInfo.index')}}" class="btn btn-primary">View more</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="width: 300px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img  src="assets/image/house.png" alt="dorms">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title">Total Dorms</h5>
                        <p class="card-text">{{$stud->total_dorms}} Dorms</p>
                        <a href="{{route('housingInfo.index')}}" class="btn btn-primary">View more</a>
                    </div>
                </div>
            </div>
        </div>
        </div>
            
        <div class="col-md-12 grid-margin stretch-card">
        <div class="card" style="width: 300px; margin-right: 20px;">
            <div class="row no-gutters">
                <div class="col-sm-5">
                    <img  src="assets/image/supervisor.png" alt="supervisors">
                </div>
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title">Dorms Supervisors</h5>
                        <p class="card-text">{{$count1}} Supervisors</p>
                        <a href="{{route('housingInfo.index')}}" class="btn btn-primary">View more</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="card" style="width: 300px;">
        <div class="row no-gutters">
            <div class="col-sm-5">
                <img  src="assets/image/occupied.png" alt="occupied">
            </div>
            <div class="col-sm-7">
                <div class="card-body">
                    <h5 class="card-title">Occupied rooms</h5>
                    <p class="card-text">{{$stud->rooms_occupied}} Rooms in use</p>
                    <a href="{{route('housingInfo.index')}}" class="btn btn-primary">View more</a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- partial -->
</div>
</div>
<!-- main-panel ends -->
</div>


    @endsection