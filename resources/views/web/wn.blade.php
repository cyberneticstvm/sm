@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-5 bg-eee">
                <h4 class="px-3 text-white">Notifications</h4>
            </div>
            <h5>{{ $category->name }}</h5>
            <div class="col-lg-12 mt-5">
                <h5>Active {{ $category->name }}</h5>
                @forelse($actives as $key => $active)
                    <ul>
                    @if($active->doc_type == 'pdf')
                        <li><a href="{{ public_path().'/storage/'.$active->document}}" target="_blank">{{ $active->title }}</a></li>
                    @else
                        <li><a href="{{ $active->url }}" target="_blank">{{ $active->title }}</a></li>
                    @endif
                    </ul>
                @empty
                @endforelse
            </div>
            <div class="col-lg-12 mt-5">
                <h5>Archived {{ $category->name }}</h5>
                @forelse($archives as $key => $archive)
                    <ul>
                        @if($active->doc_type == 'pdf')
                            <li><a href="{{ public_path().'/storage/'.$active->document}}" target="_blank">{{ $active->title }}</a></li>
                        @else
                            <li><a href="{{ $active->url }}" target="_blank">{{ $active->title }}</a></li>
                        @endif
                    </ul>
                @empty
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection