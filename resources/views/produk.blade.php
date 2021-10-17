@extends('layouts.main')

@section('container')
    <div class="home-produk">
      <img src="../img/homeproduk2.png" class="img-fluid" alt="">
    </div>

    
    
    <div class="list-produk bg-trasparent my-4 px-3">
      <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
      @foreach($produks as $produk)
      <div class="col-md-3 mt-5">
          <div class="card shadow-sm">
              <img class="card-img-top img-fluid pt-3 px-4" src="https://source.unsplash.com/500x400?/{{ $produk->nama_produk }}" alt="{{ $produk->nama_produk }}">
              <div class="card-body">
                <small class="text-muted mb-1">Stok : {{ $produk->stok }}</small>
                <h5 class="card-title text-center">{{ $produk->nama_produk }}</h5>
                <div class="card-text text-center">
                    <p class="text-muted text-center">Bahan</p>
                    <h5 class="text-center"><b>Rp{{ number_format($produk->harga) }}</b></h5>
                </div>
                <div class="text-center">
                  <form action="/pesan/{{ $produk->id }}" method="post">
                  @csrf
                  <a type="submit" class="btn btn-success center mt-1 mb-1" >Pesan</a>
                  </form>
                </div>
              </div>
          </div>
      </div>
      @endforeach
      </div>
    </div>
@endsection