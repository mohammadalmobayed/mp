@extends('pages.layouts.master')

@include('pages.layouts.head')
@section('user')
Mohammad
@endsection



    @section('content')
<body>
 
    <!-- partial -->
    {{-- <div class="container-fluid page-body-wrapper"> --}}
      <!-- partial:./partials/_navbar.html -->
      {{-- <nav class="navbar1 col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row"></nav> --}}
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <h2 class="card-title">All Dorm </h2>
                    
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                            Students ID
                            </th>
                            <th>
                            Students Name
                            </th>
                            <th>
                                Room No 
                            </th>
                            <th>
                                Room Type 
                            </th>
                            <th>
                                Dorms type  
                            </th>
                            <th>
                                Data Joined 
                            </th>
                            <th>
                                Phone No 
                            </th>
                            <th>
                                Punishment 
                            </th>
                           
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>
                                1
                            </td>
                            <td>
                                201910085
                            </td>
                            <td>
                                Mohammad Almobayed
                            </td>
                            <td>
                                300
                            </td>
                            <td>
                                Single
                            </td>
                            <td>
                                Dorms A
                            </td>
                            </td>
                            <td>
                                21/9/2019
                            </td>
                            <td>
                                0798009602
                            </td>
                            <td>
                                ------- 
                            </td>
                        </tr>
                        <td>
                            2
                        </td>
                        <td>
                            000000000
                        </td>
                        <td>
                            Messsy Adam
                        </td>
                        <td>
                            210
                        </td>
                        <td>
                            Double
                        </td>
                        <td>
                            Dorms B
                        </td>
                        <td>
                            15/7/2017
                        </td>
                        <td>
                            0777777777
                        </td>
                        <td>
                            First Warning
                        </td>
                    </tr>
                    <tr>
                        <td>
                            3
                        </td>
                        <td>
                            000000000
                        </td>
                        <td>
                            John Richards
                        </td>
                        <td>
                            315
                        </td>
                        <td>
                            Double
                        </td>
                        <td>
                            Dorms B
                        </td>
                        <td>
                            20/10/2018
                        </td>
                        <td>
                            0777777777
                        </td>
                        <td>
                            Final Warning
                        </td>
                    </tr>
                    <tr>
                        <td>
                            4
                        </td>
                        <td>
                            xxxxxxxxxx
                        </td>
                        <td>
                            Peter Meggik
                        </td>
                        <td>
                            150
                        </td>
                        <td>
                            Single
                        </td>
                        <td>
                            Dorms A
                        </td>
                        <td>
                            31/2/2021
                        </td>
                        <td>
                            077xxxxxxx
                        </td>
                        <td>
                            First Warning
                        </td>
                        <tr>
                        <td>
                        5
                    </td>
                    <td>
                        201910055
                    </td>
                    <td>
                        Edward
                    </td>
                    <td>
                        210
                    </td>
                    <td>
                        chalet
                    </td>
                    <td>
                        Dorms AL-HIDAB
                    </td>
                        
                    <td>
                        5/5/2021
                    </td>
                    <td>
                        077xxxxxxxx
                    </td>
                    <td>
                        -------
                    </td>
                </tr>
                <tr>
                    <td>
                        6
                    </td>
                    <td>
                        201720204
                    </td>
                    <td>
                        Lara Majed
                    </td>
                    <td>
                        100
                    </td>
                    <td>
                        chalet
                    </td>
                    
                      <td>
                        Dorms AL-HIDAB
                      </td>
                      <td>
                        6/12/2014
                    </td>
                    <td>
                        077XXXXXXX
                    </td>
                    <td>
                        -------
                    </td>
                </tr>
                <tr>
                    <td>
                        7
                    </td>
                    <td>
                        2018545000
                    </td>
                    <td>
                        Henry Tom
                    </td>
                    <td>
                        313
                    </td>
                    <td>
                        chalet 
                    </td>
                     <td>
                      Dorms AL-HIDAB
                    </td>
                    <td>
                        1/1/2020
                    </td>
                    <td>
                        0777XXXXXX
                    </td>
                    <td>
                        First Warning                           
                    </td>
                        <tr>
                            @endsection