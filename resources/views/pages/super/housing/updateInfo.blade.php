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
                    <h2 class="card-title">Edit Info</h2>
                    
                    {{-- method="POST" --}}
                    <form class="form-group mx-sm-3 mb-2" action="{{ route('info.update',  $stud->id ) }}" method="POST" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf

                        <label>Total Dorms </label>
                        <input type="text" class="form-control py-2 mb-3" name="total_dorms" value="{{$stud->total_dorms}}"   placeholder="Enter Total Dorms" required>
                        
                        <label>Total Rooms </label>
                        <input type="text" class="form-control py-2 mb-3" name="total_rooms"  value="{{$stud->total_rooms}}"  placeholder="Enter Total Rooms" required>
                        
                        <label >Rooms Occupied</label>
                        <input type="text" class="form-control py-2 mb-3" name="rooms_occupied"  value="{{$stud->rooms_occupied}}" placeholder="Enter User Phone Number" required>
                        <label >Rooms Vacant</label>
                        <input type="text" class="form-control py-2 mb-3" name="rooms_vacant"  value="{{$stud->rooms_vacant}}" placeholder="Enter User Phone Number" required>
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