@extends('pages.layouts.master')

@include('pages.layouts.head')



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
                    <h2 class="card-title" style="display: inline; margin-left:10px;">Students info</h2>
                    <form method="GET" action="{{route('searchF')}}" class="form-inline my-2 my-lg-0">
                        <input class="form-control" style="border:none;" type="search" placeholder="Search" aria-label="Search" name="query">
                        <button type="submit" style="height:46px;border:none; background:none;">
                            <i class="fas fa-search"></i>
                        </button>
                    </form>
                    <button title="print" style="border:none; background:none;" onclick="window.print()"> <i class="fa-solid fa-print fa-xl" style="color: #007bff;"></i></button>
                    </div>
                    
                    
                    <div class="table-responsive pt-3">
                        <table class="table table-dark" style=" text-align: center;">
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
                                Dorm Joined 
                            </th>
                            <th>
                                Data Joined 
                            </th>
                            <th>
                                Phone No 
                            </th>
                            <th>
                                Action 
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                        <tr>
                            <td>{{ $student->id }}</td>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->room_number }}</td>
                            <td>{{ $student->room_type }}</td>
                            <td>{{ $student->dorm_joined }}</td>
                            <td>{{ $student->date_joined }}</td>
                            <td>{{ $student->phone }}</td>
                            <th>
                            {{-- <a href="{{route('finance.show', $student->id)}}"  class="fa-solid fa-eye fa-xl" style="color: #4bb6ec;"></i>>show</a> --}}
                            <form action="{{ route('finance.show', $student->id) }}" method="GET">
                                <button  type="submit"  style="border:none; background:none;" >
                                    <i class="fa-solid fa-eye fa-xl" style="color: #4bb6ec;"></i></button>
                            </form>
                            
                        </th>
                            </tr>
                            
                            @endforeach
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
  <style>
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


 @endsection