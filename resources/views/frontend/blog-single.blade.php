<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.style')

<body>

  <!-- ======= Header ======= -->
  @include('frontend.layouts.navbar')
  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{ url('/') }}">Home</a></li>
          <li><a href="{{ url('blog') }}">Blog</a></li>
          <li>Blog Single</li>
        </ol>
        <h2>Blog Single</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Single Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
                {{-- $post --}}
                <img src="{{ URL::asset("imges/postes/".$post->image) }}" alt="" class="img-fluid">
              </div>

              <h2 class="entry-title">
                <a href="blog-single.html">{{  $post->title }}</a>
              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html">{{  $post->user->name }}</a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><time datetime="2020-01-01">{{  $post->created_at }}</time></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">{{  $post->comments->count() }} Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">

                <blockquote>
                  <p>
                    {{  $post->body }}
                  </p>
                </blockquote>




              </div>



            </article><!-- End blog entry -->


            <div class="blog-comments">

              <h4 class="comments-count">{{  $post->comments->count() }} Comments</h4>
{{-- --------------------------- --}}
@foreach ($post->comments as $comment )

<div id="comment-1" class="comment">
    <div class="d-flex">
                  <div class="comment-img"><img src="{{ URL::asset('assets\img\comment.jpg') }}" alt=""></div>
                  <div>
                    <h5><a >{{ $comment->name }}</a> </h5>
                    <time datetime="2020-01-01">{{ $comment->created_at }}</time>
                    <p>
                    {{ $comment->comment }}
                    </p>
                  </div>
                </div>
              </div>

              @endforeach
{{-- ----------------------------- --}}
              <!-- End comment #1 -->






              <div class="reply-form">
            @if (Session::has('msg_addcomment'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ Session::get('msg_addcomment') }}
                 <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
               </div>
            @endif

                <h4>ADD comments</h4>
                <p>write comment please </p>
                <form action="{{ url('comment/store',$post->id) }}" method="POST" >
                    @csrf
                  <div class="row">
                    <div class="col-md-6 form-group">
                      <input name="name" type="text" class="form-control" required placeholder="Your Name*">
                    </div>

                  </div>

                  <div class="row">
                    <div class="col form-group">
                      <textarea name="comment" class="form-control" required placeholder="Your Comment*"></textarea>
                    </div>
                  </div>
                  <button type="submit" class="btn btn-primary">Post Comment</button>

                </form>

              </div>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->


        </div>

      </div>
    </section><!-- End Blog Single Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->


</body>
@include('frontend.layouts.footer')
</html>
