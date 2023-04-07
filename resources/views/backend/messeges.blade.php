@extends('backend.master')
@section('breadcrumb')
    Meseeges
@endsection
@section('title')
    Messeges
@endsection
@section('content')
<div class="container-fluid">

    <div class="row">

        <div class="col-md-12 col-lg-8 col-sm-12">
            @if (Session::has('deletcomment'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('deletcomment') }}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                @endif
            <div class="card white-box p-0">
                <div class="card-body">
                    <h3 class="box-title mb-0">Recent Comments
                        <button type="button"
                        data-bs-toggle="modal" data-bs-target="#exampleModal2" class="btn btn-outline-danger">DELET_all</button>
                    </h3>

                </div>
                {{-- for --}}
                <div class="comment-widgets">
                    <!-- Comment Row -->
@php
    $comments=App\Models\Comment::get();
@endphp
@foreach ($comments as $comment )


                    <div class="d-flex flex-row comment-row p-3 mt-0">
                        <div class="p-2"><img src="{{ URL::asset('assets\img\comment.jpg') }}" alt="user" width="50" class="rounded-circle"></div>
                        <div class="comment-text ps-2 ps-md-3 w-100">
                            <h5 class="font-medium">{{$comment->name  }}</h5>
                            <span class="mb-3 d-block">{{$comment->comment  }} </span>
                            <div class="comment-footer d-md-flex align-items-center">
                                 <span class="badge bg-primary rounded">Comment of Post: {{$comment->post->title  }}</span>

                                <div class="text-muted fs-2 ms-auto mt-2 mt-md-0">{{$comment->created_at }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{-- for --}}
            </div>
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <div class="card white-box p-0">
                @if (Session::has('deletmessage'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ Session::get('deletmessage') }}
                     <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                   </div>
                @endif
                <div class="card-heading">
                    <h3 class="box-title mb-0">Chat Listing <button type="button"
                        data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-outline-danger">DELET_all</button></h3>

                </div>
                <div class="card-body">
                    @php
                        $messages= DB::table('messages')->get();
                    @endphp
                    @foreach ($messages as $ms )
                    <ul class="chatonline">
                        <li>

                            <a href="javascript:void(0)" class="d-flex align-items-center"><img
                                    src="{{ URL::asset('assetbackend\th.jpg') }}" alt="" class="img-circle">
                                <div class="ms-2">
                                    <span class="text-dark">{{ $ms->name }}
                                        <span class="mb-3 d-block">{{ $ms->message }} </span>
                                </div>

                            </a>
                        </li>

                    </ul>
                    @endforeach


                                    </div>
                                </div>
                            </div>
                        <!-- Button trigger modal -->


                    <!-- Modal -->
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"> delete</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            هل انت متاكد من حذف جميع الرسائل
                            </div>
                            <div class="modal-footer">
                                <form action="{{ url('message/deletall') }}" method="post">
                                    @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">DELET</button>
                            </form>

                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                            <h1 class="modal-title fs-5" id="exampleModalLabel"> delete</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                            هل انت متاكد من حذف جميع الكومنتات
                            </div>
                            <div class="modal-footer">
                                <form action="{{ url('comment/destroy') }}" method="post">
                                    @csrf
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">DELET</button>
                            </form>

                            </div>
                        </div>
                        </div>
                    </div>
    </div>
</div>
@endsection
