@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
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
    </div>
</div>
@endsection