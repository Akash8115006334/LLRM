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
<div class="page-title-area bg-5">
  <div class="container">
    <div class="page-title-content">
      <h2>Events</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Events</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Events Area -->
<section class="events-area events-area-style-two ptb-100">
  <div class="container">
    <div class="row">
      {{-- <div class="col-lg-5">
        <div class="events-timer mr-15">
          <div class="event-img">
            <img src="assets/images/event-img.jpg" alt="Image" />
          </div>

          <span>Next Event</span>

          <div id="timer">
            <div id="days"></div>
            <div id="hours"></div>
            <div id="minutes"></div>
            <div id="seconds"></div>
          </div>

          <a href="#" class="default-btn">
            Book now
            <i class="ri-arrow-right-line"></i>
          </a>
        </div>
      </div> --}}

      <div class="col-lg-12">
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
    </div>
  </div>
</section>
<!-- End Events Area -->
@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection