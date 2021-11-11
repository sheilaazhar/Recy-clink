@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Produk Recy-clink!</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-8">
    <a href="/dashboard/produk/create" class="btn btn-primary mb-3">Tambah Produk Baru</a>
    <table class="table table-striped table-sm" id="table_id">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Gambar</th>
          <th scope="col">Nama Produk</th>
          <th scope="col">Bahan</th>
          <th scope="col">Harga</th>
          <th scope="col">Stok</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($produks as $produk)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td><img src="{{ asset('storage/' . $produk->image) }}" alt="{{ $produk->nama_produk }}" width="200" height="200"></td>
          <td>{{ $produk->nama_produk }}</td>
          <td>{{ $produk->bahan }}</td>
          <td>Rp{{ number_format($produk->harga) }}</td>
          <td>{{ $produk->stok }} pcs</td>
          <td>
            <a href="/dashboard/produk/{{ $produk->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
            <form action="/dashboard/produk/{{ $produk->id }}" method="post" class="d-inline">
              @method('delete')
              @csrf
              <button class="badge bg-danger border-0" onclick="return confirm('Apakah yakin ingin menghapusnya?')"><span data-feather="x-circle"></span></button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection