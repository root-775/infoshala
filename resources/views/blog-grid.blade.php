<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Infoshala | Web Design company and Digital Agency Gurgaon - Blog Posts</title>
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
                        <h1>Blog Posts</h1>
                        <div class="page-nav">
                            <ul class="bread-crumb clearfix">
                                <li><a href="{{ route('index') }}">Home</a></li>
                                <li class="active">Blog Posts</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <!-- News Section -->
        <section class="news-section">
            <div class="auto-container">

                <div class="row clearfix">
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="{{ route('blog-single') }}"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="{{ route('blog-single') }}">basic rules of running web agency business</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="{{ route('blog-single') }}"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="{{ route('blog-single') }}"><img src="assets/images/blog/blog-2.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="{{ route('blog-single') }}">Delivering the best digital marketing</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="{{ route('blog-single') }}"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="{{ route('blog-single') }}"><img src="assets/images/blog/blog-3.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="{{ route('blog-single') }}">Introducing the latest linoor features</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="{{ route('blog-single') }}"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="{{ route('blog-single') }}"><img src="assets/images/blog/blog-4.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="{{ route('blog-single') }}">EXPERIENCES THAT CONNECT WITH PEOPLE</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="{{ route('blog-single') }}"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="300ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="{{ route('blog-single') }}"><img src="assets/images/blog/blog-5.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="{{ route('blog-single') }}">A DEEP UNDERSTANDING OF OUR AUDIENCE</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="{{ route('blog-single') }}"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                    <!--News Block-->
                    <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="600ms"
                        data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-box">
                                <a href="{{ route('blog-single') }}"><img src="assets/images/blog/blog-6.jpg" alt=""></a>
                            </div>
                            <div class="lower-box">
                                <div class="post-meta">
                                    <ul class="clearfix">
                                        <li><span class="far fa-clock"></span> 20 Mar</li>
                                        <li><span class="far fa-user-circle"></span> Admin</li>
                                        <li><span class="far fa-comments"></span> 2 Comments</li>
                                    </ul>
                                </div>
                                <h5><a href="{{ route('blog-single') }}">WE BUILD AND ACTIVATE BRANDS INSIGHT</a></h5>
                                <div class="text">Lorem ipsum is simply free text used by copytyping refreshing.</div>
                                <div class="link-box"><a class="theme-btn" href="{{ route('blog-single') }}"><span
                                            class="flaticon-next-1"></span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="more-box">
                    <a class="theme-btn btn-style-one" href="{{ route('blog') }}">
                        <i class="btn-curve"></i>
                        <span class="btn-title">Load more posts</span>
                    </a>
                </div>
            </div>
        </section>

        <!-- Main Footer -->
        @include('include/footer')

</body>
</html>
