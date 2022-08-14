@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-7 text-center text-lg-start">
                <h2 class="font-weight-bold text-8 line-height-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="500"><span class="text-5">Hello, we are a <span class="text-color-primary">Digital Agency</span> From New York City.</span></h2>
            </div>
            <div class="col-lg-3 text-center text-lg-end">
                <h4 class="text-4 line-height-6 font-weight-normal appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="800"><span class="opacity-6">Lorem ipsum dolor sit amet, conur adipiscing elit phasellus blandit massa enim.</span></h4>
            </div>
            <div class="col-lg-2 text-center text-lg-end">
                <a class="btn btn-outline btn-rounded btn-primary btn-with-arrow mb-5 mb-lg-2 appear-animation" data-appear-animation="fadeInRightShorter" data-appear-animation-delay="1100" href="#">Contact Us <span><i class="fas fa-chevron-right"></i></span></a>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="500">
                    <div class="owl-carousel owl-carousel-light owl-carousel-light-init-fadeIn owl-theme manual nav-inside nav-style-1 nav-light mt-2" data-plugin-options="{'autoplayTimeout': 6000}" data-dynamic-height="['460px','460px','460px','210px','180px']" style="height: 460px;">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">

                                <!-- Carousel Slide 1 -->
                                <div class="owl-item position-relative" style="background-image: url({{ public_path().'/web/img/projects/project-portfolio-2-3.jpg' }}); background-size: cover; background-position: center;"></div>

                                <!-- Carousel Slide 2 -->
                                <div class="owl-item position-relative" style="background-image: url({{ public_path().'/web/img/projects/project-portfolio-2-1.jpg' }}); background-size: cover; background-position: center;"></div>

                                <!-- Carousel Slide 3 -->
                                <div class="owl-item position-relative" style="background-image: url({{ public_path().'/web/img/projects/project-portfolio-2-2.jpg' }}); background-size: cover; background-position: center;"></div>

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
    </div>
</div>
@endsection