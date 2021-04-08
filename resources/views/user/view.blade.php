@extends('layout.base')

@section('content')
<div class="col-md-12">
    <!-- Normal Form -->
    <div class="block">
        <div class="block-header bg-gd-lake">
            <h3 class="block-title" style="color : white">View Detail User</h3>
        </div>
        <div class="block-content">
            <form action="be_forms_elements_bootstrap.html" method="post" onsubmit="return false;">
                <div class="form-group">
                    <label for="example-nf-email">Nama</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="Tiara Andini">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Username</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="tiaraan">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Email</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="081256781238">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Tanggal Lahir</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="20 Juli 1999">
                    </div>
                </div>
                <div class="form-group">
                    <label for="example-nf-email">Jenis Kelamin</label>
                    <div class="col-md-9" style="padding: 0px">
                        <input type="text" class="form-control" id="example-nf-email" name="example-nf-email" placeholder="Perempuan">
                    </div>
                </div>
                <div class="form-group">
                    <a href="{{url('user')}}"><button type="button" class="btn btn-alt-primary">Back</button></a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection