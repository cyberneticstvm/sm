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
                                <h5>Update Album</h5>
                            </div>
                            <div class="card-body">
                                <form method="post" id="frmAlbum" action="{{ route('admin.album.update', $album->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">                                        
                                        <div class="col-lg-12">
                                            <label for="TextInput" class="form-label">Album Title</label>
                                            <input type="text" class="form-control" name="album_title" id="album_title" value="{{ $album->album_title }}" required/>
                                            @error('album_title')
                                            <small class="text-danger">{{ $errors->first('album_title') }}</small>
                                            @enderror
                                        </div>                                                                    
                                    </div>
                                    <div class="row g-3">                                        
                                        <div class="col-lg-12 mt-5">
                                        <label for="TextInput" class="form-label">Album Images <small>(Multiple uploads enabled)</small></label>
                                            <input type="file" class="form-control" name="imgs[]" multiple/>
                                            @error('imgs')
                                            <small class="text-danger">{{ $errors->first('imgs') }}</small>
                                            @enderror
                                        </div>                                                                    
                                    </div>
                                    <div class="row g-3 table-responsive mt-3">
                                        <div class="col-lg-12">
                                            <table width="50%" class="table table-bordered table-striped">
                                                <thead><tr><th>Image</th><th>Delete</th></tr></thead><tbody>
                                                    @forelse($images as $key => $image)
                                                        <tr>
                                                            <td><a href="{{ public_path().'/storage/albums/'.$album->id.'/'.$image->img_name }}" target="_blank">{{ $image->img_name }}</a></td>
                                                            <td><a href="javascript:void(0)" class="dlt" data-id="{{ $image->id }}" data-type="album_image" onclick="javascript: return confirm('Are you sure want to delete this Record?');"><i class="fa fa-trash text-danger"></i></a></td>
                                                        </tr>
                                                    @empty
                                                    @endforelse
                                            </tbody></table>
                                        </div>
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col">
                                            <button type="submit" id="btn-album" class="btn btn-submit btn-dark">UPDTE</button>
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