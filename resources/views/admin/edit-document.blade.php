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
                                <h5>Update IEC Document</h5>
                            </div>
                            <div class="card-body">
                                <form class="" method="post" action="{{ route('admin.document.update', $doc->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">
                                        <div class="col-lg-3">
                                            <label for="TextInput" class="form-label">Document Type</label>
                                            <select class="form-control select2" name="document_type" required>
                                                <option value="">Select</option>
                                                @foreach($types as $key => $type)
                                                <option value="{{ $type->id }}"  {{ ($doc->document_type == $type->id) ? 'selected' : '' }}>{{ $type->name }}</option>
                                                @endforeach
                                            </select>
                                            @error('document_type')
                                            <small class="text-danger">{{ $errors->first('document_type') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Date</label>
                                            <input type="date" class="form-control" value="{{ $doc->date }}" name="date" required/>
                                            @error('date')
                                            <small class="text-danger">{{ $errors->first('date') }}</small>
                                            @enderror
                                        </div>                                        
                                        <div class="col-lg-3">
                                            <label for="TextInput" class="form-label">Title</label>
                                            <input type="text" class="form-control" name="title" value="{{ $doc->title }}" placeholder="Title" required/>
                                            @error('title')
                                            <small class="text-danger">{{ $errors->first('title') }}</small>
                                            @enderror
                                        </div>       
                                        <div class="col-lg-4">
                                            <label for="TextInput" class="form-label">Description</label>
                                            <input type="text" class="form-control" name="description" value="{{ $doc->description }}" placeholder="Description"/>
                                            @error('description')
                                            <small class="text-danger">{{ $errors->first('description') }}</small>
                                            @enderror
                                        </div>                                 
                                        <div class="col-lg-6">
                                            <label for="TextInput" class="form-label">Document</label>
                                            <input type="file" class="form-control" name="doc"/>
                                            <small><a href="{{ public_path().'/storage/'.$doc->doc_url }}" target="_blank">{{ $doc->doc_url }}</a></small>
                                            @error('doc')
                                            <small class="text-danger">{{ $errors->first('doc') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Attachment Type</label>
                                            <select class="form-control select2" name="attachment_type" required>
                                                <option value="">Select</option>
                                                <option value="I" {{ ($doc->attachment_type == 'I') ? 'selected' : '' }}>Image</option>
                                                <option value="D" {{ ($doc->attachment_type == 'D') ? 'selected' : '' }}>Document</option>
                                                <option value="O" {{ ($doc->attachment_type == 'O') ? 'selected' : '' }}>Other</option>
                                            </select>
                                            @error('attachment_type')
                                            <small class="text-danger">{{ $errors->first('attachment_type') }}</small>
                                            @enderror
                                        </div>
                                        <div class="col-lg-2">
                                            <label for="TextInput" class="form-label">Document Status</label>
                                            <select class="form-control select2" name="status" required>
                                                <option value="">Select</option>
                                                <option value="1" {{ ($doc->status == 1) ? 'selected' : '' }}>Active</option>
                                                <option value="0" {{ ($doc->status == 0) ? 'selected' : '' }}>Archive</option>
                                            </select>
                                            @error('status')
                                            <small class="text-danger">{{ $errors->first('status') }}</small>
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