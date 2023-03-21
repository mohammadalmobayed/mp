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
                    <h2 class="card-title">Add Sudent</h2>         
                        <form class="form-group mx-sm-3 mb-2" action="{{route('Hidab.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
        
                        <label>Student Id </label>
                        <input type="text" class="form-control py-2 mb-3" name="student_id"  placeholder="Enter Student Id" required>
                        <label> Name</label>
                        <input type="text" class="form-control py-2 mb-3" name="name"  placeholder="Enter User Name" required>
                        <label>Room No </label>
                        <input type="text" class="form-control py-2 mb-3" name="room_number"  placeholder="Enter Room No" required>
                        <label >Room Type</label>
                        <input type="text" class="form-control py-2 mb-3" name="room_type" placeholder="Enter User Room Type" required>
                        <label >Phone Number</label>
                        <input type="text" class="form-control py-2 mb-3" name="phone" placeholder="Enter User Phone Number" required>
                        <label >Data Joined</label>
                        <input type="date" class="form-control py-2 mb-3" name="date_joined" placeholder="Enter User Password" required>
                        {{-- <label>punishment_id</label> --}}
                        {{-- <select name="role" id="role"   class="form-control py-2 mb-3">
                            <option value="user" disabled>Punishment TYPE</option>
                            <option value=""></option>
                            <option value="First alert">First alert</option>
                            <option value="Final alert">Final alert</option>
                        </select> --}}
                        {{-- <label >User Image</label><br>
                        <input type="file"  class="form-control py-2 mb-3" name="User_Image" required> --}}
                        <button type="submit" class="btn btn-primary">Save</button>
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