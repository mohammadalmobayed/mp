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
                    <h2 class="card-title">Edit Info</h2>
                    </div>
                    
                    {{-- method="POST" --}}
                    <form class="form-group mx-sm-3 mb-2" action="{{ route('info.update',  $stud->id ) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group" style="display:flex">
                        <label>Total Dorms </label>
                        <input type="text" class="form-control sm-2 mb-3" name="total_dorms" value="{{$stud->total_dorms}}"   placeholder="Enter Total Dorms" required style="margin: 0 10px">
                        <label>Total Rooms </label>
                        <input type="text" class="form-control py-2 mb-3" name="total_rooms"  value="{{$stud->total_rooms}}"  placeholder="Enter Total Rooms" required style="margin: 0 10px">
                        </div>
                        <div class="form-group" style="display:flex;">
                        <label >Rooms In Use</label>
                        <input type="text" class="form-control py-2 mb-3" name="rooms_occupied"  value="{{$stud->rooms_occupied}}" placeholder="Enter User Phone Number" required style="margin: 0 10px">
                        <label >Rooms Vacant</label>
                        <input type="text" class="form-control py-2 mb-3" name="rooms_vacant"  value="{{$stud->rooms_vacant}}" placeholder="Enter User Phone Number" required style="margin: 0 10px">
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