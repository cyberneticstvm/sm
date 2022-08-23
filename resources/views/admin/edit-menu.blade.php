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
                                <form class="" method="post" action="{{ route('admin.menu.update', $menu->id) }}">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Menu Item Name</label>
                                            <input type="text" class="form-control" name="menu_item_name" value="{{ $menu->menu_item_name }}" placeholder="Menu Item Name" />
                                        </div>
                                        @error('menu_item_name')
                                        <small class="text-danger">{{ $errors->first('menu_item_name') }}</small>
                                        @enderror
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Menu Type</label>
                                            <select class="form-control select2" name="menu_type_id">
                                            @foreach($menu_types as $men)
                                                <option value="{{ $men->id }}" {{ ($men->id == $menu->menu_type_id ) ? 'selected' : '' }}>{{ $men->name }}</option>
                                            @endforeach
                                            </select>
                                            @error('menu_type_id')
                                            <small class="text-danger">{{ $errors->first('menu_type_id') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Page</label>
                                            <select class="form-control select2" name="page_id">
                                                <option value="0" {{ (0 == $menu->page_id ) ? 'selected' : '' }}>Not Applicable</option>
                                            @foreach($pages as $page)
                                                <option value="{{ $page->id }}" {{ ($page->id == $menu->page_id ) ? 'selected' : '' }} >{{ $page->page_title }}</option>
                                            @endforeach
                                            </select>
                                            @error('page_id')
                                            <small class="text-danger">{{ $errors->first('page_id') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Page URL <small>(If page is not applicable)</small></label>
                                            <input type="text" class="form-control" name="page_url" value="{{ $menu->page_url }}" placeholder="Page URL" />
                                        </div>
                                        @error('page_url')
                                        <small class="text-danger">{{ $errors->first('page_url') }}</small>
                                        @enderror
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Parent</label>
                                            <select class="form-control select2" name="parent">
                                                <option value="0">Select</option>
                                            @foreach($menus as $men)
                                                <option value="{{ $men->id }}" {{ ($men->id == $menu->parent ) ? 'selected' : '' }}>{{ $men->menu_item_name }}</option>
                                            @endforeach
                                            </select>
                                            @error('parent')
                                            <small class="text-danger">{{ $errors->first('parent') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-2">
                                            <label for="TextInput" class="form-label">Order</label>
                                            <input type="number" class="form-control" name="order_by" value="{{ $menu->order_by }}" placeholder="0" />
                                        </div>
                                        @error('order_by')
                                        <small class="text-danger">{{ $errors->first('order_by') }}</small>
                                        @enderror
                                        <div class="col-2">
                                            <label for="TextInput" class="form-label">Page Status</label>
                                            <select class="form-control" name="publish">
                                                <option value="1" {{ ($menu->publish == 1) ? 'selected' : '' }}>Publish</option>
                                                <option value="0" {{ ($menu->publish == 0) ? 'selected' : '' }}>Save Only</option>
                                            </select>
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