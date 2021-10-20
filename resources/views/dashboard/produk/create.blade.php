@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Tambah Produk Baru</h1>
  </div>
  <div class="col-lg-8">
      <form method="post" action="/dashboard/produk" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <label for="nama_produk" class="form-label">Nama produk</label>
          <input type="text" class="form-control @error('nama_produk') is-invalid @enderror" id="nama_produk" name="nama_produk" required autofocus value="{{ old('nama_produk') }}">
          @error('nama_produk')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="bahan" class="form-label">Bahan</label>
          <input type="text" class="form-control @error('bahan') is-invalid @enderror" id="bahan" name="bahan" required value="{{ old('bahan') }}">
          @error('bahan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" class="form-control @error('harga') is-invalid @enderror" id="harga" name="harga" required value="{{ old('harga') }}">
          @error('harga')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="stok" class="form-label">Stok</label>
          <input type="text" class="form-control @error('stok') is-invalid @enderror" id="stok" name="stok" required value="{{ old('stok') }}">
          @error('stok')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <label for="image" class="form-label">Gambar Produk</label>
          <img class="img-preview img-fluid mb-3 col-sm-5">
          <input class="form-control @error('image') is-invalid @enderror" type="file" id="image" name="image" onchange="previewImage()">
          @error('image')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <button type="submit" class="btn btn-primary">Tambah Produk</button>
      </form>
  </div>

  <script>
      document.addEventListener('trix-file-accept', function(e){
          e.preventDefault();
      })

      function previewImage(){
        const image = document.querySelector('#image');
        const imgPreview = document.querySelector('.img-preview');

        imgPreview.style.display = 'block';

        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(OFREvent){
          imgPreview.src = OFREvent.target.result;
        }
      }

  </script>
@endsection