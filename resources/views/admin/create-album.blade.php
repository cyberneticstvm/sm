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
                                <h5>Create Album</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" id="frmAlbum" action="{{ route('admin.album.save') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">                                        
                                        <div class="col-lg-12">
                                            <label for="TextInput" class="form-label">Album Title</label>
                                            <input type="text" class="form-control" name="album_title" id="album_title" placeholder="Album Title" required/>
                                            @error('album_title')
                                            <small class="text-danger">{{ $errors->first('album_title') }}</small>
                                            @enderror
                                        </div>                                                                    
                                    </div>
                                    <div class="row g-3">                                        
                                        <div class="col-lg-12 mt-5">
                                        <label for="TextInput" class="form-label">Album Images <small>(Multiple uploads enabled)</small></label>
                                            <input type="file" class="form-control" name="imgs[]" multiple required/>
                                            @error('imgs')
                                            <small class="text-danger">{{ $errors->first('imgs') }}</small>
                                            @enderror
                                        </div>                                                                    
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col">
                                            <button type="submit" id="btn-album" class="btn btn-submit btn-dark">SAVE</button>
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