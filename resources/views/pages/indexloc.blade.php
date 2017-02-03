<?php
use App\Category;
use App\Address;
use App\City;
?>
@extends('layouts.master')

@section('title') Home | Uni-admission @stop

@section('jstop')
@stop

@section('content')
    <!-- static header -->
    @if(Session::has('message'))
        <div class="alert alert-success float-right top-margin" id="success-alert">
            <a href="#" class="close" data-dismiss="alert" aria-label="close" onclick="$('#seccess-alert').hide()">&times;</a>
            <strong>Successfuly! </strong> {{ Session::get('message') }}.
        </div>
    @endif
    <section class="static-section">
        <div class="container">
            <div class="row static-header-content-wrapper">
                <div class="static-header-content">
                    <div class="static-header-text">
                        <h2 class="white">OPPORTUNITY TO GET BATTER ADMISSION</h2>
                        <h4 class="white">Find your favourite local School or University, get your desire Education.</h4>
                    </div>
                    <div class="search-form-wrap2">
                        <form class="clearfix" action="{{ route('search') }}" method="post">
                            <div class="input-field-wrap pull-left inner-addon left-addon">
                                <i class="icon-location"></i>
                                <input class="search-form-input" name="city" placeholder="City" type="text" required/>
                            </div>
                            <div class="select-field-wrap pull-left">
                                <select class="search-form-select" name="category" required>
                                    @foreach(\App\Category::all() as $category)
                                        <option class="options" value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="submit-field-wrap pull-left">
                                <input class="search-form-submit bgred-1 white" name="submit" type="submit" value="FIND UNIVERSITY" />
                            </div>
                            {{ csrf_field() }}
                        </form>
                    </div>

                    <div class="guest-info text-center">
                        <p><i class="fa fa-university" aria-hidden="true"></i> Open Admission in <span>{{ \App\Institute::all()->where('status', true)->count() }}</span> Universities </p>
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
                <div class="row single-listing">
                    <!-- University detail -->
                    @foreach($institutes as $institute)

                        <?php $address =  Address::find($institute->address_id); ?>
                        <?php $city =  City::find($institute->city_id); ?>
                        <?php $category =  Category::find($institute->category_id); ?>

                        <div class="col-md-6 col-xs-12">
                            <div class="item-block">
                                <header>
                                    <a href="#"><img src="\storage\{{ $institute->image }}" alt="{{ $institute->image_alt }}"></a>
                                    <div class="hgroup">
                                        <h4><a href="#">{{ $institute->name }}</a></h4>
                                        <h5>{{ $city->name }}</h5>
                                    </div>
                                    <div class="header-meta">
                                        <span class="icon-location">{{ $address->address }}</span>
                                    </div>
                                </header>

                                <footer>
                                    <p class="status"><strong>Last Date: </strong>{{ $institute->last_date }}</p>
                                    <p class="status"><strong>Category: </strong>{{ $category->name }}</p>

                                    <div class="action-btn">
                                        <a class="btn btn-xs {{ $institute->status? "btn-success" : "btn-danger" }}" href="#">{{ $institute->status? "Open" : "Close" }}</a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
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

                        <!-- One Post -->
                        @foreach($institutesWithLink as $item)
                            <?php $city =  City::find($item->city_id); ?>
                            <?php $category =  Category::find($item->category_id); ?>
                            <div class="col-md-4 col-sm-6 col-xs-12 item">
                                <div class="item-content item-static">
                                    <div class="merchant-item merchant-item-partner">
                                        <div class="merchant-body ec-image-loaded">
                                            <img src="\storage\{{ $item->image }}" alt="{{ $item->image_alt }}">

                                            <div class="merchant-text">
                                                <span class="merchant-title"><a href="#">{{ $item->name }}</a></span>
                                                <div class="merchant-additions">
                                                    <span class="merchant-location">{{ $city->name }}</span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="merchant-footer">
                                            <div class="merchant-details">
                                                <span class="merchant-category"><a href="#">{{ $category->name }}</a></span>
                                                <div class="clearfix"></div>
                                            </div>
                                            <div class="merchant-buttons">
                                                <span class="merchant-button-primary"><a href="{{ $item->site_url }}" target="_blank">More Info</a></span>
                                                <span class="merchant-button-secondary"><a href="{{ $item->site_url }}" target="_blank">Admission Detail</a></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    @endforeach
                    <!-- End one Post -->

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
                            <!-- List of Citites -->
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
@endsection
@section('js')
    <script>

        function initMap() {

            // Try HTML5 geolocation.
            if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                    var pos = {
                        lat: position.coords.latitude,
                        lng: position.coords.longitude
                    };

                    // Get Positoin Name passing args => pos;
                    getAddressName(pos).then(function(result){
                        console.log(result);
                    }).catch(function(ex){
                        console.log(ex);
                    });
                });
            } else {
                // Browser doesn't support Geolocation
                console.log("Browser doesn't support Geolocation");
            }
        }


        /**
         * Get GeoLocation Title
         * @param pos
         */
        function getAddressName (pos) {
            return new Promise(function (resolve, reject) {
                var request = new XMLHttpRequest();

                var method = 'GET';
                var url = 'http://maps.googleapis.com/maps/api/geocode/json?latlng=' + pos.lat + ',' + pos.lng + '&sensor=true';
                var async = true;

                request.open(method, url, async);
                request.onreadystatechange = function () {
                    if (request.readyState == 4) {
                        if (request.status == 200) {
                            var data = JSON.parse(request.responseText);
                            var address = data.results[0];
                            city = address.address_components[1].long_name;
                            //console.log(city);
                            resolve(city);
                        }
                        else {
                            reject(request.status);
                        }
                    }
                };
                request.send();
            });
        }

    </script>
    <script async defer
            src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC1fcbNH6X_lGnNchC-NqN4sPJWsJvtN0k&callback=initMap">
    </script>

@endsection
