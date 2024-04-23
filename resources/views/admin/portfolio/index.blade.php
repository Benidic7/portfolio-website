@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h3>Portfolios</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('portfolio.create') }}" class="btn btn-primary float-right">
                        Add Portfolio
                    </a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(session()->has('success'))
                <div class="alert alert-success alert-dissmisable fade-show" role="alert">
                    {!! session('success') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th class="text-center">Title</th>
                            <th class="text-center">Category</th>
                            <th class="text-center">Client</th>
                            <th class="text-center">Project Date</th>
                            <th class="text-center">Images</th>
                            <th class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($portfolios as $portfolio)
                            <tr>
                                <td class="text-center">{{ $portfolio->title }}</td>
                                <td class="text-center">{{  $portfolio->category }}</td>
                                <td class="text-center">{{  $portfolio->client }}</td>
                                <td class="text-center">{{  Carbon\Carbon::parse($portfolio->project_date)->format('F d, Y') }}</td>
                                <td class="text-center">
                                    <a href="{{ route('portfolio.upload', $portfolio->id) }}" class="btn btn-primary">Add / View Images</a>
                                </td>
                                <td class="text-center">
                                    <a href="{{ route('portfolio.show', $portfolio->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('portfolio.edit', $portfolio->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger delete-portfolio" data-id="{{ $portfolio->id }}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
