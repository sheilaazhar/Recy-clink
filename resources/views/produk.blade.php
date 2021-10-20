@extends('layouts.main')

@section('container')
    <div class="home-produk">
      <img src="../img/homeproduk2.png" class="img-fluid" alt="">
    </div>
    @if ($produks->count())
    <div class="list-produk bg-trasparent my-4 px-3">
      <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">
      @foreach($produks as $produk)
      <div class="col-md-3 mt-5">
          <div class="card shadow-sm">
              <img class="card-img-top img-fluid pt-3 px-4" src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->nama_produk }}">
              <div class="card-body">
                <small class="text-muted mb-1">Stok : {{ $produk->stok }}</small>
                <h5 class="card-title text-center">{{ $produk->nama_produk }}</h5>
                <div class="card-text text-center">
                    <p class="text-muted text-center">Bahan : {{ $produk->bahan }}</p>
                    <h5 class="text-center"><b>Rp{{ number_format($produk->harga) }}</b></h5>
                </div>
                <div class="text-center">
                  <form action="/pesan/{{ $produk->id }}" method="post">
                  @csrf
                  <div class="form-floating">
                    <input type="number" name="jumlah" class="form-control" id="jumlah" placeholder="jumlah pesan" required>
                    <label for="jumlah">Jumlah Pesanan</label>
                  </div>
                  <button type="submit" class="btn btn-success center mt-1 mb-1">Pesan</button>
                  </form>
                </div>
              </div>
          </div>
      </div>
      @endforeach
      </div>
    </div>
    @else
    <p class="text-center">Produk kosong.</p>
    @endif

    <div class="d-flex justify-content-center mt-2">
      {{ $produks->links() }}
    </div>
@endsection