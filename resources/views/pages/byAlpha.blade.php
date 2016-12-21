@extends('layouts.master')

@section('title') Institute by Alphabets | Uni-admission @endsection

@section('body') <body class="style-2 nav-on-header-white"> @endsection

@section('content')
<!-- Start Pages Title  -->

<section id="page-title" class="page-title-style2">
	<div class="color-overlay"></div>
	<div class="container inner-img">
		<div class="row">
			<div class="Page-title">
				<div class="col-md-12 text-center">
					<div class="title-text">
						<h6>Great Service</h6>
						<h2 class="page-title">Institue list by Alphabats</h2>
					</div>
				</div>
				<div class="col-md-12 text-center">
					<div class="breadcrumb-trail breadcrumbs">
						<span class="trail-begin"><a href="/">Home</a></span>
						<span class="sep">/</span> <span class="trail-end">Universities List</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- End Pages Title  -->

<!-- Content Start -->

<main class="main-content">



	<div class="container internal-body-container">
		<!-- Main container -->

		<div class="row">
			<!-- Main row -->

			<div class="col-md-3">
				<aside>
					<div class="filter-wrapper">

						<div id="custom-search-input">
							<div class="input-group col-md-12">
								<input type="text" class="form-control" placeholder="Cuisine/Restaurant Name" />
                                    <span class="input-group-btn">
														<button class="btn btn-info btn-lg" type="button">
															<i class="fa fa-search custom-search-btn"></i>
														</button>
													</span>
							</div>
						</div>

						<div class="filter-mobileTop" id="filterMenuTop">
							Filter <span class="text-right"><i class="fa fa-angle-down"></i></span>
						</div>

						<div class="leftside-filter" id="mobileFilter">
							<div class="filter-option-content">
								<div class="restaurant-status-section">
									<div class="restaurant-status-title gray-deep-bg">
									<em style="color: green;">Status<em>
									</div>
									<div class="restaurant-status-filter">
										<ul class="list-unstyled">
											<li>

												<input type="checkbox" id="restaurantOpen">
												<label for="restaurantOpen"><i class="icon-check custom-check"></i> Admission Now Open</label>
											</li>
										</ul>

									</div>
								</div>
								<div class="restaurant-service-section">
									<div class="restaurant-service-title gray-deep-bg">
									<em style="color: green;">Category<em>
									</div>
									<div class="restaurant-service-filter">
										<ul class="list-unstyled">
											<li>
												<input type="checkbox" name="services" id="serviceDelivery" value="Delivery" checked>
												<label for="serviceDelivery"><i class="icon-check custom-check" ></i> Informaitno Technology</label>
											</li>
											<li>
												<input type="checkbox" name="services" id="serviceCollection" value="Collection" checked>
												<label for="serviceCollection"><i class="icon-check custom-check"></i> Science</label>
											</li>
											<li>
												<input type="checkbox" name="services" id="serviceReservation" value="Reservation" checked>
												<label for="serviceReservation"><i class="icon-check custom-check" ></i> Engineering</label>
											</li>
										</ul>
									</div>

								</div>

								<div class="restaurant-cuisines-section">
									<div class="restaurant-cuisines-title gray-deep-bg">
										<em style="color: green;">Area<em>
									</div>
									<div class="restaurant-cuisines-filter">
										<ul class="list-unstyled">
											<li>
												<input type="checkbox" value="" name="allcuisines" id="allCuisines" checked>
												<label for="allCuisines"><i class="icon-check custom-check"></i> View All</label>
											</li>
											<li>
												<input type="checkbox" value="" name="allcuisines" id="SigleCuisine">
												<label for="SigleCuisine"><i class="icon-check custom-check" ></i> Islamabad</label>
											</li>
											<li>
												<input type="checkbox" value="" name="allcuisines" id="Chinese">
												<label for="Chinese"><i class="icon-check custom-check" ></i> Karachi</label>
											</li>
											<li>
												<input type="checkbox" value="" name="allcuisines" id="Sushi">
												<label for="Sushi"><i class="icon-check custom-check" ></i> Lahore</label>
											</li>
											<li>
												<input type="checkbox" value="" name="allcuisines" id="Thai">
												<label for="Thai"><i class="icon-check custom-check" ></i> Punjab</label>
											</li>
											<li>
												<input type="checkbox" value="" name="allcuisines" id="Pizza">
												<label for="Pizza"><i class="icon-check custom-check" ></i> Peshawar</label>
											</li>
											<li>
												<input type="checkbox" value="" name="allcuisines" id="English">
												<label for="English"><i class="icon-check custom-check" ></i> Sindh</label>
											</li>

										</ul>
									</div>

								</div>

							</div>
						</div>
					</div>

				</aside>


			</div>

			<div class="col-md-9 restaurant-list-default">


				<!-- Single Restaurant detail -->
				<div class="row">
					<!-- Restaurant detail -->
					<div class="col-xs-12">
					<div class="item-block">
						<header>
							<a href="#"><img src="img/Bayleaf.jpg" alt=""></a>
							<div class="hgroup">
								<h4><a href="#">Abasyn University Campus</a></h4>
								<h5>Islamabad</h5>
							</div>
							<div class="header-meta">
								<span class="icon-location">Al-Syed Avenue, Park Road, Chak Shahzad</span>
							</div>
						</header>

						<footer>
							<p class="status"><strong>Last Date:</strong> 22 June</p>
							<p class="status"><strong>Category:</strong> Electrical Engineering</p>

							<div class="action-btn">
								<a class="btn btn-xs btn-success" href="#">Open</a>
							</div>
						</footer>
					</div>
				</div>
					<!-- END Restaurant detail -->
				</div>
				<!-- End Single Restaurant detail -->

				<!-- Single Restaurant detail -->
				<div class="row">
					<!-- Restaurant detail -->
					<div class="col-xs-12">
					<div class="item-block">
						<header>
							<a href="#"><img src="img/Bayleaf.jpg" alt=""></a>
							<div class="hgroup">
								<h4><a href="#">Abasyn University Campus</a></h4>
								<h5>Islamabad</h5>
							</div>
							<div class="header-meta">
								<span class="icon-location">Al-Syed Avenue, Park Road, Chak Shahzad</span>
							</div>
						</header>

						<footer>
							<p class="status"><strong>Last Date:</strong> 22 June</p>
							<p class="status"><strong>Category:</strong> Electrical Engineering</p>

							<div class="action-btn">
								<a class="btn btn-xs btn-success" href="#">Open</a>
							</div>
						</footer>
					</div>
				</div>
					<!-- END Restaurant detail -->
				</div>
				<!-- End Single Restaurant detail -->

				<!-- Single Restaurant detail -->
				<div class="row">
					<!-- Restaurant detail -->
					<div class="col-xs-12">
					<div class="item-block">
						<header>
							<a href="#"><img src="img/Bayleaf.jpg" alt=""></a>
							<div class="hgroup">
								<h4><a href="#">Abasyn University Campus</a></h4>
								<h5>Islamabad</h5>
							</div>
							<div class="header-meta">
								<span class="icon-location">Al-Syed Avenue, Park Road, Chak Shahzad</span>
							</div>
						</header>

						<footer>
							<p class="status"><strong>Last Date:</strong> 22 June</p>
							<p class="status"><strong>Category:</strong> Electrical Engineering</p>

							<div class="action-btn">
								<a class="btn btn-xs btn-success" href="#">Open</a>
							</div>
						</footer>
					</div>
				</div>
					<!-- END Restaurant detail -->
				</div>
				<!-- End Single Restaurant detail -->

				<!-- Single Restaurant detail -->
				<div class="row">
					<!-- Restaurant detail -->
					<div class="col-xs-12">
					<div class="item-block">
						<header>
							<a href="#"><img src="img/Bayleaf.jpg" alt=""></a>
							<div class="hgroup">
								<h4><a href="#">Abasyn University Campus</a></h4>
								<h5>Islamabad</h5>
							</div>
							<div class="header-meta">
								<span class="icon-location">Al-Syed Avenue, Park Road, Chak Shahzad</span>
							</div>
						</header>

						<footer>
							<p class="status"><strong>Last Date:</strong> 22 June</p>
							<p class="status"><strong>Category:</strong> Electrical Engineering</p>

							<div class="action-btn">
								<a class="btn btn-xs btn-success" href="#">Open</a>
							</div>
						</footer>
					</div>
				</div>
					<!-- END Restaurant detail -->
				</div>
				<!-- End Single Restaurant detail -->

				<!-- Single Restaurant detail -->
				<div class="row">
					<!-- Restaurant detail -->
					<div class="col-xs-12">
					<div class="item-block">
						<header>
							<a href="#"><img src="img/Bayleaf.jpg" alt=""></a>
							<div class="hgroup">
								<h4><a href="#">Abasyn University Campus</a></h4>
								<h5>Islamabad</h5>
							</div>
							<div class="header-meta">
								<span class="icon-location">Al-Syed Avenue, Park Road, Chak Shahzad</span>
							</div>
						</header>

						<footer>
							<p class="status"><strong>Last Date:</strong> 22 June</p>
							<p class="status"><strong>Category:</strong> Electrical Engineering</p>

							<div class="action-btn">
								<a class="btn btn-xs btn-success" href="#">Open</a>
							</div>
						</footer>
					</div>
				</div>
					<!-- END Restaurant detail -->
				</div>
				<!-- End Single Restaurant detail -->

			</div>

		</div>
		<!-- Main row end -->

	</div>
	<!-- Main container end -->

</main>

<!-- Content End -->
@endsection