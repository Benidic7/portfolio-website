@extends('layouts.portfolio')

@section('content')

<main id="main">

    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">Blog</h1>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="news-grid grid mb-5">
        <div class="container">
            <div class="row">
                @foreach ($blogs as $blog)
                    <div class="col-md-4 mb-5">
                        <div class="card card-blog">
                            <div class="card-img">
                            <a href=""><img src="{{ asset('storage/uploads/'.$blog->image) }}" alt="" class="img-b img-fluid"></a>
                            </div>
                            <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                <h6 class="category text-center">{{ $blog->category }}</h6>
                                </div>
                            </div>
                            <h3 class="card-titl"><a href="blog-single.html">{{ $blog->title }}</a></h3>
                            <p class="card-description">
                                {{ $blog->description }}
                            </p>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                        <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                            <h6 class="category text-center">Web Development Project</h6>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="blog-single.html">Snack House</a></h3>
                        <p class="card-description">
                            Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                            a pellentesque nec,
                            egestas non nisi.
                        </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-blog">
                        <div class="card-img">
                        <a href="blog-single.html"><img src="assets/img/post-3.jpg" alt="" class="img-fluid"></a>
                        </div>
                        <div class="card-body">
                        <div class="card-category-box">
                            <div class="card-category">
                            <h6 class="category text-center">Internship Project</h6>
                            </div>
                        </div>
                        <h3 class="card-title"><a href="blog-single.html">Canigao Booking System</a></h3>
                        <p class="card-description">
                            Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                            a pellentesque nec,
                            egestas non nisi.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

  </main>

@endsection
