@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-11">
                        <h3>Edit Summary</h3>
                    </div>
                    <div class="col-md-1">
                        <a href="{{ route('resume.index') }}" class="btn btn-secondary float-right">Cancel</a>
                    </div>
                </div>
            </div>
            <form action="{{ route('resume.update', $resume->id) }}" method="post">
                <div class="card-body">
                    @csrf
                    @method('put')
                    <input type="hidden" name="hi" value="{{ $resume->home_id }}">
                    <div class="row justify-content-center mb-3">
                        <div class="form-group col-md-8">
                            <label>Summary</label>
                            <textarea name="summary" cols="30" rows="5" class="form-control">{{ $resume->summary }}</textarea>
                            @error('summary')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="card-footer mt-3">
                    <button type="submit" class="btn bg-purple">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
