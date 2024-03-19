@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10">
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
                    @if($skill->isEmpty())
                        <div class="row mb-3 justify-content-center">
                            <div class="form-group col-md-6">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="3" placeholder="Skills Description...">{{ old('description') }}</textarea>
                            </div>
                        </div>
                    @endif
                    <div class="row mb-3 mt-3 justify-content-around">
                        <div class="form-group col-md-4">
                            <label for="">Skills</label>
                            <input type="text" class="form-control" name="skills" placeholder="Enter Skills" value="{{ old('skills') }}" required>
                            @error('skills')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Percentage</label>
                            <input type="number" class="form-control" name="percentage" placeholder="Percentage of your Skills" value="{{ old('percentage') }}" required>
                            @error('percentage')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <button type="submit" class="btn bg-purple">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
