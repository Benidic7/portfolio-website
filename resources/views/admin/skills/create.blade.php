@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h3>Add Skills</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('skills.index') }}" class="btn btn-secondary float-right">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('skills.store') }}" method="post">
                @csrf
                <div class="row mb-3 mt-3">
                    <div class="form-group col-md-4 offset-1">
                        <label for="">Skills</label>
                        <input type="text" class="form-control" name="skills" placeholder="Enter Skills" value="{{ old('skills') }}" required>
                        @error('skills')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4 offset-2">
                        <label for="">Percentage</label>
                        <input type="number" class="form-control" name="percentage" placeholder="Percentage of your Skills" value="{{ old('percentage') }}" required>
                        @error('percentage')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- If statement here if no data this will be shown --}}
                <div class="row mb-3">
                    <div class="form-group col-md-6 offset-3">
                        <label for="">Description</label>
                        <textarea class="form-control" name="description" cols="30" rows="3" placeholder="Skills Description...">{{ old('description') }}</textarea>
                    </div>
                </div>
                <div class="ml-5">
                    <button type="submit" class="btn bg-purple">Submit</button>
                </div>
            </form>
        </div>
    </div>

@endsection
