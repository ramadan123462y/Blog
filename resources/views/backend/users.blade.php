@extends('backend.master')
@section('breadcrumb')
    Users
@endsection
@section('title')
    Users
@endsection
@section('content')
<div class="container-fluid">




    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
@if (Session::has('susu'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ Session::get('susu') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif
@if (Session::has('dodo'))
<div class="alert alert-dark alert-dismissible fade show" role="alert">
    {{ Session::get('dodo') }}
     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
   </div>
@endif
                <button type="button" class="modal-effect btn btn-outline-primary btn-block"
                 data-effect="effect-rotate-bottom" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    اضافه مستخدم
                  </button>

                {{-- <p class="text-muted">Add class <code>.table</code></p> --}}
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        @php
                            $users=DB::table('users')->get();
                            $id=0;
                        @endphp
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">First Name</th>
                                <th class="border-top-0">email</th>
                                <th class="border-top-0">img</th>
                                <th class="border-top-0">Delete</th>

                            </tr>
                        </thead>
                        <tbody>
@foreach ($users as $use )

<tr>
    <td>{{ ++$id }}</td>
    <td>{{ $use->name }}</td>
    <td>{{ $use->email }}</td>
    <td><img width="40px" src="{{ URL::asset('imges/image_user/'.$use->image) }}" ></td>
    <td><a type="submit"  href="{{ url('delete_user',$use->id) }}" class="btn btn-outline-danger">Delete</a></td>

</tr>
@endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        {{-- model --}}
       <!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"> Add User</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('user/store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <!-- Name input -->
                <label for="inputPassword5" class="form-label">Name</label>
                <input type="text" required id="inputPassword5" name="name" class="form-control" aria-labelledby="passwordHelpBlock">

                                    <!-- mail input -->
                  <label for="inputPassword5" class="form-label">email</label>
                 <input type="email"  required id="inputPassword5" name="email" class="form-control" aria-labelledby="passwordHelpBlock">

                  <label for="inputPassword5" class="form-label">Password</label>
                 <input type="password" required id="inputPassword5" name="password" class="form-control" aria-labelledby="passwordHelpBlock">
                 <div class="input-group">
                    <label  class="form-label">IMG::</label>
                  <br>
                    <input type="file" required name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                  </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD User</button>
                  </div>
            </form>
        </div>


      </div>
    </div>
  </div>
        {{-- model --}}
    </div>

</div>

@endsection
