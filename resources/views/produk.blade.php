@extends('layouts.main')

@section('container')
    <h1 class='mt-2'>Our Product</h1>
    <div class="row">
    @foreach($produks as $produk)
    <div class="col-md-4 mt-5">
        <div class="card">
            <img class="card-img-top" src="https://source.unsplash.com/500x400?/{{ $produk->nama_produk }}" alt="{{ $produk->nama_produk }}">
            <div class="card-body">
              <h5 class="card-title">{{ $produk->nama_produk }}</h5>
              <p class="card-text">
                  <strong>Harga : Rp{{ number_format($produk->harga) }}</strong><br>
                  <strong>Stok : {{ $produk->stok }}</strong>
              </p>
              <a href="#" class="btn btn-primary">Pesan</a>
            </div>
          </div>
    </div>
    @endforeach
    </div>
    
@endsection