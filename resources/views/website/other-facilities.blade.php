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
            <input type="text" name="Search" placeholder="Search for..." class="form-control">

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
<div class="page-title-area bg-10">
  <div class="container">
    <div class="page-title-content">
      <h2>Other facilities</h2>

      <ul>
        <li>
          <a href="{{route('home')}}">
            Home
          </a>
        </li>

        <li class="active">Other facilities</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Campus Experience Area -->
<section class="campus-experiences-area pt-100 pb-40">
  <div class="container">
    <div class="main-default-content">
      {!! $FacilitiesSectionDetail->additionalContent !!}
      <div class="gap-20"></div>
      <hr>

    </div>
  </div>
</section>
<!-- End Campus Experience Area -->

<!-- Start Simple Steps Area -->
<section class="simple-steps-area  pb-70">
  <div class="container">
    <div class="section-title">
      <h3>{{$FacilitiesSectionDetail->title}}</h3>
      <p> {!! $FacilitiesSectionDetail->subtitle !!}</p>
    </div>

    <div class="row">
      @foreach ($FacilitiesCard as $item)
      <div class="col-lg-3 col-sm-6">
        <div class="single-simple-steps icon-bg-style" "style=" width: 306px; height: 360px;">
          <img src="{{Storage::url($item->image)}}" alt="Image" />
          <h3>{{$item->title}}</h3>
          <p>{!!$item->description!!}</p>
        </div>
      </div>
      @endforeach

    </div>
  </div>
</section>
<!-- End Simple Steps Area -->

@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection