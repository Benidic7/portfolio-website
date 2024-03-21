@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Editing Skills</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('skills.index') }}" class="btn btn-secondary float-right">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{ route('skills.update', $skill->id) }}" method="post">
                <div class="card-body">
                    @csrf
                    @method('PUT')
                    @if($skill->description != null)
                        <div class="row mb-3 justify-content-center">
                            <div class="form-group col-md-6">
                                <label for="">Description</label>
                                <textarea class="form-control" name="description" cols="30" rows="3">{{ $skill->description }}</textarea>
                            </div>
                        </div>
                    @endif
                    <div class="row my-3 justify-content-around">
                        <div class="form-group col-md-4">
                            <label for="">Skills</label>
                            <input type="text" class="form-control" name="skills" value="{{ $skill->skills }}" required>
                            @error('skills')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label for="">Percentage</label>
                            <input type="number" class="form-control" name="percentage" value="{{ $skill->percentage }}" required>
                            @error('percentage')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn bg-purple">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
