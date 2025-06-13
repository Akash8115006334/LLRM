
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
    <div class="page-title-area bg-8">
      <div class="container">
        <div class="page-title-content">
          <h2>Land Completion Certificate</h2>

          <ul>
            <li>
              <a href="{{route('home')}}"> Home </a>
            </li>

            <li class="active">Land Completion Certificate</li>
          </ul>
        </div>
      </div>
    </div>
    <!-- End Page Title Area -->

    <!-- Start Campus information Area -->
    <section class="campus-information-area ptb-100">
      <div class="container">
        <div class="main-default-content">
         <h3>{{$LandCompletion->title}}</h3>
          
          {!!$LandCompletion->content !!}
          <div class="gap-20"></div>
        </div>
      </div>
    </section>
    <!-- End Campus information Area -->
@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection
