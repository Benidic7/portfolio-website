@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Show Portfolio</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-secondary float-right">
                            Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row justify-content-around my-lg-2">
                    <div class="form-group col-md-4">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control border-0 bg-transparent border-bottom border-info" value="{{ $portfolio->title }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control border-0 bg-transparent border-bottom border-info" value="{{ $portfolio->category }}" readonly>
                    </div>
                </div>
                <div class="row justify-content-around mb-lg-3">
                    <div class="form-group col-md-4">
                        <label>Client</label>
                        <input type="text" name="client" class="form-control border-0 bg-transparent border-bottom border-info" value="{{ $portfolio->client }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label>Project Date</label>
                        <div class="input-group date" id="reservationdate" data-target-input="nearest">
                            <input type="text" class="form-control datetimepicker-input border-0 bg-transparent border-bottom border-info" name="project_date" value="{{ $portfolio->project_date }}" data-target="#reservationdate" readonly>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mb-lg-2">
                    <div class="form-group col-md-10">
                        <label>Project Description</label>
                        <textarea name="project_description" class="form-control border-0 bg-transparent border-bottom border-info" cols="30" rows="5">{{ $portfolio->project_description }}</textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
