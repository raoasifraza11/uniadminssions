@extends('layouts.master')

@section('title') Contact Us | Uni-admission @endsection

@section('body') <body class="style-2 nav-on-header-white"> @endsection


@section('content')
<!-- Content Start -->

<!-- Start Pages Title  -->

<section id="page-title" class="page-title-style2">
    <div class="color-overlay"></div>
    <div class="container inner-img">
        <div class="row">
            <div class="Page-title">
                <div class="col-md-12 text-center">
                    <div class="title-text">
                        <h6>Best Service</h6>
                        <h2 class="page-title">Contact page</h2>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="breadcrumb-trail breadcrumbs">
                        <span class="trail-begin"><a href="/">Home</a></span>
                        <span class="sep">/</span> <span class="trail-end">Contact</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Pages Title  -->

<!-- Main container -->
<main class="main-content contact-page-two">

    <!-- Start Map Style1 -->
    <div id="Map-Style" class="light-wrapper">
        <div id="map_canvas"></div>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
        <script>
            // This example displays a marker at the center of Australia.
            // When the user clicks the marker, an info window opens.

            function initialize() {
                var myLatlng = new google.maps.LatLng(33.655519, 73.155575);
                var mapOptions = {
                    zoom: 10,
                    center: myLatlng,
                    zoomControl: false,
                    scaleControl: false,
                    scrollwheel: false,
                    disableDoubleClickZoom: true,
                };

                var map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);

                var contentString = '<div id="content">' +
                        '<h3>metlife.</h3><p>3453 corn street, Sanford, FL 34232</p>' +
                        '</div>';

                var infowindow = new google.maps.InfoWindow({
                    content: contentString
                });

                var marker = new google.maps.Marker({
                    position: myLatlng,
                    map: map,
                    title: 'Uluru (Ayers Rock)'
                });
                google.maps.event.addListener(marker, 'click', function() {
                    infowindow.open(map, marker);
                });
            }

            google.maps.event.addDomListener(window, 'load', initialize);
        </script>

    </div>
    <!-- End Map Style1 -->
    <div id="Contact" class="light-wrapper">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="Contact-Form">
                                <form class="leave-comment contact-form" method="" action="#" id="cform" autocomplete="on">
                                    <div class="Contact-us">
                                        <div class="form-input col-md-4">
                                            <input type="text" class="form-control" placeholder="Name">
                                        </div>
                                        <div class="form-input col-md-4">
                                            <input type="email" class="form-control" placeholder="Email">
                                        </div>
                                        <div class="form-input col-md-4">
                                            <input type="text" class="form-control" name="contact_phone" placeholder="Phone">
                                        </div>
                                        <div class="form-input col-md-12">
                                            <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                                        </div>
                                        <div class="form-submit col-md-12">
                                            <button class="btn btn-color" type="submit">Send Message</button>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="Contact-Info">
                            <h4>Contact Details</h4>
                            <div class="tex-contact">
                                <p>Our team is working hard to provide all University information at on place. If you want to query or add any University
	                                that currently not available. Feel free to contact us.
                                </p>
                            </div>
                            <div class="Block-Contact col-md-12">

                                <ul>
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        <span>+92 (300) 252 - 8517</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        <span>info@uni-admisssions.com</span>
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker"></i>
                                        <span>Park Road Chak Shahzad, Islamabad, Pakistan</span>
                                    </li>
                                </ul>
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

    <!-- End Contact Us -->

    <!-- End Pages Title  -->


</main>
<!-- END Main container -->

@endsection
