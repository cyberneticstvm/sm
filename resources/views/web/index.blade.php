@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container-fluid bggrey">
        <div class="row fbox">
            <div class="col-lg-9">
                <div class="owl-carousel owl-theme nav-inside" data-plugin-options="{'items': 1, 'margin': 10, 'autoplay': true, 'autoplayTimeout': 5000, 'loop': true, 'nav': true, 'dots': false}">
                    @foreach($sliders as $key => $slider)
                    <div class="sldiv">
                        <div class="img-thumbnail border-0 p-0 d-block">
                            <img class="img-fluid border-radius-0" src="{{ public_path().'/storage/'.$slider->img_url }}" alt="">
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col-lg-3">
                <div class="card text-center">
                    <div class="card-header bg-color-dark text-white">
                        <div class="row"><div class="col text-start">What's New</div><div class="col text-end"><a class="text-decoration-none" href="/see-all-whats-new/">See All</a></div></div>
                    </div>
                    <div class="card-body">
                        <marquee id="mqdiv" direction="up" scrolldelay="100" onmouseover="this.stop();" onmouseout="this.start();" scrollamount="2" behavior="scroll">
                        @forelse($whats as $key => $what)
                            @if($what->doc_type == 'url')
                                <p class="text-justify"><a class="text-decoration-none" href="{{ $what->url }}" target="_blank">{{ $what->title }}</a></p>
                            @else
                                <p class="text-justify"><a class="text-decoration-none" href="{{ public_path().'/storage/'.$what->document }}" target="_blank">{{ $what->title }}</a></p>
                            @endif
                        @empty
                        @endforelse
                    </marquee>
                    </div>              
                    <div class="card rounded-0 card-info bg-primary text-center text-white mt-1 pt-1 pb-1"><a class="text-decoration-none text-white" href="/web/plastic-ban/">Plastic Ban</></div>
                    <div class="card rounded-0 card-info bg-info text-center text-white mt-1 pt-1 pb-1"><a class="text-decoration-none text-white" href="/web/take-a-break/">Take a Break</a></div>
                    <div class="card rounded-0 card-info bg-warning text-center text-white mt-1 pt-1 pb-1"><a class="text-decoration-none text-white" href="/government-orders/">Government Orders</a></div>
                    <div class="card rounded-0 card-info bg-danger text-center mt-1 pt-1 pb-1"><a class="text-decoration-none text-white" href="#quickLinksModal" data-bs-toggle="modal">Quick Links</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box bggrey">
                        <div class="box-content px-lg-3 px-xl-4 py-lg-4">
                            <a href="/web/plastic-ban/"><img src="{{ public_path().'/web/img/sm/icons/ban.png' }}" alt="Plastic Ban" class="img-fluid" /></a>
                            <h5 class="font-weight-normal">Plastic Ban</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box bggrey">
                        <div class="box-content px-lg-3 px-xl-4 py-lg-4">
                            <a href="/web/schemes/"><img src="{{ public_path().'/web/img/sm/icons/scheme.png' }}" alt="Schemes" class="img-fluid" /></a>
                            <h5 class="font-weight-normal">Schemes</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box bggrey">
                        <div class="box-content px-lg-3 px-xl-4 py-lg-4">
                            <a href="/web/iec-capacity-building/"><img src="{{ public_path().'/web/img/sm/icons/capacity.png' }}" alt="IEC" class="img-fluid" /></a>
                            <h5 class="font-weight-normal">IEC / Capacity Building</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 mb-4 mb-lg-0">
                <div class="featured-boxes featured-boxes-modern-style-2 featured-boxes-modern-style-2-hover-only featured-boxes-modern-style-primary my-4">
                    <div class="featured-box bggrey">
                        <div class="box-content px-lg-3 px-xl-4 py-lg-4">
                            <a href="/web/service-providers/"><img src="{{ public_path().'/web/img/sm/icons/service.png' }}" alt="Service Providers" class="img-fluid" /></a>
                            <h5 class="font-weight-normal">Service Providers</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid npad">
        <section class="section bg-info m-0">
            <div class="container">
                <div class="row counters counters-text-light">
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="1018" data-append="+">1018</strong>
                            <label class="mt-3">MCF(80%)</label>
                            <p class="mt-2">Read More</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
                        <div class="counter">
                            <strong data-to="177" data-append="+">177</strong>
                            <label class="mt-3">RRF(65%)</label>
                            <p class="mt-2">Read More</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3 mb-4 mb-sm-0">
                        <div class="counter">
                            <strong data-to="1010" data-append="+">1010</strong>
                            <label class="mt-3">HKS(90%)</label>
                            <p class="mt-2">Read More</p>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="counter">
                            <strong data-to="4085" data-append="+">4085</strong>
                            <label class="mt-3">C&S(75%)</label>
                            <p class="mt-2">Read More</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container-fluid bg-light-green">
        <div class=" container featured-boxes featured-boxes-style-6">
            <div class="row">
                <div class="col-lg-3">
                    <div class="featured-box featured-box-primary featured-box-effect-6">
                        <div class="box-content">
                            <a href="/web/state-rules/"><img src="{{ public_path().'/web/img/sm/icons/rules.png' }}" alt="Rules" class="img-fluid" /></a>
                            <h4 class="font-weight-normal text-5 mt-3">State <strong class="font-weight-extra-bold">Rules</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-secondary featured-box-effect-6">
                        <div class="box-content">
                        <a href="/web/state-policy/"><img src="{{ public_path().'/web/img/sm/icons/policy.png' }}" alt="Policy" class="img-fluid" /></a>
                            <h4 class="font-weight-normal text-5 mt-3">State <strong class="font-weight-extra-bold">Policy</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-tertiary featured-box-effect-6">
                        <div class="box-content">
                        <a href="/web/what-is-green-protocol/"><img src="{{ public_path().'/web/img/sm/icons/green.png' }}" alt="Green Protocol" class="img-fluid" /></a>
                            <h4 class="font-weight-normal text-5 mt-3">Green <strong class="font-weight-extra-bold">Protocol</strong></h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="featured-box featured-box-quaternary featured-box-effect-6">
                        <div class="box-content">
                        <a href="/web/success-models/"><img src="{{ public_path().'/web/img/sm/icons/success.png' }}" alt="Success Models" class="img-fluid" /></a>
                            <h4 class="font-weight-normal text-5 mt-3">Success <strong class="font-weight-extra-bold">Models</strong></h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid npad">
        <section class="vid-sec">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 vid-desc">
                        <h4>My Waste My Responsibility</h4>
                        <p class="text-justify text-dark mt-3">Waste management is an important part of our daily living, especially if you are living in a city. Remember, managing food and bio degradable waste at home, keeping non bio degradable waste clean and dry and handing over to scrap dealers or local body collection systems are as important as consuming food!</p>
                        <div class="mt-3 text-center"><a href="#" class="btn btn-outline btn-primary rounded-0 mb-2">More Videos</a></div>
                    </div>
                    <div class="col-lg-6 text-end">
                        <a class="mt-1 mb-1 me-1 popup-youtube" href="https://www.youtube.com/watch?v=cDmUo436SiU"><img src="{{ public_path().'/web/img/sm/extras/video.jpg' }}" alt="video" class="img-fluid rounded" /></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="col-lg-6"><h4 class="">News & Updates</h4></div>
            <div class="col-lg-6 text-end"><a href="/see-all-news-and-events/" class="btn btn-outline btn-primary rounded-0">See All News</a></div>
            <div class="col">
                <div class="blog-posts">
                    <div class="row">
                        @forelse($news as $key => $ne)
                        <div class="col-md-4">
                            <article class="post post-medium border-0 pb-0 mb-5">
                                <div class="post-image">
                                    <a href="#">
                                        <img src="{{ public_path().'/storage/'.$ne->img_url }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                                    </a>
                                </div>

                                <div class="post-content">
									<div class="post-meta mt-1">
                                        <span><i class="far fa-folder"></i>{{ $ne->date }}</span>
										<span><i class="far fa-user"></i> {{ DB::table('districts')->where('id', $ne->district)->value('name') }} </span>
                                    </div>
                                    <p class="text-justify">{{ Str::limit($ne->title, 75, '...') }}</p>

                                    <div class="post-meta">
                                        <span class="d-block mt-1"><a href="/news-and-events/{{ $ne->id }}/" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                                    </div>

                                </div>
                            </article>
                        </div>
                        @empty
                        @endforelse                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bggrey pt-3">
        <div class="row">
            <div class="col">
                <div class="owl-carousel owl-theme" data-plugin-options="{'items': 9, 'autoplay': true, 'autoplayTimeout': 3000}">
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log1.png' }}" alt="">
                    </div>
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log2.png' }}" alt="">
                    </div>
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log3.png' }}" alt="">
                    </div>
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log4.png' }}" alt="">
                    </div>
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log5.png' }}" alt="">
                    </div>
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log6.png' }}" alt="">
                    </div>
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log7.png' }}" alt="">
                    </div>
                    <div class="fcar">
                        <img class="img-fluid" src="{{ public_path().'/web/img/sm/logos/log8.png' }}" alt="">
                    </div>
                    <div class="fcar">
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
                    @forelse($qlinks as $key => $qlink)
                    @php $slug = DB::table('pages')->where('id', $qlink->page_id)->value('slug'); @endphp
                        <li><i class="fa fa-check"></i><a href="{{ (!empty($slug)) ? '/web/'.$slug.'/' : '#' }}">{{ $qlink->menu_item_name }}</a></li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
@endsection