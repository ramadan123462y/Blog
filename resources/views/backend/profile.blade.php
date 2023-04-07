@extends('backend.master')

@section('breadcrumb')
    Profile
@endsection
@section('title')
Profile
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <!-- Column -->
        <div class="col-lg-4 col-xlg-3 col-md-12">
            <div class="white-box">
                <div class="user-bg"> <img width="100%" alt="user" src="{{ URL::asset('imges/image_user/'.Auth::user()->image) }}">
                    <div class="overlay-box">
                        <div class="user-content">
                            <a href="javascript:void(0)"><img src="{{ URL::asset('imges/image_user/'.Auth::user()->image) }}"
                                    class="thumb-lg img-circle" alt="img"></a>
                            <h4 class="text-white mt-2">{{ Auth::user()->name }}</h4>
                            <h5 class="text-white mt-2">{{ Auth::user()->email }}</h5>
                        </div>
                    </div>
                </div>
                <div class="user-btm-box mt-5 d-md-flex">
                    <div class="col-md-4 col-sm-4 text-center">
                        <h1>258</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <h1>125</h1>
                    </div>
                    <div class="col-md-4 col-sm-4 text-center">
                        <h1>556</h1>
                    </div>
                </div>
            </div>
        </div>
        <!-- Column -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-12">
            @if (Session::has('update_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('update_msg') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal form-material" method="post" action="{{ url('profile/newupdate',Auth::user()->id ) }}" >
                        <div class="form-group mb-4">
                            @csrf

                            <label class="col-md-12 p-0">Full Name</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" name="name" required value="{{ Auth::user()->name }}" placeholder="Johnathan Doe"
                                    class="form-control p-0 border-0"> </div>
                        </div>
                        <div class="form-group mb-4">
                            <label for="example-email" class="col-md-12 p-0">Email</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="email" name="email" required value="{{ Auth::user()->email }}" placeholder="johnathan@admin.com"
                                    class="form-control p-0 border-0" name="example-email"
                                    id="example-email">
                            </div>
                        </div>
                        <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Password</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="password" required name="password" value="{{ Auth::user()->password }}" class="form-control p-0 border-0">
                            </div>
                        </div>
                        {{-- <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Phone No</label>
                            <div class="col-md-12 border-bottom p-0">
                                <input type="text" placeholder="123 456 7890"
                                    class="form-control p-0 border-0">
                            </div>
                        </div> --}}
                        {{-- <div class="form-group mb-4">
                            <label class="col-md-12 p-0">Message</label>
                            <div class="col-md-12 border-bottom p-0">
                                <textarea rows="5" class="form-control p-0 border-0"></textarea>
                            </div>
                        </div> --}}
                        {{-- <div class="form-group mb-4">
                            <label class="col-sm-12">Select Country</label>

                            <div class="col-sm-12 border-bottom">
                                <select class="form-select shadow-none p-0 border-0 form-control-line">
                                    <option>London</option>
                                    <option>India</option>
                                    <option>Usa</option>
                                    <option>Canada</option>
                                    <option>Thailand</option>
                                </select>
                            </div>
                        </div> --}}
                        <div class="form-group mb-4">
                            <div class="col-sm-12">
                                <button type="submit" class="btn btn-success">Update Profile</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
    </div>

</div>
@endsection
