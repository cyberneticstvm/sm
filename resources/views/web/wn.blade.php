@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-5 bg-eee">
                <h4 class="px-3 text-white">{{ $category->name }}</h4>
            </div>
            <div class="accordion" id="accordion1">
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingOne">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1One" aria-expanded="true" aria-controls="collapse1One">
                                <h5>Active {{ $category->name }}</h5>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1One" class="collapse show" aria-labelledby="collapse1HeadingOne">
                        <div class="card-body">
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
                    </div>
                </div>
                <div class="card card-default">
                    <div class="card-header" id="collapse1HeadingTwo">
                        <h4 class="card-title m-0">
                            <a class="accordion-toggle" data-bs-toggle="collapse" data-bs-target="#collapse1Two" aria-expanded="false" aria-controls="collapse1Two">
                                <h5>Archived {{ $category->name }}</h5>
                            </a>
                        </h4>
                    </div>
                    <div id="collapse1Two" class="collapse" aria-labelledby="collapse1HeadingTwo">
                        <div class="card-body">
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
        </div>
    </div>
</div>
@endsection