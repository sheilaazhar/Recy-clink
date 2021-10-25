@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Detail Permintaan #{{ $pesanan->id }}</h1>
  </div>

<div class="table-responsive col-lg-3">
  <table class="table table-borderless">
  <tbody>
    <tr>
        <td><strong>Tanggal Pesan</strong></td> 
        <td>: {{ $pesanan->tanggal }}</td>
    </tr>
    <tr>
        <td><strong>Nama Pemesan</strong></td> 
        <td>: {{ $pesanan->user->name }}</td>
    </tr>
    <tr>
        <td><strong>Username</strong></td>
        <td>: {{ $pesanan->user->username }}</td>
    </tr>
    <tr>
        <td><strong>No.Hp</strong></td> 
        <td>: {{ $pesanan->user->phone }}</td>
    </tr>
    <tr>
        <td><strong>Kecamatan</strong></td>
        <Td>: {{ $pesanan->user->kecamatan->nama_kecamatan }}</td>
    </tr>
    <tr>
        <td><strong>Alamat</strong></td>
        <td>: {{ $pesanan->user->address }}</td>
    </tr>
    <tr>
        <td><strong>Status</strong></td>
        <td>: {{ $pesanan->status_kirim }}</td>
    </tr>
  </tbody>
  </table>
</div>

  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Jumlah</th>
          <th scope="col">Harga</th>
          <th scope="col">Total Harga</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($pesanandetails as $pesanandetail)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{ asset('storage/' . $pesanandetail->produk->image) }}" alt="{{ $pesanandetail->produk->nama_produk }}" width="200" height="200"></td>
          <td>{{ $pesanandetail->produk->nama_produk }}</td>
          <td>{{ $pesanandetail->jumlah }} pcs</td>
          <td align="left">Rp{{ number_format($pesanandetail->produk->harga) }}</td>
          <td align="left">Rp{{ number_format($pesanandetail->jml_harga) }}</td>
        </tr>
        @endforeach
        <tr>
            <td></td>
            <td colspan="4" align="right"><strong>Total Harga : <strong></td>
            <td><strong>Rp{{ number_format($pesanan->total_harga) }}</strong></td>
        </tr>
      </tbody>
    </table>
    <a href="/dashboard/pesanan" class="btn btn-success mb-5"><span data-feather="arrow-left"></span> Kembali</a>
  </div>
@endsection