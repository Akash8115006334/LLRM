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
                        <h5>Students Reviews Page</h5>
                        <span>Here you can add,update and delete students reviews page slider content
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
                                                                    class="icofont icofont-ui-user "></i>Students
                                                                Reviews
                                                                Section</a>
                                                            <div class="slide"></div>
                                                        </li>

                                                        <li class="nav-item">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#home7"
                                                                role="tab"><i class="feather icon-power"></i>Students
                                                                Reviews</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content card-block">
                                                        <div class="tab-pane active" id="section7" role="tabpanel">
                                                            <form action="{{route('updateReviewsSection')}}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <input type="hidden" name="sectionId"
                                                                    value="{{ $StudentsReviewsSection->id ??'' }}">
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
                                                                                    Image  <span class="text-danger"> (In jpg,jpeg,png & width:1600px, height:540px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Section
                                                                                    Youtube
                                                                                    Link</label>

                                                                                <input type="text" name="link"
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $StudentsReviewsSection->link ?? '' )}}"
                                                                                    required>
                                                                                @error('link')
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
                                                                    <div class="col-md-6">
                                                                        <div class="card">
                                                                            <div class="card-header">
                                                                                <h5>Section Image</h5>
                                                                            </div>
                                                                            <div class="card-block text-center">
                                                                                @if(!empty($StudentsReviewsSection->image))
                                                                                <img src="{{ Storage::url($StudentsReviewsSection->image) }}"
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

                                                        <div class="tab-pane" id="home7" role="tabpanel">
                                                            <form action="{{route('addReviewsSection')}}" method="post"
                                                                enctype="multipart/form-data">
                                                                @csrf

                                                                <div class="row mb-3 ">
                                                                    <div class="col-md-12">
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
                                                                                    class="form-label col-form-label">Title</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title')}}">
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Content</label>

                                                                                <textarea name="content"
                                                                                    class="form-control" id="ckeditor"
                                                                                    rows="5"
                                                                                    required>{{ old('content')}}</textarea>
                                                                                @error('content')
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
                                                            <div class="col-md-12 mt-4">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>All Student Reviews</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div class=" ">
                                                                            <table
                                                                                class="table table-xs table-striped table-hover table-bordered table-responsive"
                                                                                style="--bs-table-striped-bg:unset;">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>S.No</th>
                                                                                        <th>Title</th>
                                                                                        <th>Content</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @php
                                                                                    $sno = 0;
                                                                                    @endphp
                                                                                    @foreach ($StudentReviews as $StudentReview)
                                                                                    @php
                                                                                    $sno++;
                                                                                    @endphp
                                                                                    <tr>
                                                                                        <th scope="row">{{$sno}}
                                                                                        </th>
                                                                                        <td
                                                                                            style="white-space: normal;">
                                                                                            @php
                                                                                            $title =
                                                                                            $StudentReview->title;
                                                                                            $words =
                                                                                            str_word_count($title,
                                                                                            1);
                                                                                            $limitedtitle =
                                                                                            implode(' ',
                                                                                            array_slice($words, 0, 10));
                                                                                            echo $limitedtitle;
                                                                                            if (count($words) > 10) {
                                                                                            echo '...';
                                                                                            }
                                                                                            @endphp
                                                                                        </td>
                                                                                        <td
                                                                                            style="white-space: normal;">
                                                                                            @php
                                                                                            $content =
                                                                                            $StudentReview->content;
                                                                                            $words =
                                                                                            str_word_count($content,
                                                                                            1);
                                                                                            $limitedcontent =
                                                                                            implode(' ',
                                                                                            array_slice($words, 0, 10));
                                                                                            echo $limitedcontent;
                                                                                            if (count($words) > 10) {
                                                                                            echo '...';
                                                                                            }
                                                                                            @endphp
                                                                                        </td>
                                                                                        <td class="d-inline-flex">
                                                                                            <div>
                                                                                                <a href="{{route('editStudentReviews', ['id' => $StudentReview->id])}}"
                                                                                                    class="btn btn-primary btn-sm p-2"><i
                                                                                                        class="feather icon-eye m-0 p-0"></i></a>
                                                                                            </div>
                                                                                            <div>
                                                                                                <form
                                                                                                    action="{{ route('deleteStudentReviews', ['id' => $StudentReview->id]) }}"
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    @method('DELETE')
                                                                                                    <button
                                                                                                        type="submit"
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
<script>
    CKEDITOR.replace('ckeditor');
</script>
@endsection