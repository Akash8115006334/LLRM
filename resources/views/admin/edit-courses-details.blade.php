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
                        <h5>Update Courses Page</h5>
                        <span>Here you can add,update and delete Courses page slider image and Courses
                            card image and
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
                                                                    class="icofont icofont-ui-user "></i>Courses </a>
                                                            <div class="slide"></div>
                                                        </li>

                                                    </ul>

                                                    <div class="tab-content card-block">

                                                        <div class="tab-pane active " id="profile7" role="tabpanel">
                                                            <form
                                                                action="{{route('editCoursesDetails',[$CoursesDetail->id])}}"
                                                                method="post" enctype="multipart/form-data">
                                                                @csrf
                                                                <div class="row justify-content-center mb-3">
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
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Course Name</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title',$CoursesDetail->title)}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">Course
                                                                                    Image  <span class="text-danger"> (In jpg,jpeg,png & width:860px, height:500px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control" >
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">Course
                                                                                    Image</label>
                                                                                <img class="form-control"
                                                                                    src="{{ Storage::url($CoursesDetail->image) }}"
                                                                                    alt=""
                                                                                    style="width: 140px; height:50px;">

                                                                            </div>



                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Course Information Title</label>

                                                                                <input type="text"
                                                                                    name="event_subtitle_desc"
                                                                                    class="form-control"
                                                                                    value="{{ old('event_subtitle_desc',$CoursesDetail->event_subtitle_desc)}}"
                                                                                    required>
                                                                                @error('event_subtitle_desc')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Modes of study</label>

                                                                                <input type="text" name="modes_of_study"
                                                                                    class="form-control"
                                                                                    value="{{ old('modes_of_study',$CoursesDetail->modes_of_study)}}"
                                                                                    required>
                                                                                @error('modes_of_study')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Duration</label>

                                                                                <input type="text" name="duration"
                                                                                    class="form-control"
                                                                                    value="{{ old('duration',$CoursesDetail->duration)}}"
                                                                                    required>
                                                                                @error('duration')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Academic direction</label>

                                                                                <input type="text"
                                                                                    name="academic_direction"
                                                                                    class="form-control"
                                                                                    value="{{ old('academic_direction',$CoursesDetail->academic_direction)}}"
                                                                                    required>
                                                                                @error('academic_direction')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Method</label>

                                                                                <input type="text" name="method"
                                                                                    class="form-control"
                                                                                    value="{{ old('method',$CoursesDetail->method)}}"
                                                                                    required>
                                                                                @error('method')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Campus</label>

                                                                                <input type="text" name="campus"
                                                                                    class="form-control"
                                                                                    value="{{ old('campus',$CoursesDetail->campus)}}"
                                                                                    required>
                                                                                @error('campus')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Booked sheets</label>

                                                                                <input type="text" name="booked_sheet"
                                                                                    class="form-control"
                                                                                    value="{{ old('booked_sheet',$CoursesDetail->booked_sheet)}}"
                                                                                    required>
                                                                                @error('booked_sheet')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Avilable sheets</label>

                                                                                <input type="text" name="seats_avilable"
                                                                                    class="form-control"
                                                                                    value="{{ old('seats_avilable',$CoursesDetail->seats_avilable)}}"
                                                                                    required>
                                                                                @error('seats_avilable')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Total sheets</label>

                                                                                <input type="text" name="total_sheet"
                                                                                    class="form-control"
                                                                                    value="{{ old('total_sheet',$CoursesDetail->total_sheet)}}"
                                                                                    required>
                                                                                @error('total_sheet')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Semester start date</label>

                                                                                <input type="date"
                                                                                    name="semester_start_date"
                                                                                    class="form-control"
                                                                                    value="{{ old('semester_start_date',\Carbon\Carbon::parse($CoursesDetail->semester_start_date)->format('Y-m-d') ?? '')}}"
                                                                                    required>
                                                                                @error('semester_start_date')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Course total Fee</label>

                                                                                <input type="text"
                                                                                    name="Course_total_fee"
                                                                                    class="form-control"
                                                                                    value="{{ old('Course_total_fee',$CoursesDetail->Course_total_fee)}}"
                                                                                    required>
                                                                                @error('Course_total_fee')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    First year(Fee)</label>

                                                                                <input type="text" name="first_year_fee"
                                                                                    class="form-control"
                                                                                    value="{{ old('first_year_fee',$CoursesDetail->first_year_fee)}}"
                                                                                    required>
                                                                                @error('first_year_fee')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Language</label>

                                                                                <input type="text" name="language"
                                                                                    class="form-control"
                                                                                    value="{{ old('language',$CoursesDetail->language)}}"
                                                                                    required>
                                                                                @error('language')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Course
                                                                                    Details</label>

                                                                                <textarea name="description"
                                                                                    id="ckeditor" class="form-control"
                                                                                    required>{{ old('description',$CoursesDetail->description)}}</textarea>
                                                                                @error('description')
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