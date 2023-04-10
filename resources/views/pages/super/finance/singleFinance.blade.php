@extends('pages.layouts.master')

@include('pages.layouts.head')
@section('user')
Mohammad
@endsection



    @section('content')
<body>
    
    <!-- partial -->
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row printd" style="justify-content: space-between">

                            <h2 class="card-title" style="display: inline;">Single Student </h2>
                            <button title="print" style="border:none; background:none;" onclick="window.print()"> <i class="fa-solid fa-print fa-xl" style="color: #007bff;"></i></button>

                            </div>
                    <div class="container d-flex justify-content-center align-items-center">
                        {{-- <div class="container d-flex justify-content-center align-items-center"> --}}
                        <div class="col-lg-8">
                            <div class="card mb-4 border">
                            <div class="card-body1 border1">
                                <div class="row mt-3 text">
                                <div class="col-sm-6">
                                    <p class="mb-0 "> <b>ID</b> </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class=" mb-0">{{ $students->id }}</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0"><b>Student ID</b></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class=" mb-0">{{ $students->student_id}}</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0"><b>Student Name</b></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class=" mb-0">{{ $students->name }}</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0"><b>Room Number</b></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">{{ $students->room_number }}</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0"><b>Room Type</b></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class=" mb-0">{{ $students->room_type }}</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0"><b>Dorm Joined</b></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class=" mb-0">{{ $students->dorm_joined }}</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row">
                                <div class="col-sm-6">
                                    <p class="mb-0"><b>Data Joined</b></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class=" mb-0">{{ $students->date_joined }}</p>
                                </div>
                                </div>
                                <hr>
                                <div class="row mb-3">
                                <div class="col-sm-6">
                                    <p class="mb-0"><b>Phone</b></p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0">{{ $students->phone }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            {{-- </div> --}}
        </div>
            <style>
            .container {
                height: 80vh; Set the container height to full viewport height
              }
            
              .card {
                /* margin-top: auto;  */
              }
            
              .card-body1 {
                text-align: center; /* Center the text inside the card */
              }
              .border1{
                border: 2px solid black;
              }
              hr{
                border: 0.5px black solid;
              }
              /* .card-body1 .col-sm-6:first-child {
  border-right: 1px solid black;
  height: 100%; 
  box-sizing: border-box;
} */
              @media print{
        .sidebar{
            display: none;
        }
        .navbar{
            display: none !important;
        }
        .fa-print{
     display: none;
        }
        th:nth-child(9) {
            display: none;
        }
        td:nth-child(9) {
            display: none;
        }
        .printd{
            display: none;
        }
    }
              

            
            </style>
            
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->

@endsection