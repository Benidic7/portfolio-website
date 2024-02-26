@extends('layouts.admin')

@section('content')

    <div class="card col-md-10 offset-1">
        <div class="card-header">
            <div class="row">
                <div class="col-md-11">
                    <h3>Create Summary</h3>
                </div>
                <div class="col-md-1">
                    <a href="{{ route('resume.index') }}" class="btn btn-secondary">Cancel</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{ route('resume.store') }}" method="post">
                @csrf
                <div class="row mb-4">
                    <div class="col-md-4">
                        <label>Select Associate Name:</label>
                        <select name="hi" class="form-control select2" style="width: 70%;">
                            <option disabled selected value="">Select Associate Name</option>
                            @foreach($home as $item)
                                <option value="{{ $item->id }}" {{ old('hi') == $item->id ? 'selected' : '' }}>{{ $item->first_name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-8 offset-2">
                        <label>Summary</label>
                        <textarea name="summary" cols="30" rows="10" class="form-control"></textarea>
                        @error('summary')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <button type="submit" class="btn bg-purple">Submit</button>
            </form>
        </div>
    </div>


@endsection
