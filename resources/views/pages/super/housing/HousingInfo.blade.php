
@extends('pages.layouts.master')

@section('content')
  
        
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


@endsection