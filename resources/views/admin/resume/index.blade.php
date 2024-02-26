@extends('layouts.admin')

@section('content')

<h2 class="mb-3">Resume</h2>

<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-md-9">
                <h4>Summary</h4>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                @if($resume == null)
                    <a href="{{ route('resume.create') }}" class="btn btn-primary mr-2">Create</a>
                @else
                    <a href="{{ route('resume.edit', $resume->id) }}" class="btn btn-warning mr-2">
                        <i class="fas fa-edit"></i> Edit
                    </a>
                    <a href="" class="btn btn-danger mr-3 delete-resume" data-id="{{ $resume->id }}">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                @endif
            </div>
        </div>

        <div class="m-2">
            @if (session()->has('success'))
                <div class="alert alert-success alert-dissmisable" role="alert">
                    {!! session('success') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>

        <blockquote class="p-4 mt-3" style="border: 2px solid purple;">
            <h5>{{ $home->first_name. ' ' .$home->last_name}}</h5>
            <p>{{ $resume->summary }}</p>
            <div class="ml-4">
                <p>{{ $contact->address }}</p>
                <p>{{ $contact->phone }}</p>
                <p>{{ $contact->email }}</p>
            </div>
        </blockquote>

        <div class="row mt-5">
            <div class="col-md-9">
                <h4>Education</h4>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <a href="{{ route('education.create') }}" class="btn btn-primary mr-2">Create</a>
            </div>
        </div>

        <div class="m-2">
            @if (session()->has('education'))
                <div class="alert alert-success alert-dissmisable" role="alert">
                    {!! session('education') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>

        <blockquote class="p-4 mt-3" style="border: 2px solid purple;">
            <h5>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</h5>
            @foreach($education as $item)
            <div class="row">
                <div class="col-md-10">
                    <p style="font-size: 20px;"><strong>{{ $item->level }}</strong></p>
                    <div class="ml-4">
                        <p><strong>{{ $item->school }}</strong></p>
                        <p class="px-2 py-1" style="background: #e4edf9; display: inline-block; font-size: 16px;">
                            <strong>{{ $item->year }}</strong>
                        </p>
                        <p>{{ $item->address }}</p><br>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="row justify-content-center mb-2">
                        <span class="text-center"><strong>Action</strong></span>
                    </div>
                    <a href="{{ route('education.edit', $item->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> Edit</a>
                    <a href="" class="btn btn-danger delete-educ" data-id="{{ $item->id }}">
                        <i class="fas fa-trash"></i> Delete
                    </a>
                </div>
            </div>
            <hr>
            @endforeach
        </blockquote>

        <div class="row mt-5">
            <div class="col-md-9">
                <h4>Experience</h4>
            </div>
            <div class="col-md-3 d-flex justify-content-end">
                <a href="{{ route('experience.create') }}" class="btn btn-primary mr-2">Create</a>
            </div>
        </div>

        <div class="m-2">
            @if(session()->has('exp'))
                <div class="alert alert-success alert-dissmisable" role="alert">
                    {!! session('exp') !!}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>

        <blockquote class="p-4 mt-3" style="border: 2px solid purple;">
            @foreach($experience as $item)
                <div class="row">
                    <div class="col-md-10">
                        <h5>{{ strtoupper($item->experience) }}</h5>
                        <p class="px-2 py-1" style="background: #e4edf9; display: inline-block; font-size: 16px;">
                            <strong>{{ $item->year }}</strong>
                        </p>
                        <p>{{ $item->address }}</p>

                        @foreach (array_filter(explode('.', $item->description)) as $sentence)
                            <p>{{ $sentence }}.</p>
                        @endforeach
                        <br>
                    </div>
                    <div class="col-md-2">
                        <div class="row justify-content-center mb-2">
                            <span><strong>Action</strong></span>
                        </div>
                        <div class="row justify-content-center ">
                            <a href="{{ route('experience.edit', $item->id) }}" class="btn btn-warning mr-1"><i class="fas fa-edit text-white"></i></a>
                            <a href="" class="btn btn-danger ml-1 delete-exp" data-id="{{ $item->id }}">
                                <i class="fas fa-trash"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <hr>
            @endforeach
        </blockquote>
    </div>
</div>

@endsection
