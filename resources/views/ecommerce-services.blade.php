<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Infoshala | E-commerce All-in-one Solutions</title>
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
                        <h1>E-Commerce Services</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('index') }}>Home</a></li>
                                <li><a href="{{ route('services') }}>Services</a></li>
                                <li class="active">Ecommerce Services</li>
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
                                <h2 >INDIA'S MOST TRUSTED<br><span class="dot">ECOMMERCE SERVICE PROVIDER COMPANY.</span></h2>
                                <div class="lower-text">INFOSHALA is the <a href="{{ route('ecommerce-services') }}>best eCommerce Service Provider Company in Gurgaon</a> India and worldwide. We deliver complete eCommerce solutions like eCommerce website development, eCommerce logistic solutions, eCommerce mobile app development sales, and online reputation management. Existence one of the best eCommerce Service Provider companies in Gurgaon, INFOSHALA is dedicated to giving innovative and excellent eCommerce services to its customers appropriate to their business goals.</div>
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
                                <h2>WE OUTLINE THE PERFECT<br><span class="dot">Ecommerce SOLUTIONS.</span></h2>
                                <div class="lower-text">We are dedicated to providing our clients with brilliant eCommerce service while offering our staff the best training..</div>
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-responsive"></span></div>
                            <h6 style="text-decoration-line: underline;"><a href="{{ route('website-design-company') }}>ECOMMERCE WEBSITE<br>DESIGN</a></h6>
                              <div class="text" style="text-align:justify;font-weight:300">INFOSHALA offers the most significant qualitative App development explanations to enterprises worldwide. We have established expertise in developing Mobile App Android applications that guarantee value-added facilities to your mobile operations.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-app-development"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('website-development-company') }}>ECOMMERCE<br>MOBILE APP</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">INFOSHALA offers the finest qualitative IOS app development solutions to enterprises worldwide. We have verified expertise in developing Mobile IOS applications that guarantee value-added facilities to your mobile operations.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-development"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('website-development-company') }}>ECOMMERCE BACKEND<br> DEVELOPMENT</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">React Native is a unique, cross-platform technology that provides Hybrid apps that work in both Android & IOS platforms. React Native has a complete app development roadmap and also has vast community support. Contact us now to develop the react native app.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('contact') }}>ECOMMERCE CMS<br> DEVELOPMENT</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">INFOSHALA works to build Flutter is an innovative cross-platform framework from the search engine huge Google, which is planned to build powerful and lovely native apps (worked in both Android & IOS). A robust building includes a rich set of widgets that carry an extremely customizable and extendable look and feel.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-computer"></span></div>
                            <h6 style="text-decoration-line: underline;"><a href="{{ route('ecommerce-services') }}>WOO-COMMERCE<br> DEVELOPMENT</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">Develop Your convention mobile app now with INFOSHALA. We abstract the full possible of major mobile skills and then bring the most state-of-the-art solutions to the table. We develop business-oriented apps for companies, SMEs, and Private Enterprises Customers to address their unique business developments.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-ui"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('contact') }}>MAGENTO <br>DEVELOPMENT</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">Develop your eCommerce app with INFOSHALA. We have a squad of experts who develop your designs in real creation. We have executed eCommerce solutions across productions and layouts resulting in wide return gains and calculated growth for our customers. Contact us today to develop your eCommerce application now.</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--Services Section-->
        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="service-details">

                            <div class="text-content">
                                <h3>WHY INFOSHALA IS AN E-COMMERCE SERVICES COMPANY?</h3>
                                <p>We stand as a full-stack e-commerce solutions Company providing essential services such as eCommerce website development & eCommerce app development. Our core customer base comprises local businesses, and B2B businesses looking to build lead-generation processes that make predictable sales results.</p>

                                <p>Our Ecommerce policy should be personalized to benefit you to meet both short and long-term business objectives, including refining market share, increasing brand consciousness, and driving profit growth.<br>Our in-house eCommerce crew will work with you to develop and implement a fully customized plan to meet your profit objectives and deliver computable growth and maximize return on assets. Our services combine online marketing best practices while offering fresh outlooks and advanced methods to help your brand stand apart in a full marketplace.</p>
                                <p class="last">We have a cooperative, see-through process. All branches work together to ensure constancy and perform your digital marketing strategy to the highest standards. Our team will frequently test, repeat, and improve your digital marketing strategy in an ever-changing scenery while staying true to your core business values and objectives.<br>It all starts with a full digital marketing strategy, and no one does it improved than us. We are a self-importantly Indian company, and we work with a variety of customers across the world.</p>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">

                            <div class="sidebar-widget services">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>All Services</h4>
                                    </div>
                                    <ul>
                                        <li><a href="{{ route('website-design-company') }}>Website Designing</a></li>
                                        <li><a href="{{ route('website-development-company') }}>Website Development</a></li>
                                        <li><a href="{{ route('graphic-designing-company') }}>Graphic Designing</a></li>
                                        <li ><a href="{{ route('digital-marketing-company') }}>Digital Marketing</a></li>
                                        <li><a href="{{ route('seo-company-gurgaon') }}>SEO Services</a></li>
                                        <li class="active"><a href="{{ route('ecommerce-services') }}>E-Commerce Services</a></li>

                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget call-up">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>need Infoshala help?</h4>
                                    </div>
                                    <div class="text">Prefer talking with a social to fill out a form? call the commercial office and we will attach you to a team member who can help.</div>
                                    <div class="phone"><a href="{{ route('tel:+91-9818308623"><span class="icon flaticon-call"></span>+91-9818308623</a></div>
                                </div>
                            </div>
                        </aside>
                    </div>
                </div>
            </div>
        </div>

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
                                <a href="{{ route('" class="lightbox-image overlay-box"
                                    data-fancybox="gallery" title="" alt=""></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Website Design</span></div>
                                        <div class="title">
                                            <h5><a href="{{ route('portfolio') }}>99Mantra.com</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Gallery Item -->
                         <div class="gallery-item  website col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/portfolio/99mantra.png" alt="" title=""></figure>
                                <a href="{{ route('" class="lightbox-image overlay-box"
                                    data-fancybox="gallery" title="" alt=""></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Website Design</span></div>
                                        <div class="title">
                                            <h5><a href="{{ route('portfolio') }}>99Mantra.com</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- Gallery Item -->
                         <div class="gallery-item  website col-lg-4 col-md-6 col-sm-12">
                            <div class="inner-box">
                                <figure class="image"><img src="assets/images/portfolio/99mantra.png" alt="" title=""></figure>
                                <a href="{{ route('" class="lightbox-image overlay-box"
                                    data-fancybox="gallery" title="" alt=""></a>
                                <div class="cap-box">
                                    <div class="cap-inner">
                                        <div class="cat"><span>Website Design</span></div>
                                        <div class="title">
                                            <h5><a href="{{ route('portfolio') }}>99Mantra.com</a></h5>
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
                    <h2>We’re Ready to Bring Bigger <br>& Stronger Projects</h2>
                    <div class="link-box">
                        <a class="theme-btn btn-style-two" href="{{ route('contact') }}>
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
