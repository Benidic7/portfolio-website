@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h3>Contact Page Info</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('contact.create') }}" class="btn btn-primary float-right">Create Contact</a>
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
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Zip Code</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contact as $item)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $item->home->first_name}}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->address }}</td>
                                <td>{{ $item->zip_code }}</td>
                                <td>
                                    <a href="{{ route('contact.edit', $item->id) }}" class="btn btn-sm btn-warning">
                                        <i class="fas fa-edit text-white"></i>
                                    </a>
                                    <a href="" class="btn btn-sm btn-danger delete-contact" data-id="{{ $item->id }}">
                                        <i class="fas fa-trash text-white"></i>
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
