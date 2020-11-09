@extends('layouts.admin')
@section('user') active @endsection
@section('roles') active @endsection
@section('content')
<div class="page-title-area py-3">
    <div class="row align-items-center">
        <div class="col-sm-6">
            <div class="breadcrumbs-area clearfix">
                <h4 class="page-title pull-left">Roles</h4>

            </div>
        </div>
        <div class="col-sm-6 clearfix">
            <ul class="breadcrumbs pull-right">
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><span>Roles</span></li>
            </ul>
        </div>
    </div>
</div>
<!-- page title area end -->
<div class="main-content-inner">
    <div class="row">
        <!-- data table start -->
        <div class="col-12 mt-5">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title py-2">
                        Roles List
                        <a href="{{ route('roles.create') }}" class="btn btn-primary float-right fa fa-plus fa-3"></a>
                    </h4>
                    <div class="data-tables">
                        <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
                            <div class="row">
                                <div class="col-sm-12">
                                    <table id="dataTable" class="text-center dataTable no-footer dtr-inline" role="grid"
                                        aria-describedby="dataTable_info" >
                                        <thead class="bg-light text-capitalize">
                                            <tr role="row">
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                    rowspan="1" colspan="1" style="width: 112px;" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Sl
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                    rowspan="1" colspan="1" style="width: 112px;" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Name
                                                </th>
                                                <th class="sorting_asc" tabindex="0" aria-controls="dataTable"
                                                    rowspan="1" colspan="1" style="width: 112px;" aria-sort="ascending"
                                                    aria-label="Name: activate to sort column descending">Action
                                                </th>

                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($roles as $item)
                                            <tr role="row" class="odd">
                                                <td>{{ $loop->index+1 }}</td>
                                                <td>{{  $item->name }}</td>
                                                <td>Tokyo</td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- data table end -->

    </div>
</div>
@endsection

@section('style')
    <!-- Start datatable css -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">
@endsection

@section('script')
    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
@endsection
