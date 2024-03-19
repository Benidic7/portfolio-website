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

    <section class="news-grid grid">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                <div class="card card-blog">
                    <div class="card-img">
                    <a href="blog-single.html"><img src="assets/img/post-1.jpg" alt="" class="img-b img-fluid"></a>
                    </div>
                    <div class="card-body">
                    <div class="card-category-box">
                        <div class="card-category">
                        <h6 class="category">Travel</h6>
                        </div>
                    </div>
                    <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                    <p class="card-description">
                        Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                        a pellentesque nec,
                        egestas non nisi.
                    </p>
                    </div>
                    <div class="card-footer">
                    <div class="post-author">
                        <a href="#">
                        {{-- <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle"> --}}
                        <span class="author">Morgan Freeman</span>
                        </a>
                    </div>
                    <div class="post-date">
                        <span class="bi bi-clock"></span> 10 min
                    </div>
                    </div>
                </div>
                </div>
                <div class="col-md-4">
                <div class="card card-blog">
                    <div class="card-img">
                    <a href="blog-single.html"><img src="assets/img/post-2.jpg" alt="" class="img-fluid"></a>
                    </div>
                    <div class="card-body">
                    <div class="card-category-box">
                        <div class="card-category">
                        <h6 class="category">Web Design</h6>
                        </div>
                    </div>
                    <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                    <p class="card-description">
                        Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                        a pellentesque nec,
                        egestas non nisi.
                    </p>
                    </div>
                    <div class="card-footer">
                    <div class="post-author">
                        <a href="#">
                        {{-- <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle"> --}}
                        <span class="author">Morgan Freeman</span>
                        </a>
                    </div>
                    <div class="post-date">
                        <span class="bi bi-clock"></span> 10 min
                    </div>
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
                        <h6 class="category">Web Design</h6>
                        </div>
                    </div>
                    <h3 class="card-title"><a href="blog-single.html">See more ideas about Travel</a></h3>
                    <p class="card-description">
                        Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis
                        a pellentesque nec,
                        egestas non nisi.
                    </p>
                    </div>
                    <div class="card-footer">
                    <div class="post-author">
                        <a href="#">
                        {{-- <img src="assets/img/testimonial-2.jpg" alt="" class="avatar rounded-circle"> --}}
                        <span class="author">Morgan Freeman</span>
                        </a>
                    </div>
                    <div class="post-date">
                        <span class="bi bi-clock"></span> 10 min
                    </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </section>

    <section class="news-grid grid">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-1.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-2.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="blog-single.html" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-3.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-4.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-5.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="card-box-b card-shadow news-box">
                <div class="img-box-b">
                  <img src="assets/img/post-6.jpg" alt="" class="img-b img-fluid">
                </div>
                <div class="card-overlay">
                  <div class="card-header-b">
                    <div class="card-category-b">
                      <a href="#" class="category-b">Travel</a>
                    </div>
                    <div class="card-title-b">
                      <h2 class="title-2">
                        <a href="blog-single.html">Travel is comming
                          <br> new</a>
                      </h2>
                    </div>
                    <div class="card-date">
                      <span class="date-b">18 Sep. 2017</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </section>

  </main>

@endsection
