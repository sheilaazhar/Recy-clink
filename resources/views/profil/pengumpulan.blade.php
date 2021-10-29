@extends('layouts.main')

@section('container')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
        </div>
    @endif
    <h1 class='mt-3 mb-4'>Riwayat Pengumpulan</h1>
    <div class="col-md-12 mt-2">
    </div>
    <div class="table-responsive col-lg-3">
      </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table class="table table-border">
                <tbody>
                    @foreach($ambilsampahs as $ambilsampah)
                    <tr>
                        <td>{{ $ambilsampah->tanggal }}</td>
                        <td>{{ $ambilsampah->jenis_sampah }}</td>
                        <td>{{ $ambilsampah->berat }} kg</td>
                        <td>{{ $ambilsampah->kecamatan->nama_kecamatan }}</td>
                        <td>{{ $ambilsampah->address }}</td>
                        <td>{{ $ambilsampah->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 mt-3 justify-content-md-end">
        <a href="/profil"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
</div>

@endsection