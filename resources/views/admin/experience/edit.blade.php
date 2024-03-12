@extends('layouts.admin')

@section('content')

    <div class="card col-md-10 offset-1">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
                    <h3>Editing Experience</h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('resume.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('experience.update', $experience->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row mt-3">
                    <div class="form-group col-md-4 offset-1">
                        <label>Experience</label>
                        <input type="text" name="experience" class="form-control" value="{{ $experience->experience }}" required>
                        @error('experience')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 offset-2">
                        <label>Year</label>
                        <input type="text" name="year" class="form-control" value="{{ $experience->year }}" required>
                        @error('year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-5 offset-4">
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $experience->address }}" required>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-md-8 offset-2">
                        <label>Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="8">{{ $experience->description }}</textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="mt-4">
                    <button type="submit" class="btn bg-purple">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
