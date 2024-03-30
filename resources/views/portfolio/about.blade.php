@extends('layouts.portfolio')

@section('content')


    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box" data-aos="zoom-in" data-aos-duration="1000">
              <h2 class="title-single">About <span class="color-b">Me</span></h2>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
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
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>{{ $formattedDate }}</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>{{ $about->website }}</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>{{ $about->contact->phone }}</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>{{ $about->city }}</span></li>
                  </ul>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="800" data-aos-delay="900">
                  <ul>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>{{ $age }}</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>{{ $about->degree }}</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>{{ $about->contact->email }}</span></li>
                    <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>{{ $about->freelance }}</span></li>
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

            <div class="col-lg-6" data-aos="fade-up">
                @foreach ($skills as $skill)
                    @if ($loop->iteration % 3 == 1 && $loop->iteration != 1)
                        </div><div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                    @endif
                    <div class="progress">
                        <span class="skill">{{ $skill->skills }} <i class="val">{{ $skill->percentage }}%</i></span>
                        <div class="progress-bar-wrap">
                            <div class="progress-bar" role="progressbar" aria-valuenow="{{ $skill->percentage }}" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                @endforeach
            </div>

          </div>

        </div>
    </section><!-- End Skills Section -->

@endsection
