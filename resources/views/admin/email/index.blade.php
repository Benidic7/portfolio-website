@extends('layouts.admin')

@section('content')

    <section class="content">
        <div class="row">
          <div class="col-md-12">
            <div class="card card-primary card-outline">
              <div class="card-header">
                <h3 class="mb-1">Email Inbox</h3>

              </div>
              <div class="card-body p-0">
                <div class="table-responsive mailbox-messages">
                  <table class="table table-hover table-striped">
                    <tbody>
                      @foreach($emails as $email)
                        <tr>
                          <td class="mailbox-name"><a href="{{ route('email.show', $email->id) }}">{{ $email->name }}</a></td>
                          <td class="mailbox-attachment">{{ $email->email }}</td>
                          <td class="mailbox-subject">{!! '<b>' . $email->subject . '</b> - ' . Str::limit($email->message, 30, '...') !!}</td>
                          <td class="mailbox-date">{{ $email->formatted_created_at }}</td>
                          <td><button class="border-0 bg-transparent delete-email"><i class="fas fa-trash text-dark fa-lg"></i></button></td>
                        </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="card-footer pb-0">
                  <div class="float-right">
                    {{ $emails->links() }}
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      {{-- <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-10 col-10">
                    <h3>Email Inbox</h3>
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($emails as $email)
                            <tr>
                                <td>{{ $email->name }}</td>
                                <td>{{ $email->email }}</td>
                                <td>{{ $email->subject }}</td>
                                <td>{{ $email->message }}</td>
                                <td>
                                    <a href="" class="btn btn-danger delete-email" data-id="{{ $email->id }}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div> --}}

    @include('admin.email.partials._scripts')
@endsection
