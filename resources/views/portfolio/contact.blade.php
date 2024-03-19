@extends('layouts.portfolio')

@section('content')
    <section class="intro-single">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-8">
            <div class="title-single-box">
              <h2 class="title-single">Contact <span class="color-b">Me</span></h2>
            </div>
          </div>
          <div class="row mt-4">
            <div class="col-md-5 section-md-t3">
                <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                      <span class="bi bi-envelope"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                      <h4 class="icon-title">Say Hello</h4>
                  </div>
                  <div class="icon-box-content">
                      <p class="mb-1">Email.
                      <span class="color-a">{{ $contact->email }}</span>
                      </p>
                      <p class="mb-1">Phone.
                      <span class="color-a">{{ $contact->phone }}</span>
                      </p>
                  </div>
                </div>
              </div>
              <div class="icon-box section-b2">
                  <div class="icon-box-icon">
                  <span class="bi bi-geo-alt"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                      <h4 class="icon-title">Find me in</h4>
                  </div>
                  <div class="icon-box-content">
                      <p class="mb-1">
                      {{ $contact->address }},
                      <br> {{ $contact->zip_code }}
                      </p>
                  </div>
                  </div>
              </div>
              <div class="icon-box">
                  <div class="icon-box-icon">
                  <span class="bi bi-share"></span>
                  </div>
                  <div class="icon-box-content table-cell">
                  <div class="icon-box-title">
                      <h4 class="icon-title">Social networks</h4>
                  </div>
                  <div class="icon-box-content">
                    <div class="socials-footer">
                      <ul class="list-inline">
                          <li class="list-inline-item">
                            <a href="{{ $contact->home->facebook }}" class="link-one">
                                <i class="bi bi-facebook" aria-hidden="true"></i>
                            </a>
                          </li>
                          <li class="list-inline-item">
                            <a href="{{ $contact->home->instagram }}" class="link-one">
                                <i class="bi bi-instagram" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ $contact->home->linkedin }}" class="link-one">
                                <i class="bi bi-linkedin" aria-hidden="true"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="{{ $contact->home->github }}" class="link-one">
                                <i class="bi bi-github" aria-hidden="true"></i>
                            </a>
                        </li>
                      </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <div class="col-md-7">
              <form action="forms/contact.php" method="post" autocomplete="off">
                @csrf
                <div class="row">
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required>
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-6 mb-3">
                    <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-lg form-control-a" placeholder="Your Email" required>
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12 mb-3">
                    <div class="form-group">
                        <input type="text" name="subject" class="form-control form-control-lg form-control-a" placeholder="Subject" required>
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group">
                        <textarea name="message" class="form-control" name="message" cols="45" rows="8" placeholder="Message" required></textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                {{-- <div class="col-md-12 my-3">
                  <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                </div> --}}

                <div class="col-md-12 text-center mt-4">
                    <button type="submit" class="btn btn-a">Send Message</button>
                </div>
                </div>
              </form>
            </div>

          </div>
        </div>
      </div>
    </section>
@endsection



