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
                                <h5>Create News & Events</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.news-events.update', $ne->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">
                                        <div class="col-lg-4">
                                            <label for="TextInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $ne->title }}" placeholder="Title" required/>
                                            @error('title')
                                            <small class="text-danger">{{ $errors->first('title') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Date</label>
                                            <input type="date" class="form-control" name="date" value="{{ $ne->date }}" placeholder="Date" required/>
                                            @error('date')
                                            <small class="text-danger">{{ $errors->first('date') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">District</label>
                                            <select name="district" class="form-control select2" required>
                                                <option value="">Select</option>
                                                @foreach($districts as $key => $value)
                                                <option value="{{ $value->id }}" {{ ($value->id == $ne->district) ? 'selected' : '' }}>{{ $value->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('district')
                                            <small class="text-danger">{{ $errors->first('district') }}</small>
                                            @enderror
                                        </div>                                        
                                        <div class="col-lg-4">
                                            <label for="TextInput" class="form-label">Main Image</label>
                                            <input type="file" class="form-control" name="img_url"/>
                                            <small><a href="{{ public_path().'/storage/'.$ne->img_url }}" target="_blank">{{ $ne->img_url }}</a></small>
                                            @error('img_url')
                                            <small class="text-danger">{{ $errors->first('img_url') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="TextInput" class="form-label">Content</label>
                                            <textarea class="form-control textarea" id="news-events" name="content">{{ $ne->content }}</textarea>
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