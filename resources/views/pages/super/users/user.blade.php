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
                            <div class="row" style="justify-content:space-between">
                            <h2  style="display: inline-block" class="card-title">System users</h2>
                            <a href="{{route('user.create')}}"> <button style="margin-right:15px"  class="btn btn-danger show-alert-delete-box" type="submit" >Add </button></a>
                            </div>
                            <div class="table-responsive pt-3">
                        <table class="table table-dark" style=" text-align: center;">
                            <thead>
                                <tr>
                            {{-- <th>
                                #
                            </th> --}}
                            <th>
                                Job ID
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Phone No 
                            </th>
                            <th>
                                Job title 
                            </th>
                            <th>
                                User role 
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach ($user as $user)
                            {{-- {{dd($user)}} --}}
                                
                            <tr>
                            {{-- <td>
                                {{$user->id}}
                            </td> --}}
                            <td>
                                {{$user->job_id}}
                            </td>
                            <td>
                                {{$user->name}}
                            </td>
                            <td>
                                {{$user->email}}
                            </td>
                            <td>
                                {{$user->phone}}
                            </td>
                            <td>
                                {{$user->job_title}}
                            </td>
                            <td>
                                {{$user->role}}
                            </td>
                            <td style="padding: 0">

                                    <form action="{{route('user.destroy',$user->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <div class="p-0  border border-0">
                                            <button type="submit" style="border:none; background:none;"><i class="fa-solid fa-trash fa-xl" style="color: #d71414;"> </i> </button>
                                     
                                        
                                    </form>
                                    
                                    <a href="{{route('user.edit',$user->id)}}" ><i class="fa-solid fa-pen fa-xl" style="color: #346BCB;"></i></a>

                                
                                    
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
    </div>
    <!-- page-body-wrapper ends -->
</div>
  <!-- container-scroller -->

  

@endsection