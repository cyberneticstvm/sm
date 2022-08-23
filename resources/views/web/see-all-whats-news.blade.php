@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-3 bg-eee mb-3">
                <h2>See All What's New</h2>
            </div>
            @forelse($news as $key => $ne)
            <div class="col-md-12">
                <ul class="list list-icons list-primary list-borders">
                    @if($ne->doc_type == 'url')
                        <li><i class="fa fa-check"></i><a href="{{ $ne->url }}" target="_blank">{{ $ne->title }}</a></li>
                    @else
                        <li><i class="fa fa-check"></i><a href="{{ public_path().'/storage/'.$ne->document }}" target="_blank">{{ $ne->title }}</a></li>
                    @endif
                </ul>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
@endsection