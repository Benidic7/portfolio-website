@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h4>Creating Information</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.home') }}" class="btn btn-secondary float-right">Cancel</a>
                </div>
            </div>
        </div>
        <form action="{{ route('home.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" placeholder="Enter Firstname" value="{{ old('first_name') }}" required>
                        @error('first_name')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" placeholder="Enter Lastname" value="{{ old('last_name') }}" required>
                        @error('last_name')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Position</label>
                        <input type="text" class="form-control" name="position" placeholder="Enter Position" value="{{ old('position') }}" required>
                        @error('position')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-2 justify-content-center">
                    <div class="form-group col-md-8">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name="description" placeholder="Enter Description" required>{{ old('description') }}</textarea>
                        @error('description')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-around">
                    <div class="form-group col-md-4">
                        <label>Upload CV</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="cv" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile" value="{{ old('cv') }}">Choose PDF file</label>
                        </div>
                        @error('cv')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Upload Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="propic" id="propic">
                            <label for="propic" class="custom-file-label" value="{{ old('propic') }}">Choose Image</label>
                        </div>
                        @error('propic')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="form-group col-md-3">
                        <label for="">Facebook Link</label>
                        <input type="text" class="form-control" name="facebook" placeholder="Enter Facebook Link" value="{{ old('facebook') }}" required>
                        @error('facebook')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Instagram Link</label>
                        <input type="text" class="form-control" name="instagram" placeholder="Enter Instagram Link" value="{{ old('instagram') }}" required>
                        @error('instagram')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">LinkedIn Link</label>
                        <input type="text" class="form-control" name="linkedin" placeholder="Enter LinkedIn Link" value="{{ old('linkedin') }}" required>
                        @error('linkedin')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-3">
                        <label for="">Github Link</label>
                        <input type="text" class="form-control" name="github" placeholder="Enter Github Link" value="{{ old('github') }}" required>
                        @error('github')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-success" value="Add Info">
            </div>
        </form>
    </div>

@endsection
