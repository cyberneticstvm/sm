@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 pt-3 bg-eee">
                <h4 class="px-3 text-white">{{ $news->page_title }}</h4>
            </div>
            <div class="col-md-12 mt-3">
                <div class="post-image">
                    <a href="#">
                        <img src="{{ public_path().'/storage/'.$news->img_url }}" class="img-fluid rounded-0" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-12 mb-5 mt-3">{!! $news->content !!}</div>  
        </div>
    </div>
</div>
@endsection