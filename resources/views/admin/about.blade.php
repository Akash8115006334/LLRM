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
                        <h5>About Page</h5>
                        <span>Here you can update About content Mission, Vission,Why Choose Us Section
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
                                                                href="#about7" role="tab"><i
                                                                    class="icofont icofont-ui-user "></i>Why Choose Us
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#mission7"
                                                                role="tab"><i class="icofont icofont-ui-user "></i>Our
                                                                Mission
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#vission7"
                                                                role="tab"><i class="icofont icofont-ui-user "></i>Our
                                                                Vission
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#ourcampus7"
                                                                role="tab"><i class="icofont icofont-ui-user "></i>Our
                                                                Campus
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content card-block">
                                                        <div class="tab-pane active" id="about7" role="tabpanel">
                                                            <form action="{{route('addWhyChooseUs')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ $WhyChooseUs->id ??'' }}">
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
                                                                                    value="{{ old('title', $WhyChooseUs->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Image <span class="text-danger"> (In jpg,jpeg,png & width:700px, height:500px & size < 2mb)</span></label>

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
                                                                                    required>{{ old('content', $WhyChooseUs->content ?? '' )}}</textarea>
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
                                                                                @if(!empty($WhyChooseUs->image))
                                                                                <img src="{{ Storage::url($WhyChooseUs->image) }}"
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
                                                        <div class="tab-pane " id="mission7" role="tabpanel">
                                                            <form action="{{route('addOurMission')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ $OurMission->id ??'' }}">
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
                                                                                    value="{{ old('title', $OurMission->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Image <span class="text-danger"> (In jpg,jpeg,png & width:700px, height:500px & size < 2mb)</span></label>

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
                                                                                    id="ourMission" class="form-control"
                                                                                    required>{{ old('content', $OurMission->content ?? '' )}}</textarea>
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
                                                                                <h5>Our Mission Image</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($OurMission->image))
                                                                                <img src="{{ Storage::url($OurMission->image) }}"
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
                                                        <div class="tab-pane " id="vission7" role="tabpanel">
                                                            <form action="{{route('addOurVission')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ $OurVission->id ??'' }}">
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
                                                                                    value="{{ old('title', $OurVission->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Image <span class="text-danger"> (In jpg,jpeg,png & width:700px, height:500px & size < 2mb)</span></label>

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
                                                                                    id="ourVission" class="form-control"
                                                                                    required>{{ old('content', $OurVission->content ?? '' )}}</textarea>
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
                                                                                <h5>Our Vission Image</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($OurVission->image))
                                                                                <img src="{{ Storage::url($OurVission->image) }}"
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
                                                        <div class="tab-pane " id="ourcampus7" role="tabpanel">
                                                            <form action="{{route('addOurCampus')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ $OurCampu->id ??'' }}">
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
                                                                                    value="{{ old('title', $OurCampu->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Link</label>

                                                                                <input type="text" name="link"
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $OurCampu->link ?? '' )}}">
                                                                                @error('link')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Image <span class="text-danger"> (In jpg,jpeg,png & width:735px, height:552px & size < 2mb)</span></label>

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
                                                                                    id="OurCampu" class="form-control"
                                                                                    required>{{ old('content', $OurCampu->content ?? '' )}}</textarea>
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
                                                                                <h5>Our Campuse</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($OurCampu->image))
                                                                                <img src="{{ Storage::url($OurCampu->image) }}"
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
<script>
    CKEDITOR.replace('ourMission');
</script>
<script>
    CKEDITOR.replace('ourVission');
</script>
<script>
    CKEDITOR.replace('OurCampu');
</script>
@endsection