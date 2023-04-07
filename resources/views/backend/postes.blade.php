@extends('backend.master')
@section('breadcrumb')
    Postes
@endsection
@section('title')
Postes
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">
        <div class="col-sm-12">
            <div class="white-box">
                @if (Session::has('msg3'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('msg3') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                @if (Session::has('msg'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('msg') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif

                <h3 class="box-title"> Postes</h3>

                <div class="table-responsive">
                    <button type="button" class="modal-effect btn btn-outline-primary btn-block"
                    data-effect="effect-rotate-bottom" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                       اضافه منشور
                     </button>
                    <table class="table text-nowrap">
                        <thead>

                            @php
                            //    $posts= Auth::user()->posts();
                               $posts=  Auth::user()->posts()->get();
                               $id=0;
                            @endphp
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Title</th>
                                <th class="border-top-0">Body Name</th>
                                <th class="border-top-0">Image_post</th>
                                <th class="border-top-0">DELET</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($posts as $post )

                            <tr>
                                <td>{{ ++$id }}</td>
                                <td>{{$post->title  }}</td>
                                <td>{{$post->body  }}</td>
                                <td><img width="40px" src="{{ URL::asset('imges/postes/'.$post->image) }}" alt="" srcset=""></td>
                                <td><a type="submit" href="{{ url('post/destroy',$post->id) }}" class="btn btn-outline-danger">Delete</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
             <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel"> Add Post</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="{{ url('post/store') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <!-- Name input -->
                <label for="inputPassword5" class="form-label">Title</label>
                <input type="text" required id="inputPassword5" name="title" class="form-control" aria-labelledby="passwordHelpBlock">


                  <label for="inputPassword5" class="form-label">Body</label>
                  <textarea name="body" required id="" cols="30" rows="10" class="form-control" aria-labelledby="passwordHelpBlock" ></textarea>


                 <div class="input-group">
                    <label  class="form-label">IMG::</label>
                  <br>
                    <input type="file" required value="" name="image" class="form-control" id="inputGroupFile04" aria-describedby="inputGroupFileAddon04" aria-label="Upload">

                  </div>
                 <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">ADD Post</button>
                  </div>
            </form>
        </div>


      </div>
    </div>
  </div>
        {{-- model --}}
        </div>
    </div>

</div>

@endsection
