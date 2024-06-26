@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-11">
                        <h3>Creating Experience</h3>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('resume.index') }}" class="btn btn-secondary float-right">Cancel</a>
                    </div>
                </div>
            </div>
            <form action="{{ route('experience.store') }}" method="post">
                <div class="card-body">
                    @csrf
                    <div class="row mt-3 justify-content-around">
                        <div class="form-group col-md-4">
                            <label>Experience</label>
                            <input type="text" name="experience" class="form-control" placeholder="Enter your Experience" value="{{ old('experience') }}" required>
                            @error('experience')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>Year</label>
                            <input type="text" name="year" class="form-control" placeholder="e.g. 2023 - 2024" value="{{ old('year') }}" required>
                            @error('year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-2 justify-content-center">
                        <div class="col-md-5">
                            <label>Address</label>
                            <input type="text" name="address" class="form-control" placeholder="Enter the Address" value="{{ old('address') }}" required>
                            @error('address')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mt-3 justify-content-center">
                        <div class="col-md-8">
                            <label>Description</label>
                            <textarea name="description" class="form-control" cols="30" rows="8" placeholder="Enter Description">{{ old('description') }}</textarea>
                            @error('description')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn bg-purple">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
