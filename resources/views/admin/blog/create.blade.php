@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10 col-11">
                    <h3>Create Blog Post</h3>
                </div>
                <div class="col-md-2 col-1">
                    <a href="{{ route('blog.index') }}" class="btn btn-secondary float-right">
                        Cancel
                    </a>
                </div>
            </div>
        </div>
        <form action="{{ route('blog.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row mt-3 justify-content-around">
                    <div class="form-group col-md-4">
                        <label>Category</label>
                        <input type="text" name="category" class="form-control" placeholder="Enter Category" required>
                        @error('category')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="form-group col-md-4">
                        <label>Title</label>
                        <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                        @error('title')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="form-group col-md-6">
                        <label>Image</label>
                        <input type="file" class="dropify" name="image" id="blog-image" required>
                    </div>
                </div>
                <div class="row mt-3 justify-content-center">
                    <div class="form-group col-md-8">
                        <label>Description</label>
                        <textarea name="description" class="form-control" cols="30" rows="6"></textarea>
                        @error('description')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" class="btn bg-purple">Submit</button>
            </div>
        </form>
    </div>

@endsection
