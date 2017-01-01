<?php
	use App\Category;
	use App\Address;
	use App\City;
?>

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
						<h2 class="page-title">Institue list by {{ $data['title'] }}</h2>
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
								<input type="text" class="form-control" placeholder="City/Category Name" />
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
										<em style="color: green;">Status</em>
									</div>
									<div class="restaurant-status-filter">
										<ul class="list-unstyled">
											<li>

												<input type="checkbox" id="admissionOpen" checked>
												<label for="restaurantOpen"><i class="icon-check custom-check"></i> Admission Now Open</label>
											</li>
										</ul>

									</div>
								</div>
								<div class="restaurant-service-section">
									<div class="restaurant-service-title gray-deep-bg">
										<em style="color: green;">Category</em>
									</div>
									<div class="restaurant-service-filter">
										<ul class="list-unstyled">
											@foreach(\App\Category::all()->sortBy('name') as $category)
											<li>
												<input type="checkbox" name="category" id="{{ $category->name }}" value="{{ $category->id }}" checked>
												<label for="{{ $category->name }}"><i class="icon-check custom-check" ></i>{{ str_replace("Engineering", '',$category->name) }}</label>
											</li>
											@endforeach
										</ul>
									</div>

								</div>

								<div class="restaurant-cuisines-section">
									<div class="restaurant-cuisines-title gray-deep-bg">
										<em style="color: green;">Area</em>
									</div>
									<div class="restaurant-cuisines-filter">
										<ul class="list-unstyled">
											<li>
												<input type="checkbox" value="" name="city" id="allCity" checked>
												<label for="allCity"><i class="icon-check custom-check"></i> View All</label>
											</li>
											@foreach(\App\City::all()->sortBy('name') as $city)
											<li>
												<input type="checkbox" value="{{ $city->id }}" name="city" id="{{ $city->name }}" checked>
												<label for="{{ $city->name }}"><i class="icon-check custom-check" ></i> {{ $city->name }}</label>
											</li>
											@endforeach
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
					@foreach($data['institutes'] as $institute)

						<?php $address =  Address::find($institute->address_id); ?>
						<?php $city =  City::find($institute->city_id); ?>
						<?php $category =  Category::find($institute->category_id); ?>

					<!-- Restaurant detail -->
					<div class="col-xs-12">
						<div class="item-block">
							<header>
								<a href="#"><img src="\storage\{{ $institute->image }}" alt="{{ $institute->image_alt }}"></a>
								<div class="hgroup">
									<h4><a href="#">{{ $institute->name }}</a></h4>
									<h5>{{ $city['name'] }}</h5>
								</div>
								<div class="header-meta">
									<span class="icon-location">{{ $address['address'] }}</span>
								</div>
							</header>

							<footer>
								<p class="status"><strong>Last Date: </strong>{{ $institute->last_date }}</p>
								<p class="status"><strong>Category: </strong>{{ $category['name'] }}</p>

								<div class="action-btn">
									<a class="btn btn-xs {{ $institute->status? "btn-success" : "btn-danger" }}" href="#">{{ $institute->status? "Open" : "Close" }}</a>
								</div>
							</footer>
						</div>
					</div>
					<!-- END Restaurant detail -->

					@endforeach
					<div class="row">
						<div class="col-md-6 float-right">
							{{ $data['institutes']->links() }}
						</div>
					</div>
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