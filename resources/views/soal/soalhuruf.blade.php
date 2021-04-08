@extends('layout.base')

@section('content')
<!-- Dynamic Table Full -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Data Soal Huruf Abjad</h3>
    </div>
    <div class="container">
        <button type="button" class="btn btn-warning">Tambah Soal</button>
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
                    <td class="font-w600">B</td>
                    <td class="d-none d-sm-table-cell">Tuliskan huruf B</td>
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
                    <td class="font-w600">G</td>
                    <td class="d-none d-sm-table-cell">Tuliskan huruf G</td>
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
                    <td class="font-w600">IBU</td>
                    <td class="d-none d-sm-table-cell">Tuliskan huruf I B U</td>
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
                    <td class="font-w600">BUKU</td>
                    <td class="d-none d-sm-table-cell">Tuliskan huruf B U K U</td>
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
                    <td class="font-w600">AKU MAKAN</td>
                    <td class="d-none d-sm-table-cell">Tuliskan huruf A K U M A K A N</td>
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