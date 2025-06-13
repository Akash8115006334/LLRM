<!-- Start Preloader Area -->
<div class="preloader">
  <div class="lds-ripple">
    <div class="pl-flip-1 pl-flip-2"></div>
  </div>
</div>
<!-- End Preloader Area -->

<!-- Start Header Area -->
<header class="header-area">
  <!-- Start Top Header -->
  <div class="top-header">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6 col-sm-6">
          <ul class="header-left-content">
            <li>
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
            </li>
          </ul>
        </div>

        <div class="col-lg-6 col-sm-6">
          <div class="header-right-content">

            <div class="my-account">

              @if (!empty($socialMedia->facebook))

              <a href="{{$socialMedia->facebook ?? ''}}" target="_blank">
                <i class="ri-facebook-fill"></i>
              </a>

              @endif
              @if (!empty($socialMedia->instagram))

              <a href="{{$socialMedia->instagram ?? ''}}" target="_blank">
                <i class="ri-instagram-fill"></i>
              </a>

              @endif
              @if (!empty($socialMedia->linkedin))

              <a href="{{$socialMedia->linkedin ?? ''}}" target="_blank">
                <i class="ri-linkedin-box-fill"></i>
              </a>

              @endif
              @if (!empty($socialMedia->twitter))

              <a href="{{$socialMedia->twitter ?? ''}}" target="_blank">
                <i class="ri-twitter-fill"></i>
              </a>

              @endif
            </div>


          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Start Top Header -->

  <!-- Start Navbar Area -->
  <div class="navbar-area">
    <div class="mobile-responsive-nav">
      <div class="container">
        <div class="mobile-responsive-menu d-flex align-items-center">
          <div class="logo">
            <a href="{{route('home')}}">
              <img src="{{ Storage::url($Setting->websiteLogo) ?? '' }}" alt="logo" class="logo" />
            </a>
          </div>

          <div class="others-options-for-mobile-devices">
            <ul>
              <li>
                <a href="application.html" class="default-btn">
                  Application Form
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>

    <div class="desktop-nav">
      <div class="container">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="{{route('home')}}">
            <img src="{{url('website-assets/images/logo.png')}}" alt="logo" />
          </a>

          <div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
            <ul class="navbar-nav m-auto">
              <li class="nav-item">
                <a href="/" class="nav-link active">
                  Home
                </a>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  About
                  <i class="ri-arrow-down-s-line"></i>
                </a>

                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="{{route('about-us')}}" class="nav-link">About Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('management')}}" class="nav-link">Management</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('facultie')}}" class="nav-link">Faculty</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{route('publication')}}" class="nav-link">Publications</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Infrastructure
                      <i class="ri-arrow-down-s-line"></i>
                    </a>
                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{route('infrastructure-details')}}" class="nav-link">Infrastructure Details</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('land-completion-certificate')}}" class="nav-link">Land Completion
                          Certificate</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('college-map')}}" class="nav-link">College Map</a>
                      </li>
                    </ul>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">
                      Facilities
                      <i class="ri-arrow-down-s-line"></i>
                    </a>

                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{route('liberary-details')}}" class="nav-link">Library Details</a>
                      </li>
                      <!-- <li class="nav-item">
                                              <a href="log-in.html" class="nav-link"
                                                >Library & Reading Room</a
                                              >
                                            </li> -->
                      <li class="nav-item">
                        <a href="{{route('laboratories')}}" class="nav-link">Laboratories</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('workshops-seminars')}}" class="nav-link">Workshops & Seminars</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('other-facilities')}}" class="nav-link">Other Facilities</a>
                      </li>
                      <li class="nav-item">
                        <a href="{{route('added-facilities')}}" class="nav-link">Added Facilities</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  Courses Offered
                  <i class="ri-arrow-down-s-line"></i>
                </a>

                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="{{route('courses')}}" class="nav-link">All Courses</a>
                  </li>

                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  News & Blogs
                  <i class="ri-arrow-down-s-line"></i>
                </a>

                <ul class="dropdown-menu">
                  <li class="nav-item">
                    <a href="{{route('blogs')}}" class="nav-link">Blogs</a>
                  </li>

                  <li class="nav-item">
                    <a href="{{route('events')}}" class="nav-link">Events</a>
                  </li>
                </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link">
                  More
                  <i class="ri-arrow-down-s-line"></i>
                </a>

                <ul class="dropdown-menu">

                  {{-- <li class="nav-item">
                    <a href="https://ncte.gov.in/website/index.aspx" class="nav-link">
                      NCTE
                      <i class="ri-arrow-down-s-line"></i>
                    </a>

                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{route('infrastructure-details')}}" class="nav-link">College Campus</a>
              </li>
              <li class="nav-item">
                <a href="building-map.html" class="nav-link">Building Map</a>
              </li>
              <li class="nav-item">
                <a href="alumni.html" class="nav-link">Alumni</a>
              </li>
              <li class="nav-item">
                <a href="study-online.html" class="nav-link">Faculty List</a>
              </li>
              <li class="nav-item">
                <a href="ncte-order.html" class="nav-link">NCTE Orders</a>
              </li>
            </ul>
            </li> --}}
            {{-- <li class="nav-item">
                    <a href="tuition-fees.html" class="nav-link">Fee Structure</a>
                  </li> --}}
            <li class="nav-item">
              <a href="https://www.vidyalakshmi.co.in/Students/" class="nav-link">Vidya Lakshmi Portal</a>
            </li>

            <li class="nav-item">
              <a href="{{ Storage::url($Achievement->pdf) }}" target="_blank" class="nav-link">Achievements</a>
            </li>
            <li class="nav-item">
              <a href="{{route('major-cells')}}" class="nav-link">Major Cells</a>
            </li>
            <li class="nav-item">
              <a href="{{route('ncte-revised')}}" class="nav-link">NCTE Revised Orders</a>
            </li>
            {{-- <li class="nav-item">
                    <a href="major-committees.html" class="nav-link">Committees</a>
                  </li> --}}
            <li class="nav-item">
              <a href="{{route('clubs')}}" class="nav-link">Clubs</a>
            </li>

            <li class="nav-item">
              <a href="{{route('community-work')}}" class="nav-link">Community Work</a>
            </li>
            <li class="nav-item">
              <a href="{{route('undertaking')}}" class="nav-link">Undertaking</a>
            </li>
            <li class="nav-item">
              <a href="{{route('feesStructure')}}" class="nav-link">Fee Structure</a>
            </li>
            </ul>
            </li>

            <!-- <li class="nav-item">
                    <a href="#" class="nav-link">
                      Events
                      <i class="ri-arrow-down-s-line"></i>
                    </a>

                    <ul class="dropdown-menu">
                      <li class="nav-item">
                        <a href="{{route('events')}}" class="nav-link">Events</a>
                      </li>
                      <li class="nav-item">
                        <a href="events-details.php" class="nav-link"
                          >Event details</a
                        >
                      </li>
                    </ul>
                  </li> -->
            <li class="nav-item">
              <a href="{{route('gallery')}}" class="nav-link">Gallery</a>
            </li>
            <!-- <li class="nav-item">
										<a href="#" class="nav-link">
											Shop 
											<i class="ri-arrow-down-s-line"></i>
										</a>

										<ul class="dropdown-menu">
											<li class="nav-item">
												<a href="products.html" class="nav-link">Products</a>
											</li>
											<li class="nav-item">
												<a href="cart.html" class="nav-link">Cart</a>
											</li>
											<li class="nav-item">
												<a href="wishlist.html" class="nav-link">Wishlist</a>
											</li>
											<li class="nav-item">
												<a href="checkout.html" class="nav-link">Checkout</a>
											</li>
											<li class="nav-item">
												<a href="product-details.html" class="nav-link">Product details</a>
											</li>
										</ul>
									</li> -->

            <!-- <li class="nav-item">
										<a href="#" class="nav-link">
											Blog 
											<i class="ri-arrow-down-s-line"></i>
										</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item">
												<a href="{{route('blogs')}}" class="nav-link">Blog</a>
											</li>
                                            <li class="nav-item">
												<a href="blog-left-sidebar.html" class="nav-link">Blog left sidebar</a>
											</li>
                                            <li class="nav-item">
												<a href="blog-details.html" class="nav-link">Blog details</a>
											</li>
                                        </ul>
                                    </li> -->

            <li class="nav-item">
              <a href="{{route('contact')}}" class="nav-link">Contact</a>
            </li>
            </ul>

            <div class="others-options">
              <ul>
                <li>
                  <a href="javascript:void(0);" class="default-btn" id="applicationLink">
                    Application Enquiry
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!-- End Navbar Area -->
</header>
<!-- End Header Area -->

<div class="popup ">
  <div class="contentBox shadow mb-5 bg-white rounded">
    <div class="close"></div>
    <div class="content " style="text-align: center;">
      <div class="enquiry-form " style="">
        <div class="d-flex justify-content-around py-2">
          <img src="{{ Storage::url($Setting->websiteLogo) ?? '' }}" alt="" style="width: 100px; height=100px;">
        </div>

        <h3 style="">Request a Callback</h3>
        @if(session('status'))
        <div id="popupMessage" class="alert alert-{{ session('status') == 'success' ? 'success' : 'danger' }}">
          {{ session('message') }}
        </div>
        @endif
        <form method="POST" class=" p-3" action="{{route('enquiry')}}">
          @csrf
          <input type="hidden" name="enquiry_type" value="Enquiry Form">
          <div class="row">
            <div class="col-12 form-group py-1">
              <input type="text" name="name" placeholder="Name" class="form-control" value="{{old('name')}}" required>
              @if($errors->enquiry->first("name"))
              <i class="text-danger font-weight-bold">{{$errors->enquiry->first("name")}}</i>
              @endif
            </div>
            <div class="col-12 form-group py-1">
              <input type="text" name="father_name" placeholder="Father Name" class="form-control"
                value="{{old('father_name')}}" required>
              @if($errors->enquiry->first("father_name"))
              <i class="text-danger font-weight-bold">{{$errors->enquiry->first("father_name")}}</i>
              @endif
            </div>
            <div class="col-12 form-group py-1">
              <input type="text" name="dob" placeholder="Date of Birth" class="form-control" value="{{old('dob')}}"
                required>
              @if($errors->enquiry->first("dob"))
              <i class="text-danger font-weight-bold">{{$errors->enquiry->first("dob")}}</i>
              @endif
            </div>
            <div class="col-12 form-group py-1">
              <input type="text" name="email" placeholder="Email" class="form-control" value="{{old('email')}}"
                required>
              @if($errors->enquiry->first("email"))
              <i class="text-danger font-weight-bold">{{$errors->enquiry->first("email")}}</i>
              @endif
            </div>

            <div class="col-12 form-group py-1">
              <input type="text" name="phone" placeholder="Phone" class="form-control" value="{{old('phone')}}"
                required>
              @if($errors->enquiry->first("phone"))
              <i class="text-danger font-weight-bold">{{$errors->enquiry->first("phone")}}</i>
              @endif
            </div>
            <div class="col-12 form-group py-1">
              <input type="text" name="course_name" placeholder="Course Name" class="form-control"
                value="{{old('course_name')}}" required>
              @if($errors->enquiry->first("course_name"))
              <i class="text-danger font-weight-bold">{{$errors->enquiry->first("course_name")}}</i>
              @endif
            </div>
            <div class="col-12 form-group py-1">
              <textarea id="form_message" class="form-control" name="message" placeholder="Message" rows="4"
                required>{{old("message")}}</textarea>
              @if($errors->enquiry->first("message"))
              <i class="text-danger font-weight-bold">{{$errors->enquiry->first("message")}}</i>
              @endif
            </div>
            @csrf
            <div class="col-12 form-group py-3">
              <button type="submit" name="submit" value="submit" class="btn btn-primary px-4 py-2  "
                style=" background:#162F41; border-radius:24px;"><i class="fa-solid fa-paper-plane"></i> Submit
                Now</button>
            </div>
          </div>

        </form>
      </div>
    </div>
  </div>
</div>
@if(session('status'))
<div id="popupMessage" class="alert alert-{{ session('status') == 'success' ? 'success' : 'danger' }}">
  {{ session('message') }}
</div>
@endif