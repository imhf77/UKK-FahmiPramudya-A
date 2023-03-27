@extends('main')

@section('container')
    <div class="row d-flex justify-content-center">
        <div class="col-lg-4">
        <main class="form-registration w-100 m-auto">
            <form action="/register" method="post">
                <h1 class="h3 mb-3 fw-normal">Registration Form</h1>
                @csrf
                <div class="form-floating">
                <input type="text" name="nik" class="form-control  @error('nik') is-invalid @enderror" id="nik" placeholder="NIK" required value="{{ old('nik') }}">
                <label for="nik">NIK</label>
                    @error('nik')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                <input type="text" name="nama" class="form-control  @error('nama') is-invalid @enderror" id="nama" placeholder="Nama" required value="{{ old('nama') }}">
                <label for="nama">Nama</label>
                    @error('nama')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="Username" required value="{{ old('username') }}">
                <label for="username">Username</label>
                @error('username')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" id="telp" placeholder="telp" required value="{{ old('telp') }}">
                <label for="telp">No Telepon</label>
                @error('telp')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                <label for="password">Password</label>
                @error('password')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>

                <div class="checkbox mb-3">
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Register</button>
                <small class="d-block text-center mt-2">
                    Already Registered? <a href="/login">Sign-In Now</a>
                </small>
            </form>
            </main>
        </div>
    </div>
@endsection