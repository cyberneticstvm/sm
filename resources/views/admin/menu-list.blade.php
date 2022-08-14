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
                                <h5>Menu List</h5>
                            </div>
                            <div class="card-body table-responsive">
                                <table id="dataTbl" class="table table-bordered table-striped table-sm"><thead><tr><th>SL No</th><th>Menu Type <Title></Title></th></tr></thead><tbody>
                                    @php $c = 1; @endphp
                                    @forelse ($menus as $menu)
                                        <tr>
                                            <td>{{ $c++ }}</td>
                                            <td>{{ $menu->menu_type_id }}</td>
                                        </tr>
                                    @empty
                                        <tr><td colspan="2" class="">No records found</td></tr>
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