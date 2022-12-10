@extends('dashboard.layouts.main')

@section('container')
<div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
    <h1 class="h2">Input Data Supplier</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/supplier" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama Supplier</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat" required autofocus value="{{ old('alamat') }}">
            @error('alamat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="NoHp" class="form-label">No HandPhone (Wa)</label>
            <input type="text" class="form-control @error('NoHp') is-invalid @enderror" id="NoHp" name="NoHp" required autofocus value="{{ old('NoHp') }}">
            @error('NoHp')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email" required autofocus value="{{ old('email') }}">
            @error('email')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Input Data</button>
      </form>
</div>
@endsection