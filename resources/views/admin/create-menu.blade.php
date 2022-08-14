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
                                <h5>Create Menu</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.menu.save') }}">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Menu Type</label>
                                            <select class="form-control select2" name="menu_type_id">
                                            @foreach($menu_types as $menu)
                                                <option value="{{ $menu->id }}">{{ $menu->name }}</option>
                                            @endforeach
                                            </select>
                                            @error('menu_type_id')
                                            <small class="text-danger">{{ $errors->first('menu_type_id') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Page</label>
                                            <select class="form-control select2" name="page_id">
                                            @foreach($pages as $page)
                                                <option value="{{ $page->id }}">{{ $page->page_title }}</option>
                                            @endforeach
                                            </select>
                                            @error('page_id')
                                            <small class="text-danger">{{ $errors->first('page_id') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Parent</label>
                                            <select class="form-control select2" name="parent">
                                                <option value="0">Select</option>
                                            @foreach($pages as $page)
                                                <option value="{{ $page->id }}">{{ $page->page_title }}</option>
                                            @endforeach
                                            </select>
                                            @error('parent')
                                            <small class="text-danger">{{ $errors->first('parent') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="TextInput" class="form-label">Order</label>
                                            <input type="number" class="form-control" name="order_by" placeholder="0" />
                                        </div>
                                        @error('order_by')
                                        <small class="text-danger">{{ $errors->first('order_by') }}</small>
                                        @enderror
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col">
                                            <button type="submit" class="btn btn-submit btn-dark">SAVE</button>
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