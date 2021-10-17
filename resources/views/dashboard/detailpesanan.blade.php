@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class='mt-2'>Detail Pesanan Saya</h1>
    <h3>{{ $pesanan->tanggal }}</h3>
    <h4>Riwayat Pembelian</h4>
    <div class="row">
        <div class="col-md-12 mt-2">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
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
                        <td><a href="/profil/pesanan{{ $pesanan->id }}" class="badge bg-info">Detail</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection