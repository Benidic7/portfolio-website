@extends('layouts.custom')

@section('content')
    <section id="portfolio-details" class="portfolio-details mt-5">
        <div class="container mt-lg-3">
            <a href="#" onclick="goBack()" class="btn btn-primary mt-1">Back</a>
            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="portfolio-details-slider swiper swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
                        <div class="swiper-wrapper mt-5 align-items-center">
                            @foreach($portfolioImages as $image)
                            <div class="swiper-slide">
                                <img src="{{ asset('storage/uploads/'.$image->image) }}" class="portfolio-img" alt="">
                            </div>
                            @endforeach
                        </div>
                        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-4">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>Title</strong>: {{ $portfolio->title }}</li>
                            <li><strong>Category</strong>: {{ $portfolio->category }}</li>
                            <li><strong>Client</strong>: {{ $portfolio->client }}</li>
                            <li><strong>Project date</strong>: {{ Carbon\Carbon::parse($portfolio->project_date)->format('F d, Y') }}</li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>Project Description</h2>
                        <p style="text-align: justify;">{{ $portfolio->project_description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection





