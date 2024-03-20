@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10 col-10">
                    <h3>Blog Post</h3>
                </div>
                <div class="col-md-2 col-2">
                    <a href="{{ route('blog.create') }}" class="btn btn-primary float-right">
                        Create Blog
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dissmisable" role="alert">
                    {!! session('success') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered table-hovered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Image</th>
                            <th>Category</th>
                            <th>Title</th>
                            {{-- <th>Description</th> --}}
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($blogs as $blog)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td><img src="{{ asset('storage/uploads/'.$blog->image) }}" width="50px;"></td>
                                <td>{{ $blog->category }}</td>
                                <td>{{ $blog->title }}</td>
                                {{-- <td>{{ $blog->description }}/td> --}}
                                <td>
                                    <a href="{{ route('blog.show', $blog->id) }}" class="btn btn-info">
                                        <i class="fas fa-eye"></i>
                                    </a>
                                    <a href="{{ route('blog.edit', $blog->id) }}" class="btn btn-warning">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <a href="" class="btn btn-danger delete-blog" data-id="{{ $blog->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
