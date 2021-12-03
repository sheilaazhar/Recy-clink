@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    <div class="col-lg-5">
        <main class="form-registration">
            <h1 class="h3 mb-3 fw-normal text-center mt-3">Register</h1>
            <form action="/register" method="post">
              @csrf
              <div class="form-floating">
                <input type="text" name="name" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="Name" required value="{{ old('name') }}">
                <label for="name">Name</label>
                @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="email" name="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" required value="{{ old('email') }}">
                <label for="email">Email address</label>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="tel" name="phone" class="form-control @error('phone') is-invalid @enderror" id="phone" placeholder="08XXXXXXXXXX" required value="{{ old('phone') }}">
                <label for="phone">Phone Number</label>
                @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <select class="form-select" name="jk" id="jk">
                  <option value="Perempuan">Perempuan</option>
                  <option value="Laki-Laki">Laki-laki</option>
                </select>
                <label for="jk">Jenis Kelamin</label>
                @error('jk')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <select class="form-select" name="kecamatan_id">
                  @foreach ($kecamatans as $kecamatan)
                  @if(old('kecamatan_id') == $kecamatan->id)
                    <option value="{{ $kecamatan->id }}" selected>{{ $kecamatan->nama_kecamatan }}</option>
                  @else 
                    <option value="{{ $kecamatan->id }}">{{ $kecamatan->nama_kecamatan }}</option>
                  @endif
                  @endforeach
                </select>
                <label for="kecamatan">Kecamatan</label>
                @error('kecamatan')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="address" name="address" class="form-control @error('address') is-invalid @enderror" id="address" placeholder="Address" required value="{{ old('address') }}">
                <label for="address">Address</label>
                @error('address')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
              <div class="form-floating">
                <input type="password" name="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
              </div>
    
              <button class="w-100 btn btn-lg button mt-3" type="submit">Register</button>
            </form>
            <small class="d-block text-center mt-3">Sudah punya akun? <a href="/login">Login Sekarang!</a></small>
          </main>
    </div>
</div>
    
@endsection