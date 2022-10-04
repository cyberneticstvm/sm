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
                                <h5>Update Slider Item</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.slider.update', $slider->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">
                                        <div class="col-5">
                                            <label for="TextInput" class="form-label">Slider Item Name</label>
                                            <input type="text" class="form-control" name="name" value="{{ $slider->name }}" placeholder="Slider Item Name" required/>
                                        </div>
                                        @error('name')
                                        <small class="text-danger">{{ $errors->first('name') }}</small>
                                        @enderror
                                        <div class="col-2">
                                            <label for="TextInput" class="form-label">Order</label>
                                            <input type="number" class="form-control" name="order_by" value="{{ $slider->order_by }}" placeholder="0" required/>
                                        </div>
                                        @error('order_by')
                                        <small class="text-danger">{{ $errors->first('order_by') }}</small>
                                        @enderror
                                        <div class="col-5">
                                            <label for="TextInput" class="form-label">Image</label>
                                            <input type="file" class="form-control" name="img_url"/>
                                            <small><a href="{{ public_path().'/storage/'.$slider->img_url }}" target="_blank">{{ $slider->img_url }}</a></small>
                                        </div>
                                        @error('img_url')
                                        <small class="text-danger">{{ $errors->first('img_url') }}</small>
                                        @enderror
                                        <div class="col-5">
                                            <label for="TextInput" class="form-label">Page URL</label>
                                            <input type="text" class="form-control" name="page_url" value="{{ $slider->page_url }}" placeholder="Page URL"/>
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