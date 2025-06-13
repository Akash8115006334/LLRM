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
<div class="page-title-area bg-22">
  <div class="container">
    <div class="page-title-content">
      <h2>Blog</h2>

      <ul>
        <li>
          <a href="{{route('home')}}"> Home </a>
        </li>

        <li class="active">Blog</li>
      </ul>
    </div>
  </div>
</div>
<!-- End Page Title Area -->

<!-- Start Blog Area -->
<section class="blog-post-area ptb-100">
  <div class="container">
    <div class="row">
      <div class="col-lg-8">
        <div class="row justify-content-md-center">
          @foreach ($BlogsDetail as $item)
          <div class="col-lg-12 col-md-6">
            <div class="single-blog">
              <a href="blog-details.html" class="blog-img">
                <img src="{{ Storage::url($item->image) }}" alt="Image" style="width:855px; height:497px;" />
                <span>{{$item->category->category}}</span>
              </a>

              <div class="blog-content">
                <ul>
                  <li>
                    <i class="ri-calendar-line"></i>
                    <span>{{ \Carbon\Carbon::parse($item->date)->format('d M Y') }}</span>
                  </li>
                </ul>

                <h3>
                  <a href="{{route('blogs-details', ['id' => $item->id])}}">
                    {{$item->title}}
                  </a>
                </h3>

                {!!
                \Illuminate\Support\Str::limit($item->description,
                500) !!}
              </div>
            </div>
          </div>
          @endforeach
          <div class="col-12">
            <div class="pagination-area">
              <a href="#" class="prev page-numbers">
                <i class="ri-arrow-left-line"></i>
              </a>
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
              @foreach ($BlogsDetail as $item)
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
<!-- End Blog Area -->

@endsection
{{-- Page Custome Javascript Section --}}
@section('custom-javascript')

@endsection