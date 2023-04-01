
@extends('pages.layouts.master')

@section('content')
        
    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                <div class="card-body">
                    <div class="row" style="justify-content:space-between">
                    <h2 style=" display: inline" class="card-title">Punishments</h2>
                    </div>
                    <div class="table-responsive pt-3">
                        <table class="table table-dark" style=" text-align: center;">
                        <thead>
                        <tr>
                            <th>
                                Students Name
                            </th>
                            <th>
                                Students ID
                            </th>
                            <th>
                                Warning Type
                            </th>
                            <th>
                                Warning Reason 
                            </th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($puns as $pun)
                        <tr>
                            <td>
                                {{$pun->name}}
                            </td>
                            <td>
                                {{$pun->student_id}}
                            </td>
                            <td>
                                {{$pun->warning_type}}
                            </td>
                            <td>
                                <button type="button" style="border:none; background:none;" data-toggle="modal" data-target="#ModalLoginForm{{$pun->id}}">
                                    See More
                                </button>
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
    @foreach($puns as $pun)
{{-- {{dd($puns)}} --}}
    <div id="ModalLoginForm{{$pun->id}}" class="modal fade">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title">Add Punishment</h1>
                </div>
                <div class="modal-body">
                    <form role="form" method="POST" action="">
                        @csrf
                        <div class="input-group">
                            
                                <input  type="text" placeholder="Student Name" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="name" value= {{$pun->name}}  readonly>
                                <input type="text" placeholder="Student ID" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="student_id"value= {{$pun->student_id}}  readonly>
                            
                        </div>
                        <div class="form-group">
                            <input type="text" placeholder="Warning Type" class="form-control input-lg" style="height:3.5rem !important; border: 2px solid gray;" name="student_id" value= {{$pun->warning_type}}  readonly>

                            
                        </div>
                        <div class="form-group">
                            <div>
                                <input placeholder="Warning reason ..." class="form-control input-lg" style="height:6rem !important; border: 2px solid gray; " name="warning_reason" value= {{$pun->warning_reason}}  readonly >
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