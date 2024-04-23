@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-11">
                        <h3>Creating Education Info</h3>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('resume.index') }}" class="btn btn-secondary float-right">Cancel</a>
                    </div>
                </div>
            </div>
            <form action="{{ route('education.store') }}" method="post">
                <div class="card-body">
                    @csrf
                    <div class="row mb-2 justify-content-around">
                        <div class="form-group col-md-4">
                            <label for="">Education Level</label>
                            <select name="level" class="form-control" placeholder="Select Education Level">
                                <option value="" disabled selected>Select Education Level</option>
                                <option value="Tertiary" {{ old('level') == 'Tertiary' ? 'selected' : '' }}>Tertiary</option>
                                <option value="Secondary" {{ old('level') == 'Secondary' ? 'selected' : '' }}>Secondary</option>
                                <option value="Elementary" {{ old('level') == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">School</label>
                            <input type="text" name="school" class="form-control" placeholder="Enter School Name" value="{{ old('school') }}" required>
                            @error('school')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row mb-4 justify-content-around">
                        <div class="form-group col-md-4">
                            <label for="">Year</label>
                            <input type="text" name="year" class="form-control" placeholder="e.g. 2020 - 2024" value="{{ old('year') }}" required>
                            @error('year')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Address</label>
                            <input type="text" name="address" class="form-control" placeholder="School Address" value="{{ old('address') }}" required>
                            @error('address')
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
