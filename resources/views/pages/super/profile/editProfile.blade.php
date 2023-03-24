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

                        
                    <h2 class="card-title">Edit Profile</h2>
                    
                    {{-- method="POST" --}}
                    <form class="form-group mx-sm-3 mb-2" action="{{ route('profile.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <label> Name</label>
                        <input type="text" class="form-control py-2 mb-3" name="name" value="{{ auth()->user()->name}}"   required>
                        <label> Job Title</label>
                        <input type="text" class="form-control py-2 mb-3" name="job_title" value="{{auth()->user()->job_title}}"  required>
                        <label>Email </label>
                        <input type="text" class="form-control py-2 mb-3" name="email" value="{{auth()->user()->email}}"   required>
                        <label>Phone Number</label>
                        <input type="text" class="form-control py-2 mb-3" name="phone" value="{{auth()->user()->phone}}"  required>
                        <label>Password</label>
                        <input type="text" class="form-control py-2 mb-3" name="password" value="{{auth()->user()->password}}"  required >
                    
                        <label>User Image</label><br>
                        <input type="file"  class="form-control py-2 mb-3" name="User_Image" required>


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