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
                        <h5>Update Blog Page</h5>
                        <span>Here you can add,update and delete Blog page slider image and Blog
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
                                                                    class="icofont icofont-ui-user "></i>Blog </a>
                                                            <div class="slide"></div>
                                                        </li>

                                                    </ul>

                                                    <div class="tab-content card-block">

                                                        <div class="tab-pane active " id="profile7" role="tabpanel">
                                                            <form
                                                                action="{{route('editBlogDetails',[$BlogsDetail->id])}}"
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
                                                                                    class="form-label col-form-label">Blog
                                                                                    Title</label>

                                                                                <input type="text" name="title"
                                                                                    class="form-control"
                                                                                    value="{{ old('title',$BlogsDetail->title ?? '')}}"
                                                                                    required>
                                                                                @error('title')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">Blog
                                                                                    Image  <span class="text-danger"> (In jpg,jpeg,png & width:860px, height:500px & size < 2mb)</span></label>

                                                                                <input type="file" name="image"
                                                                                    class="form-control">
                                                                                @error('image')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">Blog
                                                                                    Image</label>
                                                                                <img class="form-control"
                                                                                    src="{{ Storage::url($BlogsDetail->image) }}"
                                                                                    alt=""
                                                                                    style="width: 140px; height:50px;">

                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">Blog
                                                                                    Category</label>
                                                                                <select name="categoryId"
                                                                                    id="categoryId"
                                                                                    class=" Primary Select form-control">
                                                                                    @foreach ($BlogsCategory as $item)
                                                                                    <option value="{{$item->id}}"
                                                                                        {{ $item->id == $BlogsDetail->categoryId ? 'selected' : '' }}>
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
                                                                                    class="form-label col-form-label">Blog
                                                                                    Tag</label>
                                                                                <select name="TagsId" id="TagsId"
                                                                                    class=" Primary Select form-control">
                                                                                    @foreach ($BlogsTag as $item)
                                                                                    <option value="{{$item->id}}"
                                                                                        {{ $item->id == $BlogsDetail->TagsId ? 'selected' : '' }}>
                                                                                        {{$item->tags}}
                                                                                    </option>
                                                                                    @endforeach
                                                                                </select>
                                                                                @error('TagsId')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>
                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Date</label>

                                                                                <input type="date" name="date"
                                                                                    class="form-control"
                                                                                    value="{{ old('date',\Carbon\Carbon::parse($BlogsDetail->date)->format('Y-m-d') ?? '')}}"
                                                                                    required>
                                                                                @error('date')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Time</label>

                                                                                <input type="time" name="time"
                                                                                    class="form-control"
                                                                                    value="{{ old('time',$BlogsDetail->time ?? '')}}"
                                                                                    required>
                                                                                @error('time')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-3">
                                                                                <label
                                                                                    class="form-label col-form-label">
                                                                                    Auther Name</label>

                                                                                <input type="text" name="authorName"
                                                                                    class="form-control"
                                                                                    value="{{ old('authorName',$BlogsDetail->authorName ?? '')}}"
                                                                                    required>
                                                                                @error('authorName')
                                                                                <div class="text-danger">{{ $message }}
                                                                                </div>
                                                                                @enderror
                                                                            </div>

                                                                            <div class="col-md-12">
                                                                                <label
                                                                                    class="form-label col-form-label">Blog
                                                                                    Content</label>

                                                                                <textarea name="description"
                                                                                    id="ckeditor" class="form-control"
                                                                                    required>{{ old('description',$BlogsDetail->description ?? '')}}</textarea>
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