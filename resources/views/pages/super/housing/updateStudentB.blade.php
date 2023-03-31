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
                    <h2 class="card-title">Update user</h2>
                    
                    {{-- method="POST" --}}
                    <form class="form-group mx-sm-3 mb-2" action="{{ route('HousingB.update', ['id' => $stud->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Student Id </label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="student_id"  style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " value="{{$stud->student_id}}"  placeholder="Enter student_id" required>
                        {{-- <label> Name</label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="name"  style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " value="{{$stud->name}}"  placeholder="Enter User Name" required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Room Number </label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="room_number"  style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " value=" {{$stud->room_number}}"  placeholder="Enter Room Number" required>
                        {{-- <label>Room Type</label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="room_type"  style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " value=" {{$stud->room_type}}" placeholder="Enter User E-mail" required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Phone Number</label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="phone"  style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " value=" {{$stud->phone}}" placeholder="Enter User Phone Number" required>
                        {{-- <label>Date Joined</label> --}}
                        <input type="date" class="form-control py-2 mb-3" name="date_joined"  style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " value="{{$stud->date_joined}}" placeholder="Enter date_joined" required>
                        </div>
                       
                        <div class="row" style="justify-content:center">

                            <button type="submit" class="btn btn-primary btn-sm">Save</button>
                            </div>
                    </form>
                            
                        </tr>

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