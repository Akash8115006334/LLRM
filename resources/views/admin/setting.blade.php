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
                        <h5>Website Basic Settings</h5>
                        <span>Here you can update website setting, social media links, user info, login details
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
                                                                href="#profile7" role="tab"><i
                                                                    class="icofont icofont-ui-user "></i>Profile</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#home7"
                                                                role="tab"><i class="feather icon-power"></i>Change
                                                                Password</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#media7"
                                                                role="tab"><i
                                                                    class="icofont icofont-ui-settings"></i>Social
                                                                Media</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link" data-bs-toggle="tab" href="#settings7"
                                                                role="tab"><i
                                                                    class="icofont icofont-ui-settings"></i>Settings</a>
                                                            <div class="slide"></div>
                                                        </li>

                                                    </ul>

                                                    <div class="tab-content card-block">
                                                        <div class="tab-pane active" id="profile7" role="tabpanel">
                                                            <form action="{{route('updateUserInfo')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row justify-content-center mb-3">
                                                                    <div class="col-md-7">
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
                                                                            @php
                                                                            $fullName = $user->name;
                                                                            $nameParts = explode(' ', $fullName);
                                                                            $firstName = $nameParts[0];
                                                                            $lastName = $nameParts[1];
                                                                            @endphp
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label  col-form-label">First
                                                                                    Name</label>

                                                                                <input type="text" name="firstName"
                                                                                    value="{{ old('firstName', $firstName ?? '' )}}"
                                                                                    class="form-control" required>
                                                                                @error('firstName')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Last
                                                                                    Name</label>

                                                                                <input type="text" name="lastName"
                                                                                    value="{{ old('lastName', $lastName ?? '' )}}"
                                                                                    class="form-control">
                                                                                @error('lastName')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Phone
                                                                                    Number</label>

                                                                                <input type="text" name="mobile_no"
                                                                                    value="{{ old('mobile_no', $user->mobile_no ?? '' )}}"
                                                                                    class="form-control" required>
                                                                                @error('mobile_no')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Email
                                                                                    Id</label>

                                                                                <input type="email" name="email"
                                                                                    value="{{ old('email', $user->email ?? '' )}}"
                                                                                    class="form-control" required>
                                                                                @error('email')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Upload
                                                                                    Profile Photo</label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                        </div>

                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>Profile Photo</h5>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="text-center mb-2">
                                                                                    @if(!empty($user->image))
                                                                                    <img src="{{ Storage::url($user->image) }}"
                                                                                        alt="profile image" width="100">
                                                                                    @else
                                                                                    <img src="{{ url('admin-assets/assets/images/user.png') }}"
                                                                                        alt="profile image" width="100">
                                                                                    @endif
                                                                                </div>

                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="text-center m-t-20">
                                                                            <button class="btn btn-primary"
                                                                                type="submit">Update</button>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane" id="home7" role="tabpanel">
                                                            <form action="{{route('updatePassword')}}" method="post">
                                                                @csrf
                                                                <div class="row mb-3 ">
                                                                    <div class="col-md-7">
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
                                                                        <div class="row">
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Current
                                                                                    Password</label>

                                                                                <input type="text" name="password"
                                                                                    class="form-control" required>
                                                                                @error('password')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">New
                                                                                    Password</label>

                                                                                <input type="text" name="newpassword"
                                                                                    class="form-control" required>
                                                                                @error('newpassword')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Confirm
                                                                                    Password</label>

                                                                                <input type="text"
                                                                                    name="confirmPassword"
                                                                                    class="form-control" required>
                                                                                @error('confirmPassword')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="text-center m-t-20">
                                                                                <button class="btn btn-primary"
                                                                                    name="submit">Update</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane" id="media7" role="tabpanel">
                                                            <form action="{{route('updateMedia')}}" method="post">
                                                                @csrf
                                                                <input type="hidden" name="socialMediaId"
                                                                    value="{{ $socialMedia->id ??'' }}">
                                                                <div class="row mb-3 ">
                                                                    <div class="col-md-12">
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
                                                                                    class="form-label col-form-label">Facebook
                                                                                    URL</label>
                                                                                <input type="text" name="facebook"
                                                                                    value="{{ old('facebook', $socialMedia->facebook ?? '' )}}"
                                                                                    class="form-control">
                                                                                @error('facebook')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Instagram
                                                                                    URL
                                                                                </label>
                                                                                <input type="text" name="instagram"
                                                                                    value="{{ old('instagram', $socialMedia->instagram ?? '' )}}"
                                                                                    class="form-control">
                                                                                @error('instagram')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Twitter
                                                                                    URL
                                                                                </label>
                                                                                <input type="text" name="twitter"
                                                                                    value="{{ old('twitter', $socialMedia->twitter ?? '' )}}"
                                                                                    class="form-control">
                                                                                @error('twitter')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Linkdin
                                                                                    URL</label>
                                                                                <input type="text" name="linkedin"
                                                                                    value="{{ old('linkedin', $socialMedia->linkedin ?? '' )}}"
                                                                                    class="form-control">
                                                                                @error('linkedin')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Youtube
                                                                                    URL</label>
                                                                                <input type="text" name="youtube"
                                                                                    value="{{ old('youtube', $socialMedia->youtube ?? '' )}}"
                                                                                    class="form-control">
                                                                                @error('youtube')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="text-center m-t-20">
                                                                                <button class="btn btn-primary"
                                                                                    name="submit">Upload
                                                                                    Now</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>

                                                                </div>
                                                            </form>
                                                        </div>
                                                        <div class="tab-pane" id="settings7" role="tabpanel">
                                                            <form action="{{route('websiteSetting')}}" method="post"
                                                                enctype="multipart/form-data">

                                                                @csrf
                                                                <input type="hidden" name="websiteSettingId"
                                                                    value="{{ $websiteSetting->id ??'' }}">
                                                                <div class="row mb-3 ">
                                                                    <div class="col-md-7">
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
                                                                                    class="form-label col-form-label">Website
                                                                                    Name</label>
                                                                                <input type="text" name="websiteName"
                                                                                    class="form-control"
                                                                                    value="{{ old('websiteName', $websiteSetting->websiteName ?? '' )}}"
                                                                                    required>
                                                                                @error('websiteName')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Website
                                                                                    Tagline</label>
                                                                                <textarea name="websiteTagline"
                                                                                    class="form-control"
                                                                                    required>{{ old('websiteTagline', $websiteSetting->websiteTagline ?? '' )}}</textarea>
                                                                                @error('websiteTagline')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Website
                                                                                    Link</label>
                                                                                <input type="text" name="websiteLink"
                                                                                    class="form-control"
                                                                                    value="{{ old('websiteLink', $websiteSetting->websiteLink ?? '' )}}"
                                                                                    required>
                                                                                @error('websiteLink')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Website
                                                                                    Logo</label>
                                                                                <input type="file" name="websiteLogo"
                                                                                    class="form-control">
                                                                                @error('websiteLogo')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Primary
                                                                                    Phone No.</label>
                                                                                <input type="text"
                                                                                    name="websitePrimaryPhoneNo"
                                                                                    class="form-control"
                                                                                    value="{{ old('websitePrimaryPhoneNo', $websiteSetting->websitePrimaryPhoneNo ?? '' )}}"
                                                                                    required>
                                                                                @error('websitePrimaryPhoneNo')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Alternate
                                                                                    Phone No.</label>
                                                                                <input type="text"
                                                                                    name="websiteAlternatePhoneNo"
                                                                                    class="form-control"
                                                                                    value="{{ old('websiteAlternatePhoneNo', $websiteSetting->websiteAlternatePhoneNo ?? '' )}}">
                                                                                @error('websiteAlternatePhoneNo')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Additional
                                                                                    Phone No.</label>
                                                                                <input type="text"
                                                                                    name="websiteAdditionalPhoneNo"
                                                                                    class="form-control"
                                                                                    value="{{ old('websiteAdditionalPhoneNo', $websiteSetting->websiteAdditionalPhoneNo ?? '' )}}">
                                                                                @error('websiteAdditionalPhoneNo')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Primary
                                                                                    EmailId</label>
                                                                                <input type="text"
                                                                                    name="websitePrimaryEmailId" class="
                                                                                    form-control"
                                                                                    value="{{ old('websitePrimaryEmailId', $websiteSetting->websitePrimaryEmailId ?? '' )}}"
                                                                                    required>
                                                                                @error('websitePrimaryEmailId')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Alternate
                                                                                    EmailId</label>
                                                                                <input type="text"
                                                                                    name="websiteAlternateEmailId"
                                                                                    class="form-control"
                                                                                    value="{{ old('websiteAlternateEmailId', $websiteSetting->websiteAlternateEmailId ?? '' )}}">
                                                                                @error('websiteAlternateEmailId')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Additional
                                                                                    EmailId</label>
                                                                                <input type="text"
                                                                                    name="websiteAdditionalEmailId"
                                                                                    class="form-control"
                                                                                    value="{{ old('websiteAdditionalEmailId', $websiteSetting->websiteAdditionalEmailId ?? '' )}}">
                                                                                @error('websiteAdditionalEmailId')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Address</label>
                                                                                <textarea type="text"
                                                                                    class="form-control"
                                                                                    name="websiteAddress" rows="5"
                                                                                    required>{{ old('websiteAddress', $websiteSetting->websiteAddress ?? '' )}}</textarea>
                                                                                @error('websiteAddress')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Map
                                                                                    Url</label>
                                                                                <textarea type="text"
                                                                                    class="form-control"
                                                                                    name="websiteMapUrl" rows="3"
                                                                                    required>{{ old('websiteMapUrl', $websiteSetting->websiteMapUrl ?? '' )}}</textarea>
                                                                                @error('websiteMapUrl')
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

                                                                    </div>
                                                                    <div class="col-md-5">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>Website Logo</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($websiteSetting->websiteLogo))
                                                                                <img src="{{ Storage::url($websiteSetting->websiteLogo) }}"
                                                                                    alt="profile image" width="100">
                                                                                @else
                                                                                <img src="{{ url('admin-assets/assets/images/user.png') }}"
                                                                                    alt="profile image" width="100">
                                                                                @endif

                                                                            </div>
                                                                        </div>
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>Website Map Location</h5>
                                                                            </div>
                                                                            <div class="card-block">
                                                                                <div class="text-center mb-2">
                                                                                    <iframe
                                                                                        src="{{ old('websiteMapUrl', $websiteSetting->websiteMapUrl ?? '' )}}"
                                                                                        width="400" height="350"
                                                                                        style="border:0;"
                                                                                        allowfullscreen=""
                                                                                        loading="lazy"
                                                                                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                                                                                </div>

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
@endsection