@extends("web.base")

@section("content")
<div role="main" class="main bggrey">
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 pt-3 bg-eee">
                <h4 class="px-3 text-white">See All News and Events</h4>
            </div>
            @forelse($news as $key => $ne)
            <div class="col-md-4 mt-3">
                <article class="post post-medium border-0 pb-0 mb-5">
                    <div class="post-image">
                        <a href="#">
                            <img src="{{ public_path().'/storage/'.$ne->img_url }}" class="img-fluid img-thumbnail img-thumbnail-no-borders rounded-0" alt="">
                        </a>
                    </div>
                    <div class="post-content">
                        <div class="post-meta mt-1">
                            <span><i class="far fa-folder"></i>{{ $ne->date }}</span>
                            <span><i class="far fa-user"></i> {{ DB::table('districts')->where('id', $ne->district)->value('name') }} </span>
                        </div>
                        <p class="text-justify">{{ Str::limit($ne->title, 75, '...') }}</p>

                        <div class="post-meta">
                            <span class="d-block mt-1"><a href="route('/news-and-events/', $ne->id)" class="btn btn-xs btn-light text-1 text-uppercase">Read More</a></span>
                        </div>
                    </div>
                </article>
            </div>
            @empty
            @endforelse
        </div>
    </div>
</div>
@endsection