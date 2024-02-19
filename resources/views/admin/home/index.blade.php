@extends('layouts.admin')

@section('content')

    <div class="container-fluid p-3">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Home Page</h3>
                    </div>
                    <div class="col-md-2">
                        @if($home->count() < 1)
                            <a href="{{ route('home.create')}}" class="btn btn-primary float-right">Create Info</a>
                        @endif
                    </div>
                </div>
            </div>
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success alert-dissmisable fade-show" role="alert">
                        {{ session('success')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card-body">
                    <div class="row">
                        <div class="form-group col-md-4">
                            <label>First Name</label>
                            <input type="text" class="form-control" name="first_name" value="{{ $home->first_name }}" readonly>
                            @error('first_name')
                                <span class=text-danger>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>Last Name</label>
                            <input type="text" class="form-control" name="last_name" value="{{ $home->last_name }}" readonly>
                            @error('last_name')
                                <span class=text-danger>{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>Position</label>
                            <input type="text" class="form-control" name="position" value="{{ $home->position }}" readonly>
                            @error('position')
                                <span class=text-danger>{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group col-md-10 text-center mt-3">
                            <label>Description</label>
                            <textarea class="form-control" rows="4" name="description" readonly>{{ $home->description }}</textarea>
                            @error('description')
                                <span class=text-danger>{{ $message }}</span>
                            @enderror
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
        </div>
    </div>

@endsection
