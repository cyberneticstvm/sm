@extends('admin.base')

@section('content')
<!-- Body: Header -->
<div class="body-header border-bottom d-flex py-3">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col">
                <small class="text-muted">Welcome back</small>
                <h1 class="h4 mt-1">Project Dashboard</h1>
            </div>
            <div class="col-auto">
                <a href="https://themeforest.net/user/wrraptheme" title="Download" target="_blank" class="btn btn-white border lift">Download</a>
                <button type="button" class="btn btn-dark lift">Generate Report</button>
            </div>
        </div>

    </div>
</div>

<!-- Body: Body -->
<div class="body d-flex py-lg-4 py-3">
    <div class="container-fluid">        
        <div class="row g-3">
            <div class="col-xl-12 col-lg-12 col-md-12">
                <div class="row g-3">
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5>Update Video Gallery</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.video.update', $video->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">                                        
                                        <div class="col-lg-3">
                                            <label for="TextInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title" placeholder="Title" value="{{ $video->title }}" required/>
                                            @error('title')
                                            <small class="text-danger">{{ $errors->first('title') }}</small>
                                            @enderror
                                        </div>                                        
                                        <div class="col-lg-6">
                                            <label for="TextInput" class="form-label">Description</label>
                                            <input type="text" class="form-control" name="description" placeholder="Description" value="{{ $video->description }}"/>
                                            @error('description')
                                            <small class="text-danger">{{ $errors->first('description') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="TextInput" class="form-label">Youtube Video ID</label>
                                            <input type="text" class="form-control" name="video_id" placeholder="Video ID" value="{{ $video->video_id }}" required/>
                                            @error('video_id')
                                            <small class="text-danger">{{ $errors->first('video_id') }}</small>
                                            @enderror
                                        </div>                                                                            
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col">
                                            <button type="submit" class="btn btn-submit btn-dark">UPDATE</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->
            </div>
        </div> <!-- .row end -->
    </div>
</div>
@endsection