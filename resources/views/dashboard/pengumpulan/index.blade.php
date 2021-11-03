@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 mt-3 border-bottom">
    <h1 class="h2">Data Permintaan Pengumpulan Sampah Recy-clink!</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-10">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Tanggal</th>
          <th scope="col">Nama</th>
          <th scope="col">Username</th>
          <th scope="col">No. Hp</th>
          <th scope="col">Jenis Sampah</th>
          <th scope="col">Berat Sampah</th>
          <th scope="col">Alamat Pengambilan</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ambilsampahs as $ambilsampah)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ambilsampah->tanggal }}</td>
          <td>{{ $ambilsampah->user->name }}</td>
          <td>{{ $ambilsampah->user->username }}</td>
          <td>{{ $ambilsampah->user->phone }}</td>
          <td>{{ $ambilsampah->jenis_sampah }}</td>
          <td>{{ $ambilsampah->berat }} kg</td>
          <td>{{ $ambilsampah->address }}, {{ $ambilsampah->kecamatan->nama_kecamatan }}</td>
          <td>
            @if($ambilsampah->status == 'Menunggu konfirmasi')
            <a href="/dashboard/pengumpulan/{{ $ambilsampah->id }}/setuju" class="badge bg-primary" onclick="return confirm('Apakah yakin ingin menerima permintaan?')"><span data-feather="check"></span></a>
            <a href="/dashboard/pengumpulan/{{ $ambilsampah->id }}/tolak" class="badge bg-danger" onclick="return confirm('Apakah yakin ingin menolak permintaan?')"><span data-feather="x-circle"></span></a>
            @else
            <span>{{ $ambilsampah->status }}</span>
            @endif
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection