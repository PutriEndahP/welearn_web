@extends('layout.base')

@section('content')
<!-- Dynamic Table Full -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Data Soal Huruf Angka</h3>
    </div>
    <div class="block-content block-content-Dynamic Table Fullfull">
        <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
        <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
            <thead>
                <tr>
                    <th class="text-center"></th>
                    <th>Soal</th>
                    <th class="d-none d-sm-table-cell">Keterangan</th>
                    <th class="d-none d-sm-table-cell" style="width: 15%;">Level</th>
                    <th class="text-center" style="width: 15%;">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="text-center">1</td>
                    <td class="font-w600">1</td>
                    <td class="d-none d-sm-table-cell">Tuliskan angka satu</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-danger">Level 1</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View Soal">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit Soal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Soal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">2</td>
                    <td class="font-w600">12</td>
                    <td class="d-none d-sm-table-cell">Tuliskan angka dua belas</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-danger">Level 1</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View Soal">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit Soal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Soal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">3</td>
                    <td class="font-w600">3 + 2</td>
                    <td class="d-none d-sm-table-cell">Tuliskan hasil penjumlahan di bawah ini</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-warning">Level 2</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View Soal">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit Soal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Soal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">4</td>
                    <td class="font-w600">12 - 8</td>
                    <td class="d-none d-sm-table-cell">Tuliskan hasil penjumlahan di bawah ini</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-info">Level 3</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View Soal">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit Soal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Soal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
                <tr>
                    <td class="text-center">5</td>
                    <td class="font-w600">18 + 5</td>
                    <td class="d-none d-sm-table-cell">Tuliskan hasil penjumlahan di bawah ini</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-success">Level 4</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-primary" data-toggle="tooltip" title="View Soal">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="Edit Soal">
                            <i class="fa fa-edit"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete Soal">
                            <i class="fa fa-trash"></i>
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table Full -->
@endsection

@section('js_tambahan')
<link rel="stylesheet" href="{{asset('js/dataTables.bootstrap4.css')}}">
@endsection