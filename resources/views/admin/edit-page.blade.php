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
                                            @for($i=1;$i<=15;$i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
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
                                <form class="" method="post" action="{{ route('admin.page.update', $page->id) }}" enctype="multipart/form-data">
                                    @csrf
                                    @method("PUT")
                                    <div class="row g-3">
                                        <div class="col-9">
                                            <label for="TextInput" class="form-label">Page Title</label>
                                            <input type="text" class="form-control" name="page_title" value="{{ $page->page_title }}" required />
                                        </div>
                                        @error('page_title')
                                        <small class="text-danger">{{ $errors->first('page_title') }}</small>
                                        @enderror
                                        <div class="col-3">
                                            <label for="TextInput" class="form-label">Page Status</label>
                                            <select class="form-control" name="publish">
                                                <option value="1" {{ ($page->publish == 1) ? 'selected' : '' }}>Publish</option>
                                                <option value="0" {{ ($page->publish == 0) ? 'selected' : '' }}>Save Only</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="page-content">
                                        @php $c=1; @endphp
                                        @forelse($sections as $section)
                                            <div class='border p-3 mt-3 section'>
                                                @if($section->control_id == 1)
                                                <h5 class='text-primary'>HORIZONTAL TAB</h5>
                                                @endif
                                                @if($section->control_id == 2)
                                                <h5 class='text-primary'>VERTICAL TAB</h5>
                                                @endif
                                                @if($section->control_id == 3)
                                                <h5 class='text-primary'>ACCORDION</h5>
                                                @endif
                                                @if($section->control_id == 4)
                                                <h5 class='text-primary'>RESPONSIVE COLUMN</h5>
                                                @endif                                
                                                @foreach($contents as $content)
                                                    @if($section->id == $content->section_id)
                                                    <div class='mt-3 row'><div class='col mt-3'><select class='form-control ctype' name='content_type[]' data-section="{{ $section->control_id }}"><option value='1' {{ ($content->content_type == 1) ? 'selected' : '' }}>New Content</option></select></div></div><div class='mt-3 row'><div class='col content'></div></div>
                                                    <input type='hidden' name='cctype[]' value={{ $content->content_type }} /><input type='hidden' name='sectype[]' value="{{ $section->control_id }}" /><input type='text' class='form-control' name='content_title[]' value="{{ $content->content_title }}" placeholder="Content Title" required/><textarea id="ta_{{ $c++ }}" class='form-control textarea edtCnt' name='ccontent[]' required>{{ $content->content }}</textarea>
                                                    @endif
                                                @endforeach
                                                <div class='text-end mt-1'><a href='javascript:void(0)' class='text-danger' onclick="$(this).parent().parent().remove()">Remove this section</a></div>
                                                <input type='hidden' name='stype[]' value="{{ $section->control_id }}" /><input type='hidden' name='scount[]' value="{{ $section->control_count }}" />                                                                                   
                                            </div>
                                        @empty
                                        
                                        @endforelse
                                    </div>
                                    <div class="row g-3 mt-3">
                                        <div class="col">
                                            <button type="button" class="btn btn-submit btn-dark btn-create-page">UPDATE</button>
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