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
<div class="page-title-area bg-20">
  <div class="container">
    <div class="page-title-content">
      <h2>Event details</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Event details</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Event Details Area -->
<section class="event-details-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="main-default-content mr-15">
          <span class="top-title">{{$EventsDetail->category->category}}</span>
          <h2>{{$EventsDetail->category->category}}</h2>

          <ul class="date-time">
            <li>
              <i class="ri-calendar-2-line"></i>
              {{ \Carbon\Carbon::parse($EventsDetail->start)->format('d M Y') }}
            </li>
            <li>
              <i class="ri-time-line"></i>
              {{ \Carbon\Carbon::parse($EventsDetail->start_time)->format('h:i A') }} -
              {{ \Carbon\Carbon::parse($EventsDetail->end_time)->format('h:i A') }}
            </li>
            <li>
              <i class="ri-map-pin-2-line"></i>
              {{$EventsDetail->city.",".$EventsDetail->state.",".$EventsDetail->country}}
            </li>
          </ul>

          <div class="gap-20"></div>

          <img src="{{ Storage::url($EventsDetail->image) }}" alt="Image" />

          <div class="gap-20"></div>

          <h3>Event Description</h3>
          {!! $EventsDetail->description !!}
        </div>
      </div>

      <div class="col-lg-4">
        <div class="event-sidebar ml-15">
          <div class="event-single-sidebar">
            <h3>{{$EventsDetail->event_subtitle_desc}}</h3>

            <ul>
              <li>
                Start
                <span>{{ \Carbon\Carbon::parse($EventsDetail->start)->format('d M Y') }}</span>
              </li>
              <li>
                End
                <span>{{ \Carbon\Carbon::parse($EventsDetail->end)->format('d M Y') }}</span>
              </li>
              <li>
                Event Category
                <span>{{$EventsDetail->category->category}}</span>
              </li>
              <li>
                Location
                <span>{{$EventsDetail->country}}</span>
              </li>
              <li>
                Total slot
                <span>{{$EventsDetail->total_slot}}</span>
              </li>
              <li>
                Booked Slot
                <span>{{$EventsDetail->booked_slot}}</span>
              </li>
              <li>
                Website
                <a href="{{$EventsDetail->website}}">{{$EventsDetail->website}}</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Event Details Area -->
@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection