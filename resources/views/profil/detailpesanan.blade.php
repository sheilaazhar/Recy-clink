@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class='mt-3 mb-4'>Detail Pesanan Saya</h1>
    <div class="col-md-12 mt-2">
    <div class="card-body" style="background-color: #FFC0C0">
        <h6>Pesanan Anda berhasil di checkout pada <strong>{{ $pesanan->tanggal }}</strong>. Silakan tunggu sesaat lagi pihak kami akan menghubungi Anda melalui nomor telepon.</h6>
    </div>
    </div>
    <div class="row">
        <div class="col-md-12 mt-4">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($pesanandetails as $pesanandetail)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ asset('storage/' . $pesanandetail->produk->image) }}" alt="{{ $pesanandetail->produk->nama_produk }}"></td>
                        <td>{{ $pesanandetail->produk->nama_produk }}</td>
                        <td>{{ $pesanandetail->jumlah }} pcs</td>
                        <td align="left">Rp{{ number_format($pesanandetail->produk->harga) }}</td>
                        <td align="left">Rp{{ number_format($pesanandetail->jml_harga) }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td colspan="4" align="right"><strong>Total Harga : <strong></td>
                        <td>Rp{{ number_format($pesanan->total_harga) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 mt-3 justify-content-md-end">
        <a href="/produk"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
</div>

@endsection