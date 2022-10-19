<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>INFOSHALA-Web Design & Digital mareketing company in Gurgaon| Services</title>
    <!-- header section -->
    @include('include/header')
</head>

<body>

    <div class="page-wrapper">
        <!-- navbar -->
        @include('include/navbar1')

        <!-- Banner Section -->
        <section class="page-banner">
        <div class="image-layer" style="background-image:url(assets/images/main-slider/background-image.png);"></div>
            <div class="shape-1"></div>
            <div class="shape-2"></div>
            <div class="banner-inner">
                <div class="auto-container">
                    <div class="inner-container clearfix">
                        <h1>Services</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li class="active">Services</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!--Services Section-->
        <section class="services-section-three padd-top">
            <div class="auto-container">
                <div class="services">
                    <div class="row clearfix">
                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="0ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-vector"></span></div>
                                <h5><a href="{{ route('website-development-company') }}">WEBSITE<br>DEVELOPMENT</a></h5>
                                <div class="text">INFOSHALA majorly focuses on website design & development with good UI projects. Design your SEO-optimized & mobile-friendly website today for better exploration results.</div>
                                <div class="link-box"><a href="{{ route('website-design-company') }}"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="300ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-digital"></span></div>
                                <h5><a href="{{ route('digital-marketing-company') }}">DIGITAL<br>MARKETING</a></h5>
                                <div class="text">Digital Marketing is promoting a business on diverse online platforms for making leads or branding corporate. We have specialists who make digital marketing strategies for you.</div>
                                <div class="link-box"><a href="{{ route('seo-company-gurgaon') }}"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-instant-camera"></span></div>
                                <h5><a href="{{ route('ecommerce-services') }}">E-COMMERCE<br>SOLUTION</a></h5>
                                <div class="text">We offer complete eCommerce solutions like eCommerce website development, and increase eCommerce creation sales and online reputation management.</div>
                                <div class="link-box"><a href="{{ route('ecommerce-services') }}"><span class="fa fa-angle-right"></span></a></div>
                            </div>
                        </div>

                        <!--Service Block-->
                        <div class="service-block-two col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInUp"
                            data-wow-delay="900ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="bottom-curve"></div>
                                <div class="icon-box"><span class="flaticon-monitor"></span></div>
                                <h5><a href="{{ route('graphic-designing-company') }}">GRAPHIC<br> DESIGNING</a></h5>
                                <div class="text">INFOSHALA is focusing on website creativity like Brochure Designs, Banner Designs, Logo Designs, Flyer Designs, and business cards.To create the post on a social media platform and more.</div>
                                <div class="link-box"><a href="{{ route('graphic-designing-company') }}"><span class="fa fa-angle-right"></span></a></div>
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
                                <h2>WE OUTLINE THE PERFECT<br> EXPLANATIONS<span class="dot">.</span></h2>
                                <div class="lower-text">We are dedicated to providing our clients exceptional service while presenting our employees with the best training.</div>
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-responsive"></span></div>
                            <h6><a href="{{ route('website-design-company') }}">Website <br>Design</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-computer"></span></div>
                            <h6><a href="{{ route('website-development-company') }}">Website<br>Development</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                            <h6><a href="{{ route('digital-marketing-company') }}">Digital <br>Marketing</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-development"></span></div>
                            <h6><a href="{{ route('seo-company-gurgaon') }}">SEO<br>Services</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-app-development"></span></div>
                            <h6><a href="{{ route('graphic-designing-company') }}">Graphic<br>Designing</a></h6>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-ui"></span></div>
                            <h6><a href="{{ route('ecommerce-services') }}">E-commerce<br>Solutions</a></h6>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- We Work Section -->
        <section class="we-work-section">
            <div class="auto-container">
                <div class="sec-title centered">
                    <h2>. WE EFFORT WITH <span class="dot">INDUSTRIES.</span></h2>
                </div>
                <!--Work Tabs-->
                <div class="work-tabs tabs-box">

                    <!--Tab Btns-->
                    <ul class="tab-btns tab-buttons clearfix">
                        <li data-tab="#tab-1" class="tab-btn active-btn"><span>LATEST TECHNOLOGY</span></li>
                        <li data-tab="#tab-2" class="tab-btn"><span>AWESOME SUPPORT</span></li>
                        <li data-tab="#tab-3" class="tab-btn"><span>WE ARE TRUSTED </span></li>
                    </ul>

                    <!--Tabs Container-->
                    <div class="tabs-content">

                        <!--Tab-->
                        <div class="tab active-tab" id="tab-1">
                            <div class="row clearfix">
                                <div class="image-col col-lg-5 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="assets/images/resource/featured-image-14.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-col col-lg-7 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="text">
                                                <p>Today organizations are looking for applications that can bring personalization and real-time involvement. This has led to many renovations in the Web development landscape and conditions for choosing a Website development partner. Various new-age technologies like social, mobile, and analytics are heavy innovations in web development and have become important components.</p>
                                                <p class="theme_color">INFOSHALA uses the newest, current technologies to build customer-facing and creativity-grade web apps and websites, and is well situated to be a strategic business partner to carry business value.</p>
                                                <ul>
                                                    <li>•	Self-controlled, state-of-the-art period clock </li>
                                                    <li>Scalability of up to 10+ staff per time clock</li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-2">
                            <div class="row clearfix">
                                <div class="image-col col-lg-5 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="assets/images/resource/featured-image-14.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-col col-lg-7 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="text">
                                                <p>INFOSHALA is a Wide-ranging End-To-End Digital Technology Solutions Provider. We’ve controlled startups and enterprises across the world to fast evolve ideas into products.</p>
                                                <p class="theme_color">Our product business expertise extends over various domains like Full-stack web development, Digital marketing, content writing, etc.</p>
                                                 <ul>
                                                    <li>Self-contained, state-of-the-art time clock</li>
                                                    <li>Knowledge</li>
                                                    <li>Advanced</li>
                                                    <li>Client-Oriented Approach</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!--Tab-->
                        <div class="tab" id="tab-3">
                            <div class="row clearfix">
                                <div class="image-col col-lg-5 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="image">
                                            <img src="assets/images/resource/featured-image-14.jpg" alt="">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-col col-lg-7 col-md-6 col-sm-12">
                                    <div class="inner">
                                        <div class="content">
                                            <div class="text">
                                                <p>Our modest reason to be is to help you develop Successfully. It’s as subtle as that. So when we Develop a Website and Digital marketing for you, we do it keeping that neutral in mind - and we do it sew well. Our top-secret sauce for success.</p>
                                                <p class="theme_color">we make efforts to thoughtful what your client needs from you and exceed their opportunities. We are sure that would positively delight you! </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
