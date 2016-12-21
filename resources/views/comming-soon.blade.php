<!DOCTYPE HTML>
<html lang="en">

<head>
	<title> Uni-Admissions - Coming Soon  </title>
    <?php include('inc_metadata.php') ?>
</head>

<body class="style-2 nav-on-header-white">

<!-- Start Loading -->
<section class="loading-overlay">
    <div class="Loading-Page">
        <h1 class="loader">Loading...</h1>
    </div>
</section>
<!-- End Loading  -->


<!-- Start Navigation bar -->
<!-- End Navigation bar -->



<!-- Content Start -->

<!-- Start Pages Title  -->

<section id="page-title" class="page-title-style2">
    <div class="color-overlay"></div>
    <div class="container inner-img">
        <div class="row">
            <div class="Page-title">
                <div class="col-md-12 text-center">
                    <div class="title-text">
                        <h6>Great Service</h6>
                        <h2 class="page-title">Coming soon Page</h2>
                    </div>
                </div>
                <div class="col-md-12 text-center">
                    <div class="breadcrumb-trail breadcrumbs">
                        <span class="trail-begin"><a href="index.php">Home</a></span>
                        <span class="sep">/</span> <span class="trail-end">Coming soon</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- End Pages Title  -->

<!-- Start Coming Soon -->
<main class="main-content">
    <section id="coming_soon" class="light-wrapper">
        <div class="container">
            <div class="inner">
                <div class="row">
                    <div class="section-coming-soon text-center col-lg-12">
                        <h2>WE ARE COMING SOON</h2>
                        <div class="title-description">
                            <p>TheFoody is a global provider of food. TheFoody has operations in nearly 50 countries serving approximately 100 million coustomers. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</p>
                        </div>
                    </div>
                </div>
                <div class="divcod30"></div>
                <div class="row">
                    <!-- Coming Soon Starts -->
                    <div class="coming-soon">
                        <!-- Countdown -->
                        <div class="countdown"></div>

                    </div>
                    <!-- Coming Soon Ends -->
                </div>
            </div>

        </div>
    </section>
</main>




<!-- End Coming Soon -->





<!-- Content End -->

<!-- start footer area -->
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
                <div class="col-md-6 col-md-offset-3">
                    <div class="col-sm-8">
                        <input type="email" required="required" placeholder="Your Email Address" id="email" class="form-control" name="email">
                    </div>
                    <div class="col-sm-4">
                        <a href="#" class="btn btn-subscribe">Subscribe</a>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- END: Newsletter -->

    <div class="footer-bottom footer-wrapper style-3">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="footer-bottom-navigation">
                        <div class="cell-view">
                            <div class="footer-links">
                                <a href="#">Site Map</a>
                                <a href="restaurant-list.html">Search</a>
                                <a href="#">Terms</a>
                                <a href="#">Privacy policy</a>
                                <a href="#">Order online</a>
                                <a href="#">Contact Us</a>
                                <a href="#">Careers</a>
                            </div>
                            <div class="copyright">Created with by <a target="_blank" href="#">iGlyphic</a> . All right reserved</div>
                        </div>
                        <div class="cell-view">
                            <div class="social-content">
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
<!-- footer area end -->

<!-- Back to top Link -->
<div id="to-top" class="main-bg"><span class="fa fa-chevron-up"></span></div>


<!--Jquery-->
<?php include('inc_bottom.php') ?>
<script type="text/javascript" src="js/jquery.countdown.js"></script>
<!-- Custom Javascript -->


<script type="text/javascript">
    /* Countdown */
    $('.countdown').countdown('2016/10/16', function(event) {
        var $this = $(this).html(event.strftime('' +
                '<div class="date">%Y <span>Years</span></div> ' +
                '<div class="date">%m <span>Months</span></div>  ' +
                '<div class="date">%H <span>Hrs</span></div>  ' +
                '<div class="date">%S <span>Sec</span></div> '));
    });
</script>



</body>

</html>
