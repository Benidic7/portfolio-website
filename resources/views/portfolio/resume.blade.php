@extends('layouts.portfolio')

@section('content')

  <section class="intro-single">
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
        <div class="col-lg-6" data-aos="fade-up" data-aos-duration="1000">
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

@endsection
