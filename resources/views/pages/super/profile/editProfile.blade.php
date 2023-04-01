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
                    <h2 class="card-title">Edit Profile</h2>
                    </div>
                    {{-- method="POST" --}}
                    <form class="form-group mx-sm-3 mb-2" action="{{ route('profile.update', auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="input-group" style="gap:10px">
                        {{-- <label> Name</label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="name" value="{{ auth()->user()->name}}"   required>
                        {{-- <label> Job Title<//label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="job_title" value="{{auth()->user()->job_title}}"  required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Phone Number</label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="phone" value="{{auth()->user()->phone}}"  required>
                        {{-- <label>Email </label> --}}
                        <input type="email" class="form-control py-2 mb-3" name="email" value="{{auth()->user()->email}}"   required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Password</label> --}}
                        <input type="text" class="form-control py-2 mb-3" name="password" value="{{auth()->user()->password}}"  required >
                        {{-- <label>User Image</label><br> --}}
                        <input type="file"  class="form-control py-2 mb-3" name="User_Image" required>
                        </div>
                        <div class="row" style="justify-content:center">
                        <button type="submit" class="btn btn-primary btn-sm">Update</button>
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