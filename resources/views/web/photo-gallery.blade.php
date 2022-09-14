@extends("web.base")

@section("content")
<div role="main" class="main bggrey">
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-3 bg-eee">
                <h4 class="px-3 text-white">Photo Gallery</h4>
            </div>
            @forelse($albums as $key => $album)
            @php $image = DB::table('album_images')->where('album_id', $album->id)->get()->first(); @endphp
            <div class="col-lg-4 mt-3">
                <div class="card">
                    <img class="card-img-top" src="{{ public_path().'/storage/albums/'.$image->album_id.'/'.$image->img_name }}" alt="Card Image">
                    <div class="card-body">
                        <p class="card-text text-justify"><a href="/photo-gallery/{{ $album->id }}" target="_blank">{{ $album->album_title }}</a></p>
                    </div>
                </div>
            </div>
            @empty
            @endforelse
            <!--@forelse($albums as $key => $album)
                @php $images = DB::table('album_images')->where('album_id', $album->id)->get(); @endphp
                <div class="col-lg-12">
                    <h5>{{ $album->album_title }}</h5>
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
            @empty
            @endforelse-->
        </div>
    </div>
</div>
@endsection