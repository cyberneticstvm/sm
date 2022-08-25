@extends("web.base")

@section("content")
<div role="main" class="main bggrey">
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 pt-3 bg-eee"><h4 class="px-3 text-white">{{ ucwords(strtolower(trans($page->page_title))) }}</h4></div>
            <div class="col-lg-12">
                @if($sections)
                    @foreach($sections as $skey => $section)
                        @if($section->control_id == 1)
                            <div class="tabs mt-5">
                                <ul class="nav nav-tabs">
                                @for($i=0; $i<$section->control_count; $i++)
                                    @php $contents = DB::table('contents')->where('page_id', $page->id)->where('section_id', $section->id)->get()->toArray(); @endphp
                                    @if($contents)                                        
                                        @foreach($contents as $cval => $content)
                                            @if($content->section_id == $section->id)
                                                @if($content->content_type == 1 && !empty($contents[$i]->content_title))
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ ($i == 0) ? 'active' : '' }}" href="#{{ str_replace(' ', '_', $contents[$i]->content_title) }}" data-bs-toggle="tab">{{ $contents[$i]->content_title }}</a>
                                                    </li>
                                                    @break                                    
                                                @endif
                                            @endif
                                        @endforeach                                        
                                    @endif                                    
                                @endfor
                                </ul>
                                <div class="tab-content">
                                    @for($i=0; $i<$section->control_count; $i++)
                                        @php $contents = DB::table('contents')->where('page_id', $page->id)->where('section_id', $section->id)->get()->toArray(); @endphp
                                        @if($contents)
                                            @foreach($contents as $cval => $content)
                                                @if($content->section_id == $section->id)
                                                    @if($content->content_type == 1 && !empty($contents[$i]->content_title))
                                                        <div id="{{ str_replace(' ', '_', $contents[$i]->content_title) }}" class="tab-pane {{ ($i == 0) ? 'active' : '' }}">
                                                            {!! $contents[$i]->content !!}
                                                        </div>
                                                        @break                                       
                                                    @endif
                                                @endif
                                            @endforeach                                            
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        @endif
                        @if($section->control_id == 2)
                            <div class="tabs mt-5 tabs-vertical tabs-left">
                                <ul class="nav nav-tabs">
                                @for($i=0; $i<$section->control_count; $i++)
                                    @php $contents = DB::table('contents')->where('page_id', $page->id)->where('section_id', $section->id)->get()->toArray(); @endphp
                                    @if($contents)                                        
                                        @foreach($contents as $cval => $content)
                                            @if($content->section_id == $section->id)
                                                @if($content->content_type == 1 && !empty($contents[$i]->content_title))
                                                    <li class="nav-item">
                                                        <a class="nav-link {{ ($i == 0) ? 'active' : '' }}" href="#{{ str_replace(' ', '_', $contents[$i]->content_title).'_'.$contents[$i]->id }}" data-bs-toggle="tab">{{ $contents[$i]->content_title }}</a>
                                                    </li>
                                                    @break                                    
                                                @endif
                                            @endif
                                        @endforeach                                        
                                    @endif                                    
                                @endfor
                                </ul>
                                <div class="tab-content">
                                    @for($i=0; $i<$section->control_count; $i++)
                                        @php $contents = DB::table('contents')->where('page_id', $page->id)->where('section_id', $section->id)->get()->toArray(); @endphp
                                        @if($contents)
                                            @foreach($contents as $cval => $content)
                                                @if($content->section_id == $section->id)
                                                    @if($content->content_type == 1 && !empty($contents[$i]->content_title))
                                                        <div id="{{ str_replace(' ', '_', $contents[$i]->content_title).'_'.$contents[$i]->id }}" class="tab-pane {{ ($i == 0) ? 'active' : '' }}">
                                                            {!! $contents[$i]->content !!}
                                                        </div>
                                                        @break                                     
                                                    @endif
                                                @endif
                                            @endforeach                                            
                                        @endif
                                    @endfor
                                </div>
                            </div>
                        @endif
                        @if($section->control_id == 3)
                            <!--Accordion-->                            
                            <div class="accordion mt-5" id="accordion12">
                                @for($i=0; $i<$section->control_count; $i++)
                                @php $contents = DB::table('contents')->where('page_id', $page->id)->where('section_id', $section->id)->get()->toArray(); @endphp
                                    <div class="card card-default">
                                        <div class="card-header" id="collapse12HeadingOne">
                                            <h4 class="card-title m-0">
                                                <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse12One{{$i}}" aria-expanded="true" aria-controls="collapse12One">
                                                    {!! $contents[$i]->content_title !!}
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapse12One{{$i}}" class="collapse {{ ($i == 0) ? 'show' : '' }}" aria-labelledby="collapse12HeadingOne" data-bs-parent="#accordion12">
                                            <div class="card-body">                                                
                                                @if($contents)
                                                    @foreach($contents as $cval => $content)
                                                        @if($content->section_id == $section->id)
                                                            @if($content->content_type == 1 && !empty($contents[$i]->content))
                                                                {!! $contents[$i]->content !!}
                                                                @break
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
                            @php $col = 12/$section->control_count; @endphp
                            <div class="row">                                
                                @for($i=0; $i<$section->control_count; $i++)
                                @php $contents = DB::table('contents')->where('page_id', $page->id)->where('section_id', $section->id)->get()->toArray(); @endphp
                                    <div class="col-lg-{{ $col }} table-responsive px-5">
                                    <h5>{{ $contents[$i]->content_title }}</h5>
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
                                @endfor
                            </div>
                        @endif
                    @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection