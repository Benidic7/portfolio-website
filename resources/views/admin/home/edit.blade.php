@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h4>Editing Information</h4>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('admin.home') }}" class="btn btn-info float-right">Cancel</a>
                </div>
            </div>
        </div>
        <form action="{{ route('home.update', $home->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="card-body">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" value="{{ $home->first_name }}" required>
                        @error('first_name')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="{{ $home->last_name }}" required>
                        @error('last_name')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Position</label>
                        <input type="text" class="form-control" name="position" value="{{ $home->position }}" required>
                        @error('position')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="form-group col-md-10">
                        <label>Description</label>
                        <textarea class="form-control" rows="4" name="description" required>{{ $home->description }}</textarea>
                        @error('description')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row justify-content-center m-3">
                    {{-- <div class="form-group col-md-4">
                        <label>Current File:</label>
                        <input type="text" class="form-control" value="{{ $home->cv }}" readonly>
                    </div> --}}
                    <div class="form-group col-md-4">
                        <label>Upload CV</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="cv" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">{{ $home->cv }}</label>
                        </div>
                        @error('cv')
                            <span class=text-danger>{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 offset-2">
                        <label>Upload Image</label>
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="propic" id="propic">
                            <label for="propic" class="custom-file-label">{{ $home->propic }}</label>
                        </div>
                        @error('propic')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <input type="submit" class="btn btn-success" value="Update Info">
            </div>
        </form>
    </div>

@endsection
