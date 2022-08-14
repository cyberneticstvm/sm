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
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row g-3">
                                    <div class="col-3">
                                        <label for="TextInput" class="form-label">Control</label>
                                        <select class="form-control" name="control" id="control">
                                        @foreach($controls as $control)
                                            <option value="{{ $control->id }}">{{ $control->name }}</option>
                                        @endforeach
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label for="TextInput" class="form-label">Number</label>
                                        <select class="form-control" name="number" id="number">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                    <div class="col-2">
                                        <label for="TextInput" class="form-label">&nbsp;</label>
                                        <button class="btn btn-sm btn-dark addControl">Add</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-6 col-sm-12">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5>Page Content</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.page.save') }}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-12">
                                            <label for="TextInput" class="form-label">Page Title</label>
                                            <input type="text" class="form-control" name="page_title" placeholder="Page Title" required />
                                        </div>
                                        @error('page_title')
                                        <small class="text-danger">{{ $errors->first('page_title') }}</small>
                                        @enderror
                                    </div>
                                    <div class="page-content">

                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col">
                                            <button type="button" class="btn btn-submit btn-dark btn-create-page">SAVE</button>
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