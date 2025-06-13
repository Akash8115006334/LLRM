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
<div class="page-title-area bg-1">
  <div class="container">
    <div class="page-title-content">
      <h2>About</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">About</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Stat About Area -->
<section class="about-area ptb-100">
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

<!-- Start Counter Area -->
<section class="counter-area bg-color-f8fafb pt-100 pb-70">
  <div class="container">
    <div class="counter-bg">
      <div class="row">
        @foreach ($Counters as $item)
        <div class="col-lg-3 col-sm-6">
          <div class="single-counter bg-style">
           <img src="{{ Storage::url($item->image) }}" alt="icon" >

            <h2>
              <span class="odometer" data-count="{{$item->number}}">00</span>
            </h2>
            <h4>{{$item->title}}</h4>
          </div>
        </div>
        @endforeach



      </div>

      <div class="shape counter-shape-1">
        <img src="{{url('website-assets/images/counter-shape-1.png')}}" alt="Image" />
      </div>
      <div class="shape counter-shape-2">
        <img src="{{url('website-assets/images/counter-shape-2.png')}}" alt="Image" />
      </div>
    </div>
  </div>
</section>
<!-- End Counter Area -->
<!-- Stat Why Choose Us Area -->
<section class="about-area ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6">
        <div class="about-img mr-15 pt-3">
          <img src="{{ Storage::url($WhyChooseUs->image) }}" alt="Image" />
        </div>
      </div>
      <div class="col-lg-6">
        <div class="about-content ml-15">
          <span>{{$WhyChooseUs->title ?? ''}}</span>
          {!!$WhyChooseUs->content ??'' !!}

        </div>
      </div>


    </div>
  </div>
</section>
<!-- End Why Choose Us Area -->
<section class="about-area ptb-100">
  <div class="container">
    <div class="row align-items-center">


      <div class="col-xl-6">
        <div class="about-content ml-15">
          <span>{{$OurMission->title ?? ''}}</span>
          {!!$OurMission->content ??'' !!}


        </div>
      </div>
      <div class="col-xl-6">
        <div class="about-img-two mr-15">
          <img src="{{ Storage::url($OurMission->image) }}" alt="Image">
        </div>
      </div>
    </div>
  </div>
</section>
<section class="about-area ptb-100">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-xl-6">
        <div class="about-img-two mr-15">
          <img src="{{ Storage::url($OurVission->image) }}" alt="Image">
        </div>
      </div>

      <div class="col-xl-6">
        <div class="about-content ml-15">
          <span>{{$OurVission->title ?? ''}}</span>
          {!!$OurVission->content ??'' !!}


        </div>
      </div>
    </div>
  </div>
</section>
<!-- Start Our Campus Information Area -->
<section class="our-campus-information-area ptb-100">
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

<!-- Start Team Area -->
<section class="team-area team-area-three pb-70">
  <div class="container">
    <div class="section-title">
      <h2>{{$FacultieSection->title}}</h2>
      {{$FacultieSection->subtitle}}
    </div>

    <div class="row justify-content-md-center">
      @foreach ($OurFacultie as $item)
      <div class="col-lg-4 col-md-6">
        <div class="single-team-member">
          <img src="{{ Storage::url($item->image) }}" alt="Image" style="width:400px; height:400px; " />

          <div class="team-content">
            <div class="team-social">
              <a href="#" class="control">
                <i class="ri-share-fill"></i>
              </a>

              <ul>
                <li>
                  <a href="https://www.facebook.com/" target="_blank">
                    <i class="ri-facebook-fill"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.instagram.com/" target="_blank">
                    <i class="ri-instagram-line"></i>
                  </a>
                </li>
                <li>
                  <a href="https://www.linkedin.com/" target="_blank">
                    <i class="ri-linkedin-fill"></i>
                  </a>
                </li>
                <li>
                  <a href="https://twitter.com/" target="_blank">
                    <i class="ri-twitter-fill"></i>
                  </a>
                </li>
              </ul>
            </div>

            <div class="team-name">
              <h3>{{$item->name}}</h3>
              <span>{{$item->designation}}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach
    </div>

  </div>
</section>
<!-- End Team Area -->

<!-- Start Campus Experience Area -->
<section class="campus-experience-area-style pb-100">
  <div class="container">
    <div class="campus-experience-bg ptb-100"
      style="background-image: url('{{ Storage::url($StudentsReviewsSection->image) }}')">
      <div class="campus-experience-slider owl-carousel owl-theme">
        @foreach ($StudentReviews as $StudentReview)
        <div class="single-campus-experience">

          <h3>{{$StudentReview->title}}</h3>
          {!! $StudentReview->content !!}
          <a href="#" class="default-btn">
            Find out more
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
        @endforeach
      </div>
    </div>
  </div>
</section>
<!-- End Campus Experience Area -->


@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection