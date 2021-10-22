@extends('layouts.main')

@section('container')

<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success col-lg-12 mt-1" role="alert">
        {{ session('success') }}
        </div>
    @endif

    <h1 class='mt-4 mb-4'><i class="bi bi-cart4"></i> Keranjang</h1>
    
    <div class="row">
        <div class="col-md-12 mt-2">
            @if(!empty($pesanan) && $pesanan->total_harga!=0)
            <table class="table table-striped text-center">
                <thead>
                    <tr>
                        <th></th>
                        <th>No</th>
                        <th>Gambar</th>
                        <th>Nama Produk</th>
                        <th>Jumlah</th>
                        <th>Harga</th>
                        <th>Total Harga</th>
                    </tr>
                </thead>
                <tbody class="text-center">
                    <?php $no = 1; ?>
                    @foreach($pesanan_details as $pesanan_detail)
                    <tr>
                        <td>
                            <form action="/keranjang/{{ $pesanan_detail->id }}" method="POST" class="d-inline">
                                @csrf
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger btn-sm"><i class="bi bi-trash" onclick="return confirm('Apakah Anda yakin ingin menghapusnya?')"></i></button>
                            </form>
                        </td>
                        <td>{{ $no++ }}</td>
                        <td><img src="{{ asset('storage/' . $pesanan_detail->produk->image) }}" alt="{{ $pesanan_detail->produk->nama_produk }}" width="200" height="200"></td>
                        <td>{{ $pesanan_detail->produk->nama_produk }}</td>
                        <td>{{ $pesanan_detail->jumlah }} pcs</td>
                        <td>Rp{{ number_format($pesanan_detail->produk->harga) }}</td>
                        <td>Rp{{ number_format($pesanan_detail->jml_harga) }}</td>
                    </tr>
                    @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td colspan="4" align="right"><strong>Total Harga : <strong></td>
                        <td>Rp{{ number_format($pesanan->total_harga) }}</td>
                    </tr>
                </tbody>
            </table>
            <div class="d-grid gap-2 d-md-flex justify-content-md-end" onclick="return confirm('Apakah Anda yakin ingin checkout?')">
                <a href="/checkout" class="btn btn-success" type="button"><i class="bi bi-cart4"></i> Checkout</a>
            </div>
            @else
                <h3 class="text-center mt-5">KERANJANG ANDA KOSONG</h3>
            @endif
        </div>
    </div>
    <div class="col-md-12 mt-3 justify-content-md-end">
        <a href="/produk"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
</div>
@endsection