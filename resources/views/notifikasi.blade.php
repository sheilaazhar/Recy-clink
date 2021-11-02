@extends('layouts.main')

@section('container')
<div class="container mt-3">
    <h1>Notifikasi</h1> 
    @forelse($notifications as $notification)
    @if ($notification->data['status'] == "Disetujui")
        <div class="alert alert-success" role="alert">
            Permintaan Pengumpulan Barang Bekas {{ $notification->data['status'] }} <br>
            Pihak kami akan segera menghubungi nomor telepon Anda untuk mengambil barang bekas {{ $notification->data['jenis_sampah'] }} {{ $notification->data['berat'] }}kg di alamat {{ $notification->data['address'] }} {{ $notification->data['kecamatan'] }}. <br>
            [{{ $notification->created_at }}] 
            <a href="/mark-as-read/{{ $notification->id }}" class="float-right" data-id="{{ $notification->id }}">
                Tandai sudah dibaca
            </a>
        </div>
    @elseif ($notification->data['status'] == "Ditolak")
        <div class="alert alert-success" role="alert">
            Permintaan Pengumpulan Barang Bekas {{ $notification->data['status'] }} <br>
            Mohon maaf, permintaan pengumpulan barang bekas {{ $notification->data['jenis_sampah'] }} {{ $notification->data['berat'] }}kg Anda di alamat {{ $notification->data['address'] }} {{ $notification->data['kecamatan'] }} {{ $notification->data['status'] }} karena .... <br>
            [{{ $notification->created_at }}] 
            <a href="/mark-as-read/{{ $notification->id }}" class="float-right" data-id="{{ $notification->id }}">
                Tandai sudah dibaca
            </a>
        </div>
    @else
        <div class="alert alert-success" role="alert">
            Pesanan Anda {{ $notification->data['status'] }} <br>
            Pesanan yang Anda buat pada {{ $notification->data['tanggal'] }} dengan jumlah {{ $notification->data['total_produk'] }} produk dan total harga Rp{{ number_format($notification->data['total_harga']) }} Sudah dikirim ke alamat Anda. <br>
            [{{ $notification->created_at }}] 
            <a href="/mark-as-read/{{ $notification->id }}" class="float-right" data-id="{{ $notification->id }}">
                Tandai sudah dibaca
            </a>
        </div>
    @endif
    @empty
        Tidak ada Notifikasi Terbaru
    @endforelse
</div>

@endsection