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
			<div class="col-md-12 col-lg-8">
				<div class="page-header-title">
					<i class="feather icon-home bg-c-blue"></i>
					<div class="d-inline">
						<h5>Dashboard</h5>
						<span>Lala Lajpat Rai Memorial College Of Education</span>
					</div>
				</div>
			</div>
			<div class="col-md-4 col-lg-4 tablet-view">
				<div class="page-header-breadcrumb">
					<ul class="breadcrumb breadcrumb-title breadcrumb-padding">
						<li class="breadcrumb-item">
							<a href="index.html"><i class="feather icon-home"></i></a>
						</li>
						<li class=""><a href="{{route('adminDashboard')}}">Dashboard</a> </li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="pcoded-inner-content">
		<div class="main-body">
			<div class="page-wrapper">
				<div class="page-body">

					<div class="row">

						<div class="col-xl-3 col-md-6">
							<div class="card prod-p-card card-red">
								<div class="card-body">
									<div class="row align-items-center m-b-30">
										<div class="col">
											<h6 class="m-b-5 text-white">Total Home Banner</h6>
											<h3 class="m-b-0 f-w-700 text-white">{{$totalHomeBanner}}</h3>
										</div>
										<div class="col-auto">
											<i class="fas fa-money-bill-alt text-c-red f-18"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card prod-p-card card-blue">
								<div class="card-body">
									<div class="row align-items-center m-b-30">
										<div class="col">
											<h6 class="m-b-5 text-white">Total Courses</h6>
											<h3 class="m-b-0 f-w-700 text-white">{{$totalCourses}}</h3>
										</div>
										<div class="col-auto">
											<i class="fas fa-database text-c-blue f-18"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card prod-p-card card-green">
								<div class="card-body">
									<div class="row align-items-center m-b-30">
										<div class="col">
											<h6 class="m-b-5 text-white">Total Faculty</h6>
											<h3 class="m-b-0 f-w-700 text-white">{{$totalFaculties}}</h3>
										</div>
										<div class="col-auto">
											<i class="fas fa-dollar-sign text-c-green f-18"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card prod-p-card card-yellow">
								<div class="card-body">
									<div class="row align-items-center m-b-30">
										<div class="col">
											<h6 class="m-b-5 text-white">Total News</h6>
											<h3 class="m-b-0 f-w-700 text-white">{{$totalBlogs}}</h3>
										</div>
										<div class="col-auto">
											<i class="fas fa-tags text-c-yellow f-18"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card prod-p-card card-yellow">
								<div class="card-body">
									<div class="row align-items-center m-b-30">
										<div class="col">
											<h6 class="m-b-5 text-white">Total Events</h6>
											<h3 class="m-b-0 f-w-700 text-white">{{$totalEvents}}</h3>
										</div>
										<div class="col-auto">
											<i class="fas fa-tags text-c-yellow f-18"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card prod-p-card card-yellow">
								<div class="card-body">
									<div class="row align-items-center m-b-30">
										<div class="col">
											<h6 class="m-b-5 text-white">Total Enquiry</h6>
											<h3 class="m-b-0 f-w-700 text-white">0</h3>
										</div>
										<div class="col-auto">
											<i class="fas fa-tags text-c-yellow f-18"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-3 col-md-6">
							<div class="card prod-p-card card-red">
								<div class="card-body">
									<div class="row align-items-center m-b-30">
										<div class="col">
											<h6 class="m-b-5 text-white">Total Gallery Banner</h6>
											<h3 class="m-b-0 f-w-700 text-white">{{$totalGallerySlider}}</h3>
										</div>
										<div class="col-auto">
											<i class="fas fa-money-bill-alt text-c-red f-18"></i>
										</div>
									</div>

								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12">
							<div class="card latest-update-card">
								<div class="card-header mb-4">
									<h5>Upcoming Events</h5>
									<div class="card-header-right">
										<ul class="list-unstyled card-option">
											<li class="first-opt"><i
													class="feather icon-chevron-left open-card-option"></i>
											</li>
											<li><i class="feather icon-maximize full-card"></i></li>
											<li><i class="feather icon-minus minimize-card"></i></li>
											<li><i class="feather icon-refresh-cw reload-card"></i></li>
											<li><i class="feather icon-trash close-card"></i></li>
											<li><i class="feather icon-chevron-left open-card-option"></i>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-block">
									<div class="latest-update-box ">
										@foreach ($latestEvents as $item)
										<div class="row p-b-30">
											<div class="update-meta p-r-0 col-auto text-end">
												<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
												{{-- <i class="feather icon-briefcase bg-c-red update-icon"></i> --}}
											</div>
											<div class="col p-l-5">
												<a href="#!">
													<h6>{{$item->event_title}}</h6>
												</a>
												<p class="text-muted m-b-0">Date:- <span class="text-success">{{\Carbon\Carbon::parse($item->start)->format('d M Y')}} {{\Carbon\Carbon::parse($item->start_time)->format('h:i A')}}</span> to <span class="text-danger">{{\Carbon\Carbon::parse($item->end)->format('d M Y')}} {{\Carbon\Carbon::parse($item->end_time)->format('h:i A')}}</span></p>
												<p class="text-muted m-b-0">Location:-{{$item->city}}, {{$item->state}}, {{$item->country}}</p>
												<p class="text-muted m-b-0">Booked Slot:-{{$item->booked_slot}}</p>
												<p class="text-muted m-b-0">Total Slot:-{{$item->total_slot}}</p>
												
											</div>
										</div>
										@endforeach

										{{-- <div class="row p-b-30">
										<div class="update-meta p-r-0 col-auto text-end">
											<i class="feather icon-check f-w-600 bg-c-green update-icon"></i>
										</div>
										<div class="col p-l-5">
											<a href="#!">
												<h6>New Order Received.</h6>
											</a>
											<p class="text-muted m-b-0">Hemilton</p>
										</div>
									</div> --}}
									</div>
								</div>
							</div>
						</div>
						<div class="col-xl-6 col-md-12">
							<div class="card new-cust-card">
								<div class="card-header">
									<h5>Latest Published News</h5>
									<div class="card-header-right">
										<ul class="list-unstyled card-option">
											<li class="first-opt"><i
													class="feather icon-chevron-left open-card-option"></i>
											</li>
											<li><i class="feather icon-maximize full-card"></i></li>
											<li><i class="feather icon-minus minimize-card"></i></li>
											<li><i class="feather icon-refresh-cw reload-card"></i></li>
											<li><i class="feather icon-trash close-card"></i></li>
											<li><i class="feather icon-chevron-left open-card-option"></i>
											</li>
										</ul>
									</div>
								</div>
								<div class="card-block">
									@foreach ($latestBlogs as $item)
										<div class="m-b-35 align-middle">
												<img src="{{ Storage::url($item->image) }}" alt="user image"
													class="img-radius img-40 m-r-15 align-top">
												<div class="d-inline-block">
													<a href="#!">
														<h6>{{$item->title}}</h6>
													</a>
													<p class="text-muted m-b-0">Author Name:- {{$item->authorName}}</p>
													<p class="text-muted m-b-0">Date:- <span class="text-success">{{\Carbon\Carbon::parse($item->date)->format('d M Y')}}
															{{\Carbon\Carbon::parse($item->time)->format('h:i A')}}</span> </p>
													<span class="status active"></span>
												</div>
											</div>
									@endforeach
								
									
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>
		</div>
		<footer id="footer" class="footer text-center">
			<div class="d-flex justify-content-center">
				<div class="copyright">
					&copy; Copyright <strong><span>Navix </span></strong>. All Rights Reserved
				</div>
				<div class="credits">
					Designed by <a href="">Shubham Dubey</a>
				</div>
			</div>

		</footer>
	</div>

</div>

<div id="styleSelector">
</div>

</div>
</div>
</div>
</div>
@endsection

{{-- Page Custome Javascript Section --}}
@section("custom-javascript")
@endsection