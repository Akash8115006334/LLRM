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
                        <h5>Our Managment Members Page</h5>
                        <span>Here you can add,update and delete Managment Members content
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

                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#home7" role="tab"><i
                                                                    class="feather icon-power"></i>Managment
                                                                Member</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content card-block">

                                                        <div class="tab-pane active" id="home7" role="tabpanel">

                                                            <div class="row mb-3 ">
                                                                <div class="col-md-9">
                                                                    @if (session('success'))
                                                                    <div class="alert alert-success background-success">
                                                                        {{ session('success') }}
                                                                    </div>
                                                                    @endif

                                                                    @if (session('error'))
                                                                    <div class="alert alert-danger background-danger">
                                                                        {{ session('error') }}
                                                                    </div>
                                                                    @endif
                                                                    <form action="{{route('editManagmentMember',['id' => $OurManagement->id])}}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Name</label>

                                                                                <input type="text" name="name"
                                                                                    class="form-control"
                                                                                    value="{{ old('name', $OurManagement->name ?? '') }}"
                                                                                    required>
                                                                                @error('name')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Designation
                                                                                </label>

                                                                                <input type="text" name="designation"
                                                                                    class="form-control"
                                                                                    value="{{ old('designation',$OurManagement->designation ?? '')}}"
                                                                                    required>
                                                                                @error('designation')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Phone</label>

                                                                                <input type="text" name="phone"
                                                                                    class="form-control"
                                                                                    value="{{ old('phone',$OurManagement->phone ?? '')}}"
                                                                                    required>
                                                                                @error('phone')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Upload
                                                                                     Photo <span class="text-danger"> (In jpg,jpeg,png & width:450px, height:450px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Address</label>

                                                                                <textarea name="address"
                                                                                    class="form-control" rows="5"
                                                                                    required>{{ old('address',$OurManagement->address ?? '')}}</textarea>
                                                                                @error('address')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="text-center m-t-20">
                                                                                <button class="btn btn-primary"
                                                                                    name="submit">Update</button>
                                                                            </div>
                                                                        </div>
                                                                    </form>
                                                                </div>
                                                                <div class="col-md-3">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>Image</h5>
                                                                        </div>
                                                                        <div class="card-block text-center">

                                                                            <img src="{{ Storage::url($OurManagement->image) }}"
                                                                                alt="profile image"
                                                                                style="width: 225px;">

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
@endsection