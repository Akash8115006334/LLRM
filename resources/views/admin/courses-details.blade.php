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
                        <h5>CoursesPage</h5>
                        <span>Here you can add,update and delete Coursespage slider image and Courses card image and
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
                                                                    class="icofont icofont-ui-user "></i>Courses</a>
                                                            <div class="slide"></div>
                                                        </li>

                                                    </ul>

                                                    <div class="tab-content card-block">

                                                        <div class="tab-pane active " id="profile7" role="tabpanel">
                                                            <form action="{{route('addCoursesDetails')}}" method="post"
                                                                enctype="multipart/form-data">
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
                                                                                    value="{{ old('title')}}" required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Course
                                                                                    Image <span class="text-danger"> (In jpg,jpeg,png & width:860px, height:500px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control" required>
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>




                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Course Information Title</label>

                                                                                <input type="text"
                                                                                    name="event_subtitle_desc"
                                                                                    class="form-control"
                                                                                    value="{{ old('event_subtitle_desc')}}"
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
                                                                                    value="{{ old('modes_of_study')}}"
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
                                                                                    value="{{ old('duration')}}"
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
                                                                                    value="{{ old('academic_direction')}}"
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
                                                                                    value="{{ old('method')}}" required>
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
                                                                                    value="{{ old('campus')}}" required>
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
                                                                                    value="{{ old('booked_sheet')}}"
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
                                                                                    value="{{ old('seats_avilable')}}"
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
                                                                                    value="{{ old('total_sheet')}}"
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
                                                                                    value="{{ old('semester_start_date')}}"
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
                                                                                    value="{{ old('Course_total_fee')}}"
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
                                                                                    value="{{ old('first_year_fee')}}"
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
                                                                                    value="{{ old('language')}}"
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
                                                                                    required>{{ old('description')}}</textarea>
                                                                                @error('description')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <div class="text-center m-t-20">
                                                                                    <button class="btn btn-primary"
                                                                                        type="submit">Add
                                                                                        Courses</button>
                                                                                </div>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                            </form>
                                                            <div class="col-md-12">
                                                                <div class="card">
                                                                    <div class="card-header">
                                                                        <h5>All Events</h5>
                                                                    </div>
                                                                    <div class="card-block">
                                                                        <div
                                                                            class="table-responsive  table-striped table-hover table-bordered">
                                                                            <table class="table table-xs">
                                                                                <thead>
                                                                                    <tr>
                                                                                        <th>S.No</th>
                                                                                        <th>CourseName</th>
                                                                                        <th>Image</th>
                                                                                        <th>Details</th>
                                                                                        <th>MOS</th>
                                                                                        <th>Duration</th>
                                                                                        <th>TotalSheets</th>
                                                                                        <th>AvilableSheets</th>
                                                                                        <th>BookedSheets</th>
                                                                                        <th>TotalFees</th>
                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @php
                                                                                    $sno = 0;
                                                                                    @endphp

                                                                                    @if (!empty($CoursesDetail))

                                                                                    @foreach ($CoursesDetail as $slider)
                                                                                    @php
                                                                                    $sno++;
                                                                                    @endphp
                                                                                    <tr>
                                                                                        <th scope="row">
                                                                                            {{ $sno }}
                                                                                        </th>
                                                                                        <td>{{ \Illuminate\Support\Str::limit($slider->title, 40) }}
                                                                                        </td>

                                                                                        <td><img src="{{ Storage::url($slider->image) }}"
                                                                                                class="rounded"
                                                                                                alt="profile image"
                                                                                                width="80" height="40">
                                                                                        </td>
                                                                                        <td>{!!
                                                                                            \Illuminate\Support\Str::limit($slider->description,
                                                                                            40) !!}
                                                                                        </td>
                                                                                        <td>{{ $slider->modes_of_study }}


                                                                                        </td>
                                                                                        <td>
                                                                                            {{ $slider->duration }}

                                                                                        </td>
                                                                                        <td>{{$slider->total_sheet}}

                                                                                        </td>
                                                                                        <td>{{$slider->booked_sheet}}

                                                                                        </td>
                                                                                        <td>{{$slider->seats_avilable}}

                                                                                        </td>
                                                                                        <td>{{$slider->Course_total_fee}}

                                                                                        </td>
                                                                                        <td class="d-inline-flex">
                                                                                            <div>
                                                                                                <a href="{{route('editCoursesDetails', ['id' => $slider->id])}}"
                                                                                                    class="btn btn-primary btn-sm p-2"><i
                                                                                                        class="feather icon-eye m-0 p-0"></i></a>
                                                                                            </div>
                                                                                            <div>
                                                                                                <form
                                                                                                    action="{{ route('deleteCoursesDetails', ['id' => $slider->id]) }}"
                                                                                                    method="post">
                                                                                                    @csrf
                                                                                                    @method('DELETE')
                                                                                                    <button
                                                                                                        type="submit"
                                                                                                        class="btn btn-danger"><i
                                                                                                            class="feather icon-trash m-0 p-0"></i></button>
                                                                                                </form>
                                                                                            </div>
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