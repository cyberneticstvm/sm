@extends("web.base")

@section("content")
<div role="main" class="main bggrey">
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-3 bg-eee">
                <h4 class="px-3 text-white">Video Gallery</h4>
            </div>
            @forelse($videos as $key => $video)
                <!--<div class="col-lg-3 text-center">
                    <h5 class="text-center">{{ $video->title }}</h5>
                    <a class="popup-youtube" href="http://www.youtube.com/watch?v={{ $video->video_id }}"><img src="https://img.youtube.com/vi/{{ $video->video_id }}/hqdefault.jpg" class="img-fluid" alt="" /></a>
                    <small>{{ $video->description }}</small>
                </div>-->
                <div class="col-lg-3">
                    <h5 class="text-uppercase mt-4">{{ $video->title }}</h5>
                    <span class="thumb-info thumb-info-no-borders thumb-info-no-borders-rounded thumb-info-centered-icons">
                        <span class="thumb-info-wrapper">
                            <img src="https://img.youtube.com/vi/{{ $video->video_id }}/hqdefault.jpg" class="img-fluid" alt="">
                            <span class="thumb-info-action">
                                <a class="popup-youtube" href="http://www.youtube.com/watch?v={{ $video->video_id }}">
                                    <span class="thumb-info-action-icon thumb-info-action-icon-light"><i class="fas fa-play-circle text-dark text-dark"></i></span>
                                </a>
                            </span>
                        </span>
                    </span>
                </div>
            @empty

            @endforelse
        </div>
    </div>
</div>
@endsection