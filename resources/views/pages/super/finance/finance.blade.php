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
                    <h2 class="card-title" style="display: inline;">Students info</h2><button  class="fa-solid fa-print" onclick="window.print()"></button>
                    
                    
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
                                <button  type="submit"  style="border:none; background:none;" class="btn btn-primary">
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
    }
  </style>


 @endsection