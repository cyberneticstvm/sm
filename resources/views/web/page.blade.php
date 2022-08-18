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
            <div class="col mb-5">
                @if($sections)
                    @foreach($sections as $skey => $section)
                        @if($section->control_id == 1)
                            <!--Horizontal Tab--> 
                        @endif
                        @if($section->control_id == 2)
                            <!--Vertical Tab--> 
                        @endif
                        @if($section->control_id == 3)
                            <!--Accordion-->                            
                            <div class="accordion" id="accordion12">
                                @for($i=0; $i<$section->control_count; $i++)
                                    <div class="card card-default">
                                        <div class="card-header" id="collapse12HeadingOne">
                                            <h4 class="card-title m-0">
                                                <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse12One{{$i}}" aria-expanded="true" aria-controls="collapse12One">
                                                    Accordion Title 1
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse12One{{$i}}" class="collapse {{ ($i == 1) ? 'show' : '' }}" aria-labelledby="collapse12HeadingOne" data-bs-parent="#accordion12">
                                            <div class="card-body">                                                
                                                @if($contents)
                                                    @foreach($contents as $cval => $content)
                                                        @if($content->section_id == $section->id)
                                                            @if($content->content_type == 1)
                                                                {!! $contents[$i]->content !!}
                                                                @break
                                                            @else
                                                                {{ $content->content }}
                                                            @endif
                                                        @endif
                                                    @endforeach
                                                @endif                                                
                                            </div>
                                        </div>
                                    </div>
                                @endfor
                            </div>                            
                        @endif
                        @if($section->control_id == 4)
                            <!--Responsive Column--> 
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection