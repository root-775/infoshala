<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Infoshala | Latest News for Web Designing and Seo Services | Blog</title>
    <!-- Stylesheets -->
    <?php echo $__env->make('include/header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body>

    <div class="page-wrapper">

    <?php echo $__env->make('include/navbar1', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

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
                                <li><a href="<?php echo e(route('index')); ?>">Home</a></li>
                                <li class="active">Blog</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Banner Section -->

        <div class="sidebar-page-container">
            <div class="auto-container">
                <div class="row clearfix">

                    <!--Content Side-->
                    <div class="content-side col-lg-8 col-md-12 col-sm-12">
                        <div class="blog-details">
                            <!--News Block-->
                            <div class="post-details">
                                <div class="inner-box">
                                    <div class="image-box">
                                        <a href="<?php echo e(route('blog-single')); ?>"><img src="assets/images/blog/blog-1.jpg" alt=""></a>
                                    </div>
                                    <div class="lower-box">
                                        <div class="post-meta">
                                            <ul class="clearfix">
                                                <li><span class="far fa-clock"></span> 20 Mar</li>
                                                <li><span class="far fa-user-circle"></span> Admin</li>
                                                <li><span class="far fa-comments"></span> 2 Comments</li>
                                            </ul>
                                        </div>
                                        <h4>basic rules of running web agency business</h4>
                                        <div class="text">
                                            <p>There are many variations of passages of Lorem Ipsum available, but the
                                                majority have suffered alteration in some form, by injected humour, or
                                                randomised words which don't look even slightly believable. If you are
                                                going to use a passage of Lorem Ipsum, you need to be sure there isn't
                                                anything embarrassing hidden in the middle of text. All the Lorem Ipsum
                                                generators on the Internet tend to repeat predefined chunks as
                                                necessary, making this the first true generator on the Internet. It uses
                                                a dictionary of over 200 Latin words, combined with a handful of model
                                                sentence structures, to generate Lorem Ipsum which looks reasonable. The
                                                generated Lorem Ipsum is therefore always free from repetition, injected
                                                humour, or non-characteristic words etc.</p>
                                            <p>It is a long established fact that a reader will be distracted by the
                                                readable content of a page when looking at its layout. The point of
                                                using Lorem Ipsum is that it has a more-or-less normal distribution of
                                                letters, as opposed to using 'Content here, content here', making it
                                                look like readable English. Many desktop publishing packages and web
                                                page editors now use Lorem Ipsum as their default model text, and a
                                                search for 'lorem ipsum' will uncover many web sites still in their
                                                infancy. Various versions have evolved over the years, sometimes by
                                                accident, sometimes on purpose injected humour and the like.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-row clearfix">
                                    <div class="tags-info"><strong>Tags:</strong> <a href="<?php echo e(route('index')); ?>">Business</a>, <a
                                            href="<?php echo e(route('digital-marketing-company')); ?>">Agency</a>, <a href="<?php echo e(route('website-development-company')); ?>">Technology</a></div>
                                    <div class="cat-info"><strong>Category:</strong> <a href="<?php echo e(route('index')); ?>">Business</a>, <a
                                            href="<?php echo e(route('digital-marketing-company')); ?>">Agency</a></div>
                                </div>
                            </div>

                            <!--Comments Area-->
                            <div class="comments-area">
                                <div class="comments-title">
                                    <h3>2 Comments</h3>
                                </div>
                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb">
                                            <figure class="thumb"><img src="assets/images/resource/author-1.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="info">
                                            <div class="name">Jessica Brown</div>
                                            <div class="date">20 May, 2020 . 4:00 pm</div>
                                        </div>
                                        <div class="text">Lorem Ipsum is simply dummy free text of the available
                                            printing and typesetting been the industry standard dummy text ever sincer
                                            condimentum purus.</div>
                                        <div class="reply-btn">
                                            <a class="theme-btn btn-style-one" href="<?php echo e(route('about')); ?>">
                                                <i class="btn-curve"></i>
                                                <span class="btn-title">Reply</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="comment-box">
                                    <div class="comment">
                                        <div class="author-thumb">
                                            <figure class="thumb"><img src="assets/images/resource/author-2.jpg" alt="">
                                            </figure>
                                        </div>
                                        <div class="info">
                                            <div class="name">David Martin</div>
                                            <div class="date">20 May, 2020 . 4:00 pm</div>
                                        </div>
                                        <div class="text">Lorem Ipsum is simply dummy free text of the available
                                            printing and typesetting been the industry standard dummy text ever sincer
                                            condimentum purus.</div>
                                        <div class="reply-btn">
                                            <a class="theme-btn btn-style-one" href="<?php echo e(route('about')); ?>">
                                                <i class="btn-curve"></i>
                                                <span class="btn-title">Reply</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

                            <!--Leave Comment Form-->
                            <div class="leave-comments">
                                <div class="comments-title">
                                    <h3>Leave a comment</h3>
                                </div>
                                <div class="default-form comment-form">
                                    <form method="post" action="">
                                        <div class="row clearfix">
                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Your Name" required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="email" name="email" placeholder="Email Address"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Phone Number"
                                                    required="">
                                            </div>

                                            <div class="col-md-6 col-sm-12 form-group">
                                                <input type="text" name="username" placeholder="Subject" required="">
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <textarea name="message" placeholder="Your Comments"></textarea>
                                            </div>

                                            <div class="col-md-12 col-sm-12 form-group">
                                                <button type="submit" class="theme-btn btn-style-one">
                                                    <i class="btn-curve"></i>
                                                    <span class="btn-title">Submit Comment</span>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!--Sidebar Side-->
                    <div class="sidebar-side col-lg-4 col-md-12 col-sm-12">
                        <aside class="sidebar blog-sidebar">
                            <!--Sidebar Widget-->
                            <div class="sidebar-widget search-box">
                                <div class="widget-inner">
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <input type="search" name="search-field" value="" placeholder="Search"
                                                required="">
                                            <button type="submit"><span
                                                    class="icon flaticon-magnifying-glass-1"></span></button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                            <div class="sidebar-widget recent-posts">
                                <div class="widget-inner">
                                    <div class="sidebar-title">
                                        <h4>Latest Posts</h4>
                                    </div>

                                    <div class="post">
                                        <figure class="post-thumb"><img src="assets/images/resource/author-3.jpg" alt="">
                                        </figure>
                                        <h5 class="text"><a href="{{ route('#">EXPERIENCES THAT CONNECT WITH PEOPLE</a></h5>
                                    </div>

                                    <div class="post">
                                        <figure class="post-thumb"><img src="assets/images/resource/author-4.jpg" alt="">
                                        </figure>
                                        <h5 class="text"><a href="{{ route('#">WE BUILD AND ACTIVATE BRANDS INSIGHT</a></h5>
                                    </div>

                                    <div class="post">
                                        <figure class="post-thumb"><img src="assets/images/resource/author-1.jpg" alt="">
                                        </figure>
                                        <h5 class="text"><a href="{{ route('#">A DEEP UNDERSTANDING OF OUR AUDIENCE</a></h5>
                                    </div>

                                </div>
                            </div>
                        </aside>
                    </div>

                </div>
            </div>
        </div>

        <!-- Main Footer -->
        <?php echo $__env->make('include/footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>
</html>
<?php /**PATH /home/amit/Desktop/newfolder/infoshala/resources/views/blog-single.blade.php ENDPATH**/ ?>