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
          <li>Blog</li>
        </ol>
        <h2>Blog</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">

      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

@php
    // $posts=DB::table('posts')->get();
   $posts= App\Models\Post::get();
@endphp
@foreach ($posts as $post )
<article class="entry">

    <div class="entry-img">

      <img width="1000" src="{{ URL::asset('imges/postes/'.$post->image) }}" alt="" class="img-fluid">
    </div>

    <h2 class="entry-title">
      <a href="blog-single.html">{{ $post->title }}</a>
    </h2>

    <div class="entry-meta">
      <ul>
        <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a > {{ $post->user->name }} </a></li>
        <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a ><time datetime="2020-01-01">{{ $post->created_at }}</time></a></li>
        <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="{{ url('viewpost',$post->id) }}">{{ $post->comments->count() }} Comments</a></li>
      </ul>
    </div>

    <div class="entry-content">
      <p>
        {{ $post->body }}
      </p>
      <div class="read-more">
        <a href="{{ url('viewpost',$post->id) }}">Read More</a>
      </div>
    </div>

  </article><!-- End blog entry -->
@endforeach



            <div class="blog-pagination">
              <ul class="justify-content-center">
                <li><a href="#">1</a></li>
                <li class="active"><a href="#">2</a></li>
                <li><a href="#">3</a></li>
              </ul>
            </div>

          </div><!-- End blog entries list -->


        </div>

      </div>
    </section><!-- End Blog Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('frontend.layouts.footer')
</body>

</html>
