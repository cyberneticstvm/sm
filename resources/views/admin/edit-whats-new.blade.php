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
                                <h5>Update What's New</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.whats-new.update', $wn->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">
                                        <div class="col-lg-5">
                                            <label for="TextInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $wn->title }}" placeholder="Title" required/>
                                            @error('title')
                                            <small class="text-danger">{{ $errors->first('title') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Category</label>
                                            <select class="form-control select2" name="category" required>
                                                <option value="">Select</option>
                                                @foreach($categories as $key => $cat)
                                                <option value="{{ $cat->id }}" {{ ($cat->id == $wn->category) ? 'selected' : '' }}>{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('category')
                                            <small class="text-danger">{{ $errors->first('category') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Whats New Type</label>
                                            <select class="form-control select2" name="doc_type" required>
                                                <option value="">Select</option>
                                                <option value="url" {{ ('url' == $wn->doc_type) ? 'selected' : '' }}>Url</option>
                                                <option value="pdf" {{ ('pdf' == $wn->doc_type) ? 'selected' : '' }}>Pdf</option>
                                            </select>
                                            @error('doc_type')
                                            <small class="text-danger">{{ $errors->first('doc_type') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-3">
                                            <label for="TextInput" class="form-label">URL</label>
                                            <input type="text" class="form-control" name="url" value="{{ $wn->url }}" placeholder="Url" />
                                            @error('url')
                                            <small class="text-danger">{{ $errors->first('url') }}</small>
                                            @enderror
                                        </div>                                                                       
                                        <div class="col-lg-6">
                                            <label for="TextInput" class="form-label">Document</label>
                                            <input type="file" class="form-control" name="document"/>
                                            <small><a href="{{ public_path().'/storage/'.$wn->document }}" target="_blank">{{ $wn->document }}</a></small>
                                            @error('document')
                                            <small class="text-danger">{{ $errors->first('document') }}</small>
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