@extends("web.base")

@section("content")
<div role="main" class="main">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 mt-5">
                <h3>Government Orders</h3>
                <div class="tabs">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" href="#go" data-bs-toggle="tab">Government Orders</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#po" data-bs-toggle="tab">Proceedings</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#co" data-bs-toggle="tab">Circulars</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div id="go" class="tab-pane active">
                            <div class="row">
                                <div class="col-lg-12 table-responsive">
                                    @php $c = 1; @endphp
                                    <table id="dataTbl" class="table table-bordered table-striped table-sm"><thead><tr><th>SL No</th><th>Notification</th><th>Document</th><th>Date</th></tr></thead><tbody>
                                        @forelse ($gos as $key => $go)
                                            @if($go->type_id == 1)
                                                <tr>
                                                <td>{{ $c++ }}</td>
                                                <td>{{ $go->go_notification_number }}</td>
                                                <td><a href="{{ public_path().'/storage/'.$go->go_doc }}" target="_blank">{{ $go->go_doc }}</a></td>
                                                <td>{{ $go->go_date }}</td>
                                                </tr>
                                            @endif
                                        @empty
                                            <tr><td colspan="4" class="text-center">No records found</td></tr>
                                        @endforelse
                                    </tbody></table>
                                </div>
                            </div>                                  
                        </div>
                        <div id="po" class="tab-pane">
                            <div class="row">
                                <div class="col-lg-12 table-responsive">
                                    @php $c = 1; @endphp
                                    <table id="dataTbl" class="table table-bordered table-striped table-sm"><thead><tr><th>SL No</th><th>Notification</th><th>Document</th><th>Date</th></tr></thead><tbody>
                                        @forelse ($gos as $key => $go)
                                            @if($go->type_id == 2)
                                                <tr>
                                                <td>{{ $c++ }}</td>
                                                <td>{{ $go->go_notification_number }}</td>
                                                <td><a href="{{ public_path().'/storage/'.$go->go_doc }}" target="_blank">{{ $go->go_doc }}</a></td>
                                                <td>{{ $go->go_date }}</td>
                                                </tr>
                                            @endif
                                        @empty
                                            <tr><td colspan="4" class="text-center">No records found</td></tr>
                                        @endforelse
                                    </tbody></table>
                                </div>
                            </div>                                
                        </div>
                        <div id="co" class="tab-pane ">
                            <div class="row">
                                <div class="col-lg-12 table-responsive">
                                    @php $c = 1; @endphp
                                    <table id="dataTbl" class="table table-bordered table-striped table-sm"><thead><tr><th>SL No</th><th>Notification</th><th>Document</th><th>Date</th></tr></thead><tbody>
                                        @forelse ($gos as $key => $go)
                                            @if($go->type_id == 3)
                                                <tr>
                                                <td>{{ $c++ }}</td>
                                                <td>{{ $go->go_notification_number }}</td>
                                                <td><a href="{{ public_path().'/storage/'.$go->go_doc }}" target="_blank">{{ $go->go_doc }}</a></td>
                                                <td>{{ $go->go_date }}</td>
                                                </tr>
                                            @endif
                                        @empty
                                            <tr><td colspan="4" class="text-center">No records found</td></tr>
                                        @endforelse
                                    </tbody></table>
                                </div>
                            </div>                              
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection