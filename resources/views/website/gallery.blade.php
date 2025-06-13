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
<div class="page-title-area bg-4">
  <div class="container">
    <div class="page-title-content">
      <h2>Gallery</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Gallery</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->
<!-- Start Banner Area -->
<section class="banner-area bg-1 jarallax" data-jarallax='{"speed": 0.3}' style="padding-top: 50px">
  <div class="container-fluid">
    <div class="section-title">
      <span>
        <hr />
      </span>
      <h3>{{$section->title ?? ''}}</h3>
      <span>
        <hr />
      </span>
      <p>
        {{$section->subtitle ?? ''}}
      </p>
    </div>
    <div class="row">
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
    </div>
  </div>
</section>
<!-- End Banner Area -->
<!-- Start Gallery Area -->
<div class="gallery-area gallery-popup pb-100 pt-50">
  <div class="container">
    <div class="row justify-content-center">
      @foreach ($cards as $card)
      <div class="col-lg-4 col-md-6">
        <div class="single-gallery">
          <img src="{{ Storage::url($card->image) }}" alt="Image" />
          <div class="gallery-item-content">
            <div class="gallery-link">
              <a href="{{ Storage::url($card->image) }}">
                <i class="ri-add-fill"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="single-gallery">
          {{$card->description }}
        </div>
      </div>
      @endforeach
      <div class="cal-12">
        <div class="gallery-btn">
          <a href="#" class="default-btn load-more">
            <span>
              Load more
              <i class="ri-arrow-right-line"></i>
            </span>
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- End Gallery Area -->

@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection