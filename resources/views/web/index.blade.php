@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'autoplay': true, 'autoplayTimeout': 5000, 'loop': true, 'nav': true, 'dots': false}">
                    <div>
                        <div class="img-thumbnail border-0 p-0 d-block">
                            <img class="img-fluid border-radius-0" src="{{ public_path().'/web/img/sm/slider/slider1.jpg' }}" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="img-thumbnail border-0 p-0 d-block">
                            <img class="img-fluid border-radius-0" src="{{ public_path().'/web/img/sm/slider/slider2.jpg' }}" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="img-thumbnail border-0 p-0 d-block">
                            <img class="img-fluid border-radius-0" src="{{ public_path().'/web/img/sm/slider/slider3.jpg' }}" alt="">
                        </div>
                    </div>
                    <div>
                        <div class="img-thumbnail border-0 p-0 d-block">
                            <img class="img-fluid border-radius-0" src="{{ public_path().'/web/img/sm/slider/slider4.jpg' }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card text-center">
                    <div class="card-header bg-color-dark text-white">
                        What's New
                    </div>
                    <div class="card-body wnew">
                        <marquee direction="up" scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="2" behavior="scroll"><p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur adipiscing lit onsectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur.</p><p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur adipiscing lit onsectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing onsectetur adipiscing elit elit onsectetur.</p></marquee>
                    </div>
                </div>
                <div class="card rounded-0 card-info bg-primary text-center text-white mt-1">Plastic Ban</div>
                <div class="card rounded-0 card-info bg-info text-center text-white mt-1">Take a Break</div>
                <div class="card rounded-0 card-info bg-warning text-center text-white mt-1">Government Orders</div>
                <div class="card rounded-0 card-info bg-danger text-center mt-1"><a href="#quickLinksModal" data-bs-toggle="modal" class="text-white">Quick Links</a></div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <img src="{{ public_path().'/web/img/sm/icons/ban.png' }}" alt="Plastic Ban" class="img-fluid" />
                            <h5 class="font-weight-normal">Plastic Ban</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <img src="{{ public_path().'/web/img/sm/icons/scheme.png' }}" alt="Schemes" class="img-fluid" />
                            <h5 class="font-weight-normal">Schemes</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <img src="{{ public_path().'/web/img/sm/icons/capacity.png' }}" alt="IEC" class="img-fluid" />
                            <h5 class="font-weight-normal">IEC / Capacity Building</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box">
                        <div class="box-content px-lg-4 px-xl-5 py-lg-5">
                            <img src="{{ public_path().'/web/img/sm/icons/service.png' }}" alt="Service Providers" class="img-fluid" />
                            <h5 class="font-weight-normal">Service Providers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <section class="section bg-info">
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
    </div>
    <div class="container">
        <div class="featured-boxes featured-boxes-style-6">
            <div class="row">
                <div class="col-lg-3">
                    <div class="featured-box featured-box-primary featured-box-effect-6">
                        <div class="box-content">
                            <img src="{{ public_path().'/web/img/sm/icons/rules.png' }}" alt="Rules" class="img-fluid" />
                            <h4 class="font-weight-normal text-5 mt-3">State <strong class="font-weight-extra-bold">Rules</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-secondary featured-box-effect-6">
                        <div class="box-content">
                            <img src="{{ public_path().'/web/img/sm/icons/policy.png' }}" alt="Policy" class="img-fluid" />
                            <h4 class="font-weight-normal text-5 mt-3">State <strong class="font-weight-extra-bold">Policy</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-tertiary featured-box-effect-6">
                        <div class="box-content">
                            <img src="{{ public_path().'/web/img/sm/icons/green.png' }}" alt="Green Protocol" class="img-fluid" />
                            <h4 class="font-weight-normal text-5 mt-3">Green <strong class="font-weight-extra-bold">Protocol</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-quaternary featured-box-effect-6">
                        <div class="box-content">
                            <img src="{{ public_path().'/web/img/sm/icons/success.png' }}" alt="Success Models" class="img-fluid" />
                            <h4 class="font-weight-normal text-5 mt-3">Success <strong class="font-weight-extra-bold">Models</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <section class="vid-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 vid-desc p-3">
                        <h4>My Waste My Responsibility</h4>
                        <p class="text-justify text-dark mt-3">Waste management is an important part of our daily living, especially if you are living in a city. Remember, managing food and bio degradable waste at home, keeping non bio degradable waste clean and dry and handing over to scrap dealers or local body collection systems are as important as consuming food!</p>
                        <div class="mt-3 text-center"><a href="#" class="btn btn-outline btn-primary rounded-0 mb-2">More Videos</a></div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <a class="mt-1 mb-1 me-1 popup-youtube" href="https://www.youtube.com/watch?v=cDmUo436SiU"><img src="{{ public_path().'/web/img/sm/extras/video.jpg' }}" alt="video" class="img-fluid"/></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-12"><h4 class="">News & Updates</h4></div>
            <div class="col">
                <div class="blog-posts">
                    <div class="row">
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="/">
                                        <img src="{{ public_path().'/web/img/sm/extras/2332smartgarbage.jpg' }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Thiruvananthapuram</a></h2>
                                    <p class="text-justify">Suchitwa Mission has launched a mobile application to monitor solid waste management activities in local bodies Suchitwa...</p>

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
                                        <img src="{{ public_path().'/web/img/sm/extras/5040pappancode.jpg' }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Thiruvananthapuram</a></h2>
                                    <p class="text-justify">Take a Break - Public Toilet Complex inauguration in Pappanamcode KSRTC Depo in Trivandrum by Minister Govidan Master...</p>

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
                                        <img src="{{ public_path().'/web/img/sm/extras/5877thelineer.jpg' }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">

                                    <h2 class="font-weight-semibold text-5 line-height-6 mt-3 mb-2"><a href="blog-post.html">Thiruvananthapuram</a></h2>
                                    <p class="text-justify">Thelineer Ozhukum Navakeralam Project Laughing Ceremony to aim clean all water resources ...</p>

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
            <div class="col-lg-12 text-end"><a href="#" class="btn btn-outline btn-primary rounded-0">See All News</a></div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 9, 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log1.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log2.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log3.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log4.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log5.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log6.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log7.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log8.png' }}" alt="">
                    </div>
                    <div>
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log9.png' }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="quickLinksModal" tabindex="-1" role="dialog" aria-labelledby="defaultModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="defaultModalLabel">Quick Links</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <ul class="list list-icons list-primary list-borders">
                    <li><i class="fa fa-check"></i><a href="#">Suchitwa Padavi</a></li>
                    <li><i class="fa fa-check"></i><a href="#">Collectors @ School</a></li>
                    <li><i class="fa fa-check"></i><a href="#">IEC-Capacity Building</a></li>
                    <li><i class="fa fa-check"></i><a href="#">Service Providers</a></li>
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection