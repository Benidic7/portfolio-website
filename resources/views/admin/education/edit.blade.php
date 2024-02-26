@extends('layouts.admin')

@section('content')

    <div class="card col-md-10 offset-1">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
                    <h3>Editing Education Info</h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('resume.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('education.update', $education->id) }}" method="post">
                @csrf
                @method('put')
                <div class="row">
                    <div class="form-group col-md-4 offset-1">
                        <label for="">Education Level</label>
                        <select name="level" class="form-control select2" placeholder="Select Education Level">
                            <option value="" disabled selected>Select Education Level</option>
                            <option value="Tertiary" {{ $education->level == 'Tertiary' ? 'selected' : '' }}>Tertiary</option>
                            <option value="Secondary" {{ $education->level == 'Secondary' ? 'selected' : '' }}>Secondary</option>
                            <option value="Elementary" {{ $education->level == 'Elementary' ? 'selected' : '' }}>Elementary</option>
                        </select>
                    </div>
                    <div class="form-group col-md-4 offset-1">
                        <label for="">School</label>
                        <input type="text" name="school" class="form-control" value="{{ $education->school }}" required>
                        @error('school')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="form-group col-md-4 offset-1">
                        <label for="">Year</label>
                        <input type="text" name="year" class="form-control" value="{{ $education->year }}" required>
                        @error('year')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 offset-1">
                        <label for="">Address</label>
                        <input type="text" name="address" class="form-control" value="{{ $education->address }}" required>
                        @error('address')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn bg-purple">Update</button>
            </form>
        </div>
    </div>

@endsection
