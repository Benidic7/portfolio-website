@extends('layouts.admin')

@section('content')

    <div class="card col-md-10 offset-1">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
                    <h3>Edit Summary</h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('resume.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('resume.update', $resume->id) }}" method="post">
                @csrf
                @method('put')
                <input type="hidden" name="hi" value="{{ $resume->home_id }}">
                <div class="row">
                    <div class="form-group col-md-8 offset-2">
                        <label>Summary</label>
                        <textarea name="summary" cols="30" rows="10" class="form-control">{{ $resume->summary }}</textarea>
                        @error('summary')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn bg-purple">Update</button>
            </form>
        </div>
    </div>

@endsection