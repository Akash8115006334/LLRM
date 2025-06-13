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
<div class="page-title-area bg-23">
  <div class="container">
    <div class="page-title-content">
      <h2>Blog details</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Blog details</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Details Area -->
<section class="blog-details-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="blog-details-content mr-15">
          <div class="blog-details-img">
            <img src="{{ Storage::url($BlogsDetail->image) }}" alt="Image" style="width:855px; height:497px;" />
          </div>

          <div class="blog-top-content">
            <div class="blog-content">
              <ul class="admin">
                <li>
                  <a href="#">
                    <i class="ri-user-3-fill"></i>
                    {{$BlogsDetail->authorName}}
                  </a>
                </li>

                <li>
                  <i class="ri-calendar-2-line"></i>
                  {{\Carbon\Carbon::parse($BlogsDetail->date)->format('d M Y')}}
                </li>


              </ul>

              <h3>{{$BlogsDetail->title}}</h3>

              {!!$BlogsDetail->description!!}
              <div class="gap-mb-20"></div>
            </div>


          </div>




        </div>
      </div>

      <div class="col-lg-4">
        <div class="widget-sidebar ml-15">
          <div class="sidebar-widget search">
            <form class="search-form">
              <input class="form-control" name="search" placeholder="Search..." type="text" />
              <button class="search-button" type="submit">
                <i class="ri-search-line"></i>
              </button>
            </form>
          </div>

          <div class="sidebar-widget categories">
            <h3>Categories</h3>

            <ul>
              @foreach ($BlogsCategory as $item)
              <li>
                <a href="{{route('blogs')}}">
                  {{$item->category}}
                  <i class="ri-arrow-right-s-line"></i>
                </a>
              </li>
              @endforeach
            </ul>
          </div>

          <div class="sidebar-widget recent-post">
            <h3 class="widget-title">Latest news</h3>

            <ul>
              @foreach ($BlogsDetails as $item)
              <li>
                <a href="{{route('blogs-details', ['id' => $item->id])}}">
                  {{$item->title}}
                  <img src="{{ Storage::url($item->image) }}" alt="Image" style="width: 80px; height:80px;" />
                </a>
                <span>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</span>
              </li>
              @endforeach
            </ul>
          </div>


          <div class="sidebar-widget tags mb-0">
            <h3>Tags</h3>

            <ul>
              @foreach ($BlogsTag as $item)
              <li>
                <a href="{{route('blogs')}}">{{$item->tags}}</a>
              </li>
              @endforeach


            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- End Blog Details Area -->

@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection