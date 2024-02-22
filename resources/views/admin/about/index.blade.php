@extends('layouts.admin')

@section('content')

    <div class="card col-md-12 mt-2">
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
        <div class="card-body">
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">Birthdate</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $formattedDate }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">Age</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $age }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">Website</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $about->website }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">Degree</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $about->degree }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">Phone</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $about->contact->phone }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">Email</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $about->contact->email }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">City</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $about->city }}" readonly>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group row">
                        <div class="col-md-3 col-form-label">Freelance</div>
                        <div class="col-md-8">
                            <input type="text" class="form-control" value="{{ $about->freelance }}" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
            </div>
        </div>
    </div>

@endsection
