@extends('layouts.admin')

@section('content')

    <div class="row justify-content-center mt-3">
        <div class="card col-md-10 px-0">
            <div class="card-header">
                <div class="row">
                    <div class="col-md-10">
                        <h3>Add Portfolio</h3>
                    </div>
                    <div class="col-md-2">
                        <a href="{{ route('portfolio.index') }}" class="btn btn-secondary float-right">
                            Cancel
                        </a>
                    </div>
                </div>
            </div>
            <form action="{{ route('portfolio.store') }}" method="POST">
                @csrf
                <div class="card-body">
                    <div class="row justify-content-around my-lg-2">
                        <div class="form-group col-md-4">
                            <label>Title</label>
                            <input type="text" name="title" class="form-control" placeholder="Enter Title" required>
                            @error('title')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>Category</label>
                            <input type="text" name="category" class="form-control" placeholder="Enter Title" required>
                            @error('category')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-around mb-lg-3">
                        <div class="form-group col-md-4">
                            <label>Client</label>
                            <input type="text" name="client" class="form-control" placeholder="Enter Client" required>
                            @error('client')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group col-md-4">
                            <label>Project Date</label>
                            <input type="date" name="project_date" class="form-control" required>
                            @error('project_date')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="row justify-content-center mb-lg-2">
                        <div class="form-group col-md-6">
                            <label>Project Description</label>
                            <textarea name="project_description" class="form-control" cols="30" rows="3" placeholder="Enter Project Description"></textarea>
                            @error('project_description')
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
    </div>

@endsection
