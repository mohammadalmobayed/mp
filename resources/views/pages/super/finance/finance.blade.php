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
                    <h2 class="card-title" style="display: inline;">All Dorms</h2><button  class="fa-solid fa-print"></button>
                    
                    
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
                                21/9/2019
                            </td>
                            <td>
                                0798009602
                            </td>
                            <td>
                                -------
                            </td>
                        </tr>
                        <tr>
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
                                31/2/2021
                            </td>
                            <td>
                                077xxxxxxxx
                            </td>
                            <td>
                                First Warning
                            </td>
                        </tr>
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
                                Single
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
                                6/8/2022
                            </td>
                            <td>
                                Double
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
                                Single 
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
                        </tr>
                        </tbody>
                    </table>
                    </div>
                </div>
                </div>
            </div>
            
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

 @endsection