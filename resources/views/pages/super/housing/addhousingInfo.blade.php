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
                    <h2 class="card-title">Add Dorm</h2>         
                        <form class="form-group mx-sm-3 mb-2" action="{{route('info.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
        
                        <label>Total Dorms </label>
                        <input type="text" class="form-control py-2 mb-3" name="total_dorms"  placeholder="Enter Total Dorms" required>
                        <label> Total Students</label>
                        <input type="text" class="form-control py-2 mb-3" name="total_students"  placeholder="Enter Total Students" required>
                        <label>Total Rooms </label>
                        <input type="text" class="form-control py-2 mb-3" name="total_rooms"  placeholder="Enter Total Rooms" required>
                        <label >Total Supervisors</label>
                        <input type="text" class="form-control py-2 mb-3" name="total_supervisors" placeholder="Enter User Total Supervisors" required>
                        <label >Rooms Occupied</label>
                        <input type="text" class="form-control py-2 mb-3" name="rooms_occupied" placeholder="Enter User Phone Number" required>
                        {{-- <label >Data Joined</label>
                        <input type="date" class="form-control py-2 mb-3" name="date_joined" placeholder="Enter User Password" required> --}}
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