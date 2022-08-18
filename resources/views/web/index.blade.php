@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-inside nav-style-1 nav-light mt-2" data-plugin-options="{'autoplayTimeout': 6000}" data-dynamic-height="['460px','460px','460px','210px','180px']" style="height: 460px;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">

                                <!-- Carousel Slide 1 -->
                                <div class="owl-item position-relative" style="background-image: url({{ public_path().'/web/img/sm/slider/slider1.jpg' }}); background-size: cover; background-position: center;"></div>

                                <!-- Carousel Slide 2 -->
                                <div class="owl-item position-relative" style="background-image: url({{ public_path().'/web/img/sm/slider/slider2.jpg' }}); background-size: cover; background-position: center;"></div>

                                <!-- Carousel Slide 3 -->
                                <div class="owl-item position-relative" style="background-image: url({{ public_path().'/web/img/sm/slider/slider3.jpg' }}); background-size: cover; background-position: center;"></div>

                                <!-- Carousel Slide 4 -->
                                <div class="owl-item position-relative" style="background-image: url({{ public_path().'/web/img/sm/slider/slider4.jpg' }}); background-size: cover; background-position: center;"></div>

                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"></button>
                            <button type="button" role="presentation" class="owl-next"></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">						
            <div class="col-lg-12">
                <div class="accordion accordion-modern-status accordion-modern-status-primary" id="accordion100">
                    <div class="card card-default">
                        <div class="card-header" id="collapse100HeadingOne">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold" data-bs-toggle="collapse" data-bs-target="#collapse100One" aria-expanded="true" aria-controls="collapse100One">
                                What's New
                                </a>
                            </h4>
                        </div>
                        <div id="collapse100One" class="collapse show" aria-labelledby="collapse100HeadingOne" data-bs-parent="#accordion100" style="">
                            <div class="card-body">
                                <marquee direction="up">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</marquee>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse100HeadingTwo">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Two" aria-expanded="false" aria-controls="collapse100Two">
                                    Plastic Ban
                                </a>
                            </h4>
                        </div>
                        <div id="collapse100Two" class="collapse" aria-labelledby="collapse100HeadingTwo" data-bs-parent="#accordion100">
                            <div class="card-body">
                                <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse100HeadingThree">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Three" aria-expanded="false" aria-controls="collapse100Three">
                                    Take a Break
                                </a>
                            </h4>
                        </div>
                        <div id="collapse100Three" class="collapse" aria-labelledby="collapse100HeadingThree" data-bs-parent="#accordion100">
                            <div class="card-body">
                                <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse100HeadingFour">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Four" aria-expanded="false" aria-controls="collapse100Four">
                                    Government Orders
                                </a>
                            </h4>
                        </div>
                        <div id="collapse100Four" class="collapse" aria-labelledby="collapse100HeadingFour" data-bs-parent="#accordion100">
                            <div class="card-body">
                                <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card card-default">
                        <div class="card-header" id="collapse100HeadingFive">
                            <h4 class="card-title m-0">
                                <a class="accordion-toggle text-color-dark font-weight-bold collapsed" data-bs-toggle="collapse" data-bs-target="#collapse100Five" aria-expanded="false" aria-controls="collapse100Five">
                                    Quick Links
                                </a>
                            </h4>
                        </div>
                        <div id="collapse100Five" class="collapse" aria-labelledby="collapse1HeadingFive" data-bs-parent="#accordion100">
                            <div class="card-body">
                                <p class="mb-0">Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien. Praesent id enim sit amet odio vulputate eleifend in in tortor. Donec tellus massa, tristique sit amet condim vel, facilisis quis sapien.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <i class="icon-featured far fa-heart text-color-primary"></i>
                            <h2 class="font-weight-normal text-5">Plastic <br />Ban</h2>
                            <a href="/" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <i class="icon-featured far fa-file-alt text-color-primary"></i>
                            <h2 class="font-weight-normal text-5">Schemes <br />&nbsp;</h2>
                            <a href="/" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <i class="icon-featured far fa-star text-color-primary"></i>
                            <h2 class="font-weight-normal text-5">IEC / Capacity <br />Building</h2>
                            <a href="/" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <i class="icon-featured far fa-star text-color-primary"></i>
                            <h2 class="font-weight-normal text-5">Service <br />Providers</h2>
                            <a href="/" class="btn btn-light btn-outline font-weight-semibold text-color-dark btn-px-5 btn-py-2 border-width-1 text-1 mt-3">LEARN MORE</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <section class="section section-primary">
            <div class="container">
                <div class="row counters counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="1018" data-append="+">1018</strong>
                            <label>MCF(80%)</label>
                            <p class="mt-3">Read More</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="177" data-append="+">177</strong>
                            <label>RRF(65%)</label>
                            <p class="mt-3">Read More</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <strong data-to="1010" data-append="+">1010</strong>
                            <label>HKS(90%)</label>
                            <p class="mt-3">Read More</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="4085" data-append="+">4085</strong>
                            <label>C&S(75%)</label>
                            <p class="mt-3">Read More</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="featured-boxes featured-boxes-style-6">
            <div class="row">
                <div class="col-lg-3">
                    <div class="featured-box featured-box-primary featured-box-effect-6">
                        <div class="box-content">
                            <i class="icon-featured far fa-heart"></i>
                            <h4 class="font-weight-normal text-5 mt-3">State <strong class="font-weight-extra-bold">Rules</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-secondary featured-box-effect-6">
                        <div class="box-content">
                            <i class="icon-featured far fa-file-alt"></i>
                            <h4 class="font-weight-normal text-5 mt-3">State <strong class="font-weight-extra-bold">Policy</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-tertiary featured-box-effect-6">
                        <div class="box-content">
                            <i class="icon-featured far fa-star"></i>
                            <h4 class="font-weight-normal text-5 mt-3"><strong class="font-weight-extra-bold">Green </strong>Protocol</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-quaternary featured-box-effect-6">
                        <div class="box-content">
                            <i class="icon-featured far fa-edit"></i>
                            <h4 class="font-weight-normal text-5 mt-3">Success <strong class="font-weight-extra-bold">Models</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h4 class="mt-5 mb-5">News & Updates</h4>
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="/">
                                        <img src="{{ public_path().'/web/img/blog/medium/blog-1.jpg' }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Amazing Mountain</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">Bob Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="/">
                                        <img src="{{ public_path().'/web/img/blog/medium/blog-1.jpg' }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Creative Business</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="/">
                                        <img src="{{ public_path().'/web/img/blog/medium/blog-1.jpg' }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Unlimited Ways</a></h2>
                                    <p>Euismod atras vulputate iltricies etri elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>

                                    <div class="post-meta">
                                        <span><i class="far fa-user"></i> By <a href="#">John Doe</a> </span>
                                        <span><i class="far fa-folder"></i> <a href="#">News</a>, <a href="#">Design</a> </span>
                                        <span><i class="far fa-comments"></i> <a href="#">12 Comments</a></span>
                                        <span class="d-block mt-2"><a href="blog-post.html" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 4, 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/logos/logo-1.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/logos/logo-2.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/logos/logo-3.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/logos/logo-4.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/logos/logo-5.png' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection