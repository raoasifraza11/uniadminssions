<nav class="navbar">
	<div class="container">

		<!-- Logo -->
		<div class="pull-left">
			<a class="navbar-toggle" href="#" data-toggle="offcanvas"><i class="ti-menu"></i></a>

			<div class="logo-wrapper">
				<a class="logo" href="/"><!-- <img src="img/logo.png" alt="logo"> --><h3 style="color: white">&nbsp;&nbsp;&nbsp;&nbsp;Uni</br> Admissions</h3></a>
				<a class="logo-alt" href="/"><!--<img src="img/logo.png" alt="logo-alt">--><h3 style="color: white">&nbsp;&nbsp;&nbsp;&nbsp;Uni</br> Admissions</h3></a>
			</div>

		</div>
		<!-- END Logo -->

		<!-- User account -->
		<div class="pull-right user-login">
			@if (Route::has('login'))
				<div class="top-right links">
					@if (Auth::check())
						<a class="btn btn-sm btn-primary" href="{{ url('/admin') }}">Dashboard</a>
					@else
						{{--<a class="btn btn-sm btn-primary" href="{{ url('/login') }}">Login</a> --}}
						{{-- or &nbsp;<a class="user-register" href="{{ url('/register') }}">Register</a> --}}
					@endif
				</div>
			@endif
		</div>
		<!-- END User account -->

		<!-- Navigation menu -->
		<ul class="nav-menu">
			<li>
				<a {{ (Request::is('/') ? 'class=active' : null) }} href="/">Home</a>
			</li>
			<li>
				<a {{ (Request::is('byalpha') ? 'class=active' : null) }}  href="byalpha">University</a>
				<ul>
					<li><a {{ (Request::is('byalpha') ? 'class=active' : null) }}  href="byalpha">By Alphabets</a></li>
					<li><a {{ (Request::is('byarea') ? 'class=active' : null) }}  href="byarea">By Area</a></li>
					<li><a {{ (Request::is('bycategory') ? 'class=active' : null) }}  href="bycategory">By Category</a></li>
				</ul>
			</li>
			<li>
					<li><a {{ (Request::is('about') ? 'class=active' : null) }} href="about">About Us</a></li>
			</li>
			<li>
					<li><a {{ (Request::is('contact') ? 'class=active' : null) }} href="contact">Contact Us</a></li>
			</li>
			<li>
					<li><a href="#social-links">Follow Us</a></li>
			</li>
			
		</ul>
		<!-- END Navigation menu -->

	</div>
</nav>
