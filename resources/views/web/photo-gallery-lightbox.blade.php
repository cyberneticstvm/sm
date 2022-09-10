@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="lightbox" data-plugin-options="{'delegate': 'a', 'type': 'image', 'gallery': {'enabled': true}, 'mainClass': 'mfp-with-zoom', 'zoom': {'enabled': true, 'duration': 300}}">
                    <div class="owl-carousel owl-theme stage-margin" data-plugin-options="{'items': 3, 'margin': 10, 'loop': false, 'nav': false, 'dots': false, 'stagePadding': 40}">                            
                        @foreach($images as $key => $img)
                        <div class="card-body col-lg-12">
                            <a class="img-thumbnail img-thumbnail-no-borders img-thumbnail-hover-icon" href="{{ public_path().'/storage/albums/'.$img->album_id.'/'.$img->img_name }}">
                                <img class="img-fluid" src="{{ public_path().'/storage/albums/'.$img->album_id.'/'.$img->img_name }}" alt="Project Image">
                            </a>                                
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection