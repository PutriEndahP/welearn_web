@extends('layout.base')

@section('css_tambahan')
@endsection

@section('content')
<div class="row gutters-tiny invisible" data-toggle="appear">
    <!-- Row #4 -->
    <div class="col-md-4">
        <div class="block block-transparent bg-default">
            <div class="block-content block-content-full">
                <div class="py-100 text-center">
                    <div class="mb-20">
                        <i class="fa fa-users fa-4x text-default-light"></i>
                    </div>
                    <div class="font-size-h2 font-w700 text-white">{{$count}}</div>
                    <div class="text-white-op">Jumlah user welearn</div>
                    <div class="pt-20">
                        <a class="btn btn-rounded btn-alt-primary" href="javascript:void(0)">
                            <i></i> See details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="block block-transparent bg-success">
            <div class="block-content block-content-full">
                <div class="py-100 text-center">
                    <div class="mb-20">
                        <i class="fa fa-trophy fa-4x text-success-light"></i>
                    </div>
                    <div class="font-size-h2 font-w700 text-white">117</div>
                    <div class=" text-white-op">Score tertinggi soal huruf</div>
                    <div class="pt-20">
                        <a class="btn btn-rounded btn-alt-success" href="javascript:void(0)">
                            <i></i> See details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="block block-transparent bg-info">
            <div class="block-content block-content-full">
                <div class="py-100 text-center">
                    <div class="mb-20">
                        <i class="fa fa-trophy fa-4x text-success-light"></i>
                    </div>
                    <div class="font-size-h2 font-w700 text-white">117</div>
                    <div class="text-white-op">Score tertinggi soal angka</div>
                    <div class="pt-20">
                        <a class="btn btn-rounded btn-alt-info" href="javascript:void(0)">
                            <i class="fa fa-users mr-5"></i> See details
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END Row #4 -->
</div>
@endsection

@section('js_tambahan')
    {{-- tulis di sini --}}
@endsection