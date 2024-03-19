@extends('layouts.admin')

@section('content')

    <div class="card col-md-12 mt-2 px-0">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h3>About Page Info</h3>
                </div>
                @if($about == null)
                    <div class="col-md-2">
                        <a href="{{ route('about.create') }}" class="btn btn-primary float-right">Create About</a>
                    </div>
                @endif
            </div>
        </div>
        @if($about)
            <div class="card-body">
                @if(session()->has('success'))
                    <div class="alert alert-success alert-dissmisable" role="alert">
                        {!! session('success') !!}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Birthdate</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $formattedDate }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Age</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $age }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Website</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $about->website }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Degree</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $about->degree }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Phone</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $about->contact->phone }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $about->contact->email }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">City</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $about->city }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group row">
                            <label class="col-md-3 col-form-label">Freelance</label>
                            <div class="col-md-8">
                                <input type="text" class="form-control bg-transparent border-0 border-bottom" value="{{ $about->freelance }}" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer mt-3">
                <div class="row justify-content-between">
                    <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <a href="" class="btn btn-danger about-delete" data-id="{{ $about->id }}">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                </div>
            </div>
        @endif
    </div>

@endsection
