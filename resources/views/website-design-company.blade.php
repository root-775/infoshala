<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from layerdrops.com/linoorhtml/web-development.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 07 Sep 2022 08:59:57 GMT -->
<head>
    <meta charset="utf-8">
    <title>INFOSHALA | Website Design Company in Gurgaon</title>
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
                        <h1>Website Designing</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li><a href="{{ route('services') }}">Services</a></li>
                                <li class="active">Website Design</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- about web-development -->
        <section class="featured-section featured-section__about-two">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Left Column-->
                    <div class="left-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner wow fadeInLeft animated" data-wow-delay="0ms" data-wow-duration="1500ms"
                            style="visibility: visible; animation-duration: 1500ms; animation-delay: 0ms; animation-name: fadeInLeft;">
                            <div class="image-box"><img src="assets/images/resource/about-infoshala.png" alt=""></div>
                        </div>
                    </div>
                    <!--Right Column-->
                    <div class="right-col col-lg-6 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>INDIA'S MOST RELIABLE <br><a href="{{ route('website-design-company') }}">WEBSITE DESIGN COMPANY</a><span class="dot">.</span></h2>
                                <div class="lower-text"><a href="{{ route('index') }}">INFOSHALA</a> is the best website design and development company in Gurgaon. We have a skilled team for creating website design and development. We have been providing answers to clients worldwide for over 1 year and claim our vast experience in website designing and mobile app development projects. With over 100+ website design and mobile application projects performed, we breathe and exhale the network.</div>
                            </div>
                            <div class="features">
                                <div class="row clearfix">
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <h6>Free Consultation</h6>

                                        </div>
                                    </div>
                                    <div class="feature col-md-6 col-sm-12">
                                        <div class="inner-box">
                                            <h6>Best team members</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--Services Section-->
<section class="services-section">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Title Block-->
                    <div class="title-block col-xl-6 col-lg-12 col-md-12 col-sm-12">
                        <div class="inner">
                            <div class="sec-title">
                                <h2>WE OUTLINE THE PERFECT<br>EXPLANATIONS<span class="dot">.</span></h2>
                                <div class="lower-text">We are dedicated to providing our clients exceptional service while presenting our employees with the best training.</div>
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-responsive"></span></div>
                            <h6 style="text-decoration-line: underline;"><a href="{{ route('website-design-company') }}">WEBSITE <br>DESIGN</a></h6>
                              <div class="text" style="text-align:justify;font-weight:300">Our skilled<a href="{{ route('website-design-company') }}" title="website designer gurgaon"> website designer</a> and developer team certify that deliver brilliant website services. we effort on high-end projects and the latest technologies. Contact us now to discuss your project and more.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-app-development"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('website-development-company') }}">REACT-NATIVE<br>APP DEVELOPMENT</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">React Native is a unique, latest technology that provides native-like experiences in Hybrid apps that work on Android & IOS platforms.Contact us to develop your react native app.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-development"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('website-development-company') }}">ANGULAR<br>APP DEVELOPMENT</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">Angular is a platform for structuring mobile and desktop web applications. Join the public of millions of developers who build compelling UI and the latest technology that provides to. </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('website-design-company') }}">FLUTTER <br>APP DEVELOPMENT</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">Flutter, an innovative cross-platform framework from the search engine huge Google, is designed to build powerful and beautiful native apps in record time.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-computer"></span></div>
                            <h6 style="text-decoration-line: underline;"><a href="{{ route('ecommerce-services') }}">E-commerce<br>Website</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">We make high-end modified E-commerce websites template ready to upraise your brand’s awareness using a skill like WordPress, Angular, React, etc. Contact us to discuss your scheme.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-ui"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('contact') }}">Custom<br>Developer</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">Our skilled team conveys ideas to life by creating a good-looking user interface website to build the value of your brand in the marketplace. Contact us now to discuss your convention website project. </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!--Services Section-->
        <section class="services-section-three padd-top">
            <div class="auto-container">
                <div class="row clearfix">
                    <!--Text Column-->
                    <div class="text-column col-xl-6 col-lg-12 col-md-12 col-sm-12">
                            <div class="sec-title">
                                <h2><span class="dot">Frontend Technology</span></h2>
                            </div>

                        </div>
                    </div>
            <div class="auto-container">
                <div class="services">
                    <div class="row clearfix">
                        <!--Service Block-->
                        <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-vector"></span></div>
                                <h5>HTML</h5>

                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-digital"></span></div>
                                <h5>JAVASCRIPT</h5>

                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-instant-camera"></span></div>
                                <h5>BOOTSTRAP</h5>

                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                <h5>ANGULAR</h5>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                <h5>REACT JS</h5>


                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-4 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                <h5>PYTHON</h5>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


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
                                            <h5><a href="{{ route('portfolio') }}">99Mantra.com</a></h5>
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
                                            <h5><a href="{{ route('portfolio') }}">99Mantra.com</a></h5>
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
                                            <h5><a href="{{ route('portfolio') }}">99Mantra.com</a></h5>
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

        <!-- Call To Section -->
        <section class="call-to-section-two alternate">
            <div class="auto-container">
                <div class="inner clearfix">
                    <h2>We’re prepared to bring better<br>& stronger missions</h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="{{ route('contact') }}">
                            <i class="btn-curve"></i>
                            <span class="btn-title">Contact with us</span>
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        @include('include/footer')

</body>
</html>
