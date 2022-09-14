@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-5 bg-eee">
                <h4 class="px-3 text-white">{{ $category->name }}</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-2">
                <h5>Side Menu</h5>
                <ul>
                @forelse($side_menu as $key => $smenu)
                <li><a href="{{ $smenu->page_url }}">{{ $smenu->menu_item_name }}</a></li>
                @empty
                @endforelse
                </ul>
            </div>
            <div class="col-lg-10">
                @forelse($docs as $key => $doc)
                    @if(empty($doc->preview))
                        <div class="col">
                            <a href="{{ ($doc->doc_url) ? public_path().'/storage/'.$doc->doc_url : '#' }}" target="_blank">{{ $doc->title }}</a><br/>
                        </div>
                    @else
                        <div class="col mb-3">
                            <a href="{{ ($doc->doc_url) ? public_path().'/storage/'.$doc->doc_url : '#' }}"><img src="{{ public_path().'/storage/'.$doc->preview }}" class="img-fluid" /></a>
                        </div>
                    @endif
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection