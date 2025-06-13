<!-- Start Footer Area -->
<footer class="footer-area black-bg-color">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget bg-f9f5f1">
          <a href="{{route('home')}}" class="logo">
            <img src="{{ Storage::url($Setting->websiteLogo) ?? '' }}" alt="Image" class="image-bg-color mx-auto d-block" style="width: 100px;"/>
          </a>

          <p>
            {{$Setting->websiteTagline ?? ''}}
          </p>

          <ul class="social-icon">
            <li>
              <span>Follow us:</span>
            </li>
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

      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget">
          <h3>Useful link</h3>

          <ul class="import-link">
            <li>
              <a href="{{route('home')}}">Home</a>
            </li>
            <li>
              <a href="{{route('courses')}}">Courses</a>
            </li>
            <li>
              <a href="{{route('blogs')}}">News & Blogs</a>
            </li>
            <li>
              <a href="{{route('events')}}">Events</a>
            </li>
            <li>
              <a href="{{route('terms')}}">Terms & conditions</a>
            </li>
            <li>
              <a href="{{route('policy')}}">Privacy policy</a>
            </li>
          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget">
          <h3>About Us</h3>

          <ul class="import-link">
            <li>
              <a href="{{route('about-us')}}">About College</a>
            </li>
            <li>
              <a href="{{route('management')}}">Management</a>
            </li>
            <li>
              <a href="{{route('facultie')}}">Faculty</a>
            </li>
            <li>
              <a href="{{route('infrastructure-details')}}">Infrastructure Details</a>
            </li>
            <li>
              <a href="{{route('workshops-seminars')}}">Workshops & Seminars</a>
            </li>
            <li>
              <a href="{{route('added-facilities')}}">Added Facilites</a>
            </li>

          </ul>
        </div>
      </div>

      <div class="col-lg-3 col-sm-6">
        <div class="single-footer-widget">
          <h3>Inquiries</h3>

          <ul class="address">
            <li class="location">
              <i class="ri-map-pin-line"></i>
              <span>Address</span>
              {{$Setting->websiteAddress ?? ''}}
            </li>
            <li>
              <i class="ri-mail-line"></i>
              <span>Email</span>
              llrmedu@rediffmail.com
            </li>
            <li>
              <span>Phone</span>
              <div class="d-flex">
                <a href="#">
                  <i class="ri-phone-fill"></i>

                </a>
                @if (!empty($Setting->websitePrimaryPhoneNo))
                <a href="tel:{{$Setting->websitePrimaryPhoneNo ?? ''}}">{{$Setting->websitePrimaryPhoneNo ?? ''}}
                </a>,
                @endif
                @if (!empty($Setting->websiteAlternatePhoneNo))
                <a href="tel:{{$Setting->websiteAlternatePhoneNo ?? ''}}">{{$Setting->websiteAlternatePhoneNo ?? ''}}
                </a>,
                @endif
                @if (!empty($Setting->websiteAdditionalPhoneNo))
                <a href="tel:{{$Setting->websiteAdditionalPhoneNo ?? ''}}">{{$Setting->websiteAdditionalPhoneNo ?? ''}}
                </a>
                @endif
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</footer>
<!-- End Footer Area -->

<!-- Start Copy Right Area -->
<div class="copy-right-area">
  <div class="container">
    <p>
      Copyright <i class="ri-copyright-line"></i> 2023 Design & Developed By
      <a href="https://navix.in/" target="_blank">Navix Consultancy Services</a>
    </p>
  </div>
</div>
<!-- End Copy Right Area -->