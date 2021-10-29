@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class='mt-5 mb-4'>Detail Pesanan Saya</h1>
    <div class="col-md-12 mt-2">
    <div class="card-body" style="background-color: #FFC0C0">
        @if($pesanan->status_kirim == "Menunggu dikirim")
        <h6>Pesanan Anda berhasil di checkout pada <strong>{{ $pesanan->tanggal }}</strong>. Silakan tunggu sesaat lagi pihak kami akan menghubungi Anda melalui nomor telepon.</h6>
        @else
        <h6>Pesanan Anda telah selesai, produk sudah dikirim.</h6>
        @endif
    </div>
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
        </tbody>
        </table>
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
                        <td>Rp{{ number_format($pesanan->total_harga) }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="col-md-12 mt-3 justify-content-md-end">
        <a href="#" onclick="history.back();"><i class="bi bi-arrow-left"></i> Kembali</a>
    </div>
</div>

@endsection