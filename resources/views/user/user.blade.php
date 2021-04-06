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
                <tr>
                    <td class="text-center">1</td>
                    <td class="font-w600">Evania Harahap</td>
                    <td class="d-none d-sm-table-cell">liliharahap@gmail.com</td>
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
                <tr>
                    <td class="text-center">2</td>
                    <td class="font-w600">Glen Putra Baihaqi</td>
                    <td class="d-none d-sm-table-cell">sasmitap@gmail.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">110</span>
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
                <tr>
                    <td class="text-center">3</td>
                    <td class="font-w600">Dina Zainina</td>
                    <td class="d-none d-sm-table-cell">rayahu@gmail.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">90</span>
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
                <tr>
                    <td class="text-center">4</td>
                    <td class="font-w600">Putra Mahardika</td>
                    <td class="d-none d-sm-table-cell">siskapr@gmail.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">78</span>
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
                <tr>
                    <td class="text-center">5</td>
                    <td class="font-w600">Emanuel Candra</td>
                    <td class="d-none d-sm-table-cell">indahsekar@gmail.com</td>
                    <td class="d-none d-sm-table-cell">
                        <span class="badge badge-primary">50</span>
                    </td>
                    <td class="text-center">
                        <button type="button" class="btn btn-sm btn-success" data-toggle="tooltip" title="View User">
                            <i class="fa fa-file-o"></i>
                        </button>
                        <button type="button" class="btn btn-sm btn-danger" data-toggle="tooltip" title="Delete User">
                            <i class="fa fa-trash"></i>
                        </button>
                </tr>
            </tbody>
        </table>
    </div>
</div>
<!-- END Dynamic Table Full -->
@endsection

@section('js_tambahan')
<!-- tambah js disini -->
@endsection
