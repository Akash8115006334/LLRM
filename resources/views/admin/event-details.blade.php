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
                        <h5>Events Page</h5>
                        <span>Here you can add,update and delete Events page slider image and Events
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
                                                                    class="icofont icofont-ui-user "></i>Events </a>
                                                            <div class="slide"></div>
                                                        </li>

                                                    </ul>

                                                    <div class="tab-content card-block">

                                                        <div class="tab-pane active " id="profile7" role="tabpanel">
                                                            <form action="{{route('addEventDetails')}}" method="post"
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
                                                                                    class="form-label col-form-label">Event
                                                                                    Title</label>

                                                                                <input type="text" name="event_title"
                                                                                    class="form-control"
                                                                                    value="{{ old('event_title')}}"
                                                                                    required>
                                                                                @error('event_title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Event
                                                                                    Image  <span class="text-danger"> (In jpg,jpeg,png & width:860px, height:500px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control" required>
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">Event
                                                                                    SubTitle</label>

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
                                                                                    class="form-label col-form-label">Event
                                                                                    Category</label>
                                                                                <select name="categoryId"
                                                                                    id="categoryId"
                                                                                    class=" Primary Select form-control">
                                                                                    @foreach ($EventsCategory as $item)
                                                                                    <option value="{{$item->id}}">
                                                                                        {{$item->category}}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('categoryId')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Start Date</label>

                                                                                <input type="date" name="start"
                                                                                    class="form-control"
                                                                                    value="{{ old('start')}}" required>
                                                                                @error('start')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    End Date</label>

                                                                                <input type="date" name="end"
                                                                                    class="form-control"
                                                                                    value="{{ old('end')}}" required>
                                                                                @error('end')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Start Time</label>

                                                                                <input type="time" name="start_time"
                                                                                    class="form-control"
                                                                                    value="{{ old('start_time')}}"
                                                                                    required>
                                                                                @error('start_time')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    End Time</label>

                                                                                <input type="time" name="end_time"
                                                                                    class="form-control"
                                                                                    value="{{ old('end_time')}}"
                                                                                    required>
                                                                                @error('end_time')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    City</label>

                                                                                <input type="text" name="city"
                                                                                    class="form-control"
                                                                                    value="{{ old('city')}}" required>
                                                                                @error('city')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    State</label>

                                                                                <input type="text" name="state"
                                                                                    class="form-control"
                                                                                    value="{{ old('state')}}" required>
                                                                                @error('state')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Country</label>

                                                                                <input type="text" name="country"
                                                                                    class="form-control"
                                                                                    value="{{ old('country')}}"
                                                                                    required>
                                                                                @error('country')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Total Slot</label>

                                                                                <input type="text" name="total_slot"
                                                                                    class="form-control"
                                                                                    value="{{ old('total_slot')}}"
                                                                                    required>
                                                                                @error('total_slot')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Booked Slot</label>

                                                                                <input type="text" name="booked_slot"
                                                                                    class="form-control"
                                                                                    value="{{ old('booked_slot')}}"
                                                                                    required>
                                                                                @error('booked_slot')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">Website
                                                                                    Url</label>

                                                                                <input type="text" name="website"
                                                                                    class="form-control"
                                                                                    value="{{ old('website')}}">
                                                                                @error('website')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Event
                                                                                    Content</label>

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
                                                                                        type="submit">Update</button>
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
                                                                                        <th>Title</th>
                                                                                        <th>Category</th>
                                                                                        <th>Image</th>
                                                                                        <th>Content</th>
                                                                                        <th>Start Time</th>
                                                                                        <th>End Time</th>
                                                                                        <th>City</th>
                                                                                        <th>State</th>
                                                                                        <th>Total Slot</th>
                                                                                        <th>Booked Slot</th>

                                                                                        <th>Action</th>
                                                                                    </tr>
                                                                                </thead>
                                                                                <tbody>
                                                                                    @php
                                                                                    $sno = 0;
                                                                                    @endphp

                                                                                    @if (!empty($EventsDetail))

                                                                                    @foreach ($EventsDetail as $slider)
                                                                                    @php
                                                                                    $sno++;
                                                                                    @endphp
                                                                                    <tr>
                                                                                        <th scope="row">
                                                                                            {{ $sno }}
                                                                                        </th>
                                                                                        <td>{{ \Illuminate\Support\Str::limit($slider->event_title, 40) }}
                                                                                        </td>
                                                                                        <td>{{$slider->category->category}}
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
                                                                                        <td>{{ \Carbon\Carbon::parse($slider->start)->format('d M Y') }}
                                                                                            {{ \Carbon\Carbon::parse($slider->start_time)->format('h:i A') }}
                                                                                        </td>
                                                                                        <td>
                                                                                            {{ \Carbon\Carbon::parse($slider->end)->format('d M Y') }}
                                                                                            {{ \Carbon\Carbon::parse($slider->end_time)->format('h:i A') }}

                                                                                        </td>
                                                                                        <td>{{$slider->city}}
                                                                                        </td>
                                                                                        <td>{{$slider->state}}
                                                                                        </td>
                                                                                        <td>{{$slider->total_slot}}
                                                                                        </td>
                                                                                        <td>{{$slider->booked_slot}}
                                                                                        </td>
                                                                                        <td class="d-inline-flex">
                                                                                            <div>
                                                                                                <a href="{{route('editEventDetails', ['id' => $slider->id])}}"
                                                                                                    class="btn btn-primary btn-sm p-2"><i
                                                                                                        class="feather icon-eye m-0 p-0"></i></a>
                                                                                            </div>
                                                                                            <div>
                                                                                                <form
                                                                                                    action="{{ route('deleteEventDetails', ['id' => $slider->id]) }}"
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