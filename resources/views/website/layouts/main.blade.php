<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Lala Lajpat Rai Memorial College Of Education - @yield('Page-Title')</title>
    <meta content="@yield('Page-Description')" name="description">
    <meta content="@yield('Page-Keywords')" name="keywords">
    <!-- Header files Area Start Here  -->
   @include('website.layouts.header-files')
    <!-- Header files Area End Here  -->
</head>

<body class="page-index">

    <!-- ======= Header ======= -->
    @include('website.layouts.header')
    <!-- End Header -->

    <!-- ======= #main ======= -->
   @yield('main-contents')
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    @include('website.layouts.footer')
    <!-- End Footer -->

     <!-- ======= Footer ======= -->
    @include('website.layouts.footer-files')
    <!-- End Footer -->
   @yield('custom-javascript')

</body>

</html>
