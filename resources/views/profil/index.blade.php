@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class='mt-2'>Profil Saya</h1>

    @if(session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
        </div>
    @endif
    
    <h3>{{ $user->name  }}</h3>
    <h4>{{ $user->username }}</h4>
    <h4>{{ $user->kecamatan->nama_kecamatan }}</h4>
    <h4>{{ $user->address }}</h4>
    <h4>{{ $user->phone }}</h4>
    <a href="/profil/edit" class="btn btn-success">Edit Profil</a>
    <h4>Riwayat Pembelian</h4>
    <div class="row">
        <div class="col-md-12 mt-2">
            @if ($pesanans->count())
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Tanggal Pesan</th>
                        <th>Total Produk</th>
                        <th>Total Harga</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($pesanans as $pesanan)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $pesanan->tanggal }}</td>
                        <td>{{ $pesanan->total_produk }} pcs</td>
                        <td align="left">Rp{{ number_format($pesanan->total_harga) }}</td>
                        <td></td>
                        <td><a href="/profil/pesanan/{{ $pesanan->id }}" class="badge bg-info">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            @else
            <h5>Anda belum melakukan pembelian</h5>
            @endif
        </div>
    </div>
</div>

@endsection