@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Contact Page Info</h3>
                    </div>
                    @if(empty($contact))
                        <div class="col-md-2">
                            <a href="{{ route('contact.create') }}" class="btn btn-primary float-right">Create Contact</a>
                        </div>
                    @endif
                </div>
            </div>
            @if($contact)
                <div class="card-body">
                    @if(session()->has('success'))
                        <div class="alert alert-success alert-dissmisable fade-show" role="alert">
                            {!! session('success') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif

                    <div class="row my-3 justify-content-around">
                        <div class="form-group col-md-4">
                            <label for="">Email:</label>
                            <input type="email" class="form-control bg-transparent border-0 border-bottom" name="email" value="{{ $contact->email }}" readonly>
                            @error('email')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Phone:</label>
                            <input type="number" class="form-control bg-transparent border-0 border-bottom" name="phone" value="{{ $contact->phone }}" readonly>
                            @error('phone')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>

                    <div class="row mb-3 justify-content-around">
                        <div class="form-group col-md-4">
                            <label for="">Address:</label>
                            <input type="text" class="form-control bg-transparent border-0 border-bottom" name="address" value="{{ $contact->address }}" readonly>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Zip Code:</label>
                            <input type="number" class="form-control bg-transparent border-0 border-bottom" name="zipcode" value="{{ $contact->zip_code }}" readonly>
                            @error('zipcode')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row justify-content-between">
                        <a href="{{ route('contact.edit', $contact->id) }}" class="btn btn-warning">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="" class="btn btn-danger delete-contact" data-id="{{ $contact->id }}">
                            <i class="fas fa-trash"></i> Delete
                        </a>
                    </div>
                </div>
            @endif
        </div>
    </div>

@endsection
