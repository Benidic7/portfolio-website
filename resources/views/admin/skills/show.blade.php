@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Show Skills</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('skills.index') }}" class="btn btn-secondary float-right">
                            Back
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="row my-3 justify-content-around">
                    <div class="form-group col-md-4">
                        <label for="">Skills</label>
                        <input type="text" class="form-control border-0 bg-transparent border-bottom border-info" name="skills" value="{{ $skill->skills }}" readonly>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Percentage</label>
                        <input type="text" class="form-control border-0 bg-transparent border-bottom border-info" name="percentage" value="{{ $skill->percentage }}%" readonly>
                    </div>
                </div>
                @if($skill->description != null)
                    <div class="row mb-3 justify-content-center">
                        <div class="form-group col-md-6">
                            <label for="">Description</label>
                            <textarea class="form-control border-0 bg-transparent border-bottom border-info" name="description" cols="30" rows="9" readonly>{{ $skill->description }}</textarea>
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

@endsection
