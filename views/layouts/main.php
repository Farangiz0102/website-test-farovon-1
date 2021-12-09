<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <style type="text/css">
		/* Only Demo Purpose */
		.colorPanel {margin: 0;padding: 5px;position: fixed;z-index: 100;min-width: 20px; border-radius: 3px 0 0 3px; background-color: #EDC63C;right:0;top: 35%;} .colorPanel ul {margin:0px;padding:0px;list-style: none;display:none;} .colorPanel ul li {display: block;margin-top: 10px;} .colorPanel ul a {display: block;width: 20px;height: 20px;border: #fff 1px solid;} .colorPanel a.cart {border-bottom: 1px solid rgba(255,255,255,.3); margin-bottom: 6px; padding-bottom: 8px;display: block;} #cpToggle{display:block;height:30px; width:20px; line-height:30px; background-size:cover;}.cp-custom{padding: 12px;}.cp-custom #cpToggle{background: none;}.cp-custom i{font-size: 15px;color:#3C4DFF;}
	</style>
    <script>
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	})(window,document,'script','../../www.google-analytics.com/analytics.js','ga');
	
	ga('create', 'UA-107043957-2', 'auto');
	ga('send', 'pageview');
	</script>
    <?php $this->head() ?>
</head>
<body class="site-body style-v1">
<?php $this->beginBody() ?>
<!-- Header -->
<header class="site-header header-s1 is-sticky">
		<!-- Navbar -->
		<div class="navbar navbar-primary">
			<div class="container">
				<!-- Logo -->
				<a class="navbar-brand" href="index.html">
					<img class="logo logo-dark" alt="" src="image/logo.png" srcset="image/logo2x.png 2x">
					<img class="logo logo-light" alt="" src="image/logo-white.png" srcset="image/logo-white2x.png 2x">
				</a>
				<!-- #end Logo -->
				<!-- HeaderTop -->
				<div class="header-top">
					<ul class="top-contact">
						<li class="t-phone t-phone1 t-phone-s2">
							<span><small><em class="color-secondary">24H</em> EMERGENCY SERVICE</small> <em class="fa fa-phone" aria-hidden="true"></em> <a href="#">800-123-4567</a></span>
						</li>
						<li class="t-phone t-phone1 t-phone-s2">
							<span><small>CALL OFFICE # </small> <em class="fa fa-phone" aria-hidden="true"></em> <a href="#">415-123-4567</a></span>
						</li>
						<li class="quote-btn"><a href="request-service.html" class="btn">Schedule Service Now</a></li>
					</ul>
				</div>
				<!-- #end HeaderTop -->
				<!-- NavBar Trigger -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#mainnav"
							aria-expanded="false">
						<span class="sr-only">Menu</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Q-Button for Mobile -->
					<div class="quote-btn"><a class="btn" href="request-service.html"><span>Request Service</span></a></div>
				</div>
				<!-- #end Trigger -->
				<!-- MainNav -->
				<nav class="navbar-collapse collapse" id="mainnav">
					<ul class="nav navbar-nav">
						<li><a href="/">Сахифаи асоси</a></li>
						<li><a href="/">Тамос</a></li>
					</ul>
				</nav>
				<!-- #end MainNav -->
			</div>
		</div>
		<!-- #end Navbar -->
        <!-- Banner/Slider -->
		<div id="slider" class="banner banner-slider carousel slide carousel-fade">
			<!-- Wrapper for Slides -->
			<div class="carousel-inner">
				<!-- // -->
				<div class="item active">
					<div class="fill" style="background-image:url('image/slider-a.jpg');">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text style-modern al-left pos-left light">
										<div class="animated fadeIn">
											<h3 class="page-title">WE ARE AVAILABLE FOR<br>EMERGENCY PLUMBING</h3>
											<p>Our highly trained and skilled plumbers offer a full range of services for residential plumbing and commercial plumbing.</p>
											<p class="more-cta"><a href="#" class="btn btn-light btn-outline">Our Services</a> <a href="#" class="btn btn-alt">Request Service</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- // -->
				<div class="item">
					<div class="fill" style="background-image:url('image/slider-b.jpg');">
						<div class="banner-content">
							<div class="container">
								<div class="row">
									<div class="banner-text style-modern al-left pos-right light">
										<div class="animated fadeIn">
											<h3 class="page-title">WE ARE AVAILABLE FOR<br>PLUMBING SERVICES</h3>
											<p>Our professional plumbers are available to serve you 24 hours a day, 365 days a year, we will quickly dispatch someone to your location.</p>
											<p class="more-cta"><a href="#" class="btn btn-light btn-outline">Our Services</a> <a href="#" class="btn btn-alt">Request Service</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- // -->
			</div>
			<!-- Arrow Controls -->
			<a class="left carousel-control" href="#slider" role="button" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#slider" role="button" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<!-- #end Banner/Slider -->
	</header>
	<!-- End Header -->
    <?= $content  ?>
<!-- Footer Widget-->
<div class="footer-widget section-pad-md">
		<div class="container">
			<div class="row">

				<div class="widget-row row">
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Our Plumbing Services</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Residential Plumbing Services</a></li>
									<li><a href="#">Commercial Plumbing Services</a></li>
									<li><a href="#">Drain Cleaning Services</a></li>
									<li><a href="#">Sewer Replacement Services</a></li>
									<li><a href="#">Gas Lines Services</a></li>
									<li><a href="#">Garbage Disposal Services</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer wgs-menu">
							<h5 class="wgs-title">Quick Links</h5>
							<div class="wgs-content">
								<ul class="menu">
									<li><a href="#">Home</a></li>
									<li><a href="#">About Us</a></li>
									<li><a href="#">Testimonial</a></li>
									<li><a href="#">Client Resources</a></li>
									<li><a href="#">Our Blog</a></li>
									<li><a href="#">Contact</a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6 res-m-bttm">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<h5 class="wgs-title">Company Information</h5>
							<div class="wgs-content">
								<ul class="contact-info">
									<li><span>Toll Free</span>: 800-123-5689<br>
										<span>Phone</span>: 781-123-9865</li>
									<li>50 West End Avenue Suite <br>
                                        7A New York, NY 50025, USA.</li>
                                    <li>Servicing the Albany, Brisbane, Dublin, Palo Alto and San Fransico &amp; surrounding areas.</li>
								</ul>
								<ul class="social social-v2">
									<li><a href="#"><em class="fa fa-facebook" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-twitter" aria-hidden="true"></em></a></li>
									<li><a href="#"><em class="fa fa-linkedin" aria-hidden="true"></em></a></li>
								</ul>
							</div>
						</div>
						<!-- End Widget -->
					</div>
					<div class="footer-col col-md-3 col-sm-6">
						<!-- Each Widget -->
						<div class="wgs wgs-footer">
							<div class="wgs-content">
								<div class="footer-logo"><img src="image/logo-white.png" srcset="image/logo-white2x.png 2x" alt=""></div>
								<div class="partner-ref">
									<div class="partner-logo half">
										<img src="image/partner-logo-a.png" alt="">
									</div>
									<div class="partner-logo half">
										<img src="image/partner-logo-b.png" alt="">
									</div>
								</div>
							</div>
						</div>
						<!-- End Widget -->
					</div>

				</div><!-- Widget Row -->

			</div>
		</div>
	</div>
	<!-- End Footer Widget -->
	<!-- Copyright -->
	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="site-copy col-sm-7">
					<p>Copyright &copy; 2017 Plumbing. All Rights Reserved <span class="sep"> . </span> <a href="#">Sitemap</a></p>
				</div>
				<div class="site-by col-sm-5 al-right">
					<p>Template Made <em class="fa fa-heart text-danger"></em> by <a href="http://themesurf.com/" target="_blank">ThemeSurf</a></p>
				</div>
			</div>
		</div>
	</div>
	<!-- End Copyright -->



<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
