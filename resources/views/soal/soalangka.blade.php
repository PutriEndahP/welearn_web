@extends('layout.base')

@section('content')
<!-- Dynamic Table Full -->
<div class="block">
    <div class="block-header block-header-default">
        <h3 class="block-title">Data Soal Angka</h3>
    </div>
    <div class="block-content block-content-Dynamic Table Fullfull">
        <!-- DataTables functionality is initialized with .js-dataTable-full class in js/pages/be_tables_datatables.min.js which was auto compiled from _es6/pages/be_tables_datatables.js -->
        <a href="javascript:void(0)" disabled class="btn btn-sm btn-warning mb-3" data-toggle="modal" data-target="#modal-top1"><i class="fa fa-plus mr-2"></i>Tambah Soal Angka</a>
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

<!-- Start Modal -->
<div class="modal fade" id="modal-top1" tabindex="-1" role="dialog" aria-labelledby="modal-top1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-top" role="document">
    <form method="POST" action="{{ url('register')}}" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="modal-content">
            <div class="block block-themed block-transparent mb-0">
                <div class="block-header bg-primary-dark">
                    <h3 class="block-title">Tambah Soal Angka</h3>
                    <div class="block-options">
                        <button type="button" class="btn-block-option" data-dismiss="modal" aria-label="Close">
                            <i class="si si-close"></i>
                        </button>
                    </div>
                </div>
                <div class="block-content">
                    <!-- <div class="form-group row">
                        <label class="col-12" for="name">Jenis Soal</label>
                        <div class="col-md-12">
                            <select class="form-control" name="hak_akses">
                                <option value="Huruf">Huruf</option>
                                <option value="Angka">Angka</option>
                            </select>
                        </div>
                    </div> -->
                    <div class="form-group row">
                        <label class="col-12" for="name">Jenis Soal</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="jawaban" name="jawaban" placeholder="Soal Angka" disabled=""> 
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="name">Level</label>
                        <div class="col-md-12">
                            <select class="form-control" name="hak_akses">
                                <option value="1">Level 1</option>
                                <option value="2">Level 2</option>
                                <option value="3">Level 3</option>
                                <option value="4">Level 4</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="name">Isi Soal</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="2" placeholder="Isi Soal.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="name">Keterangan</label>
                        <div class="col-md-12">
                            <textarea class="form-control" id="example-textarea-input" name="example-textarea-input" rows="2" placeholder="Keterangan.."></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-12" for="name">Jawaban</label>
                        <div class="col-md-12">
                            <input type="text" class="form-control" id="name" name="nama" placeholder="Jawaban .." required> 
                        </div>
                    </div>
                </div>   
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-alt-secondary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-alt-success">
                    <i class="fa fa-check"></i> Submit
                </button>
            </div>
        </div>
    </form>
    </div>
</div>
<!-- End Modal -->
@endsection

@section('js_tambahan')
<link rel="stylesheet" href="{{asset('js/dataTables.bootstrap4.css')}}">
@endsection