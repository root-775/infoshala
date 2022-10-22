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
                    <!--News Block start-->
                    @foreach ($blogs as $item)
                        <div class="news-block col-lg-4 col-md-6 col-sm-12 wow fadeInUp" data-wow-delay="0ms"
                            data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="image-box">
                                    <a href="{{ route('blog-single', ['title' => Str::slug($item->title)]) }}"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                </div>
                                <div class="lower-box">
                                    <div class="post-meta">
                                        <ul class="clearfix">
                                            <li><span class="far fa-clock"></span> {{ $item->created_at }}</li>
                                            <li><span class="far fa-user-circle"></span> {{ $item->blog_by }}</li>
                                            {{-- <li><span class="far fa-comments"></span> 2 Comments</li> --}}
                                        </ul>
                                    </div>
                                    <h5><a href="{{ route('blog-single', ['title' => Str::slug($item->title)]) }}">{{ $item->title }}</a></h5>
                                    <div class="text">{{ Str::limit($item->short_desc, 63, '...') }}</div>
                                    <div class="link-box"><a class="theme-btn" href="{{ route('blog-single', ['title' => Str::slug($item->title)]) }}"><span
                                                class="flaticon-next-1"></span></a></div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <!--News Block End-->

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
