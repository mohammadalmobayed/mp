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
                    <form class="form-group mx-sm-3 mb-2" action="{{ route('HousingA.update', ['id' => $stud->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <label>Student Id </label>
                        <input type="text" class="form-control py-2 mb-3" name="student_id" value="{{$stud->job_id}}"  placeholder="Enter student_id" required>
                        <label> Name</label>
                        <input type="text" class="form-control py-2 mb-3" name="name" value="{{$stud->name}}"  placeholder="Enter User Name" required>
                        <label>Room Number </label>
                        <input type="text" class="form-control py-2 mb-3" name="room_number" value=" {{$stud->room_number}}"  placeholder="Enter Room Number" required>
                        <label>Room Type</label>
                        <input type="text" class="form-control py-2 mb-3" name="room_type" value=" {{$stud->email}}" placeholder="Enter User E-mail" required>
                        <label>Phone Number</label>
                        <input type="text" class="form-control py-2 mb-3" name="phone" value=" {{$stud->phone}}" placeholder="Enter User Phone Number" required>
                        <label>Date Joined</label>
                        <input type="date" class="form-control py-2 mb-3" name="date_joined" value="" placeholder="Enter date_joined" required>
                        {{-- <label>Status</label>
                        <select name="role" id="role"   class="form-control py-2 mb-3">
                            <option value="user" disabled>USER TYPE</option>
                            <option value="user">User</option>
                            <option value="Admin">admin</option>
                        </select> --}}
                        {{-- <label>User Image</label><br>
                        <input type="file"  class="form-control py-2 mb-3" name="User_Image" required> --}}
                        <button type="submit" class="btn btn-primary">Update</button>
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