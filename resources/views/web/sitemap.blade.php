@extends("web.base")

@section("content")
<div role="main" class="main bggrey">
    <div class="container bg-white">
        <div class="row">
            <div class="col-lg-12 pt-3 mb-5 bg-eee">
                <h4 class="px-3 text-white">Sitemap</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                @forelse($menus as $key => $menu)
                    <a href="{{ $menu->page_url }}">{{ $menu->menu_item_name }}</a><br/>
                @empty  
                @endforelse
            </div>
        </div>
    </div>
</div>
@endsection