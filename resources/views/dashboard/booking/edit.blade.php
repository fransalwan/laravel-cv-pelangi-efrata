@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Edit Data Penjualan</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/booking/{{ $booking->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
              <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('tanggal', $booking->tanggal) }}">
              @error('tanggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
            <label for="pelanggan" class="form-label">Nama Pelanggan</label>
            <select class="form-select" name="pelanggan_id">
                @foreach ($pelanggans as $pelanggan)
                @if (old('pelanggan_id') == $pelanggan->id)
                <option value="{{ $pelanggan->id }}" selected>{{ $pelanggan->name }}</option>
                @else
                <option value="{{ $pelanggan->id }}">{{ $pelanggan->name }}</option>
                @endif
                @endforeach
              </select>
        </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Barang</label>
              <input type="text" class="form-control" id="name" name="name" required value="{{ old('name', $booking->name) }}">
                @error('name')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="harga_satuan" class="form-label @error('harga_satuan') is-invalid @enderror">Harga Satuan</label>
                <input type="text" class="form-control" id="harga_satuan" name="harga_satuan" required value="{{ old('harga_satuan', $booking->harga_satuan) }}">
                @error('harga_satuan')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="jumlah" class="form-label @error('jumlah') is-invalid @enderror">Jumlah</label>
                <input type="text" class="form-control" id="jumlah" name="jumlah" required value="{{ old('jumlah', $booking->jumlah) }}">
                @error('jumlah')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sub_total" class="form-label @error('sub_total') is-invalid @enderror">Sub Total</label>
                <input type="number" class="form-control" id="sub_total" onkeyup="sum();" name="sub_total" required readonly value="{{ old('sub_total', $booking->sub_total) }}">
                @error('sub_total')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
          </form>
    </div>

    <script>
      function sum() {
          var txtFirstNumberValue = document.getElementById('harga_satuan').value;
          var txtSecondNumberValue = document.getElementById('jumlah').value;
          var result = parseInt(txtFirstNumberValue) * parseInt(txtSecondNumberValue);
          if (!isNaN(result)) {
              document.getElementById('sub_total').value=result;
          }
      }
  
  </script>
@endsection