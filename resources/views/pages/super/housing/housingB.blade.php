
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
                    <a href="{{route('HousingB.create')}}"> <button style="margin-right:15px"  class="btn btn-danger show-alert-delete-box" type="submit" >Add </button></a>
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
                            <th>
                                Action 
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                                @foreach ($stud as $studone)

                        <tr>
                            <td>
                                {{$studone->id}}
                            </td>
                            <td>
                                {{$studone->student_id}}
                            </td>
                            <td>
                                {{$studone->name}}
                            </td>
                            <td>
                                {{$studone->room_number}}
                            </td>
                            <td>
                                {{$studone->room_type}}
                            </td>
                            <td>
                                {{$studone->date_joined}}
                            </td>
                            <td>
                                {{$studone->phone}}
                            </td>
                            <td>
                                @if (isset($puns[$studone->student_id]))
                                @foreach ($puns[$studone->student_id] as $pun)
                                    @if ($pun->status === 'accepted')
                                        {{ $pun->warning_type }}
                                        @break
                                    @endif
                                @endforeach
                            @endif
                                {{-- @if (isset($puns[$studone->student_id]))
                                {{ $puns[$studone->student_id]->first()->warning_type }}
                                @endif --}}
                                {{-- @foreach ($puns->where('student_id', $studone->student_id) as $pun)
                                    {{ $pun->warning_type }}
                                @endforeach --}}
                            </td>
                            <td style="padding:0">
                                <form action="{{route('HousingB.destroy',$studone->student_id)}}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <div class="p-0  border-0">
                                        <button  type="submit" style="border:none; background:none;">  <i class="fa-solid fa-trash fa-xl" style="color: #d71414;"> </i> </button>
                                    
                                </form> 
                                
                                    <a href="{{route('HousingB.edit',$studone->id)}}"><i class="fa-solid fa-pen fa-xl" style="color: #346BCB;"></i></a>
                                
                                    @if (isset($puns[$studone->student_id]))
                                    @foreach ($puns[$studone->student_id] as $pun)
                                        @if ($pun->warning_type === 'final_warning' && $pun->status === 'accepted')
                                    <button disabled type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalLoginForm"><i class="fa-solid fa-triangle-exclamation fa-xl" style="color: rgb(166, 165, 165);"></i></button>
                                    @break

                                @else
                                    <button type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalLoginForm{{$studone->id}}"><i class="fa-solid fa-triangle-exclamation fa-xl" style="color: #ece636;"></i></button>
                                    @endif
                                    
                                    @endforeach

                                    

                                {{-- @endif 
                                @if(!isset($puns[$studone->student_id]))
                                <button type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalLoginForm{{$studone->id}}"><i class="fa-solid fa-triangle-exclamation fa-xl" style="color: #ece636;"></i></button>
                                @endif --}}
                                

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
    {{-- {{dd($stud_one)}} --}}
    @foreach($stud as $studone)
    {{-- {{dd($stud)}} --}}
    <div id="ModalLoginForm{{$studone->id}}" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Add Punishment</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="{{route('punishment.store')}}">
                        @csrf
                        <div class="input-group" style="gap:10px">
                                <input  type="text" placeholder="Student Name" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="name" value= {{$studone->name}}  readonly>
                          
                           
                                <input type="text" placeholder="Student ID" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="student_id" value =   {{$studone->student_id}} readonly>
                            
                        </div>
                        <div class="form-group">
                           
                                <select class="form-control input-lg" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray;" aria-label="Default select example" name="warning_type" required>
                                    <option selected>Warning type</option>
                                    {{-- @if($puns && $puns->warning_type == 'first_warning') --}}
                                    {{-- <option value="first_warning" style="display:none">First Warning</option> --}}
                                    {{-- @else --}}
                                    <option value="first_warning" >First Warning</option>
                                    {{-- @endif --}}

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
@endforeach

@endsection