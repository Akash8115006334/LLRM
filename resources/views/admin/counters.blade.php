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
                        <h5>Counter Section</h5>
                        <span>Here you can update Counter Section content
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
                                                                    class="icofont icofont-ui-user "></i>1st Counter
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#mission7"
                                                                role="tab"><i class="icofont icofont-ui-user "></i>2nd
                                                                Counter
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#vission7"
                                                                role="tab"><i class="icofont icofont-ui-user "></i>3rd
                                                                Counter
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item ">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#ourcampus7"
                                                                role="tab"><i class="icofont icofont-ui-user "></i>4th
                                                                Counter
                                                            </a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content card-block">
                                                        <div class="tab-pane active" id="about7" role="tabpanel">
                                                            <form action="{{route('addCounters')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ !empty($counter1) && $counter1->id == 1 ? $counter1->id : '' }}">
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
                                                                                    class="form-label col-form-label">Counter
                                                                                    Name</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $counter1->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Counter
                                                                                    Total Number</label>

                                                                                <input type="text" name="number"
                                                                                    class="form-control"
                                                                                    value="{{ old('number', $counter1->number ?? '' )}}">
                                                                                @error('number')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Icon Image <span class="text-danger"> (In jpg,jpeg,png & width:64px, height:64px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- YourBladeFile.blade.php -->



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
                                                                                <h5>Website Logo</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($counter1->image))
                                                                                <img src="{{ Storage::url($counter1->image) }}"
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
                                                            <form action="{{route('addCounters')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ !empty($counter2) && $counter2->id == 2 ? $counter2->id : '' }}">
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
                                                                                    class="form-label col-form-label">Counter
                                                                                    Name</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $counter2->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Counter
                                                                                    Total Number</label>

                                                                                <input type="text" name="number"
                                                                                    class="form-control"
                                                                                    value="{{ old('number', $counter2->number ?? '' )}}">
                                                                                @error('number')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Icon Image <span class="text-danger"> (In jpg,jpeg,png & width:64px, height:64px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- YourBladeFile.blade.php -->


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
                                                                                <h5>Website Logo</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($counter2->image))
                                                                                <img src="{{ Storage::url($counter2->image) }}"
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
                                                            <form action="{{route('addCounters')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ !empty($counter3) && $counter3->id == 3 ? $counter3->id : '' }}">
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
                                                                                    class="form-label col-form-label">Counter
                                                                                    Name</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $counter3->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Counter
                                                                                    Total Number</label>

                                                                                <input type="text" name="number"
                                                                                    class="form-control"
                                                                                    value="{{ old('number', $counter3->number ?? '' )}}">
                                                                                @error('number')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Icon Image <span class="text-danger"> (In jpg,jpeg,png & width:64px, height:64px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- YourBladeFile.blade.php -->


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
                                                                                <h5>Website Logo</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($counter3->image))
                                                                                <img src="{{ Storage::url($counter3->image) }}"
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
                                                            <form action="{{route('addCounters')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ !empty($counter4) && $counter4->id == 4 ? $counter4->id : '' }}">
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
                                                                                    class="form-label col-form-label">Counter
                                                                                    Name</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $counter4->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Counter
                                                                                    Total Number</label>

                                                                                <input type="text" name="number"
                                                                                    class="form-control"
                                                                                    value="{{ old('number', $counter4->number ?? '' )}}">
                                                                                @error('number')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Icon Image <span class="text-danger"> (In jpg,jpeg,png & width:64px, height:64px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <!-- YourBladeFile.blade.php -->
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
                                                                                <h5>Website Logo</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($counter4->image))
                                                                                <img src="{{ Storage::url($counter4->image) }}"
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