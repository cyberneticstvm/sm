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
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row g-3">
                    <div class="col-lg-12 col-md-6 col-sm-12">
                        <div class="card mt-3">
                            <div class="card-body">
                                <h5>Album List</h5>
                            </div>
                            <div class="card-body table-responsive">
                                <table id="dataTbl" class="table table-bordered table-striped table-sm"><thead><tr><th>SL No</th><th>Album Title</th><th>Delete</th></tr></thead><tbody>
                                    @php $c = 1; @endphp
                                    @forelse ($albums as $key => $album)
                                        <tr>
                                            <td>{{ $c++ }}</td>
                                            <td>{{ $album->album_title }}</td>
                                            
                                            <td class='text-center'>
                                            <form method="post" action="{{ route('admin.album.delete', $album->id) }}">
                                                @csrf 
                                                @method("DELETE")
                                                <button type="submit" class="btn btn-link" onclick="javascript: return confirm('Are you sure want to delete this Album?');"><i class="fa fa-trash text-danger"></i></button>
                                            </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="8" class="text-center">No records found</td></tr>
                                    @endforelse
                                </tbody></table>
                            </div>
                        </div>
                    </div>
                </div> <!-- .row end -->
            </div>
        </div> <!-- .row end -->
    </div>
</div>
@endsection