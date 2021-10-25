@extends('dashboard.layouts.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Permintaan Pengumpulan Sampah Recy-clink!</h1>
  </div>

  @if(session()->has('success'))
  <div class="alert alert-success col-lg-8" role="alert">
    {{ session('success') }}
  </div>
  @endif

  <div class="table-responsive col-lg-8">
    <table class="table table-striped table-sm">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Username</th>
          <th scope="col">Tanggal Permintaan</th>
          <th scope="col">Jenis Sampah</th>
          <th scope="col">Berat Sampah</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($ambilsampahs as $ambilsampah)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $ambilsampah->user->username }}</td>
          <td>{{ $ambilsampah->tanggal }}</td>
          <td>{{ $ambilsampah->jenis_sampah }}</td>
          <td>{{ $ambilsampah->berat }} kg</td>
          <td>
            
          </td>
          <td>
            <a href="/dashboard/pengumpulan/{{ $ambilsampah->id }}" class="badge bg-info"><span data-feather="eye"></span></a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
@endsection