@extends('layouts.admin')

@section('content')

    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10">
                    <h3>Skills List</h3>
                </div>
                <div class="col-md-2">
                    <a href="{{ route('skills.create') }}" class="btn btn-primary float-right">
                        Add Skills
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
                            <th class="text-center">#</th>
                            <th class="text-center">Skills</th>
                            <th class="text-center">Percentage</th>
                            <th class="text-center" class="text-center">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($skills as $skill)
                            <tr>
                                <td class="text-center">{{ $loop->iteration }}</td>
                                <td class="text-center">{{ $skill->skills }}</td>
                                <td class="text-center">{{ $skill->percentage }}%</td>
                                <td class="text-center">
                                    <a href="{{ route('skills.show', $skill->id) }}" class="btn btn-info"><i class="fas fa-eye"></i></a>
                                    <a href="{{ route('skills.edit', $skill->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                                    <a href="" class="btn btn-danger delete-skills" data-id="{{ $skill->id }}"><i class="fas fa-trash"></i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
