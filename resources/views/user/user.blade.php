@extends('layout.base')

@section('content')
<!-- Dynamic Table Full -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Data User Welearn</h3>
    </div>
    <div class="block-content block-content-Dynamic Table Fullfull">
        <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Nama</th>
                    <th class="d-none d-sm-table-cell">Email</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Score</th>
                    <th class="text-center" style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=0; ?>
            @foreach($users as $key=>$user)
                <tr>
                    <td class="text-center">{{++$i}}</td>
                    <td class="font-w600">{{$user->name}}</td>
                    <td class="d-none d-sm-table-cell">{{$user->email}}</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">117</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="View User">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete User">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</div>
<!-- END Dynamic Table Full -->
@endsection

@section('js_tambahan')
<!-- tambah js disini -->
@endsection
