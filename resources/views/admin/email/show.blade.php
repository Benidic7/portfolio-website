@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="card card-primary card-outline">
                  <div class="card-header">
                    <div class="row">
                        <div class="col-md-11">
                            <h3>Read Mail</h3>
                        </div>
                        <div class="col-md-1">
                            <a href="{{ route('email.index') }}" class="btn btn-secondary float-right">
                                <i class="fa-solid fa-arrow-left"></i> Back
                            </a>
                        </div>
                    </div>
                </div>
                  <div class="card-body p-0">
                    <div class="mailbox-read-info">
                      <h5>{{ $email->subject }}</h5>
                      <h6>From: {{ $email->email }}
                        <span class="mailbox-read-time float-right">{{ $email->created_at_formatted }}</span></h6>
                    </div>
                    <div class="mailbox-read-message">
                      <p>{{ $email->message }}</p>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </section>

@endsection
