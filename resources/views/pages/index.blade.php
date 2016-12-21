@extends('layouts.master')

@section('title') Home | Uni-admission @endsection

@section('content')
<!-- static header -->

<section class="static-section">
	<div class="container">

		<div class="row static-header-content-wrapper">
			<div class="static-header-content">
				<div class="static-header-text">
					<h2 class="white">OPPORTUNITY TO GET BATTER ADMISSION</h2>
					<h4 class="white">Find your favourite local School or University, get your desire Education.</h4>
				</div>
				<div class="search-form-wrap2">
					<form class="clearfix" action="search">
						<div class="input-field-wrap pull-left inner-addon left-addon">
							<i class="icon-location"></i>
							<input class="search-form-input" name="key-word" placeholder="Postcode/Town/City" type="text" />
						</div>
						<div class="select-field-wrap pull-left">
							<select class="search-form-select" name="categories">
								<option class="options" value="all-categories">--Not Selected--</option>
								<option class="options" value="america">Electrical</option>
								<option class="options" value="canada">Chemical</option>
								<option class="options" value="france">Computer Science</option>
								<option class="options" value="germane ">Medical</option>
								<option class="options" value="russia">Enginnering</option>
								<option class="options" value="china">Arts</option>
							</select>
						</div>
						<div class="submit-field-wrap pull-left">
							<input class="search-form-submit bgred-1 white" name="" type="submit" value="FIND UNIVERSITY" />
						</div>
					</form>
				</div>

				<div class="guest-info text-center">
					<p><i class="fa fa-university" aria-hidden="true"></i> Open Admission in <span>2,200</span> Universities </p>
				</div>

			</div>



		</div>




	</div>
</section>

<section id="service-feature">
	<!-- UI X -->
	<div class="service-feature">

		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<div class="slider-title">
						You can find a University or get Admission
					</div>
				</div>
			</div>
			
			<div class="row">
				<div class="col-md-4 col-sm-4">
					<!-- Service Item -->
					<div class="service-item">
						<!-- Service Icon -->
						<i class="icon-home bg-red"></i>
						<!-- Service Title -->
						<h4>Localize</h4>

					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<!-- Service Item -->
					<div class="service-item delivery-icon">
						<!-- Service Icon -->
						<i class="icon-heart-1 bg-red"></i>
						<!-- Service Title -->
						<h4>Favorite</h4>

					</div>
				</div>
				<div class="col-md-4 col-sm-4">
					<!-- Service Item -->
					<div class="service-item reservation-icon">
						<!-- Service Icon -->

						<i class="icon-calendar bg-red"></i>

						<!-- Service Title -->
						<h4>Time Saving</h4>

					</div>
				</div>
			</div>

		</div>

	</div>
</section>




<section id="best-restaurant" class="best-restaurant">
	<div class="container">

		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Choose from the  <span class="font-semibold">best Universities</span></h2>
			</div>
			<!-- col-md-12 -->
		</div>

		<!-- Single Restaurant detail -->
		<div class="row single-listing">
				<!-- University detail -->
				<div class="col-md-6 col-xs-12">
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
				<!-- END Univeristy detail -->

				<!-- University detail -->
				<div class="col-md-6 col-xs-12">
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
				<!-- END Univeristy detail -->


		</div>
		<!-- End Single Restaurant detail -->

		<!-- Single Restaurant detail -->
		<div class="row single-listing">
			<!-- University detail -->
				<div class="col-md-6 col-xs-12">
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
								<a class="btn btn-xs btn-danger" href="#">Closed</a>
							</div>
						</footer>
					</div>
				</div>
				<!-- END Univeristy detail -->

			<!-- University detail -->
				<div class="col-md-6 col-xs-12">
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
				<!-- END Univeristy detail -->		</div>
		<!-- End Single Restaurant detail -->

		<!-- Single Restaurant detail -->
		<div class="row single-listing border-bottom-none">
			<!-- University detail -->
				<div class="col-md-6 col-xs-12">
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
				<!-- END Univeristy detail -->
			<!-- University detail -->
				<div class="col-md-6 col-xs-12">
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
								<a class="btn btn-xs btn-danger" href="#">Closed</a>
							</div>
						</footer>
					</div>
				</div>
				<!-- END Univeristy detail -->
		</div>
		<!-- End Single Restaurant detail -->

	</div>
</section>





<section class="bt-block-home-parallax" style="background-image: url(img/reparallax-one.jpg);">
	<div class="banner-content">
		<div class="banner-content-inner">
			<h2>Follow your passion, be prepared to work hard and sacrifice, and, above all, don't let anyone limit your dreams.</h2>
		</div>


	</div>
</section>
<!-- /.bt-block-home-parallax -->





<!-- start featured restaurant -->
<div class="featured-product">
	<div class="container">

		<div class="row">
			<div class="col-md-12 text-center">

				<h2>New  <span class="font-semibold">Universities</span> & Colleges</h2>
			</div>
			<!-- col-md-12 -->
		</div>

		<div class="row">
			<div class="new-restaurant text-center">
				<div class="listing-default-list-items list-unstyled list-inline">
					<div class="col-md-4 col-sm-6 col-xs-12 item">
						<div class="item-content item-static">
							<div class="merchant-item merchant-item-partner">
								<div class="merchant-body ec-image-loaded">
									<img src="img/nust.jpg" alt="">

									<div class="merchant-text">
										<span class="merchant-title"><a href="#">NUST &amp; University</a></span>
										<div class="merchant-additions">
											<span class="merchant-location">Islamabad City</span>
										</div>
									</div>
								</div>

								<div class="merchant-footer">
									<div class="merchant-details">
										<span class="merchant-category"><a href="#">Pakistan</a></span>
										<div class="clearfix"></div>
									</div>
									<div class="merchant-buttons">
										<span class="merchant-button-primary"><a href="#">More Info</a></span>
										<span class="merchant-button-secondary"><a href="#">Admission Detail</a></span>
									</div>
								</div>



							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 item">
						<div class="item-content item-static">
							<div class="merchant-item merchant-item-partner">
								<div class="merchant-body ec-image-loaded">
									<img src="img/nust.jpg" alt="">

									<div class="merchant-text">
										<span class="merchant-title"><a href="#">NUST &amp; University</a></span>
										<div class="merchant-additions">
											<span class="merchant-location">Islamabad City</span>
										</div>
									</div>
								</div>

								<div class="merchant-footer">
									<div class="merchant-details">
										<span class="merchant-category"><a href="#">Pakistan</a></span>
										<div class="clearfix"></div>
									</div>
									<div class="merchant-buttons">
										<span class="merchant-button-primary"><a href="#">More Info</a></span>
										<span class="merchant-button-secondary"><a href="#">Admission Detail</a></span>
									</div>
								</div>



							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 item">
						<div class="item-content item-static">
							<div class="merchant-item merchant-item-partner">
								<div class="merchant-body ec-image-loaded">
									<img src="img/nust.jpg" alt="">

									<div class="merchant-text">
										<span class="merchant-title"><a href="#">NUST &amp; University</a></span>
										<div class="merchant-additions">
											<span class="merchant-location">Islamabad City</span>
										</div>
									</div>
								</div>

								<div class="merchant-footer">
									<div class="merchant-details">
										<span class="merchant-category"><a href="#">Pakistan</a></span>
										<div class="clearfix"></div>
									</div>
									<div class="merchant-buttons">
										<span class="merchant-button-primary"><a href="#">More Info</a></span>
										<span class="merchant-button-secondary"><a href="#">Admission Detail</a></span>
									</div>
								</div>



							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 item">
						<div class="item-content item-static">
							<div class="merchant-item merchant-item-partner">
								<div class="merchant-body ec-image-loaded">
									<img src="img/nust.jpg" alt="">

									<div class="merchant-text">
										<span class="merchant-title"><a href="#">NUST &amp; University</a></span>
										<div class="merchant-additions">
											<span class="merchant-location">Islamabad City</span>
										</div>
									</div>
								</div>

								<div class="merchant-footer">
									<div class="merchant-details">
										<span class="merchant-category"><a href="#">Pakistan</a></span>
										<div class="clearfix"></div>
									</div>
									<div class="merchant-buttons">
										<span class="merchant-button-primary"><a href="#">More Info</a></span>
										<span class="merchant-button-secondary"><a href="#">Admission Detail</a></span>
									</div>
								</div>



							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 item">
						<div class="item-content item-static">
							<div class="merchant-item merchant-item-partner">
								<div class="merchant-body ec-image-loaded">
									<img src="img/nust.jpg" alt="">

									<div class="merchant-text">
										<span class="merchant-title"><a href="#">NUST &amp; University</a></span>
										<div class="merchant-additions">
											<span class="merchant-location">Islamabad City</span>
										</div>
									</div>
								</div>

								<div class="merchant-footer">
									<div class="merchant-details">
										<span class="merchant-category"><a href="#">Pakistan</a></span>
										<div class="clearfix"></div>
									</div>
									<div class="merchant-buttons">
										<span class="merchant-button-primary"><a href="#">More Info</a></span>
										<span class="merchant-button-secondary"><a href="#">Admission Detail</a></span>
									</div>
								</div>



							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12 item">
						<div class="item-content item-static">
							<div class="merchant-item merchant-item-partner">
								<div class="merchant-body ec-image-loaded">
									<img src="img/nust.jpg" alt="">

									<div class="merchant-text">
										<span class="merchant-title"><a href="#">NUST &amp; University</a></span>
										<div class="merchant-additions">
											<span class="merchant-location">Islamabad City</span>
										</div>
									</div>
								</div>

								<div class="merchant-footer">
									<div class="merchant-details">
										<span class="merchant-category"><a href="#">Pakistan</a></span>
										<div class="clearfix"></div>
									</div>
									<div class="merchant-buttons">
										<span class="merchant-button-primary"><a href="#">More Info</a></span>
										<span class="merchant-button-secondary"><a href="#">Admission Detail</a></span>
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
<!-- featured restaurant Ends -->


<!-- start  city  -->
<section id="city">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="cities">
					<ul class="list-inline">
						<li>
							<a href="#">Lahore</a>
						</li>
						<li>
							<a href="#">Karachi</a>
						</li>
						<li>
							<a href="#">Islambad</a>
						</li>
						<li>
							<a href="#">Peshawar</a>
						</li>
						<li>
							<a href="#">Multan</a>
						</li>
						<li>
							<a href="#">Sailkot</a>
						</li>
						<li>
							<a href="#">Gujranwala</a>
						</li>
						<li>
							<a href="#">Rawalpindi</a>
						</li>
					</ul>
				</div>

			</div>
		</div>
	</div>
</section>

<!-- end  city  -->



<!-- Download App Start
====================================================== -->
<section class="download-app-area">
	<div class="download-app-sec" style="background:url(img/download-app.jpg) bottom center no-repeat fixed;
        background-size:cover;">
		<div class="mask">
			<div class="container">
				<div class="col-lg-7 col-md-7 col-sm-12 container-cell left-container col-md-push-1">
					<div class="app-content row">
						<div class="inner">
							<h1 class="logo-content">Uni-Admission in your pocket!</h1>
							<h3 class="logo-subtitle">Coming soon! Get our app, it's the fastest way to find best University.</h3>
							<!--<p class="content">
                                Keep an eye on Thefoody, it is already on your way. Come back here for checkout the latest updates.
                            </p>-->
							<ul class="list-inline appstore-buttons">
								<li><a href="#" class="btn-store btn-appstore">App Store</a></li>
								<li><a href="#" class="btn-store btn-googleplay">Google Play</a></li>
							</ul>
						</div>

					</div>
				</div>
				<div class="col-md-4 right-align">
					<div class="left-area visible-lg">
						<img src="img/mobile.png" alt="">
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="clearfix"></div>
<!-- =================================================
Download App End -->

@endsection