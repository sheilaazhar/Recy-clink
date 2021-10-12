@extends('layouts.main')

@section('container')
    <div class="landing">
        <div class="container">
            <div class="row">
                <div class="col-4 ms-3">
                    <h1>Cara Mudah Buang Barang Bekasmu Tanpa Merusak Lingkungan</h1>
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/login" class="btn btn-success {{ ($active === "sampah") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fitur">
        <div class="container mt-5">
            <h2>Fitur - fitur</h2>
        </div>
    </div>
@endsection
    