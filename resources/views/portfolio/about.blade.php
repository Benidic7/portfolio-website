@extends('layouts.portfolio')

@section('content')


    <!-- ======= Intro Single ======= -->
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h1 class="title-single">About Me</h1>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Intro Single-->

    <!-- ======= About Section ======= -->
    <section class="section-about">
      <div class="container">
        <div class="row">
            <div class="col-lg-4" data-aos="fade-right">
              <img src="{{asset('assets/img/Picture1.png')}}" class="img-fluid" width="390px">
            </div>
            <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
              <h3 class="mb-2">Web Developer</h3>
              <p class="fst-italic mb-4">
                Navigating the digital landscape with Laravel, I specialize in crafting dynamic web solutions that not only meet but exceed expectations.
              </p>
              <div class="row">
                <div class="col-lg-6">
                  <ul>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Birthday:</strong> <span>September 02, 2002</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Website:</strong> <span>www.benidicespinosa.com</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Phone:</strong> <span>09982634101</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>City:</strong> <span>Southern Leyte, Philippines</span></li>
                  </ul>
                </div>
                <div class="col-lg-6">
                  <ul>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>21</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>BSIT</span></li>
                    <li class="mb-3"><i class="bi bi-chevron-right"></i> <strong>Email:</strong> <span>benidicespinosa30@gmail.com</span></li>
                    <li class="mb-4"><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
                  </ul>
                </div>
              </div>
              <p>
                I’m Benidic Espinosa a BSIT student in Southern Leyte State University - Tomas Oppus Campus. I am hoping to become a programmer someday, I’m a hardworking student that aims to improve my knowledge and skills in programming each day.
              </p>
            </div>
          </div>
      </div>
    </section>

    <section id="skills" class="skills section-bg mt-5">
        <div class="container">

          <div class="section-title">
            <h2>Skills</h2>
            <p>I continuously expand my skills and thrive when presented with complex development challenges. My passion is crafting robust, scalable, and visually appealing web applications that provide seamless user experiences. I'm excited to join a team where I can collaborate and continue growing as a developer while using my full-stack abilities to bring innovative ideas to life.</p>
          </div>

          <div class="row skills-content">

            <div class="col-lg-6" data-aos="fade-up">

              <div class="progress">
                <span class="skill">HTML <i class="val">80%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CSS <i class="val">65%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">JavaScript <i class="val">50%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar " role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

            <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">

              <div class="progress">
                <span class="skill">PHP <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">Laravel <i class="val">50%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

              <div class="progress">
                <span class="skill">CodeIgniter <i class="val">70%</i></span>
                <div class="progress-bar-wrap">
                  <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
              </div>

            </div>

          </div>

        </div>
    </section><!-- End Skills Section -->

@endsection
