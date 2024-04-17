@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row d-flex justify-content-center mt-4">
            <div class="col-md-12 text-center">
                <h1 class="mb-4 font-weight-bold">404 - Page not found</h1>
                <a href="{{ route('admin') }}" class="btn btn-primary mb-3">Back to homepage</a><br>
                <img src="{{ asset('template/img/404.gif') }}" alt="">
            </div>
        </div>
    </div>

@endsection
