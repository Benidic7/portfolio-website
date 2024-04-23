@extends('layouts.admin')

@section('content')

    <div class="row mt-3 justify-content-center">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Upload Portfolio Image</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-secondary float-right">
                            Back
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{ route('upload.store', $portfolio->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dissmisable fade-show" role="alert">
                            {!! session('success') !!}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <h5>Portfolio Title: {{ $portfolio->title }}</h5>
                    <hr>
                    <div class="col-md-5 mb-3">
                        <label for="formFile" class="form-label">Upload Images (Max:10 images only)</label>
                        <input type="file" class="form-control" name="images[]" id="formFile" multiple required>
                        @error('images[]')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn bg-purple">Upload</button>
                </div>
            </form>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col-md-12 text-center">
            @foreach ($portfolioImages as $portfolioImg)
                <img src="{{ asset('storage/uploads/'.$portfolioImg->image) }}" class="border p-2 m-3" style="width: 100px; height: 100px;" alt="Img">
            @endforeach
        </div>
    </div>

@endsection
