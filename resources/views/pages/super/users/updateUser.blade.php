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
                    <h2 class="card-title">Update user</h2>
                    </div>
                    <form class="form-group mx-sm-3 mb-2" action="{{ route('user.update', ['id' => $user->id]) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="input-group" style="gap:10px">
                        {{-- <label> Name</label> --}}
                        <input type="text" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " name="name" value="{{$user->name}}"  placeholder="Enter User Name" required>
                        {{-- <label>Job Id </label> --}}
                        <input type="text" class="form-control py-2 mb-3"style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; "  name="job_id" value="{{$user->job_id}}"  placeholder="Enter Job Id" required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Job Title </label> --}}
                        <input type="text" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " name="job_title" value=" {{$user->job_title}}"  placeholder="Enter Job Title" required>
                        {{-- <label>Phone Number</label> --}}
                        <input type="text" class="form-control py-2 mb-3"style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " name="phone" value=" {{$user->phone}}" placeholder="Enter User Phone Number" required>
                    </div>
                    <div class="input-group" style="gap:10px">
                        {{-- <label>Email</label> --}}
                        <input type="email" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " name="email" value=" {{$user->email}}" placeholder="Enter User E-mail" required>
                        {{-- <label>Password</label> --}}
                        <input type="password" class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " name="password" value="" placeholder="Enter User Password" required>
                        </div>
                        <div class="input-group" style="gap:10px">
                        {{-- <label>Status</label> --}}
                        <select style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " name="role" id="role"   class="form-control py-2 mb-3">
                            <option value="0" disabled>USER TYPE</option>
                            <option value="0">User</option>
                            <option value="2">admin</option>
                        </select>
                        {{-- <label>User Image</label><br> --}}
                        <input type="file"  class="form-control py-2 mb-3" style="height:3.5rem !important; margin-top:20px; border: 2px solid gray; " name="User_Image" required>
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