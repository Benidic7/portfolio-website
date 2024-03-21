@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Creating About Info</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('about.index') }}" class="btn btn-secondary float-right">Cancel</a>
                    </div>
                </div>
            </div>
            <form action="{{ route('about.store') }}" method="post">
                <div class="card-body">
                    @csrf
                    <input type="hidden" name="hi" value="{{ $home->id }}">
                    <input type="hidden" name="ci" value="{{ $contact->id }}">
                    <div class="row mt-2 justify-content-around">
                        <div class="form-group col-md-4">
                            <label>Birthdate</label>
                            <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                <input type="text" class="form-control datetimepicker-input" name="birthdate" placeholder="MM/DD/YYYY" data-target="#reservationdate"  value="{{ old('birthdate')}}" required>
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
                            <input type="text" class="form-control" name="website" placeholder="Your Website Url" value="{{ old('website') }}" required>
                            @error('website')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-2 justify-content-around">
                        <div class="form-group col-md-4">
                            <label>City</label>
                            <input type="text" class="form-control" name="city" placeholder="Enter Your City" value="{{ old('city') }}" required>
                            @error('city')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>Degree</label>
                            <input type="text" class="form-control" name="degree" placeholder="Enter Your Degree" value="{{ old('degree') }}" required>
                            @error('degree')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-3 justify-content-center">
                        <div class="form-group col-md-4">
                            <label>Freelance</label><br>
                            <div class="icheck-primary d-inline mr-2">
                            <input type="radio" id="radioPrimary1" name="freelance" value="Available" {{ old('freelance') == 'Available' ? 'checked' : '' }}>
                            <label for="radioPrimary1">Available
                            </label>
                            </div>
                            <div class="icheck-primary d-inline">
                            <input type="radio" id="radioPrimary2" name="freelance" value="Unavailable" {{ old('freelance') == 'Unavailable' ? 'checked' : '' }}>
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
                    <input type="submit" class="btn bg-purple" value="Submit">
                </div>
            </form>
        </div>
    </div>

@endsection
