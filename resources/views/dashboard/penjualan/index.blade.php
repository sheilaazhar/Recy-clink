@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Penjualan Produk Recy-clink!</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">Tanggal Pesan</th>
          <th scope="col">Total Produk</th>
          <th scope="col">Total Harga</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pesanans as $pesanan)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $pesanan->user->username }}</td>
          <td>{{ $pesanan->tanggal }}</td>
          <td>{{ $pesanan->total_produk }} pcs</td>
          <td>Rp{{ number_format($pesanan->total_harga) }}</td>
          <td>
            @if($pesanan->status_kirim == 'Menunggu dikirim')
            <a href="/dashboard/pesanan/{{ $pesanan->id }}/update" class="badge bg-primary" onclick="return confirm('Apakah Anda yakin pesanan sudah dikirim?')"><span data-feather="truck"></span> Kirim</a>
            @else
            <span class="badge bg-success">{{ $pesanan->status_kirim }}</span>
            @endif
          </td>
          <td>
            <a href="/dashboard/pesanan/{{ $pesanan->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection