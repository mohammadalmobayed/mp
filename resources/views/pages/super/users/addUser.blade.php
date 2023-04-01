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
                    <div class="row" style="justify-content:center; margin-bottom:20px;">
                    <h2 class="card-title">Add user</h2>
                    </div>
                    
                    <form class="form-group mx-sm-3 mb-2" action="{{route('user.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="input-group" style="gap:10px">
                        {{-- <label> Name</label> --}}
                        <input type="text" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="name"  placeholder="Enter User Name" required>
                        {{-- <label>Job Id </label> --}}
                        <input type="text" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="job_id"  placeholder="Enter Job Id" required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Job Title </label> --}}
                        <input type="text" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="job_title"  placeholder="Enter Job Title" required>
                        {{-- <label >Email</label> --}}
                        <input type="email" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="email" placeholder="Enter User E-mail" required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label >Phone Number</label> --}}
                        <input type="text" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="phone" placeholder="Enter User Phone Number" required>
                        {{-- <label >Password</label> --}}
                        <input type="password" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="password" placeholder="Enter User Password" required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Status</label> --}}
                        <select style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="role" id="role"   class="form-control py-2 mb-3">
                            <option value="0" disabled>USER TYPE</option>
                            <option value="0">User</option>
                            <option value="2">admin</option>
                        </select>
                        {{-- <label >User Image</label><br> --}}
                        <input type="file" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "   class="form-control py-2 mb-3" name="User_Image" required>
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