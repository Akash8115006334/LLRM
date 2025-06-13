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
      <h2>Laboratories</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Laboratories</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Gallery Area -->
<div class="gallery-area gallery-popup ptb-100">
  <div class="container">
    <div class="row justify-content-center">
      @foreach ($LaboratoriesCard as $item)
      <div class="col-lg-4 col-md-6">
        <div class="single-gallery">
          <h3>{{$item->title}}</h3>
          <img src="{{Storage::url($item->image)}}" alt="Image" />
          <div class="gallery-item-content">
            <div class="gallery-link">
              <a href="{{Storage::url($item->image)}}">
                <i class="ri-add-fill"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="single-gallery">
          {!!$item->description!!}
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