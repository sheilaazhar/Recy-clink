@extends('layouts.main')

@section('container')
<div class="container">
<h1 class="mt-5 edit">Edit Profil</h1>
<div class="row justify-content-center">
  <div class="col-md-2"></div>
  <div class="col-md-3 mt-5 label">
    <h4 class="mb-4 mt-1">Name</h4>
    <h4 class="mb-4 mt-1">Username</h4>
    <h4 class="mb-4 mt-1">Email Address</h4>
    <h4 class="mb-4 mt-1">Phone Number</h4>
    <h4 class="mb-4 mt-1">Jenis Kelamin</h4>
    <h4 class="mb-4 mt-1">Kecamatan</h4>
    <h4 class="mb-4 mt-1">Address</h4>
    <h4 class="mb-4 mt-1">Password</h4>
  </div>
  <div class="col-md-7 mt-5">
    <div class="col-lg-8">
      <form method="POST" action="/profil" class="mb-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
          <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $user->name) }}">
          @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" name="username" required value="{{ old('username', $user->username) }}" disabled>
          @error('username')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required value="{{ old('email', $user->email) }}" disabled>
          @error('email')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
        <div class="mb-3">
          <input type="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" name="phone" required value="{{ old('phone', $user->phone) }}">
          @error('phone')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
        </div>
          <div class="mb-3">
              <select class="form-select" name="jk" id="jk">
                @if(old('jk', $user->jk) == 'Perempuan')
                <option value="Perempuan" selected>Perempuan</option>
                <option value="Laki-Laki">Laki-laki</option>
                @else
                <option value="Perempuan">Perempuan</option>
                <option value="Laki-Laki" selected>Laki-laki</option>
                @endif
              </select>
              
              @error('jk')
              <div class="invalid-feedback">{{ $message }}</div>
              @enderror
          </div>
        <div class="mb-3">
          <select class="form-select" name="kecamatan_id">
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
        <div class="mb-3">
            <input type="text" class="form-control @error('address') is-invalid @enderror" id="address" name="address" required value="{{ old('address', $user->address) }}">
            @error('address')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
            @error('password')
            <div class="invalid-feedback">
              {{ $message }}
            </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-success">Update Profil</button>
      </form>
    </div>
    
  </div>
 
</div>
</div>

@endsection