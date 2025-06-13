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

<section>
  <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      @foreach ($sliders as $key => $slider)
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $key }}"
        class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : '' }}"
        aria-label="Slide {{ $key + 1 }}"></button>
      @endforeach
    </div>
    <div class="carousel-inner">
      @foreach ($sliders as $key => $slider)
      <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
        <img src="{{ Storage::url($slider->image) }}" class="d-block w-100" alt="Slide {{ $key + 1 }}">
      </div>
      @endforeach
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
      data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
</section>


<!-- Stat About Area -->
<section class="about-area ptb-40">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-content ml-15">
          <span>{{$HomeAboutUs->title ?? ''}}</span>
          {!!$HomeAboutUs->content ??'' !!}

          <a href="about.html" class="default-btn">
            Find out more
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="about-img mr-15 pt-3">
          <img src="{{ Storage::url($HomeAboutUs->image) }}" alt="Image" />
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End About Area -->

<!-- Start Study Area -->
<section class="study-area pt-100 pb-70">
  <div class="container">
    <div class="section-title white-title">
      <h2>Our All Courses</h2>
      <p>
        Explore our diverse range of courses designed to cater to every learning need. From beginner to advanced levels,
        discover comprehensive content curated by experts, ensuring a rewarding learning experience for all
      </p>
    </div>

    <div class="row justify-content-center">
      <div class="study-slider owl-carousel owl-theme">
        @foreach ($CoursesDetail as $item)
        <div class="single-study">
          <img src="{{ Storage::url($item->image) }}" alt="Image" />
          <h3>
            <a href="{{route('courses-details', ['id' => $item->id])}}">{{$item->title}}</a>
          </h3>
          <p>
            {!!
            \Illuminate\Support\Str::limit($item->description,
            150) !!}
          </p>

          <a href="{{route('courses-details', ['id' => $item->id])}}" class="read-more">
            Find out more
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
        @endforeach

      </div>
    </div>
  </div>
</section>
<!-- End Study Area -->

<!-- Start Our Campus Information Area -->
<section class="our-campus-information-area pb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-7">
        <div class="campus-img">
          <img src="{{ Storage::url($OurCampu->image) }}" alt="Image" />
        </div>
      </div>

      <div class="col-xl-5">
        <div class="campus-content">
          <span>{{$OurCampu->title ?? ''}}</span>
          {!!$OurCampu->content ??'' !!}

          <a href="{{$OurCampu->link ?? ''}}" class="read-more">
            Find out more
            <span class="ri-arrow-right-line"></span>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Our Campus Information Area -->

<!-- Start Simple Steps Area -->
<section class="simple-steps-area pb-70">
  <div class="container">
    <div class="section-title">
      <h2>{{$AddmissionStepsSection->title}}</h2>
      <p>
        {{$AddmissionStepsSection->subtitle}}
      </p>
    </div>

    <div class="row">
      @foreach ($AddmissionStep as $item)
      <div class="col-lg-3 col-sm-6">
        <div class="single-simple-steps">
          <img src="{{ Storage::url($item->image) }}" alt="Image" />
          <h3>{{$item->title}}</h3>
          {!!$item->subtitle!!}
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- End Simple Steps Area -->

<!-- Start Events Area -->
<section class="events-area bg-color ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-7">
        <div class="events-content ml-15">
          <span>Events</span>
          <h2>Upcoming events</h2>

          <ul class="events-list">
            @foreach ($EventsDetail as $item)
            <li>
              <div class="events-date">
                <span class="mb-2">{{ \Carbon\Carbon::parse($item->start)->format('d M ') }}</span>
                <span>{{ \Carbon\Carbon::parse($item->start)->format('Y') }}</span>
              </div>

              <span>{{$item->category->category}}</span>
              <h3>
                <a href="{{route('events-details', ['id' => $item->id])}}">
                  {{$item->event_title}}
                </a>
              </h3>
              <p>
                {!!
                \Illuminate\Support\Str::limit($item->description,
                220) !!}
              </p>

              <a href="{{route('events-details', ['id' => $item->id])}}" class="read-more">
                Find out more
                <i class="ri-arrow-right-line"></i>
              </a>
            </li>
            @endforeach

            <div class="pagination-area">
              <span class="page-numbers current" aria-current="page">1</span>
              <a href="#" class="page-numbers">2</a>
              <a href="#" class="page-numbers">3</a>

              <a href="#" class="next page-numbers">
                <i class="ri-arrow-right-line"></i>
              </a>
            </div>
          </ul>
        </div>
      </div>

      <div class="col-lg-5">
        <div class="events-timer ml-15">
          <div class="event-img">
            <img src="{{url('website-assets/images/event-img.jpg')}}" alt="Image" />
          </div>

          <span>Next Event</span>

          <div id="timer">
            <div id="days"></div>
            <div id="hours"></div>
            <div id="minutes"></div>
            <div id="seconds"></div>
          </div>

          <a href="application.html" class="default-btn">
            Book now
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Events Area -->

<!-- Stat Admission Area -->
<section class="admission-area ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="admission-img mr-15">
          <img src="{{ Storage::url($AddmissionInformation->image) }}" alt="Image" />
        </div>
      </div>

      <div class="col-lg-6">
        <div class="admission-content ml-15">
          <span>{{$AddmissionInformation->title}}</span>
          {!!$AddmissionInformation->subtitle!!}

          <a href="#" class="default-btn">
            Overview
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Admission Area -->

<!-- Start Find A Courses Area -->
<section class="find-courses-area pb-100">
  <div class="find-courses-bg">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <form class="find-courses-from-bg mr-15">
            <h2>Find a courses</h2>

            <div class="row">
              <div class="col-lg-6 col-sm-6">
                <label class="single-check">
                  Undergraduate
                  <input type="radio" checked="checked" name="radio-2" />
                  <span class="checkmark"></span>
                </label>
              </div>

              <div class="col-lg-6 col-sm-6">
                <label class="single-check">
                  Postgraduate
                  <input type="radio" name="radio-2" />
                  <span class="checkmark"></span>
                </label>
              </div>
            </div>

            <div class="form-group">
              <input class="form-control" type="text" placeholder="Keyword search" />
            </div>

            <div class="form-group">
              <select class="form-control">
                <option value="1">Category course</option>
                <option value="2">Web Design</option>
                <option value="3">Web Developement</option>
                <option value="4">Graphic Design</option>
                <option value="5">App Developement</option>
              </select>
              <i class="ri-arrow-down-s-line"></i>
            </div>

            <div class="form-group">
              <select class="form-control">
                <option value="1">United States</option>
                <!-- <option value="2">العربيّة</option>
										<option value="3">Deutsch</option>
										<option value="4">Português</option>
										<option value="5">简体中文</option> -->
              </select>
              <i class="ri-arrow-down-s-line"></i>
            </div>

            <button type="submit" class="default-btn">
              Search
              <i class="ri-search-line"></i>
            </button>
          </form>
        </div>

        <div class="col-lg-6">
          <div class="ml-15">
            <div class="row">
              @foreach ($Counters as $item)
              <div class="col-lg-6 col-sm-6">
                <div class="single-counter">
                  <img src="{{ Storage::url($item->image) }}" alt="icon">

                  <div class="count-title">
                    <h2>
                      <span class="odometer" data-count="{{$item->number}}">00</span>
                    </h2>
                    <h4>{{$item->title}}</h4>
                  </div>
                </div>
              </div>
              @endforeach

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Find A Courses Area -->

<!-- Start Campus Experience Area -->
<section class="campus-experience-area ptb-100"
  style="background-image: url('{{ Storage::url($StudentsReviewsSection->image) }}')">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="logistics-solutions-img bg-2">
          <div class="video-button">
            <a href="{{$StudentsReviewsSection->link ?? '#'}}" class="popup-youtube video-btn">
              <i class="flaticon-play-button"></i>
            </a>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="campus-experience-slider owl-carousel owl-theme">
          @foreach ($StudentReviews as $StudentReview)
          <div class="single-campus-experience">
            <h3>{{$StudentReview->title}}</h3>
            {!! $StudentReview->content !!}

            <a href="campus-experience.html" class="read-more">
              Find out more
              <i class="ri-arrow-right-line"></i>
            </a>
          </div>
          @endforeach


        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Campus Experience Area -->

<!-- Start Blog Area -->
<section class="blog-area pt-100 pb-70">
  <div class="container">
    <div class="section-title">
      <h2>Academic’s news</h2>
      <p>
        Stay informed with the latest developments, research breakthroughs, and educational insights shaping academia
        today.
      </p>
    </div>

    <div class="row justify-content-md-center">
      @foreach ($BlogsDetail as $item)
      <div class="col-lg-4 col-md-6">
        <div class="single-blog">
          <a href="blog-details.html" class="blog-img">
            <img src="{{ Storage::url($item->image) }}" alt="Image" style="width:415px; height:241px;" />
            <span>{{$item->category->category}}</span>
          </a>

          <div class="blog-content">
            <ul>
              <li>
                <i class="ri-calendar-line"></i>
                <span>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</span>
              </li>
            </ul>

            <h3>
              <a href="{{route('blogs-details', ['id' => $item->id])}}"> {{$item->title}} </a>
            </h3>

            {!!
            \Illuminate\Support\Str::limit($item->description,
            150) !!}
          </div>
        </div>
      </div>
      @endforeach


    </div>
  </div>
</section>
<!-- End Blog Area -->

@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection