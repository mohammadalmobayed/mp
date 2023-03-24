
@extends('pages.layouts.master')

@section('content')
  
        
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="row" style="justify-content:space-between">

                    <h2 style=" display: inline" class="card-title">Dorm B</h2>
                    <a href="{{route('HousingB.create')}}"> <button style="margin-left:980px"  class="btn btn-danger show-alert-delete-box" type="submit" >Add </button></a>
                    </div>
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
                                Phone 
                            </th>
                            <th>
                                Punishment 
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
                                {{$stud->student_id}}
                            </td>
                            <td>
                                {{$stud->name}}
                            </td>
                            <td>
                                {{$stud->room_number}}
                            </td>
                            <td>
                                {{$stud->room_type}}
                            </td>
                            <td>
                                {{$stud->date_joined}}
                            </td>
                            <td>
                                {{$stud->phone}}
                            </td>
                            <td>
                                {{-- {{$stud->punishment_id}} --}}
                            </td> 
                            <td>
                                <form action="{{route('HousingB.destroy',$stud->id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="p-0  border border-0">
                                        <button type="submit" class="btn btn-danger show-alert-delete-box">Del</button> 
                                    
                                </form> 
                                
                                <a href="{{route('HousingB.edit',$stud->id)}}" class="btn btn-primary">Edit</a>

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