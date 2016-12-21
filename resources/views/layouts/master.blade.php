<!DOCTYPE HTML>
<html lang="en">

<head>
	<title>@yield('title')</title>
		@include('essential.metadata')
</head>
	@yield('body')
<body class="style-2 nav-on-header index-4">

<!-- Start Loading -->
<section class="loading-overlay">
	<div class="Loading-Page">
		<h1 class="loader">Loading...</h1>
	</div>
</section>
<!-- End Loading  -->


<!-- Start Navigation bar -->
	@include('essential.navbar')
<!-- End Navigation bar -->

<!-- Content Start -->
	@yield('content')
<!-- End Content -->



<!-- start footer area -->
	@include('essential.footer')
<!-- footer area end -->

<!-- Back to top Link -->
<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>

	@include('essential.bottom')


</body>
</html>