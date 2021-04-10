@extends('layout.base')

@section('content')
<div class="col-md-12">
    <!-- Normal Form -->
    <div class="block">
        <div class="block-header bg-gd-lake">
            <h3 class="block-title" style="color : white">Edit Soal Huruf</h3>
        </div>
        <div class="block-content">
            <form action="" method="" id="form">
                {{ csrf_field() }}
                
                <div class="form-group">
                    <label for="example-nf-email">Jenis Soal</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" name="nama" placeholder="Nama .." value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Level</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="email" class="form-control" name="email" placeholder="Email .." value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Isi Soal</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" name="no_telp" placeholder="No Telepon .." value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Keterangan</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" name="no_telp" placeholder="No Telepon .." value="">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Jawaban</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" name="no_telp" placeholder="No Telepon .." value="">
                    </div>
                </div>
                
                <div class="form-group">
                    <a href=""><button type="button" class="btn btn-alt-secondary">Cancel</button></a>
                    <button type="submit" class="btn btn-alt-success" id="sweet">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection