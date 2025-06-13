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
<div class="page-title-area bg-21">
  <div class="container">
    <div class="page-title-content">
      <h2>Courses details</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Courses details</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Courses Details Area -->
<section class="courses-details-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="main-default-content mr-15">
          <h2>{{$CoursesDetail->title}}</h2>

          <div class="gap-20"></div>

          <img src="{{ Storage::url($CoursesDetail->image) }}" alt="Image" />

          <div class="gap-20"></div>

          {!!
          $CoursesDetail->description !!}


          <div class="gap-20"></div>
        </div>
      </div>

      <div class="col-lg-4">
        <div class="courses-sidebar ml-15">
          <div class="courses-single-sidebar mb-0">
            <h3>{{$CoursesDetail->event_subtitle_desc}}</h3>

            <ul>
              <li>
                Modes of study
                <span>{{$CoursesDetail->modes_of_study}}</span>
              </li>
              <li>
                Duration
                <span>{{$CoursesDetail->duration}}</span>
              </li>
              <li>
                Academic direction
                <span>{{$CoursesDetail->academic_direction}}</span>
              </li>
              <li>
                Method
                <span>{{$CoursesDetail->method}}</span>
              </li>
              <li>
                Campus
                <span>{{$CoursesDetail->campus}}</span>
              </li>
              <li>
                Total Sheets
                <span>{{$CoursesDetail->total_sheet}}</span>
              </li>
              <li>
                Booked Sheets
                <span>{{$CoursesDetail->booked_sheet}}</span>
              </li>
              <li>
                Avilable Sheets
                <span>{{$CoursesDetail->seats_avilable}}</span>
              </li>
              <li>
                Semester Start dates
                <span>{{$CoursesDetail->semester_start_date}}</span>
              </li>
              <li>
                Fees (First year)
                <span>{{$CoursesDetail->first_year_fee}}</span>
              </li>
              <li>
                Fees (Total year)
                <span>{{$CoursesDetail->Course_total_fee}}</span>
              </li>
              <li>
                Language
                <span>{{$CoursesDetail->language}}</span>
              </li>

            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Courses Details Area -->

<!-- End Event Details Area -->
@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection