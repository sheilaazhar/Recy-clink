@extends('layouts.main')

@section('container')
<div class="container mt-5">
    <h1 ><img src="./img/bel.png" height="50"> Notifikasi</h1> 
    @forelse($notifications as $notification)
    @if ($notification->data['status'] == "Disetujui")
        <div class="alert notifikasi " role="alert">
            Permintaan Pengumpulan Barang Bekas {{ $notification->data['status'] }} <br>
            Pihak kami akan segera menghubungi nomor telepon Anda untuk mengambil barang bekas {{ $notification->data['jenis_sampah'] }} {{ $notification->data['berat'] }}kg di alamat {{ $notification->data['address'] }} {{ $notification->data['kecamatan'] }}. <br>
            [{{ $notification->created_at }}] 
            <a href="/mark-as-read/{{ $notification->id }}" class="float-right" data-id="{{ $notification->id }}">
            <img src="./img/silang.png" >
            </a>
        </div>
    @elseif ($notification->data['status'] == "Ditolak")
        <div class="alert notifikasi " role="alert">
            Permintaan Pengumpulan Barang Bekas {{ $notification->data['status'] }} <br>
            Mohon maaf, permintaan pengumpulan barang bekas {{ $notification->data['jenis_sampah'] }} {{ $notification->data['berat'] }}kg Anda di alamat {{ $notification->data['address'] }}, Kecamatan {{ $notification->data['kecamatan'] }} {{ $notification->data['status'] }}. Pastikan nomor telepon, alamat, dan berat barang benar sesuai ketentuan. <br>
            [{{ $notification->created_at }}] 
            <a href="/mark-as-read/{{ $notification->id }}" class="float-right" data-id="{{ $notification->id }}">
                <img src="./img/silang.png" >
            </a>
        </div>
    @else
        <div class="alert notifikasi " role="alert">
            Pesanan Anda {{ $notification->data['status'] }} <br>
            Pesanan yang Anda buat pada {{ $notification->data['tanggal'] }} dengan jumlah {{ $notification->data['total_produk'] }} produk dan total harga Rp{{ number_format($notification->data['total_harga']) }} Sudah dikirim ke alamat Anda. <br>
            [{{ $notification->created_at }}] 
            <a href="/mark-as-read/{{ $notification->id }}" class="float-right" data-id="{{ $notification->id }}">
            <img src="./img/silang.png" >
            </a>
        </div>
    @endif
    @empty
        Tidak ada Notifikasi Terbaru
    @endforelse
</div>

@endsection