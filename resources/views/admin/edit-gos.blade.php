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
                                <h5>Update Govt. Order</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.gos.update', $go->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Govt. Order Type</label>
                                            <select class="form-control select2" name="type_id" required>
                                                <option value="">Select</option>
                                                @foreach($types as $key => $type)
                                                <option value="{{ $type->id }}" {{ ($go->type_id == $type->id) ? 'selected' : '' }}>{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('type_id')
                                            <small class="text-danger">{{ $errors->first('type_id') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Date</label>
                                            <input type="date" class="form-control" name="go_date" value="{{ $go->go_date }}" required/>
                                            @error('go_date')
                                            <small class="text-danger">{{ $errors->first('go_date') }}</small>
                                            @enderror
                                        </div>                                        
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Order</label>
                                            <input type="number" class="form-control" name="order_by" value="{{ $go->order_by }}" placeholder="0" required/>
                                            @error('order_by')
                                            <small class="text-danger">{{ $errors->first('order_by') }}</small>
                                            @enderror
                                        </div>                                        
                                        <div class="col-lg-6">
                                            <label for="TextInput" class="form-label">Document</label>
                                            <input type="file" class="form-control" name="go_doc" required/>
                                            <small><a href="{{ public_path().'/storage/'.$go->go_doc }}" target="_blank">{{ $go->go_doc }}</a></small>
                                            @error('go_doc')
                                            <small class="text-danger">{{ $errors->first('go_doc') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-12">
                                            <label for="TextInput" class="form-label">Subject</label>
                                            <input type="text" class="form-control" name="go_subject" placeholder="Subject" value="{{ $go->go_subject }}" required/>
                                            @error('go_subject')
                                            <small class="text-danger">{{ $errors->first('go_subject') }}</small>
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