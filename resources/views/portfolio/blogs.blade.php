@extends('layouts.portfolio')

@section('content')

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
                    <div class="col-md-4 mb-5" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                        <div class="card card-blog">
                            <div class="card-img">
                            <a href="javascript:void(0)"><img src="{{ asset('storage/uploads/'.$blog->image) }}" alt="" class="img-b img-fluid"></a>
                            </div>
                            <div class="card-body">
                            <div class="card-category-box">
                                <div class="card-category">
                                <h6 class="category text-center">{{ $blog->category }}</h6>
                                </div>
                            </div>
                            <h3 class="card-titl"><a href="">{{ $blog->title }}</a></h3>
                            <p class="card-description" style="text-align: justify;">
                                {{ $blog->description }}
                            </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
