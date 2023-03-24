@extends('pages.layouts.master')

{{-- @include('pages.layouts.head') --}}
@section('user')
Mohammad
@endsection



    @section('content')

 
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
                                Dorms joined  
                            </th>
                            <th>
                                Data Joined 
                            </th>
                            <th>
                                Phone No 
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

                            </tr>
                        @endforeach

          
                        </tbody>
                        </table>
                            @endsection