<!DOCTYPE html>
<html lang="en">

				<head>
								<meta charset="utf-8">
								<meta content="width=device-width, initial-scale=1.0" name="viewport">

								<title>llrm - Dashboard @yield("Page-Title")</title>
								<meta content="@yield("Page-Description")" name="description">
								<meta content="@yield("Page-Keywords")" name="keywords">
								<meta name="author" content="colorlib" />
								<!-- ======= Header Files ======= -->
								@include("admin.layouts.header-files")
								<!-- End Header -->
				</head>

				<body>

								<!-- ======= Header ======= -->
								@include("admin.layouts.header")
								<!-- End Header -->

								<!-- ======= Sidebar ======= -->
								@include("admin.layouts.sidebar")
								<!-- End Sidebar-->

								@yield("main-content")

								<!-- ======= Footer ======= -->
								@include("admin.layouts.footer")
								<!-- End Footer -->

								<!-- ======= Footer Files ======= -->
								@include("admin.layouts.footer-files")
								<!-- End Footer Files -->
								@yield("custom-javascript")
				</body>

</html>
