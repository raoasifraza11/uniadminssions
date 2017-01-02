<section id="index-footer" class="footer-area-content">


	<!-- Newsletter -->
	<div id="newsletter">
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center">
					<h3><i class="fa fa-envelope-o"></i>Keep in touch, Join our newsletter</h3>
				</div>
			</div>
			<div class="row">
				<form method="post" action="{{ route('subscribe') }}">
					<div class="col-md-6 col-md-offset-3">
						<div class="col-sm-8">
							<input type="email" name="email" required="required" placeholder="Your Email Address" id="email" class="form-control" name="email">
						</div>
						<div class="col-sm-4">
							<button type="submit" class="btn btn-subscribe">Subscribe</button>
						</div>
						{{ csrf_field() }}
					</div>
				</form>
			</div>
		</div>
	</div>
	<!-- END: Newsletter -->

	<div class="container">
		<div class="footer-wrapper style-3">
			<footer class="type-1">
				<div class="footer-columns-entry">
					<div class="row">
						<div class="col-md-3 col-sm-3">
							<h3 class="column-title">Open Admissions</h3>
							<ul class="column">
								@foreach(\App\Institute::all()->where('status', true)->take(3) as $institute)
								<li><a href="{{ $institute->site_url }}" target="_blank">{{ $institute->name }}</a></li>
								@endforeach
							</ul>
						</div>
						<div class="col-md-3 col-sm-3">
							<h3 class="column-title">Pages</h3>
							<ul class="column">
								<li><a href="/byalpha">University</a></li>
								<li><a href="/about">About Us</a></li>
								<li><a href="/contact">Contact Us</a></li>
							</ul>
							<div class="clear"></div>
						</div>

						<div class="col-md-3 col-sm-3">
							<h3 class="column-title">Area</h3>
							<ul class="column">
								@foreach(\App\City::all()->sortByDesc('name')->take(4) as $city)
								<li><a href="#">{{ $city->name }}</a></li>
								@endforeach
							</ul>
							<div class="clear"></div>
						</div>

						<div class="col-md-3 col-sm-3">
							<h3 class="column-title">More On</h3>
							<ul class="column">
								<li><a href="about">About Us</a></li>
								<li><a href="#">News</a></li>
								<li><a href="#">Terms and conditions</a></li>
								<li><a href="#"> Privacy policy</a></li>
								<li><a href="#">Careers</a></li>

							</ul>
							<div class="clear"></div>
						</div>
					</div>
				</div>

			</footer>
		</div>
	</div>


	<div class="footer-bottom footer-wrapper style-3">

		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="footer-bottom-navigation">
						<div class="cell-view">
							<div class="footer-links">
								<a href="#">Site Map</a>
								<a href="#">Search</a>
								<a href="#">Terms</a>
								<a href="#">Privacy policy</a>
								<a href="#">Order online</a>
								<a href="contact-us.php">Contact Us</a>
								<a href="#">Careers</a>
							</div>
						</div>
						<div class="cell-view">
							<div class="social-content" id="social-links">
								<a class="post-facebook" href="#"><i class="fa fa-facebook"></i></a>
								<a class="post-google-plus" href="#"><i class="fa fa-google-plus"></i></a>
								<a class="post-twitter" href="#"><i class="fa fa-twitter"></i></a>
								<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

</section>
