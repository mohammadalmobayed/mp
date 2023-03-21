@extends('pages.layouts.master')



@section('css')
<link rel="stylesheet" href="{{asset('assets/css/profile.css')}} ">

@endsection
    @section('content')


      
      
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div  class="moh" class="page-content page-container" id="page-content">
                <div class="padding">
                    <div class="row container d-flex justify-content-center">
              <div class="col-xl-6 col-md-12">
                
                <div class="card user-card-full">
                    <div class="row m-l-0 m-r-0">
                        <div class="col-sm-4 bg-c-lite-green user-profile">
                            <div class="card-block text-center text-white">
                                <div class="m-b-25">
                                    <img src="assets/image/profile icon.png" class="img-radius" alt="User-Profile-Image">
                                    <input type="file" accept="image" class="img-input">
                                    </div>
                                <h6 class="f-w-600">Mohammad</h6>
                                <p>ID Job</p>
                                </div>
                        </div>
                        <div class="col-sm-8">
                            <div class="card-block">
                                <h5  class="m-b-20 p-b-5 b-b-default f-w-600">Information</h5>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Full Name</p>
                                        <h6 class="text-muted f-w-400">Mohammad Al-Mobayed</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Job Position</p>
                                        <h6 class="text-muted f-w-400">Dr</h6>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Email</p>
                                        <h6 class="text-muted f-w-400">mohammadalmobayed4@gmail.com</h6>
                                    </div>
                                    <div class="col-sm-6">
                                        <p class="m-b-10 f-w-600">Phone Number</p>
                                        <h6 class="text-muted f-w-400">077xxxxxxx</h6>
                                    </div>
                                </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
                </div>
            </div>

  
@endsection