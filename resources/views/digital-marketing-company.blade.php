<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>INFOSHALA | Digital Marketing and SEO company in Gurgaon</title>
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
                        <h1>Digital Marketing Company</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('index') }}>Home</a></li>
                                <li><a href="{{ route('services') }}>Services</a></li>
                                <li class="active">Digital Marketing</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- about Digital market -->
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
                                <h2>INDIA'S GREATEST TRUSTED<br><span class="dot">DIGITAL MARKETING COMPANY.</span></h2>
                                <div class="lower-text"><a href="{{ route('index') }}>INFOSHALA</a> is the best <a href="{{ route('digital-marketing-company') }}>Digital Marketing Company in Gurgaon</a> India and worldwide. We deliver complete digital marketing solutions like SEO, social media marketing, programmatic advertising, Email marketing, conversion optimization, influencer marketing, Content Writing, and online reputation management. Presence one of the best marketing companies in Gurgaon, INFOSHALA is dedicated to giving innovative and valuable digital marketing services to its customers relevant to their business goals.</div>
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
                                <h2>WE OUTLINE THE PERFECT<br><span class="dot">DIGITAL SOLUTIONS.</span></h2>
                                <div class="lower-text">We are dedicated to providing our clients with brilliant digital marketing services while offering our staff the best training.</div>
                            </div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-responsive"></span></div>
                            <h6 style="text-decoration-line: underline;"><a href="{{ route('seo-company-gurgaon') }}>SEARCH ENGINE<br>OPTIMIZATION</a></h6>
                              <div class="text" style="text-align:justify;font-weight:300">INFOSHALA offers the best Search Engine Optimization solutions for your business with effective On-Page and Off-Page techniques targeted to spread your target client. Our team confirms that your business changes into a brand and you make more sales daily.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-app-development"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('contact') }}>PAY-PER<br>CLICK</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">In INFOSHALA our team designs develop and performs excellent campaigns via google shopping ads, search ads, display ads, social media ads, and remarketing. PPC ads help in purchasing visitors for a website to make Leads. Best digital marketing company in Gurgaon</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-development"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('website-development-company') }}>EMAIL <br>MARKETING</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">Email marketing is complete for the targeted group of clients to distribute information regarding products & services, and advertising offers, as well as to encourage sales and client loyalty. Our team at INFOSHALA creates customize digital information for the selected audience according to their digital predilections and requirements.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="300ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-digital-marketing"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('seo-company-gurgaon') }}>SOCIAL MEDIA<br>MARKETING</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">INFOSHALA works to build Energetic social attending of a business, continuing the brand’s reputation and increasing engagement and consciousness. its Facebook Marketing,YouTube Marketing or any social media platform, get the personalized made strategy right here for your target audience.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="600ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-computer"></span></div>
                            <h6 style="text-decoration-line: underline;"><a href="{{ route('ecommerce-services') }}>CONTENT<br>MARKETING</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">A well-planned and performed content marketing strategy improves brand visibility by successfully developing and allocating content on the right platforms to reach out to the digitally targeted audience. This is a long-term method to create a strong brand image among the best possible targeted audience. Contact us today for a digital marketing project.</div>
                        </div>
                    </div>
                    <!--Service Block-->
                    <div class="service-block col-xl-3 col-lg-6 col-md-6 col-sm-12 wow fadeInLeft"
                        data-wow-delay="900ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="bottom-curve"></div>
                            <div class="icon-box"><span class="flaticon-ui"></span></div>
                            <h6 style="  text-decoration-line: underline;"><a href="{{ route('contact') }}>INFLUENCER<br> MARKETING</a></h6>
                             <div class="text" style="text-align:justify;font-weight:300">Influencer marketing attaches brands with bloggers and social media influencers to target a larger audience for a brand appointment. At INFOSHALA we aim at filling life into a brand story by founding genuine networks. Get a High rate for your product advancement with the help of Influence Marketing</div>
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
                                <h3>WHY INFOSHALA -A DIGITAL MARKETING AGENCY?</h3>
                                <p>We are a full-stack digital marketing company providing Services such as lead generation, PPC, SEO, social media, video, and content marketing. Our client base includes local trades, and B2B firms seeking to build lead group processes that create expected sales outcomes</p>

                                <p>Your digital marketing strategy should be personalized to help you meet short- and long-term business objectives, including improving marketplace share, growing brand awareness, and driving income growth.<br>Our digital marketing team will work with you to develop and perform a fully customized plan to meet your income objectives and deliver measurable growth and maximize return on investment. Our services bring into line with online marketing best practices while offering fresh outlooks and innovative methods to help your brand stand apart in a complete marketplace.</p>
                                <p class="last">We have a joint, transparent process. All departments work together to ensure constancy and execute your digital marketing strategy to the uppermost standards. Our team will repeatedly test, repeat, and improve your digital marketing strategy in an ever-changing countryside while staying true to your core business values and objectives.<br>It all starts with a complete digital marketing strategy, and no one does it improved than us. We are a self-importantly Indian company, and we work with a variety of customers across the world.</p>
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
                                        <li class="active"><a href="{{ route('digital-marketing-company') }}>Digital Marketing</a></li>
                                        <li><a href="{{ route('seo-company-gurgaon') }}>SEO Services</a></li>
                                        <li><a href="{{ route('ecommerce-services') }}>E-Commerce Services</a></li>

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
