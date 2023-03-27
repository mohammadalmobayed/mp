
@extends('pages.layouts.master')

@section('content')

<body>
<div class="container-scroller d-flex">

        <!-- partial -->
        <div class="container-fluid ">
<!-- partial -->
<div class="main-panel">
    <div class="content-wrapper">
        <div class="row" style="margin-left:110px;width:80%; justify-content:space-between">
            <h2 style=" display: inline" class="">Housing Information</h2>
            {{-- {{dd($stud)}} --}}
            <a href="{{route('info.edit', $stud->id)}}"> <button   class="btn btn-info show-alert-delete-box " type="submit" >Edit </button></a>
            </div>
      <div class="row" style="justify-content: center">

        <div class="col-12 col-xl-10 grid-margin stretch-card">
            
          <div class="row w-100 flex-grow">
            <div class="col-md-12 grid-margin stretch-card">
                
              <div class="card" style="">
               
                <div class="row">
                    
                    <div class="col-md-6 p-5">
                      <h5 style="display: inline">Total students:</h5>
                      <span>{{$count}}</span>                    
                     </div>
                    <div class="col-md-6 p-5">
                      <h5 style="display: inline">Total Dorms:</h5> 
                      <span class="number">{{$stud->total_dorms}}</span>                    

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 p-5">
                      <h5 style="display: inline">Total Rooms:</h5>
                      <span>{{$stud->total_rooms}}</span>                    
                     </div>
                    <div class="col-md-6 p-5">
                      <h5 style="display: inline">Occupied Rooms:</h5> 
                      <span>{{$stud->rooms_occupied}}</span>                    

                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 p-5">
                      <h5 style="display: inline">Vacant Rooms:</h5>
                      <span>{{$stud->rooms_vacant}}</span>                    
                     </div>
                    <div class="col-md-6 p-5">
                      <h5 style="display: inline">Total Supervisors:</h5> 
                      <span>{{$count1}}</span>                    

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

{{-- @section('content')
  
        
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h2 style=" display: inline-block" class="card-title">ALL Dorm</h2>
                            <a href="{{route('info.create')}}"> <button style="margin-left:980px"  class="btn btn-danger show-alert-delete-box" type="submit" >Add </button></a>
                    <div class="table-responsive pt-3">
                        <table class="table table-dark">
                        <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Total Dorms
                            </th>
                            <th>
                                Total Students
                            </th>
                            <th>
                                Total Rooms
                            </th>
                            <th>
                                Total Supervisors
                            </th>
                            <th>
                                Rooms Occupied
                            </th>
                                <th>
                                Action 
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($stud as $stud)
                            <tr>
                                <td>
                                {{$stud->id}}
                            </td>
                            <td>
                                {{$stud->total_dorms}}
                            </td>
                            <td>
                                {{$stud->total_students}}
                            </td>
                            <td>
                                {{$stud->total_rooms}}
                            </td>
                            <td>
                                {{$stud->total_supervisors}}
                            </td>
                            <td>
                                {{$stud->rooms_occupied}}
                            </td>
                            <td>
                                <form action="{{route('info.destroy',$stud->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="p-0  border border-0">
                                        <button type="submit" class="btn btn-danger show-alert-delete-box">Del</button> 
                                </form>   
                                <a href="{{route('info.edit',$stud->id)}}" class="btn btn-primary">Edit</a>
                            </td>
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


@endsection --}}