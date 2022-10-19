<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Infoshala | Best Digital Marketing agency in Gurgaon| Web Development Company in Gurgaon</title>

<!-- header section -->
<?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</head>
<body>

<div class="page-wrapper">

<!-- NAVBAR -->
<?php echo $__env->make('include.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

        <section class="slider-six">
            <div class="slider-six__curv">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 122">
					<path fill="currentColor"
						d="M0,122.005S80.814,20.129,283.871,2.426C526.255-18.706,550.388,91.2,792.025,102.115c243.565,11.006,299.815-108,520.765-97.662,220.1,10.3,273.86,88.036,415.09,98.26C1878.57,113.62,1920,51.068,1920,51.068V-862.995H0v985Z" />
				</svg>
            </div>
            <!-- /.slider-six__curv -->
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true, "effect": "fade", "pagination": { "el": "#main-slider-pagination", "type": "bullets", "clickable": true }, "navigation": { "nextEl": "#main-slider__swiper-button-next", "prevEl": "#main-slider__swiper-button-prev" }, "autoplay": { "delay": 5000 }}'>

            <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/image-2.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="auto-container">
                            <div class="slider-six__content">
                                <p class="slider-six__text"><span>Welcome to the INFOSHALA</span></p>
                                <!-- /.slider-six__text -->
                                <h2 class="slider-six__title">Website design & development Company in Gurgaon  <br>-We deliver promises-</h2>
                                <!-- /.slider-six__title -->
                                <a href="<?php echo e(route('website-development-company')); ?>" class="slider-six__btn thm-btn__six">Discover More</a>
                                <!-- /.thm-btn__six -->
                            </div>
                            <!-- /.slider-six__content -->
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/image-9.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="auto-container">
                            <div class="slider-six__content">
                                <p class="slider-six__text"><span>Welcome to the INFOSHALA</span></p>
                                <!-- /.slider-six__text -->
                                <h2 class="slider-six__title">Digital Marketing Company in Gurgaon<br>-Increase your brand value-</h2>
                                <!-- /.slider-six__title -->
                                <a href="<?php echo e(route('digital-marketing-company')); ?>" class="slider-six__btn thm-btn__six">Discover More</a>
                                <!-- /.thm-btn__six -->
                            </div>
                            <!-- /.slider-six__content -->
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer" style="background-image: url(assets/images/main-slider/image-8.jpg);">
                        </div>
                        <!-- /.image-layer -->
                        <div class="auto-container">
                            <div class="slider-six__content">
                                <p class="slider-six__text"><span>Welcome to the INFOSHALA</span></p>
                                <!-- /.slider-six__text -->
                                <h2 class="slider-six__title">Graphic Designing Company in Gurgaon<br> -We deliver attractive creative-</h2>
                                <!-- /.slider-six__title -->
                                <a href="<?php echo e(route('graphic-designing-company')); ?>" class="slider-six__btn thm-btn__six">Discover More</a>
                                <!-- /.thm-btn__six -->
                            </div>
                            <!-- /.slider-six__content -->
                        </div>
                    </div>
                </div>
                <!-- If we need navigation buttons -->

                <div class="slider-bottom-box clearfix">
                    <div class="main-slider__nav">
                        <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                            <span class="fa fa-angle-left"></span>
                        </div>
                        <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                            <span class="fa fa-angle-right"></span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.slider-six -->


        <!-- ABOUT US -->
        <section class="about-seven">
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-lg-6 wow fadeInLeft" data-wow-duration="1500ms">
                        <div class="about-seven__images">
                            <img src="assets/images/resources/about-10-1-1.jpg" alt="">
                            <img src="assets/images/resources/about-seven-1-2.jpg" alt="">
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-6">
                        <div class="about-seven__content">
                            <div class="sec-title-six text-start">
                                <p class="sec-title-six__text"><span>About Company</span></p>
                                <h2 class="sec-title-six__title">INDIA'S MOST TRUSTED<span class="dot"> BRANDING & PROMOTION COMPANY.</span></h2>
                            </div>
                            <p class="about-seven__summery">INFOSHALA is the best <a href="<?php echo e(route('website-development-company')); ?>">website design and development company in Gurgaon</a>India with  <a href="<?php echo e(route('seo-company-gurgaon')); ?>">SEO services in Gurgaon.</a> We have a skilled team for creating website design and development. We have been providing answers to clients worldwide for over 1 year and claim our vast experience in website designing and mobile app development projects. With over 100+ website design and mobile application projects performed, we breathe and exhale the network.</p>
                            <h3 class="about-seven__title">WE WORK WITH OUR CLIENTS FOR THEIR CONTINUOUS SUCCESS.</h3>
                            <ul class="about-seven__list list-unstyled">
                                <li>
                                    <i class="flaticon-checked"></i>Strategic Corporate Consulting
                                </li>
                                <li>
                                    <i class="flaticon-checked"></i>Creative UI/UX Designing
                                </li>
                            </ul>
                            <a href="<?php echo e(route('about')); ?>" class="about-seven__btn thm-btn__six">Discover More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- SERVICES PAGE -->
        <section class="service-six">
            <div class="service-six__curv">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 122">
					<path fill="currentColor"
						d="M0,122.005S80.814,20.129,283.871,2.426C526.255-18.706,550.388,91.2,792.025,102.115c243.565,11.006,299.815-108,520.765-97.662,220.1,10.3,273.86,88.036,415.09,98.26C1878.57,113.62,1920,51.068,1920,51.068V-862.995H0v985Z" />
				</svg>
            </div>

            <div class="auto-container">
                <div class="sec-title-six text-center">
                    <p class="sec-title-six__text"><span>Checkout Our Services</span></p>
                    <h2 class="sec-title-six__title">What we’re offering</h2>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms">
                        <div class="service-six__item">
                            <div class="service-six__image">
                                <img src="assets/images/services/web-designing.jpg" alt="">
                            </div>
                            <div class="service-six__content">
                                <div class="service-six__icon">
                                    <i class="flaticon-mobile-analytics"></i>
                                </div>
                                <h3 class="service-six__title"><a href="<?php echo e(route('website-development-company')); ?>">Web Development</a></h3>
                                <div class="service-six__text">Our skilled website designer and developer squad certify that deliver brilliant website services. we effort on high-end projects and the newest technologies.</div>
                            </div>
                        </div>
                    </div>


                    <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-duration="1500ms" data-wow-delay="300ms">
                        <div class="service-six__item">
                            <div class="service-six__image">
                                <img src="assets/images/services/digital-marketing.jpg" alt="">
                            </div>
                            <div class="service-six__content">
                                <div class="service-six__icon">
                                    <i class="flaticon-research"></i>
                                </div>
                                <h3 class="service-six__title"><a href="<?php echo e(route('digital-marketing-company')); ?>">Digital Marketing</a>
                                </h3>
                                <div class="service-six__text">We are dedicated to providing our clients with brilliant digital marketing services while presenting our employees with the greatest training..</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-12 col-lg-4 wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="service-six__item">
                            <div class="service-six__image">
                                <img src="assets/images/services/graphic-designing.jpg" alt="">
                            </div>
                            <div class="service-six__content">
                                <div class="service-six__icon">
                                    <i class="flaticon-creative"></i>
                                </div>
                                <h3 class="service-six__title"><a href="<?php echo e(route('graphic-designing-company')); ?>">Graphic Designing</a>
                                </h3>
                                <div class="service-six__text">We are committed to providing our clients with graphic design services while offering our teams the best training.Services like logo,banner and more</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- RECENTLY PROJECT WORK -->
 <!-- Gallery Section -->
 <section class="gallery-section">
            <div class="auto-container">
                <!--MixitUp Galery-->
                <div class="mixitup-gallery">
                    <div class="upper-row clearfix">
                        <div class="sec-title">
                            <h2>PROJECT WORK<span class="dot">.</span></h2>
                        </div>
                        <!--Filter-->
                        <div class="filters clearfix">
                            <ul class="filter-tabs filter-btns clearfix">
                                <li class="active filter" data-role="button" data-filter="all">All<sup>[6]</sup></li>
                                <li class="filter" data-role="button" data-filter=".website">Website<sup>[3]</sup>
                                </li>
                                <li class="filter" data-role="button" data-filter=".ecommerce">
                                    Ecommerce<sup>[3]</sup></li>

                            </ul>
                        </div>
                    </div>
                    <div class="filter-list row">
                        <!-- Gallery Item -->
                        <div class="gallery-item  website col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/portfolio/99mantra.png" alt="" title=""></figure>
                                <a href="" class="lightbox-image overlay-box"
                                    data-fancybox="gallery" title="" alt=""></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Website Design</span></div>
                                        <div class="title">
                                            <h5><a href="<?php echo e(route('portfolio')); ?>">99Mantra.com</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Gallery Item -->
                         <div class="gallery-item  website col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/portfolio/99mantra.png" alt="" title=""></figure>
                                <a href="" class="lightbox-image overlay-box"
                                    data-fancybox="gallery" title="" alt=""></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Website Design</span></div>
                                        <div class="title">
                                            <h5><a href="<?php echo e(route('portfolio')); ?>">99Mantra.com</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Gallery Item -->
                         <div class="gallery-item  website col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/portfolio/99mantra.png" alt="" title=""></figure>
                                <a href="" class="lightbox-image overlay-box"
                                    data-fancybox="gallery" title="" alt=""></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Website Design</span></div>
                                        <div class="title">
                                            <h5><a href="<?php echo e(route('portfolio')); ?>">99Mantra.com</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
 </section>
<!--Agency Section-->
<section class="agency-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>BEST DESIGN AGENCY<br>SOLUTIONS<span class="dot">.</span></h2>
                            </div>

                            <!--Default Tabs-->
                            <div class="default-tabs tabs-box">

                                <!--Tab Btns-->
                                <ul class="tab-btns tab-buttons clearfix">
                                    <li data-tab="#tab-1" class="tab-btn active-btn"><span>OUR MISSION</span></li>
                                    <li data-tab="#tab-2" class="tab-btn"><span>OUR VISION</span></li>
                                    <li data-tab="#tab-3" class="tab-btn"><span>OUR VALUES</span></li>
                                </ul>

                                <!--Tabs Container-->
                                <div class="tabs-content">

                                    <!--Tab-->
                                    <div class="tab active-tab" id="tab-1">
                                        <div class="content">
                                            <div class="text">To Bring Corporate Intensive, offering Services like Web Design, Web Development, Mobile App Development, Digital marketing, E-commerce development, Social Media Optimization, Search engine optimization, Pay per click, and Email-marketing.</div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="tab-2">
                                        <div class="content">
                                            <div class="text">We aim to be the world’s best IT Solutions Partner, concluded technology management, innovation, and a world-class staff.</div>
                                        </div>
                                    </div>

                                    <!--Tab-->
                                    <div class="tab" id="tab-3">
                                        <div class="content">
                                            <div class="text">Dedicated to Customer Fulfilment, An information-driven company, Building solutions that make rewarding outcomes preparation of ROI-driven solutions, Client-centrical strategies</div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="text">INFOSHALA is a Digital marketing partner to 100+ organizations across the world and has been helping them in making their digital products improved, crews more productive and processes more well-organized. Our customers and the tech community have praised our ability to look outside technologies to deliver advanced solutions with scale and speed</div>
                            <div class="featured-block-two clearfix">
                                <div class="image"><img src="assets/images/resource/featured-image-6.jpg" alt=""></div>
                                <div class="text">
                                    <ul>
                                        <li>Desire-led engineering..</li>
                                        <li>Mature executive processes.</li>
                                        <li>Transparency and teamwork.</li>
                                        <li>Invention absorbed.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- HAPPY CILENTS -->
<section class="funfact-six parallax-section jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
        <img src="assets/images/background/marketing.jpg" alt="" class="jarallax-img">
            <div class="auto-container">
                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-six__item">
                            <i class="funfact-six__icon flaticon-architect"></i>
                            <h3 class="funfact-six__count count-box"><span class="count-text" data-stop="6805" data-speed="1500">0</span>
                            <p class="funfact-six__text">Team Members</p>
                        </div>
                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-six__item">
                            <i class="funfact-six__icon flaticon-architect-1"></i>
                            <h3 class="funfact-six__count count-box"><span class="count-text" data-stop="906" data-speed="1500">0</span>
                            </h3>
                            <p class="funfact-six__text">Project Completed</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-six__item">
                            <i class="funfact-six__icon flaticon-buildings"></i>
                            <h3 class="funfact-six__count count-box"><span class="count-text" data-stop="200" data-speed="1500">0</span>
                            </h3>
                            <p class="funfact-six__text">Service Providing</p>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-3">
                        <div class="funfact-six__item">
                            <i class="funfact-six__icon flaticon-satisfaction"></i>
                            <h3 class="funfact-six__count count-box"><span class="count-text" data-stop="9760" data-speed="1500">0</span>
                            </h3>
                            <p class="funfact-six__text">Happy Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="about-six">
            <div class="about-six__curv">
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 122">
					<path fill="currentColor"
						d="M0,122.005S80.814,20.129,283.871,2.426C526.255-18.706,550.388,91.2,792.025,102.115c243.565,11.006,299.815-108,520.765-97.662,220.1,10.3,273.86,88.036,415.09,98.26C1878.57,113.62,1920,51.068,1920,51.068V-862.995H0v985Z" />
				</svg>
            </div>
            <!-- /.about-six__curv -->

<!-- Our Company Benefits -->
            <div class="auto-container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="about-six__content">

                            <div class="sec-title-six">
                                <p class="sec-title-six__text"><span>Our Company Benefits</span></p>
                                <h2 class="sec-title-six__title">WE HELP BRAND TO ACHIEVE THEIR BUSINESS OUTCOMES.</h2>
                            </div>
                            <div class="about-six__text">We have operated with worldwide brands and innovative startups, delivery organized various teams of talented individuals to change the way companies do business.
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-7 wow fadeInRight" data-wow-duration="1500ms">
                        <div class="about-six__image">
                            <img src="assets/images/resources/about-six-1-1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="about-six__box">
                            <i class="flaticon-idea about-six__box__icon"></i>
                            <h3 class="about-six__box__title">We combine tech with business</h3>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="about-six__box">
                            <i class="flaticon-mouse about-six__box__icon"></i>
                            <h3 class="about-six__box__title">SMART TEAMS</h3>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-4">
                        <div class="about-six__box">
                            <i class="flaticon-briefcase about-six__box__icon"></i>
                            <h3 class="about-six__box__title">ENTERPRISE SOLUTIONS</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
<!-- SUBSCRIBE SECTION -->
<section class="subscribe-one">
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-md-12 col-lg-6">
                        <h3 class="subscribe-one__title">
                            Subscribe to our newsletter to get daily content!
                        </h3>
                    </div>
                    <div class="col-md-12 col-lg-6">
                        <div class="subscribe-one__form">
                            <input type="text" placeholder="Enter your email">
                            <button type="submit"><i class="far fa-paper-plane"></i></button>
                        </div>
                        <p class="subscribe-one__validate">I agree to all terms and policies of the company</p>
                    </div>
                </div>
            </div>
        </section>

<!-- BLOGS -->
        <section class="blog-six">
            <div class="auto-container">
                <div class="sec-title-six text-center">
                    <p class="sec-title-six__text"><span>News & Articles</span></p>
                    <h2 class="sec-title-six__title">Latest blog posts</h2>
                </div>

                <div class="row">
                    <div class="col-md-12 col-lg-4">
                        <div class="blog-six__item">
                            <div class="blog-six__image">
                                <img src="assets/images/blog/blog-1.jpg" alt="">
                            </div>

                            <div class="blog-six__content">
                                <div class="blog-six__meta">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i> by admin
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i> 20 may, 2021
                                    </a>
                                </div>

                                <h3 class="blog-six__title">
                                    <a href="<?php echo e(route('blog-single')); ?>">What is the better way of running a successful
										business?</a>
                                </h3>

                                <p class="blog-six__text">Lorem ipsum is simply free text used by new pesnhl note this copytyping refreshing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="blog-six__item">
                            <div class="blog-six__image">
                                <img src="assets/images/blog/blog-2.jpg" alt="">
                            </div>
                            <div class="blog-six__content">
                                <div class="blog-six__meta">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i> by admin
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i> 20 may, 2021
                                    </a>
                                </div>
                                <h3 class="blog-six__title">
                                    <a href="<?php echo e(route('blog-single')); ?>">What is the better way of running a successful
										business?</a>
                                </h3>
                                <p class="blog-six__text">Lorem ipsum is simply free text used by new pesnhl note this copytyping refreshing.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-4">
                        <div class="blog-six__item">
                            <div class="blog-six__image">
                                <img src="assets/images/blog/blog-3.jpg" alt="">
                            </div>
                            <div class="blog-six__content">
                                <div class="blog-six__meta">
                                    <a href="#">
                                        <i class="far fa-user-circle"></i> by admin
                                    </a>
                                    <a href="#">
                                        <i class="far fa-clock"></i> 20 may, 2021
                                    </a>
                                </div>
                                <h3 class="blog-six__title">
                                    <a href="<?php echo e(route('blog-single')); ?>">What is the better way of running a successful
										business?</a>
                                </h3>
                                <p class="blog-six__text">Lorem ipsum is simply free text used by new pesnhl note this copytyping refreshing.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.blog-six -->

<!-- SPONSOR  -->
<section class="sponsor-six">
     <div class="auto-container">
        <p class="sec-title-six__text text-center"><span>Sponsor & Clients</span></p>
                <div class="thm-swiper__slider swiper-container" data-swiper-options='{"spaceBetween": 100, "slidesPerView": 5, "autoplay": { "delay": 5000 }, "breakpoints": {
                    "0": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "375": {
                        "spaceBetween": 30,
                        "slidesPerView": 2
                    },
                    "575": {
                        "spaceBetween": 30,
                        "slidesPerView": 3
                    },
                    "767": {
                        "spaceBetween": 50,
                        "slidesPerView": 4
                    },
                    "991": {
                        "spaceBetween": 50,
                        "slidesPerView": 5
                    },
                    "1199": {
                        "spaceBetween": 100,
                        "slidesPerView": 5
                    }
                }}'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/99mantra.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/BhanuArtist.jpeg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/sponsor-1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/aayaaAgency.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/sponsor-2.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/99mantra.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/BhanuArtist.jpeg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/sponsor-1.png" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/aayaaAgency.jpg" alt="">
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/images/sponsor/sponsor-2.png" alt="">
                        </div>

             </div>
        </div>
    </div>
</section>

        <section class="video-six">
            <div class="video-six__parallax  jarallax" data-jarallax data-speed="0.3" data-imgPosition="50% 80%">
                <img src="assets/images/background/marketing.jpg" class="jarallax-img" alt="">
            </div>
            <div class="auto-container">
                <div class="video-six__inner">
                    <h3 class="video-six__title">Delivering only exceptional quality work</h3>
                    <div class="video-six__video">
                        <h3 class="video-six__video__text">Watch video</h3>
                        <a href="Youtube tutorial videos" class="lightbox-image video-six__btn">
                            <i class="fa fa-play"></i>
                            <i class="ripple"></i>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.video-six -->


<!-- footer section -->
<?php echo $__env->make('include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>
</html>
<?php /**PATH /home/amit/Desktop/newfolder/infoshala/resources/views/index.blade.php ENDPATH**/ ?>