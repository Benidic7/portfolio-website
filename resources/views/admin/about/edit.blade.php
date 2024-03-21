@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Editing About Info</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('about.index') }}" class="btn btn-secondary float-right">Cancel</a>
                    </div>
                </div>
            </div>
            <form action="{{ route('about.update', $about->id) }}" method="post">
                <div class="card-body">
                    @csrf
                    @method('put')
                    <input type="hidden" name="hi" value="{{ $home->id }}">
                    <input type="hidden" name="ci" value="{{ $contact->id }}">
                    <div class="row mt-2 justify-content-around">
                        <div class="form-group col-md-4">
                            <label>Birthdate</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="birthdate" value="{{ $about->birth_date }}" data-target="#reservationdate" required>
                                <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                    <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                </div>
                                @error('birthdate')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label>Website</label>
                            <input type="text" class="form-control" name="website" value="{{ $about->website }}" required>
                            @error('website')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2 justify-content-around">
                        <div class="form-group col-md-4">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" value="{{ $about->city }}" required>
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>Degree</label>
                            <input type="text" class="form-control" name="degree" value="{{ $about->degree }}" required>
                            @error('degree')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="form-group col-md-4">
                            <label>Freelance</label><br>
                            <div class="icheck-primary d-inline mr-2">
                            <input type="radio" id="radioPrimary1" name="freelance" value="Available" {{ $about->freelance == 'Available' ? 'checked' : '' }}>
                            <label for="radioPrimary1">Available
                            </label>
                            </div>
                            <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="freelance" value="Unavailable" {{ $about->freelance == 'Unavailable' ? 'checked' : '' }}>
                            <label for="radioPrimary2">Unavailable
                            </label>
                            </div>
                            @error('freelance')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <input type="submit" class="btn bg-purple" value="Update">
                </div>
            </form>
        </div>
    </div>

@endsection
