@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-5 bg-eee">
                <h4 class="px-3 text-white">Downloads</h4>
            </div>
            <h5>{{ $category->name }}</h5>
        </div>
        <div class="row">            
            @forelse($docs as $key => $doc)
                @if($doc->document_type == 4 || $doc->document_type == 4)
                    <div class="col-lg-12">
                        <a href="{{ public_path().'/storage/'.$doc->doc_url }}" target="_blank">{{ $doc->title }}</a><br/>
                    </div>
                @else
                    <div class="col-lg-2">
                        <a href="{{ public_path().'/storage/'.$doc->doc_url }}" target="_blank"><img src="{{ public_path().'/storage/'.$doc->preview }}" class="img-fluid" /></a>
                    </div>
                @endif
            @empty
            @endforelse
        </div>
    </div>
</div>
@endsection