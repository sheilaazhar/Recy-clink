@extends('layouts.main')

@section('container')
<div class="container">
    <h1 class="h3 mb-3 fw-normal mt-5 text-center">Form Permintaan Buang Sampah</h1>
    <div class="row">
    <div class="col-md-4 gambar">

    </div>
    <div class="col-md-3 mt-5 text-left">
        <h4 class="mb-4 mt-1">Tanggal</h4>
        <h4 class="mb-4 mt-1">Jenis Sampah</h4>
        <h4 class="mb-4 mt-1">Berat Sampah</h4>
        <h4 class="mb-4 mt-1">Alamat Pengambilan</h4>
    </div>
    <div class="col-md-5 mt-5">
    <div class="col-lg-8">
    <form action="/sampah/pengumpulan" method="post">
        @csrf
        <div class="mb-3">
        <input type="text" style="width:400px" name="tanggal" class="form-control rounded-top @error('tanggal') is-invalid @enderror" id="tanggal" placeholder="Tanggal Pengambilan" required value="{{ old('tanggal', $ambilsampah->tanggal) }}" disabled>
        @error('tanggal')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
        <select class="form-select" name="jenis_sampah" id="jenis_sampah" style="width:400px">
                <option value="Plastik">Plastik</option>
                <option value="Kain">Kain</option>
                <option value="Kaleng">Kaleng</option>
        </select>
        @error('jenis_sampah')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
        <select class="form-select" name="berat" id="berat" style="width:400px">
            <option value="0"> Kurang dari 1 kg</option>
            <option value="1">1 kg</option>
            <option value="2">2 kg</option>
            <option value="3">3 kg</option>
            <option value="4">4 kg</option>
            <option value="5">5 kg</option>
            <option value="6"> Lebih dari 5 kg</option>
        </select>
        @error('berat')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
        <input type="address" style="width:400px" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Alamat Lengkap" required value="{{ old('address', $user->address) }}">
        @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <div class="mb-3">
        <select class="form-select" name="kecamatan_id" style="width:400px">
            @foreach ($kecamatans as $kecamatan)
            @if(old('kecamatan_id', $user->kecamatan_id) == $kecamatan->id)
            <option value="{{ $kecamatan->id }}" selected>{{ $kecamatan->nama_kecamatan }}</option>
            @else 
            <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
            @endif
            @endforeach
        </select>
        @error('kecamatan')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
        </div>
        <button type="submit" class="btn btn-success">Ajukan</button>
    </form>
        </div>
    </div>
</div>
</div>
    
@endsection