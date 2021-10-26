@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Welcome back, {{ auth()->user()->name }}</h1>
  </div>
  <p>Jumlah User : {{ $userCount }}</p>
  <p>Total Permintaan : {{ $kumpulCount }}</p>
  <p>Total Permintaan Disetuju : {{ $setujuCount }}</p>
  <p>Total Permintaan Ditolak : {{ $tolakCount }}</p>
  <p>Total Permintaan Menunggu Konfirmasi : {{ $menungguCount }}</p>
  <p>Total Berat Sampah Terkumpul : {{ $beratCount }} kg</p>
  <p>Total Penjualan : {{ $jualCount }}</p>
  <p>Total Produk Terjual : {{ $jualprodukCount }}</p>
  <p>Hasil Penjualan : Rp{{ number_format($priceCount) }}</p>
  <p>Total Penjualan yang Harus Dikirim : {{ $tunggukirimCount }}</p>
@endsection