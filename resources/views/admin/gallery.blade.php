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
                        <h5>Gallery Page</h5>
                        <span>Here you can add,update and delete gallery page slider image and gallery card image and
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
                                                        <li class="nav-item">
                                                            <a class="nav-link active" data-bs-toggle="tab"
                                                                href="#section7" role="tab"><i
                                                                    class="icofont icofont-ui-user "></i>Gallery
                                                                Slider Section</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#profile7"
                                                                role="tab"><i
                                                                    class="icofont icofont-ui-user "></i>Gallery
                                                                Slider</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#home7"
                                                                role="tab"><i class="feather icon-power"></i>Gallery
                                                                Card</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content card-block">
                                                        <div class="tab-pane active" id="section7" role="tabpanel">
                                                            <form action="{{route('updateGallerySection')}}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="sectionId"
                                                                    value="{{ $GallerySections->id ??'' }}">
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
                                                                                    class="form-label col-form-label">Section
                                                                                    Titile</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control" value="{{ old('title', $GallerySections->title ?? '' )}}" required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Section
                                                                                    Sub Title </label>

                                                                                <textarea  name="subtitle"
                                                                                    class="form-control" rows="5" required>{{ old('subtitle', $GallerySections->subtitle ?? '' )}}</textarea>
                                                                                @error('subtitle')
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


                                                    </div>

                                                </div>
                                                <div class="tab-pane " id="profile7" role="tabpanel">
                                                    <form action="{{route('addSliderImage')}}" method="post"
                                                        enctype="multipart/form-data">
                                                        @csrf
                                                        <div class="row justify-content-center mb-3">
                                                            <div class="col-md-6">
                                                                <div class="row">
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

                                                                    <div class="col-md-12">
                                                                        <label class="form-label col-form-label">Upload
                                                                             Photo <span class="text-danger"> (In jpg,jpeg,png & width:1600px, height:540px & size < 2mb)</span></label>

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
                                                            <h5>All Gallery Slider Image</h5>
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
                                                                        @foreach ($sliders as $slider)
                                                                        @php
                                                                        $sno++;
                                                                        @endphp
                                                                        <tr>
                                                                            <th scope="row">{{$sno}}
                                                                            </th>
                                                                            <td><img src="{{ Storage::url($slider->image) }}"
                                                                                    class="rounded" alt="profile image"
                                                                                    width="100" height="40">
                                                                            </td>

                                                                            <td>
                                                                                <form
                                                                                    action="{{ route('deleteSliderImage', ['id' => $slider->id]) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger"><i
                                                                                            class="feather icon-trash m-0 p-0"></i></button>
                                                                                </form>
                                                                            </td>
                                                                        </tr>
                                                                        @endforeach


                                                                    </tbody>
                                                                </table>
                                                            </div>


                                                        </div>
                                                    </div>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="tab-pane" id="home7" role="tabpanel">
                                            <form action="{{route('addGalleryCard')}}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf

                                                <div class="row mb-3 ">
                                                    <div class="col-md-6">
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
                                                        <div class="row">
                                                            <div class="col-md-12">
                                                                <label class="form-label col-form-label">Upload
                                                                     Photo  <span class="text-danger"> (In jpg,jpeg,png & width:580px, height:360px & size < 2mb)</span></label>

                                                                <input type="file" name="image" class="form-control"
                                                                    required>
                                                                @error('image')
                                                                <div class="text-danger">{{ $message }}
                                                                </div>
                                                                @enderror
                                                            </div>
                                                            <div class="col-md-12">
                                                                <label
                                                                    class="form-label col-form-label">Description</label>

                                                                <textarea name="description" class="form-control"
                                                                    rows="5"
                                                                    required>{{ old('websiteAdditionalPhoneNo')}}</textarea>
                                                                @error('description')
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
                                            </form>
                                            <div class="col-md-6">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <h5>All Gallery Slider Image</h5>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class=" ">
                                                            <table
                                                                class="table table-xs table-striped table-hover table-bordered table-responsive"
                                                                style="--bs-table-striped-bg:unset;">
                                                                <thead>
                                                                    <tr>
                                                                        <th>S.No</th>
                                                                        <th>Image</th>
                                                                        <th>Content</th>
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                    @php
                                                                    $sno = 0;
                                                                    @endphp
                                                                    @foreach ($cards as $card)
                                                                    @php
                                                                    $sno++;
                                                                    @endphp
                                                                    <tr>
                                                                        <th scope="row">{{$sno}}
                                                                        </th>
                                                                        <td><img src="{{ Storage::url($card->image) }}"
                                                                                class="rounded" alt="profile image"
                                                                                width="100" height="40">
                                                                        </td>
                                                                        <td style="white-space: normal;">
                                                                            @php
                                                                            $description = $card->description;
                                                                            $words =
                                                                            str_word_count($description, 1);
                                                                            $limitedDescription = implode(' ',
                                                                            array_slice($words, 0, 5));
                                                                            echo $limitedDescription;
                                                                            if (count($words) > 5) {
                                                                            echo '...';
                                                                            }
                                                                            @endphp
                                                                        </td>
                                                                        <td class="d-inline-flex">
                                                                            <div>
                                                                                <a href="{{route('editSliderCard', ['id' => $card->id])}}"
                                                                                    class="btn btn-primary btn-sm p-2"><i
                                                                                        class="feather icon-eye m-0 p-0"></i></a>
                                                                            </div>
                                                                            <div>
                                                                                <form
                                                                                    action="{{ route('deleteSliderCard', ['id' => $card->id]) }}"
                                                                                    method="post">
                                                                                    @csrf
                                                                                    @method('DELETE')
                                                                                    <button type="submit"
                                                                                        class="btn btn-danger btn-sm p-2"><i
                                                                                            class="feather icon-trash m-0 p-0"></i></button>
                                                                                </form>
                                                                            </div>

                                                                        </td>
                                                                    </tr>
                                                                    @endforeach


                                                                </tbody>
                                                            </table>
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