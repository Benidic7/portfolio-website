@extends('layouts.portfolio')

@section('content')

    <section class="section-services section-t8">
        <div class="container">
            <div class="row p-5 mt-1">
                <div class="col-md-6 m-auto mt-4 py-3 text-center">
                    <h5>Hello</h5>
                    <h1><strong>I'm <span class="color-b">{{ $home->first_name }} </span>{{ $home->last_name }}</strong></h1>
                    <h2><strong class="color-b">{{ $home->position }}</strong></h2>
                    <p class="mt-3">{{ $home->description }}</p>
                    <div class="row">
                        <div class="col-md-6 offset-md-3 mt-3">
                            <a href="{{ route('download.cv') }}" class="btn btn-outline-success btn-block">
                                Download CV
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mt-0 text-center">
                    <img src="{{ asset('assets/img/'.$home->propic) }}" class="home-image">
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-md-9 m-auto text-center">
                    <div class="socials-a">
                        <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="{{ $home->facebook }}" class="btn btn-lg">
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
