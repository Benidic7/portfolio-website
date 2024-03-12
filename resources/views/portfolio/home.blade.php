@extends('layouts.portfolio')

@section('content')
    <section class="section-services section-t8">
      <div class="container">
        <div class="row p-5 mt-3">
          <div class="col-md-6 m-auto py-3" style="padding-left: 120px;">
            <h5>--- Hello</h5>
            <h1><strong>I'm <span class="color-b">{{ $home->first_name }} </span>{{ $home->last_name }}</strong></h1>
            <h2 class="offset-1"><strong>a <span class="color-b"> {{ $home->position }} </span></strong></h2>
            <p class="mt-3">{{ $home->description }}</p>
            <div class="row">
              <div class="col-md-4 mt-3">
                <a href="{{ route('download.cv') }}" class="btn btn-outline-success">
                    Download CV
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-1"></div>
          <div class="col-md-5">
            <img src="{{ asset('images/'.$home->propic) }}" alt="" style="width: 300px; height: 300px; border-radius: 50%;">
          </div>
        </div>
        <div class="row">
          <div class="col-md-9 m-auto">
            <div class="socials-a">
              <ul class="list-inline">
                <li class="list-inline-item">
                <a href="{{ $home->facebook }}" class="btn color-a btn-lg">
                  <i class="bi bi-facebook" aria-hidden="true"></i>
                </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ $home->instagram }}" class="btn btn-lg">
                        <i class="bi bi-instagram" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                    <a href="{{ $home->linkedin }}" class="btn btn-lg">
                        <i class="bi bi-linkedin" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="list-inline-item">
                <a href="{{ $home->github }}" class="btn btn-lg">
                  <i class="bi bi-github" aria-hidden="true"></i>
                </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection
