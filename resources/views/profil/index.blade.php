@extends('layouts.main')

@section('container')
<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
        </div>
    @endif
    <div class="row profile">
        <div class="col-md-3 mt-3">
            <img src="./img/userwanita.png" height="200" class="user-center">
        </div>
        <div class="col-md-7 mt-5">
            <h1 class="name">{{ $user->name  }} </h1>
            <h4 class="username">{{ $user->username }}</h4>
            <h4><img src="./img/tempat.png" height="50">{{ $user->kecamatan->nama_kecamatan }}</h4>
        </div>
        <div class="col-md-2 mt-5">
            <a href="/profil/edit" class="btn btn-success">Edit Profil</a>
        </div>
    </div>
    
    <div class="pembelian">
        <h4>Riwayat Pembelian Produk <img src="./img/garis.png" class="garis"></h4>
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
                <h3>ANDA BELUM PERNAH MEMBELI PRODUK RECY-CLINK!</h3>
                @endif
                <small class="d-block text-center mt-3"><a href="/produk">Beli produk RECY-CLINK! sekarang >>></a></small>
            </div>
        </div>
    </div>
</div>

@endsection