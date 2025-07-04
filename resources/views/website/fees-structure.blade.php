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
<div class="page-title-area bg-8">
  <div class="container">
    <div class="page-title-content">
      <h2>Fee Structure</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Fee Structure</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Campus information Area -->
<section class="campus-information-area ptb-100">
  <div class="container">
    <div class="main-default-content">
      <h3 class="">{{$UndertakingSection->title}}</h3>
      <p class="">{{$UndertakingSection->subtitle}}</p>
      <div class="gap-20"></div>
      <div class="row justify-content-center">
        @foreach ($Undertaking as $item)
        <div class="col-lg-4 col-md-6">
          <div class="card p-4">
          <div class="single-gallery img-gallery-style">
            <embed src="{{ Storage::url($item->image) }}" type="application/pdf" style="width: 100%; height: 549px;" />
          </div>
          <h3 class="text-center m-0">{{$item->title}}</h3>
          </div>
        </div>
        @endforeach


      </div>
    </div>
  </div>
</section>
<!-- End Campus information Area -->

@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection