@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Edit Data Pelanggan</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/pelanggan/{{ $pelanggans->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="name" class="form-label">Nama Pelanggan</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $pelanggans->name) }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>  
              @enderror
          </div> 
          
          <div class="mb-3">
              <label for="alamat" class="form-label">Alamat</label>
              <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat', $pelanggans->alamat) }}">
              @error('alamat')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
          </div>  

          <div class="mb-3">
              <label for="NoHp" class="form-label">Nomor Handphone (Wa)</label>
              <input type="text" class="form-control @error('NoHp') is-invalid @enderror" name="NoHp" NoHp="NoHp" required autofocus value="{{ old('NoHp', $pelanggans->NoHp) }}">
              @error('NoHp')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
          </div>  

          <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" email="email" required autofocus value="{{ old('email', $pelanggans->email) }}">
              @error('email')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
          </div>  
           
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>
@endsection