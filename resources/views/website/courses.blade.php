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
<div class="page-title-area bg-2">
  <div class="container">
    <div class="page-title-content">
      <h2>Courses</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Courses</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- End Find A Courses Area -->

<!-- Start Study Area -->
<section class="studys-area study-area-style-two ptb-100">
  <div class="container">
    <div class="section-title">
      <h2>Our All Courses</h2>
      <p>
        Explore our diverse range of courses designed to cater to every learning need. From beginner to advanced levels,
        discover comprehensive content curated by experts, ensuring a rewarding learning experience for all
      </p>
    </div>

    <div class="row justify-content-center">
      @foreach ($CoursesDetail as $item)
      <div class="col-lg-3 col-sm-6">
        <div class="single-study style-img">
          <a href="{{route('courses-details', ['id' => $item->id])}}">
            <img src="{{ Storage::url($item->image) }}" alt="Image" />
          </a>

          <div class="single-study-content">

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
        </div>
      </div>
      @endforeach

      <div class="col-12">
        <div class="study-load">
          <a href="#" class="default-btn">
            Load more
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Study Area -->

<!-- Start Study Area -->
<section class="studys-area pb-70">
  <div class="container">
    <div class="section-title">
      <h2>Demandable courses</h2>
      <p>
        Explore our diverse range of courses designed to cater to every learning need. From beginner to advanced levels,
        discover comprehensive content curated by experts, ensuring a rewarding learning experience for all
      </p>
    </div>

    <div class="row justify-content-center">
      @php $count = count($CoursesDetail); @endphp

      @for ($i = $count - 3; $i < $count; $i++) @if ($i>= 0)
        <div class="col-lg-4 col-md-6">
          <div class="single-study study-f3f3f4">
            <img src="{{ Storage::url($item->image) }}" alt="Image" />
            <h3>
              <a href="{{route('courses-details', ['id' => $item->id])}}">{{$item->title}}</a>
            </h3>
            <p>
              {!!
              \Illuminate\Support\Str::limit($item->description,
              150) !!}
            </p>

            <a href="#" class="read-more">
              Find out more
              <span class="ri-arrow-right-line"></span>
            </a>
          </div>
        </div>
        @endif
        @endfor

    </div>
  </div>
</section>
<!-- End Study Area -->

<!-- End Event Details Area -->
@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection