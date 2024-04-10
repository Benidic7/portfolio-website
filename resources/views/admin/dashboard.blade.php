@extends('layouts.admin')

@section('content')

    <div class="content-header">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <h2>{{ __('Dashboard') }}</h2>

                <div class="row">
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-primary" id="homePage">
                            <div class="inner">
                                <h3>{{ ($home != null) ? '100' : '0' }}<sup style="font-size: 20px">%</sup></h3>

                                <p>Home Page</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-home"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success" id="aboutPage">
                            <div class="inner">
                                <h3>{{ ($about != null) ? '100' : '0' }}<sup style="font-size: 20px">%</sup></h3>

                                <p>About Page</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-address-card" style="font-size: 75px;"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning" id="contactPage">
                            <div class="inner">
                                <h3>{{ ($contact != null) ? '100' : '0' }}<sup style="font-size: 20px">%</sup></h3>

                                <p>Contact Page</p>
                            </div>
                            <div class="icon">
                                <i class="fas fa-phone"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-purple" id="resumePage">
                        <div class="inner">
                            <h3>{{ ($resume != null) ? '100' : '0' }}<sup style="font-size: 20px">%</sup></h3>

                            <p>Resume Page</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-file-alt"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
