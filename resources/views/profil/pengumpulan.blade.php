@extends('layouts.main')

@section('container')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success col-lg-12" role="alert">
        {{ session('success') }}
        </div>
    @endif
    <h1 class='mt-3 mb-4 text-center'>Riwayat Pengumpulan</h1>
    <div class="col-md-12 mt-2">
    </div>

    <div class="col-md-12 mt-2 justify-content-md-end">
        <a href="/profil"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>

    @foreach($ambilsampahs as $ambilsampah)
    <div class="card card-pengumpulan mb-2 mt-3">
        <h5 class="card-header">
            @if($ambilsampah->status == 'Disetujui')
            <small class="text-success">Permintaan {{ $ambilsampah->status }}.</small>
            @elseif ($ambilsampah->status == 'Ditolak')
            <small class="text-danger">Permintaan {{ $ambilsampah->status }}.</small>
            @elseif ($ambilsampah->status == 'Menunggu konfirmasi')
            <small>Permintaan {{ $ambilsampah->status }}.</small>
            @endif
        </h5>
        <div class="card-body">
          <p class="card-title text-muted">Jenis Barang: </p>
          <h5 class="card-text">{{ $ambilsampah->jenis_sampah }} , {{ $ambilsampah->berat }} kilogram</h5>
          <p class="card-text"><i class="bi bi-geo-alt me-2"></i>{{ $ambilsampah->address }} , Kecamatan {{ $ambilsampah->kecamatan->nama_kecamatan }}</p>
          <small>{{ $ambilsampah->tanggal }}</small>
        </div>
    </div>
    @endforeach

</div>

@endsection