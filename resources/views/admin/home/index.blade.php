@extends('layouts.admin')

@section('content')

    <div class="card col-md-12 mt-3">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h3>Home Page Info</h3>
                </div>
                <div class="col-md-2">
                    @if($home == null)
                        <a href="{{ route('home.create')}}" class="btn btn-primary float-right">Create Info</a>
                    @endif
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(session('success'))
                <div class="alert alert-success alert-dissmisable fade-show" role="alert">
                    {!! session('success') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="row mt-3 justify-content-between">
                <div class="form-group col-md-3">
                    <label>First Name</label>
                    <input type="text" class="form-control" name="first_name" value="{{ $home->first_name }}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label>Last Name</label>
                    <input type="text" class="form-control" name="last_name" value="{{ $home->last_name }}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label>Position</label>
                    <input type="text" class="form-control" name="position" value="{{ $home->position }}" readonly>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="form-group col-md-10 text-center mt-3">
                    <label>Description</label>
                    <textarea class="form-control" rows="4" name="description" readonly>{{ $home->description }}</textarea>
                </div>
            </div>
            <div class="row mt-3">
                <div class="form-group col-md-3">
                    <label>Facebook Link</label>
                    <input type="text" class="form-control" name="facebook" value="{{ $home->facebook }}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label>Instagram Link</label>
                    <input type="text" class="form-control" name="instagram" value="{{ $home->instagram }}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label>LinkedIn Link</label>
                    <input type="text" class="form-control" name="linkedin" value="{{ $home->linkedin }}" readonly>
                </div>
                <div class="form-group col-md-3">
                    <label>Github Link</label>
                    <input type="text" class="form-control" name="github" value="{{ $home->github }}" readonly>
                </div>
            </div>
            @if($home)
                <div class="row justify-content-between mt-5">
                    <a href="{{ route('home.edit', $home->id) }}" class="btn btn-warning">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="" class="btn btn-danger delete-btn" data-id="{{ $home->id }}">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                </div>
            @endif
        </div>
    </div>

@endsection
