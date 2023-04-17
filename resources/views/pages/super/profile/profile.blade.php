@extends('pages.layouts.master')

@section('user')
mohammad
@endsection

@section('css')
<link rel="stylesheet" href="{{asset('assets/css/profile.css')}} ">

@endsection
    @section('content')


      
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row" >
            <div  class="moh" class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
              <div class="col-xl-6 col-md-12">
                @foreach($data as $value)
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">

                                <div class="m-b-25">
                                    <img src={{asset("storage/image/".Auth::user()->User_Image)}}
                                    class="img-radius" alt="User-Profile-Image">
                                    <br><br><br>
                                    {{-- <input type="file" accept="image" class="img-input"> --}}
                                    </div>
                                {{-- <h6 class="f-w-600">Mohammad</h6>
                                <p>ID Job</p> --}}
                                </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h5  class="m-b-20 p-b-5 b-b-default f-w-600">Information</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Full Name</p>
                                        <h6 class="text-muted f-w-400">{{$value['name']}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Job Position</p>
                                        <h6 class="text-muted f-w-400">{{$value['job_title']}}</h6>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">{{$value['email']}}</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone Number</p>
                                        <h6 class="text-muted f-w-400">{{$value['phone']}}</h6>
                                    </div>
                                </div>
                                <div class="row" style="justify-content: center; margin-top: 40px">
                                    <a class="btn btn-primary btn-sm" href="{{route('profile.edit')}}">Edit profile</a>
                                    </div>
                                </div>
                               
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            </div>
                </div>
            </div>

  
@endsection