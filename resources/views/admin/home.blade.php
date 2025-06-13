@extends("admin.layouts.main")

@section("Page-Title")
@endsection
@section("Page-Description")
@endsection
@section("Page-Keywords")
@endsection
@section("Page-Keywords")
@endsection
@section("main-content")


<div class="pcoded-content">

    <div class="page-header card">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="page-header-title">
                    <i class="feather icon-clipboard bg-c-blue"></i>
                    <div class="d-inline">
                        <h5>Home Page</h5>
                        <span>Here you can add,update and delete home page slider image and home card image and
                            text
                            etc.</span>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">

                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">

                            <div class="row">
                                <div class="col-sm-12">

                                    <div class="card">

                                        <div class="card-block tab-icon">

                                            <div class="row">
                                                <div class="col-lg-12 col-xl-12">

                                                    <ul class="nav nav-tabs md-tabs " role="tablist">

                                                        <li class="nav-item ">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#profile7" role="tab"><i
                                                                    class="icofont icofont-ui-user "></i>Home
                                                                Slider</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#about7"
                                                                role="tab"><i class="icofont icofont-ui-user "></i>About
                                                                Us</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content card-block">

                                                        <div class="tab-pane active " id="profile7" role="tabpanel">
                                                            <form action="{{route('addHomeSliderImage')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row justify-content-center mb-3">
                                                                    <div class="col-md-6">
                                                                        <div class="row">
                                                                            @if (session('success'))
                                                                            <div
                                                                                class="alert alert-success background-success">
                                                                                {{ session('success') }}
                                                                            </div>
                                                                            @endif

                                                                            @if (session('error'))
                                                                            <div
                                                                                class="alert alert-danger background-danger">
                                                                                {{ session('error') }}
                                                                            </div>
                                                                            @endif

                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Upload
                                                                                    Profile Photo <span class="text-danger"> (In jpg,jpeg,png & width:1600px, height:540px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control" required>
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="text-center m-t-20">
                                                                                    <button class="btn btn-primary"
                                                                                        type="submit">Update</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
 </form>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>All Home Banner Slider Image</h5>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div
                                                                                    class="table-responsive  table-striped table-hover table-bordered">
                                                                                    <table class="table table-xs">
                                                                                        <thead>
                                                                                            <tr>
                                                                                                <th>S.No</th>
                                                                                                <th>SliderImage</th>

                                                                                                <th>Action</th>
                                                                                            </tr>
                                                                                        </thead>
                                                                                        <tbody>
                                                                                            @php
                                                                                            $sno = 0;
                                                                                            @endphp

                                                                                            @if (!empty($sliders))

                                                                                            @foreach ($sliders as $slider)
                                                                                            @php
                                                                                            $sno++;
                                                                                            @endphp
                                                                                            <tr>
                                                                                                <th scope="row">
                                                                                                    {{ $sno }}
                                                                                                </th>
                                                                                                <td><img src="{{ Storage::url($slider->image) }}"
                                                                                                        class="rounded"
                                                                                                        alt="profile image"
                                                                                                        width="100"
                                                                                                        height="40">
                                                                                                </td>
                                                                                                <td>
                                                                                                    <form
                                                                                                        action="{{ route('deleteHomeSliderImage', ['id' => $slider->id]) }}"
                                                                                                        method="post">
                                                                                                        @csrf
                                                                                                        @method('DELETE')
                                                                                                        <button
                                                                                                            type="submit"
                                                                                                            class="btn btn-danger"><i
                                                                                                                class="feather icon-trash m-0 p-0"></i></button>
                                                                                                    </form>
                                                                                                </td>
                                                                                            </tr>
                                                                                            @endforeach
                                                                                            @else
                                                                                            <tr>
                                                                                                <td colspan="3">
                                                                                                    <h6>No Record Found
                                                                                                    </h6>
                                                                                                </td>
                                                                                            </tr>
                                                                                            @endif


                                                                                        </tbody>
                                                                                    </table>
                                                                                </div>


                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                           
                                                        </div>
                                                        <div class="tab-pane " id="about7" role="tabpanel">
                                                            <form action="{{route('addHomeAboutUs')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="aboutId"
                                                                    value="{{ $HomeAboutUs->id ??'' }}">
                                                                <div class="row justify-content-center mb-3">
                                                                    <div class="col-md-9">
                                                                        <div class="row">
                                                                            @if (session('success'))
                                                                            <div
                                                                                class="alert alert-success background-success">
                                                                                {{ session('success') }}
                                                                            </div>
                                                                            @endif

                                                                            @if (session('error'))
                                                                            <div
                                                                                class="alert alert-danger background-danger">
                                                                                {{ session('error') }}
                                                                            </div>
                                                                            @endif

                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Section
                                                                                    Title</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $HomeAboutUs->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Image  <span class="text-danger"> (In jpg,jpeg,png & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- YourBladeFile.blade.php -->

                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Content</label>
                                                                                <textarea rows="8" name="content"
                                                                                    id="ckeditor" class="form-control"
                                                                                    required>{{ old('content', $HomeAboutUs->content ?? '' )}}</textarea>
                                                                                @error('content')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                <div class="text-center m-t-20">
                                                                                    <button class="btn btn-primary"
                                                                                        type="submit"
                                                                                        name="submit">Update</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-3">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>About Image</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($HomeAboutUs->image))
                                                                                <img src="{{ Storage::url($HomeAboutUs->image) }}"
                                                                                    alt="profile image" width="100">
                                                                                @else
                                                                                <img src="{{ url('admin-assets/assets/images/user.png') }}"
                                                                                    alt="profile image" width="100">
                                                                                @endif

                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <div id="styleSelector">
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
@endsection

{{-- Page Custome Javascript Section --}}
@section("custom-javascript")
<script>
    CKEDITOR.replace('ckeditor');
</script>
@endsection