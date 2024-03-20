@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10 col-11">
                    <h3>Viewing Blog Post</h3>
                </div>
                <div class="col-md-2 col-1">
                    <a href="{{ route('blog.index') }}" class="btn btn-secondary float-right">
                        <i class="fa-solid fa-chevron-left"></i> Back
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row mt-3 justify-content-around">
                <div class="form-group col-md-4">
                    <label>Category</label>
                    <input type="text" name="category" class="form-control bg-transparent border-0 border-bottom" value="{{ $blog->category }}" readonly>
                </div>
                <div class="form-group col-md-4">
                    <label>Title</label>
                    <input type="text" name="title" class="form-control bg-transparent border-0 border-bottom" value="{{ $blog->title }}" readonly>
                </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="form-group col-md-6">
                    <label>Image</label>
                    <input type="file" class="dropify" name="image" id="blog-image" data-default-file="{{ asset('storage/uploads/'.$blog->image) }}" disabled>
                 </div>
            </div>
            <div class="row mt-3 justify-content-center">
                <div class="form-group col-md-8">
                    <label>Description</label>
                    <textarea name="description" class="form-control bg-transparent border-0 border-bottom" cols="30" rows="6" readonly>{{ $blog->description }}</textarea>
                </div>
            </div>
        </div>
    </div>

@endsection
