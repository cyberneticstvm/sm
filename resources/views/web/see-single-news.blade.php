@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h3>{{ $news->title }}</h3>
            </div>
            <div class="col-md-12">
                <div class="post-image">
                    <a href="#">
                        <img src="{{ public_path().'/storage/'.$ne->img_url }}" class="img-fluid rounded-0" alt="">
                    </a>
                </div>
            </div>
            <div class="col-lg-12 mb-5">{!! $news->content !!}</div>  
        </div>
    </div>
</div>
@endsection