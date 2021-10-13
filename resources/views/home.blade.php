@extends('layouts.main')

@section('container')
    <div class="landing img-fluid">
        <div class="container">
            <div class="row">
                <div class="col-4 ms-3">
                    <h1>Cara Mudah Buang Barang Bekasmu Tanpa Merusak Lingkungan</h1>
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/login" class="btn btn-success {{ ($active === "sampah") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="fitur">
        <div class="container mt-5">
            <h2>Fitur - fitur</h2>
            <div class="card-deck mt-5 mb-5">
                <div class="card border-success">
                  <img class="card-img-top" src="./img/cardsampah.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Pengumpulan Barang Bekas</h5>
                    <p class="card-text text-muted">Kumpulkan barang bekasmu dan dapatkan merchandise menarik kami</p>
                    @auth
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/sampah" class="btn btn-success {{ ($active === "sampah") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                    @else
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/login" class="btn btn-success {{ ($active === "login") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                    @endauth
                  </div>
                </div>
                <div class="card border-success">
                  <img class="card-img-top" src="./img/cardproduk.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Penjualan Produk Hasil Daur Ulang</h5>
                    <p class="card-text text-muted">Beli produk hasil daur ulang yang kamu butuhkan dengan harga murah</p>
                    @auth
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/produk" class="btn btn-success {{ ($active === "produk") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                    @else
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/login" class="btn btn-success {{ ($active === "login") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                    @endauth
                  </div>
                </div>
                <div class="card border-success">
                  <img class="card-img-top" src="./img/cardartikel.png" alt="Card image cap">
                  <div class="card-body">
                    <h5 class="card-title">Artikel Pengelolaan Barang Bekas</h5>
                    <p class="card-text text-muted">Baca artikel seputar pengelolaan barang bekas dan kebersihan Kota Bandung</p>
                    @auth
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/posts" class="btn btn-success {{ ($active === "posts") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                    @else
                    <div class="button-mulai ms-auto mt-4">
                        <a href="/login" class="btn btn-success {{ ($active === "login") ? 'active' : '' }}"> Mulai! </a>
                    </div>
                    @endauth
                  </div>
                </div>
              </div>
        </div>
    </div>
@endsection
    