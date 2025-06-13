@extends('website.layouts.main')
{{-- Page Title Section --}}
@section('Page-Title')
{{$pageTitle ?? ''}}
@endsection
{{-- Page-Description Section --}}
@section('Page-Description')
{{$setting->metaDescription ?? ''}}
@endsection
{{-- Page-Keywords Section --}}
@section('Page-Keywords')
{{$setting->metaKeywords ?? ''}}
@endsection
{{-- Page Main Content Section --}}
@section('main-contents')

<!-- Search Modal -->
<div class="modal fade search-modal-area" id="exampleModalsrc">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <button type="button" data-bs-dismiss="modal" class="closer-btn">
        <i class="ri-close-line"></i>
      </button>

      <div class="modal-body">
        <form class="search-box">
          <div class="search-input">
            <input type="text" name="Search" placeholder="Search for..." class="form-control" />

            <button type="submit" class="search-btn">
              <i class="ri-search-line"></i>
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
<!-- Search Modal -->

<!-- Start Page Title Area -->
<div class="page-title-area bg-26">
  <div class="container">
    <div class="page-title-content">
      <h2>Contact</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Contact</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Contact Info Area -->
<section class="contact-info-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-7">
        <div class="map-area">
          <iframe src="{{$Setting->websiteMapUrl ?? ''}}"></iframe>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="contact-info">
          <h2>Get in touch</h2>

          <ul class="address">
            <li class="location">
              <i class="ri-map-pin-2-fill"></i>
              <span>Address</span>
              {{$Setting->websiteAddress ?? ''}}
            </li>
            <li>
              <i class="ri-mail-line"></i>
              <span>Email</span>
              <div class="d-flex">
                @if (!empty($Setting->websitePrimaryEmailId))
                {{$Setting->websitePrimaryEmailId ?? ''}},
                @endif
                @if (!empty($Setting->websiteAlternateEmailId))
                {{$Setting->websiteAlternateEmailId ?? ''}},
                @endif
                @if (!empty($Setting->websiteAdditionalEmailId))
                {{$Setting->websiteAdditionalEmailId ?? ''}}
                @endif
              </div>

            </li>
            <li>
              <i class="ri-phone-fill"></i>
              <span>Phone</span>
              <div class="d-flex">
                @if (!empty($Setting->websitePrimaryPhoneNo))
                <a href="{{$Setting->websitePrimaryPhoneNo ?? ''}}">{{$Setting->websitePrimaryPhoneNo ?? ''}}
                </a>,
                @endif
                @if (!empty($Setting->websiteAlternatePhoneNo))
                <a href="{{$Setting->websiteAlternatePhoneNo ?? ''}}">{{$Setting->websiteAlternatePhoneNo ?? ''}}
                </a>,
                @endif
                @if (!empty($Setting->websiteAdditionalPhoneNo))
                <a href="{{$Setting->websiteAdditionalPhoneNo ?? ''}}">{{$Setting->websiteAdditionalPhoneNo ?? ''}}
                </a>
                @endif
              </div>
            </li>
          </ul>

          <h3>Follow Us</h3>

          <ul class="social-link">
            @if (!empty($socialMedia->facebook))
            <li>
              <a href="{{$socialMedia->facebook ?? ''}}" target="_blank">
                <i class="ri-facebook-fill"></i>
              </a>
            </li>
            @endif
            @if (!empty($socialMedia->instagram))
            <li>
              <a href="{{$socialMedia->instagram ?? ''}}" target="_blank">
                <i class="ri-instagram-fill"></i>
              </a>
            </li>
            @endif
            @if (!empty($socialMedia->linkedin))
            <li>
              <a href="{{$socialMedia->linkedin ?? ''}}" target="_blank">
                <i class="ri-linkedin-box-fill"></i>
              </a>
            </li>
            @endif
            @if (!empty($socialMedia->twitter))
            <li>
              <a href="{{$socialMedia->twitter ?? ''}}" target="_blank">
                <i class="ri-twitter-fill"></i>
              </a>
            </li>
            @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Contact Info Area -->

<!-- Start Contact Area -->
<section class="contact-area pb-100" id="contact-form-section">
  <div class="container">
    <div class="section-title">
      <h2>Send us a quick message</h2>
      <p>
      </p>
    </div>

    <form id="contactForm" method="post" action="{{ route('contact-enquiry') }}">
      @if(session('status'))
      <div class="alert alert-{{ session('status') == 'success' ? 'success' : 'danger' }}">
        {{ session('message') }}
      </div>
      @endif
      @csrf
      <input type="hidden" name="enquiry_type" value="Contact Form">
      <div class="row">
        <div class="col-lg-6 col-sm-6">
          <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" id="name" value="{{ old('name') }}" class="form-control" required
              data-error="Please enter your name" />
            <div class="help-block with-errors"></div>
            @if($errors->enquiry->first("name"))
            <i class="text-danger font-weight-bold">{{$errors->enquiry->first("name")}}</i>
            @endif
          </div>
        </div>

        <div class="col-lg-6 col-sm-6">
          <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" id="email" value="{{ old('email') }}" class="form-control" required
              data-error="Please enter your email" />
            <div class="help-block with-errors"></div>
            @if($errors->enquiry->first("email"))
            <i class="text-danger font-weight-bold">{{$errors->enquiry->first("email")}}</i>
            @endif
          </div>
        </div>

        <div class="col-lg-6 col-sm-6">
          <div class="form-group">
            <label>Phone</label>
            <input type="text" name="phone" id="phone" value="{{ old('phone') }}" required
              data-error="Please enter your number" class="form-control" />
            <div class="help-block with-errors"></div>
            @if($errors->enquiry->first("phone"))
            <i class="text-danger font-weight-bold">{{$errors->enquiry->first("phone")}}</i>
            @endif
          </div>
        </div>

        <div class="col-lg-6 col-sm-6">
          <div class="form-group">
            <label>Subject</label>
            <input type="text" name="subject" value="{{ old('subject') }}" id="subject" class="form-control" required
              data-error="Please enter your subject" />
            <div class="help-block with-errors"></div>
            @if($errors->enquiry->first("subject"))
            <i class="text-danger font-weight-bold">{{$errors->enquiry->first("subject")}}</i>
            @endif
          </div>
        </div>

        <div class="col-lg-12">
          <div class="form-group">
            <label>Message</label>
            <textarea name="message" class="form-control" id="message" cols="30" rows="6" required
              data-error="Write your message">{{ old('message') }}</textarea>
            <div class="help-block with-errors"></div>
            @if($errors->enquiry->first("message"))
            <i class="text-danger font-weight-bold">{{$errors->enquiry->first("message")}}</i>
            @endif
          </div>
        </div>


        <div class="col-lg-12 col-md-12">
          <button type="submit" name="submit" value="submit" class="default-btn">
            <span>Send message</span>
          </button>
          <div id="msgSubmit" class="h3 text-center hidden"></div>
          <div class="clearfix"></div>
        </div>
      </div>
    </form>
  </div>
</section>
<!-- End Contact Area -->

@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')
<script>
  document.addEventListener("DOMContentLoaded", function() {
    var form = document.getElementById("contactForm");
    form.addEventListener("submit", function(event) {
      var button = document.querySelector("#contactForm button[type='submit']");
      var originalButtonText = button.querySelector('span').textContent;

      if (form.checkValidity()) {
        button.querySelector('span').textContent = "Please wait";
        button.disabled = true;

        setTimeout(function() {
          button.querySelector('span').textContent = originalButtonText;
          button.disabled = false;
        }, 10000); // Change back to original text after 3 seconds (adjust as needed)
      } else {
        // If form is not valid, prevent submission
        event.preventDefault();
        event.stopPropagation();
      }

      form.classList.add("was-validated");
    });
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    if ({{ session('status') ? 'true' : 'false' }}) {
      document.getElementById('contact-form-section').scrollIntoView({ behavior: 'smooth' });
    }
  });
</script>
@endsection