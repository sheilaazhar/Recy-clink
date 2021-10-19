@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class='mt-2'><i class="bi bi-cart4"></i> Keranjang</h1>
    @if(session()->has('success'))
        <div class="alert alert-success col-lg-8" role="alert">
        {{ session('success') }}
        </div>
    @endif
    <div class="row">
        <div class="col-md-12">
            <a href="/produk" class="btn btn-primary"><i class="bi bi-arrow-left"></i> Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            @if(!empty($pesanan) && $pesanan->total_harga!=0)
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($pesanan_details as $pesanan_detail)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td><img src="https://source.unsplash.com/150x150?/{{ $pesanan_detail->produk->nama_produk }}" alt="{{ $pesanan_detail->produk->nama_produk }}"></td>
                        <td>{{ $pesanan_detail->produk->nama_produk }}</td>
                        <td>{{ $pesanan_detail->jumlah }} pcs</td>
                        <td align="left">Rp{{ number_format($pesanan_detail->produk->harga) }}</td>
                        <td align="left">Rp{{ number_format($pesanan_detail->jml_harga) }}</td>
                        <td>
                            <form action="/keranjang/{{ $pesanan_detail->id }}" method="POST" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash" onclick="return confirm('Apakah Anda yakin ingin menghapusnya?')"></i></button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td colspan="4" align="right"><strong>Total Harga : <strong></td>
                        <td>Rp{{ number_format($pesanan->total_harga) }}</td>
                        <td>
                            <a href="/checkout" class="btn btn-success" onclick="return confirm('Apakah Anda yakin ingin checkout?')">
                                <i class="bi bi-cart4"></i> Checkout
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
            @else
                <h5>Keranjang Anda Kosong</h5>
            @endif
        </div>
    </div>
</div>
@endsection