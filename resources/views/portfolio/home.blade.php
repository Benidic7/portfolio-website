@extends('layouts.portfolio')

@section('content')
    {{-- Home --}}
    <section id="home" class="section-services section-t8">
        <div class="container">
            <div class="text-center">
                <img src="{{ asset('assets/img/moon.png') }}" id="icon" class="toggle">
            </div>
            <div class="row p-5 mt-2">
                <div class="col-md-6 m-auto mt-4 py-3">
                    <h5>Hello</h5>
                    <h1><strong>I'm <span class="color-b">{{ $home->first_name }} </span>{{ $home->last_name }}</strong></h1>
                    <h2><strong class="color-b typed" data-typed-items="{{ $home->position }}"></strong></h2>
                    <p class="mt-3">{{ $home->description }}</p>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 mt-3">
                            <a href="{{ route('download.cv') }}" class="btn btn-outline-primary btn-block">
                                Download CV
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-0 text-center" data-aos="flip-right" data-aos-duration="1600" data-aos-delay="150">
                    <img src="{{ asset('assets/img/'.$home->propic) }}" class="home-image">
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-9 m-auto text-center">
                    <div class="socials-a">
                        <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ $home->facebook }}" class="btn btn-lg">
                            <i class="bi bi-facebook fs-4" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ $home->instagram }}" class="btn btn-lg">
                            <i class="bi bi-instagram fs-4" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ $home->linkedin }}" class="btn btn-lg">
                            <i class="bi bi-linkedin fs-4" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ $home->github }}" class="btn btn-lg">
                            <i class="bi bi-github fs-4" aria-hidden="true"></i>
                            </a>
                        </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- About --}}
    <section id="about" class="intro-single">
        <div class="container">
            <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="title-single-box" data-aos="zoom-in" data-aos-duration="1000">
                <h2 class="title-single">About <span class="color-b">Me</span></h2>
                </div>
            </div>
            </div>
        </div>
    </section>

    <section class="section-about">
        <div class="container">
            <div class="row">
                <div class="col-lg-4" data-aos="flip-left" data-aos-duration="1300" data-aos-delay="300">
                <img src="{{ asset('assets/img/'.$about->home->propic) }}" class="img-fluid" width="390px">
                </div>
                <div class="col-lg-8 pt-4 pt-lg-0 content">
                    <div data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                        <h3 class="mb-2">{{ $about->home->position }}</h3>
                    </div>
                <p class="fst-italic mb-4">
                    Navigating the digital landscape with Laravel, I specialize in crafting dynamic web solutions that not only meet but exceed expectations.
                </p>
                <div class="row">
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="600">
                    <ul>
                        <li class="mb-3"><i class="bi bi-chevron-right text-primary"></i> <strong>Birthday:</strong> <span>{{ $formattedDate }}</span></li>
                        <li class="mb-3"><i class="bi bi-chevron-right text-primary"></i> <strong>Website:</strong> <span>{{ $about->website }}</span></li>
                        <li class="mb-3"><i class="bi bi-chevron-right text-primary"></i> <strong>Phone:</strong> <span>{{ $about->contact->phone }}</span></li>
                        <li class="mb-3"><i class="bi bi-chevron-right text-primary"></i> <strong>City:</strong> <span>{{ $about->city }}</span></li>
                    </ul>
                    </div>
                    <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="900">
                    <ul>
                        <li class="mb-3"><i class="bi bi-chevron-right text-primary"></i> <strong>Age:</strong> <span>{{ $age }}</span></li>
                        <li class="mb-3"><i class="bi bi-chevron-right text-primary"></i> <strong>Degree:</strong> <span>{{ $about->degree }}</span></li>
                        <li class="mb-3"><i class="bi bi-chevron-right text-primary"></i> <strong>Email:</strong> <span>{{ $about->contact->email }}</span></li>
                        <li class="mb-4"><i class="bi bi-chevron-right text-primary"></i> <strong>Freelance:</strong> <span>{{ $about->freelance }}</span></li>
                    </ul>
                    </div>
                </div>
                <p>
                    I’m Benidic Espinosa a BSIT student in Southern Leyte State University - Tomas Oppus Campus. I am aiming to become a programmer someday, I’m a hardworking student that aims to improve my knowledge and skills in programming each day.
                </p>
                </div>
            </div>
        </div>
    </section>

    <section id="skills" class="skills section-bg mt-5">
        <div class="container">
            <div class="section-title">
                <h2>Skills</h2>
                <p>{{ $skills->first()->description }}</p>
            </div>
            <div class="row skills-content">
                <div class="col-lg-6">
                    @foreach ($skills as $skill)
                        @if ($loop->iteration % 3 == 1 && $loop->iteration != 1)
                            </div><div class="col-lg-6">
                        @endif
                        <div class="progress" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="800">
                            <span class="skill">{{ $skill->skills }} <i class="val">{{ $skill->percentage }}%</i></span>
                            <div class="progress-bar-wrap">
                                <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>


    {{-- Resume --}}
    <section id="resume" class="intro-single">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-lg-8">
              <div class="title-single-box">
                <h2 class="title-single">Resume</h2>
              </div>
            </div>
          </div>
        </div>
    </section>

    <section id="resume" class="resume">
        <div class="container">
          <div class="row">
            <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="250">
              <h3 class="resume-title">Summary</h3>
              <div class="resume-item pb-0">
                <h4>{{ $home->first_name. ' ' .$home->last_name }}</h4>
                <p><em>{{ $resume->summary }}</em></p>
                <ul>
                  <li>{{ $contact->address }}</li>
                  <li>{{ $contact->phone }}</li>
                  <li>{{ $contact->email }}</li>
                </ul>
              </div>

              <h3 class="resume-title">Education</h3>
              <h4>Bachelor of Science in Information Technology</h4>
              @foreach ($education as $item)
                <div class="resume-item">
                    <p><strong>{{ $item->level }}</strong></p>
                    <div class="ml-3" style="margin-left: 20px;">
                        <h4>{{ $item->school }}</h4>
                        <h5>{{ $item->year }}</h5>
                        <p><em>{{ $item->address }}</em></p>
                    </div>
                </div>
              @endforeach
            </div>
            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
              <h3 class="resume-title">Experiences</h3>
              @foreach ($experience as $item)
                <div class="resume-item">
                    <h4>{{ $item->experience }}</h4>
                    <h5>{{ $item->year }}</h5>
                    <p><em>{{ $item->address }}</em></p>
                    <ul>
                        @foreach (array_filter(explode('.', $item->description)) as $sentence)
                            <li>{{ $sentence }}.</li>
                        @endforeach
                    </ul>
                </div>
              @endforeach
            </div>
          </div>

        </div>
    </section>


    {{-- Blog --}}
    <section id="blog" class="intro-single">
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
                                <h3 class="card-title"><a href="" class="white">{{ $blog->title }}</a></h3>
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


    {{-- Contact --}}
    <section id="contact" class="intro-single">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-8">
                    <div class="title-single-box">
                        <h2 class="title-single">Contact <span class="color-b">Me</span></h2>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-5 section-md-t3"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">
                        <div class="icon-box section-b2">
                            <div class="icon-box-icon">
                                <span class="bi bi-envelope text-primary"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Say Hello</h4>
                                </div>
                                <div class="icon-box-content">
                                    <p class="mb-1">Email.
                                    <span class="color-a">{{ $contact->email }}</span>
                                    </p>
                                    <p class="mb-1">Phone.
                                    <span class="color-a">{{ $contact->phone }}</span>
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box section-b2">
                            <div class="icon-box-icon">
                                <span class="bi bi-geo-alt text-primary"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Find me in</h4>
                                </div>
                                <div class="icon-box-content">
                                    <p class="mb-1">
                                    {{ $contact->address }},
                                    <br> {{ $contact->zip_code }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="icon-box">
                            <div class="icon-box-icon">
                                <span class="bi bi-share text-primary"></span>
                            </div>
                            <div class="icon-box-content table-cell">
                                <div class="icon-box-title">
                                    <h4 class="icon-title">Social networks</h4>
                                </div>
                                <div class="icon-box-content">
                                    <div class="socials-footer">
                                        <ul class="list-inline">
                                            <li class="list-inline-item">
                                            <a href="{{ $contact->home->facebook }}" class="link-one mx-2 fs-5">
                                                <i class="bi bi-facebook" aria-hidden="true"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                            <a href="{{ $contact->home->instagram }}" class="link-one mx-2 fs-5">
                                                <i class="bi bi-instagram" aria-hidden="true"></i>
                                            </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="{{ $contact->home->linkedin }}" class="link-one mx-2 fs-5">
                                                    <i class="bi bi-linkedin" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="{{ $contact->home->github }}" class="link-one mx-2 fs-5">
                                                    <i class="bi bi-github" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7" data-aos="flip-up" data-aos-duration="1000" data-aos-delay="500">
                        @if (session()->has('success'))
                            <div class="alert alert-success alert-dismissible d-flex flex-column flex-sm-row justify-content-between align-items-center bg-gray-200 shadow rounded-md py-3 px-4 mb-3 mt-3">
                                <div class="d-flex align-items-center mb-3 mb-sm-0">
                                    <svg class="bi bi-check-circle-fill text-green-500 mr-2" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 0a8 8 0 0 1 8 8 8 8 0 0 1-8 8A8 8 0 0 1 0 8 8 8 0 0 1 8 0zm1.354 5.646a.5.5 0 0 0-.708 0L6.5 9.793 5.354 8.646a.5.5 0 1 0-.708.708l2 2a.5.5 0 0 0 .708 0l4-4a.5.5 0 0 0 0-.708z"/>
                                    </svg>
                                    <div class="text-sm font-medium">Success!</div>
                                </div>
                                <div class="text-sm text-gray-500 mr-3">{{ session('success') }}</div>
                                <button type="button" class="btn-close btn-close-sm" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        <form action="{{ route('contact.send') }}" method="post" autocomplete="off">
                            @csrf
                            <div class="row">
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                                        @error('name')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-6 mb-3">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 mb-3">
                                    <div class="form-group">
                                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                                        @error('subject')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                                        @error('message')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-12 text-center mt-4">
                                    <button type="submit" class="btn btn-a">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
