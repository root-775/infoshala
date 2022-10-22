<!DOCTYPE html>
<html lang="en">

<head>

	<title>Contact | Website Design & Digital marketing agency in gurgaon| INFOSHALA</title>

	<!-- Stylesheets -->
	@include('include/header')
</head>

<body>

	<div class="page-wrapper">

	@include('include/navbar1')

		<!-- Banner Section -->
		<section class="page-banner">
		<div class="image-layer" style="background-image:url(assets/images/main-slider/background-image.png);"></div>
			<div class="shape-1"></div>
			<div class="shape-2"></div>
			<div class="banner-inner">
				<div class="auto-container">
					<div class="inner-container clearfix">
						<h1>Contact</h1>
						<div class="page-nav">
							<ul class="bread-crumb clearfix">
								<li><a href="{{ route('index') }}">Home</a></li>
								<li class="active">Contact</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--End Banner Section -->

		<!--Contact Section-->
		<section class="contact-section contact-two">
			<div class="auto-container">
				<div class="row">
					<div class="col-lg-4">
						<div class="contact-two__content">
							<div class="sec-title">
								<h2>Write us any
									message <span class="dot">.</span></h2>
							</div>
							<p class="contact-two__text">We are dedicated to providing our clients exceptional service while presenting our employees with the best training.</p>
							<!-- /.contact-two__text -->
							<div class="contact-two__social">
								<a href="https://twitter.com/infoshala130" class="fab fa-twitter"></a>
								<a href="https://www.facebook.com/infoshala130" class="fab fa-facebook"></a>
								<a href="https://www.linkedin.com/in/infoshala130/" class="fab fa-linkedin"></a>
								<a href="https://www.instagram.com/infoshala130/" class="fab fa-instagram"></a>
							</div><!-- /.contact-two__social -->
						</div><!-- /.contact-two__content -->
					</div><!-- /.col-lg-4 -->
					<div class="col-lg-8">
						<div class="form-box">
                            @if (session()->get('contactSuccess'))
                                <div class="text-center text-success" >Thank You for Contact us, ower team will be contact you.</div>
                            @endif
							<div class="default-form">
								<form method="POST" action="{{ route('saveContact') }}" id="contact-form">
                                    @csrf
									<div class="row clearfix">
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="text" name="username" value="" placeholder="Your Name"
													required="">
											</div>
										</div>
										<div class="form-group col-lg-6 col-md-6 col-sm-12">
											<div class="field-inner">
												<input type="email" name="email" value="" placeholder="Email Address"
													required="">
											</div>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">
											<div class="field-inner">
												<textarea name="message" placeholder="Write Message"
													required=""></textarea>
											</div>
										</div>
										<div class="form-group col-lg-12 col-md-12 col-sm-12">

										<button class="theme-btn btn-style-one">
												<i class="btn-curve"></i>
												<span class="btn-title">Send message</span>
											</button>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div><!-- /.col-lg-8 -->
				</div><!-- /.row -->

			</div>
		</section>


		<section class="contact-info-two">
			<div class="auto-container">
				<div class="row">
					<div class="col-md-12 col-lg-4">
						<div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms">
							<i class="fa fa-map-marker-alt"></i>
							<a href="{{ route('#">Sec-89, Gurgaon(HR)-India</a>
						</div><!-- /.contact-info-two__card -->
					</div><!-- /.col-md-12 col-lg-4 -->
					<div class="col-md-12 col-lg-4">
						<div class="contact-info-two__card wow fadeInUp" data-wow-duration="1500ms"
							data-wow-delay="300ms">
							<i class="fa fa-envelope"></i>
							<a href="{{ route('#">info@infoshala.com</a>
						</div><!-- /.contact-info-two__card -->
					</div><!-- /.col-md-12 col-lg-4 -->
					<div class="col-md-12 col-lg-4">
						<div class="contact-info-two__card wow fadeInUp" data-wow-delay="600ms"
							data-wow-duration="1500ms">
							<i class="fa fa-phone"></i>
							<a href="{{ route('#">+91-9818308623</a>
						</div><!-- /.contact-info-two__card -->
					</div><!-- /.col-md-12 col-lg-4 -->
				</div><!-- /.row -->
			</div><!-- /.auto-container -->
		</section><!-- /.contact-info-two -->

		<div class="map-box">
			<iframe class="map-iframe" src="" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
		</div>

		@include('include/footer')
</body>
</html>
