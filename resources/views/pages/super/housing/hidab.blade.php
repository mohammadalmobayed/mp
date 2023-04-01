
@extends('pages.layouts.master')

@section('content')
  
        
      <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <div class="row" style="justify-content:space-between">
                            <h2 style=" display: inline;margin-left:15px" class="card-title">Dorm Hidab</h2>
                            <a href="{{route('Hidab.create')}}"> <button style="margin-right:15px"  class="btn btn-danger show-alert-delete-box" type="submit" >Add </button></a>
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
                                Data Joined 
                            </th>
                            <th>
                                Phone 
                            </th>
                            <th>
                                Punishment 
                            </th>
                            
                            <th >
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
                                @if ($puns && $puns->student_id == $stud->student_id)
                                    {{$puns->warning_type}} 
                                @endif
                            </td>
                            <td style="padding-right:0">
                                <form action="{{route('Hidab.destroy',$stud->student_id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="p-0  border-0">
                                        <button  type="submit" style="border:none; background:none;">  <i class="fa-solid fa-trash fa-xl" style="color: #d71414;"> </i> </button>
                                </form> 
                                <a href="{{route('Hidab.edit',$stud->id)}}"><i class="fa-solid fa-pen fa-xl" style="color: #346BCB;"></i></a>
                                    @if($puns->warning_type == 'final_warning')
                                        <button disabled type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalLoginForm"><i class="fa-solid fa-triangle-exclamation fa-xl" style="color: rgb(166, 165, 165);"></i></button>
                                    @else
                                        <button type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalLoginForm"><i class="fa-solid fa-triangle-exclamation fa-xl" style="color: #ece636;"></i></button>
                                    @endif
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
    @if($stud->count() > 0)
        <div id="ModalLoginForm" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Add Punishment</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{route('punishment.store')}}">
                        @csrf
                        <div class="input-group" style="gap:10px">
                            
                                <input  type="text" placeholder="Student Name" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="name" value= {{$stud->name}}  readonly>

                                <input type="text" placeholder="Student ID" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="student_id" value =   {{$stud->student_id}} readonly>
                            
                        </div>
                        <div class="form-group"> 
                                <select class="form-control input-lg" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray;" aria-label="Default select example" name="warning_type" required>
                                    <option selected>Warning type</option>
                                    @if($puns->warning_type == 'first_warning')
                                    <option value="first_warning" style="display:none">First Warning</option>
                                    @else
                                    <option value="first_warning" >First Warning</option>
                                    @endif

                                    <option value="final_warning">Final Warning</option>
                                  </select>
                            
                        </div>
                        <div class="form-group">
                            <div>
                                <textarea placeholder="Warning reason ..." class="form-control input-lg" style="height:6rem !important; border: 2px solid gray; " name="warning_reason" required></textarea>
                            </div>
                        </div>
                       
                        <button class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    @endif

@endsection