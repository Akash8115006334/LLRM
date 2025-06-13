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
                        <h5>Our Faculties Page</h5>
                        <span>Here you can add,update and delete Faculties content
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
                                                                    class="icofont icofont-ui-user "></i>Faculties
                                                                Section</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                        <li class="nav-item">
                                                            <a class="nav-link " data-bs-toggle="tab" href="#home7"
                                                                role="tab"><i
                                                                    class="feather icon-power"></i>Faculties</a>
                                                            <div class="slide"></div>
                                                        </li>
                                                    </ul>

                                                    <div class="tab-content card-block">
                                                        <div class="tab-pane active" id="section7" role="tabpanel">
                                                            <form action="{{route('addFacultiesSection')}}"
                                                                method="post">
                                                                @csrf
                                                                <input type="hidden" name="Id"
                                                                    value="{{ $FacultieSection->id ??'' }}">
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
                                                                                    class="form-control"
                                                                                    value="{{ old('title', $FacultieSection->title ?? '' )}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Section
                                                                                    Sub Title </label>

                                                                                <textarea name="subtitle"
                                                                                    class="form-control" rows="5"
                                                                                    required>{{ old('subtitle', $FacultieSection->subtitle ?? '' )}}</textarea>
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

                                                                    </div>


                                                                </div>
                                                            </form>
                                                        </div>

                                                        <div class="tab-pane" id="home7" role="tabpanel">

                                                            <div class="row mb-3 ">
                                                                <div class="col-md-12">
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
                                                                    <form action="{{route('addFaculties')}}"
                                                                        method="post" enctype="multipart/form-data">
                                                                        @csrf
                                                                        <div class="row">
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Name</label>

                                                                                <input type="text" name="name"
                                                                                    class="form-control"
                                                                                    value="{{ old('name' )}}" required>
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
                                                                                    value="{{ old('designation')}}"
                                                                                    required>
                                                                                @error('designation')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-6">
                                                                                <label
                                                                                    class="form-label col-form-label">Experience(yrs)</label>

                                                                                <input type="text" name="phone"
                                                                                    class="form-control"
                                                                                    value="{{ old('phone')}}" required>
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
                                                                                    class="form-control" required>
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Qualification</label>

                                                                                <textarea name="address"
                                                                                    class="form-control" rows="5"
                                                                                    required>{{ old('address')}}</textarea>
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

                                                                <div class="col-md-12 mt-4">
                                                                    <div class="card">
                                                                        <div class="card-header">
                                                                            <h5>All Managment Members</h5>
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
                                                                                            <th>Name</th>
                                                                                            <th>Designation</th>
                                                                                            <th>Exp(yrs)</th>
                                                                                            <th>Qualification</th>
                                                                                            <th>Action</th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                    <tbody>
                                                                                        @php
                                                                                        $sno = 0;
                                                                                        @endphp
                                                                                        @foreach ($OurFacultie as $card)
                                                                                        @php
                                                                                        $sno++;
                                                                                        @endphp
                                                                                        <tr>
                                                                                            <th scope="row">{{$sno}}
                                                                                            </th>
                                                                                            <td><img src="{{ Storage::url($card->image) }}"
                                                                                                    class="rounded"
                                                                                                    alt="profile image"
                                                                                                    width="80"
                                                                                                    height="40">
                                                                                            </td>
                                                                                            <td>{{$card->name}}</td>
                                                                                            <td>{{$card->designation}}
                                                                                            </td>
                                                                                            <td>{{$card->phone}}
                                                                                            </td>
                                                                                            <td>{{$card->address}}
                                                                                            </td>

                                                                                            <td class="d-inline-flex">
                                                                                                <div>
                                                                                                    <a href="{{route('editFaculties', ['id' => $card->id])}}"
                                                                                                        class="btn btn-primary btn-sm p-2"><i
                                                                                                            class="feather icon-eye m-0 p-0"></i></a>
                                                                                                </div>
                                                                                                <div>
                                                                                                    <form
                                                                                                        action="{{ route('deleteFaculties', ['id' => $card->id]) }}"
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
@endsection