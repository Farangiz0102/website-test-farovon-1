<?php

/* @var $this yii\web\View */

$this->title = 'Саҳифаи асосӣ';
?>
	<!-- Service Section -->
	<div class="section section-services section-pad">
		<div class="container">
			<div class="content row">
				<!-- Feature Row  -->
               
				<div class="row row-feature row-column">
                <?php foreach($news as $item): ?>
					<div class="col-md-4 col-sm-4">
						<!-- feature box -->
						<div class="feature feature-s6 boxed">
							<a href="#">
								<div class="fbox-photo">
									<img src="image/<?= $item['image'] ?>" alt="">
								</div>
								<div class="fbox-content">
									<h3><?= $item['title'] ?></h3>
									<p><?= $item['text'] ?></p>
									<span class="btn-link link-arrow">Read More</span>
								</div>
							</a>
						</div>
						<!-- End Feature box -->
					</div>
                    <?php endforeach ?>
				</div>
                
				<!-- Feture Row  #end -->
			</div>
		</div>
	</div>
	<!-- End Section -->

	<!-- Content -->
	<div class="section section-content section-pad bg-light">
		<div class="container">
			<div class="content row">

				<div class="row">
					<div class="col-md-8 col-sm-12 pad-r-md res-m-bttm-lg">
						<h2>Emergency Plumbing Services, Residential &amp; Commercial Plumbing Services.</h2>
						<p>We have been serving the people in Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla quis nostrum.</p>
						<h3>A full range of plumbing services</h3>
						<p>Need assistance dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae.</p>
						<p>Need assistance dolore mque laudantium, totam rem aperiam, eaque ipsa quae ab illo invent ore veritatis et quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore teritatis et quasi architecto. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium dolore mque laudantium.</p>
						<p><a href="#" class="btn btn-primary">View Our Services</a></p>
					</div>
					<div class="col-md-4 col-sm-12">
						<!-- Form Widget -->
						<div class="wgs-box wgs-quoteform has-bg light light-filter">
							<h3 class="wgs-heading"><strong>Schedule Your Service</strong></h3>
							<div class="wgs-content">
								<form  id="quote-request" class="form-quote" action="http://demo.themesurf.com/plumbing/form/contact.php" method="post">
									<div class="form-results"></div>
									<div class="form-group">
										<div class="form-field">
											<input name="contact-name" type="text" placeholder="Name *" class="form-control required">
										</div>
									</div>
									<div class="form-group">
										<div class="form-field">
											<input name="contact-email" type="email" placeholder="Email *" class="form-control required email">
										</div>
									</div>
									<div class="form-group">
										<div class="form-field form-m-bttm">
											<input name="contact-phone" type="text" placeholder="Phone" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="form-field">
											<input name="contact-service" type="text" placeholder="Interest of Service" class="form-control">
										</div>
									</div>
									<div class="form-group">
										<div class="form-field">
											<textarea name="contact-message" placeholder="Messages *" class="txtarea form-control required"></textarea>
										</div>
									</div>
									<input type="text" class="hidden" name="form-anti-honeypot" value="">
									<button type="submit" class="btn btn-alt sb-h">Submit</button>
								</form>
							</div>
							<div class="wgs-image-bg imagebg">
								<img src="image/form-bg.jpg" alt="">
							</div>
						</div>
						<!-- #end Form Widget -->
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->
	
	<!-- Call Action -->
	<div class="call-action cta-small has-parallax bg-secondary" style="background-image: url('image/plx-dark.jpg');">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="wide-md center">
						<p class="lead">If you need any emergency plumbing service, simply call our 24 hour emergency number</p>
						<h2 class="heading-lead">Reliable Emergency Plumbing Service with Fair rates</h2>
						<div class="gaps size-xs"></div>
						<a href="#" class="btn btn-light btn-alt">+(800) 123 4567</a>
					</div>
					
				</div>				
			</div>
		</div>
	</div>
	<!-- End Call Action -->
	
	<!-- Content -->
	<div class="section section-content section-pad bg-light">
		<div class="container">
			<div class="content row">

				<div class="row row-vm">
					<div class="col-sm-6 res-s-bttm pad-r">
						<img src="image/photo-md-a.jpg" alt="">
					</div>
					<div class="col-sm-6 pad-l">
						<h5 class="heading-sm-lead">About Us</h5>
						<h2>Your Neighborhood Plumber. <br>Your best choice for plumbing services in San Francisco.</h2>
						<p>The best choice for professional plumbing services enim aliquam, condim entum nisl laoreet lectus. Aliquam convallis sed elit nec vehicula. Praesent gravida massa sit amet ullam corper fringilla. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla.</p>
						<a href="#" class="btn-link link-arrow-sm">Know More About Us</a>
					</div>
				</div>
				<!-- // -->
				<div class="gaps size-lg"></div>
				<div class="row">
					<div class="col-sm-4 res-s-bttm">
						<div class="bg-white pd-x3 center">
							<div class="icon-box style-s2 size-md">
								<em class="fa fa-users"></em>
							</div>
							<h4>Lots of plumbers</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit viverra nec suscipit venenatis.
							</p>
						</div>
					</div>
					<!-- // -->
					<div class="col-sm-4 res-s-bttm">
						<div class="bg-white pd-x3 center">
							<div class="icon-box style-s2 size-md">
								<em class="fa fa-trophy"></em>
							</div>
							<h4>We are Trusted</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit viverra nec suscipit venenatis.
							</p>
						</div>
					</div>
					<!-- // -->
					<div class="col-sm-4">
						<div class="bg-white pd-x3 center">
							<div class="icon-box style-s2 size-md">
								<em class="fa fa-support"></em>
							</div>
							<h4>Best support</h4>
							<p> Lorem ipsum dolor sit amet, consectetur adipiscing elit viverra nec suscipit venenatis.
							</p>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Content -->

	<!-- Testimonials -->
	<div class="section section-quotes section-pad has-bg dark-filter light">
		<div class="container">
			<div class="content row">
				<h2 class="center">What Our Customers Say</h2>
				<div class="testimonials style-v1">
					<div id="testimonial" class="quotes-slider wide-sm">
						<div class="owl-carousel loop has-carousel" data-items="1" data-loop="true" data-dots="true" data-auto="true" data-navs="false">
							<div class="item center">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text">
										<p>Great Service, On Time unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo nemo enim ipsam.</p>
									</div>
									<div class="profile">
										<h5>John Doe - Brisbane</h5>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
							<!-- End Slide -->
							<!-- Each Slide -->
							<div class="item center">
								<!-- Each Quotes -->
								<div class="quotes">
									<div class="quotes-text center">
										<p>Needed an Emergency service unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam.</p>
									</div>
									<div class="profile">
										<h5>David Alone - Company Name</h5>
									</div>
								</div>
								<!-- End Quotes -->
							</div>
						</div>
						<!-- End Slide -->
					</div>
				</div>

			</div>
		</div>
		<div class="section-bg imagebg fixed-bg">
			<img src="image/plx-dark.jpg" alt="">
		</div>
	</div>
	<!-- End Section -->

	<!-- Call Action -->
	<div class="call-action bg-primary">
		<div class="cta-block">
			<div class="container">
				<div class="content row">

					<div class="cta-sameline">
						<h3>Complete Residential and Commercial Plumbing &amp; Drain Services <br class="hidden-xs">in San Francisco, Albany, Brisbane, Dublin and Palo Alto.</h3>
						<a class="btn btn-outline" href="request-service.html">Get A Quote</a>
					</div>

				</div>
			</div>
		</div>
	</div>
    <!-- End Section -->
