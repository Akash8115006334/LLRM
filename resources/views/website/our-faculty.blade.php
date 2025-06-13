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
<div class="page-title-area bg-3">
  <div class="container">
    <div class="page-title-content">
      <h2>Our Faculty</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Our Faculty</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Team Area -->
<section class="team-area-three ptb-100">
  <div class="container">
    <div class="section-title">
      <h2>{{$FacultieSection->title}}</h2>
      {{$FacultieSection->subtitle}}
    </div>

    <div class="row justify-content-md-center">
      @foreach ($OurFacultie as $item)

      <div class="col-lg-4 col-md-6">
        <div class="single-team-member">
          <img src="{{ Storage::url($item->image) }}" alt="Image" style="width:400px; height:400px; "/>

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
              <span>{{$item->address}}</span>
              <span>{{$item->phone}}</span>
            </div>
          </div>
        </div>
      </div>
      @endforeach



      <div class="col-12">
        <div class="pagination-area">
          <span class="page-numbers current" aria-current="page">1</span>
          <a href="#" class="page-numbers">2</a>
          <a href="#" class="page-numbers">3</a>

          <a href="#" class="next page-numbers">
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Team Area -->
@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection