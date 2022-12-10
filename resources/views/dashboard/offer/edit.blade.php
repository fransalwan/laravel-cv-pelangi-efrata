@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Edit Data Pembelian</h1>
    </div>

    <div class="col-lg-8">
        <form method="post" action="/dashboard/offer/{{ $offer->id }}" class="mb-5">
            @method('put')
            @csrf
            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal Pemesanan</label>
              <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('tanggal', $offer->tanggal) }}">
              @error('tanggal')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
          </div>
          <div class="mb-3">
              <label for="supplier" class="form-label">Nama Pelanggan</label>
              <select class="form-select" name="supplier_id">
                @foreach ($suppliers as $supplier)
                @if (old('supplier_id') == $supplier->id)
                <option value="{{ $supplier->id }}" selected>{{ $supplier->name }}</option>
                @else
                <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                @endif
                @endforeach
              </select>
          </div>
            <div class="mb-3">
              <label for="name" class="form-label">Nama Barang</label>
              <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name', $offer->name) }}">
              @error('name')
                  <div class="invalid-feedback">
                    {{ $message }}
                  </div>
              @enderror
            </div>

            <div class="mb-3">
                <label for="harga_per_kilo" class="form-label @error('harga_per_kilo') is-invalid @enderror">Harga/Kg</label>
                <input type="text" class="form-control" id="harga_per_kilo" name="harga_per_kilo" required value="{{ old('harga_per_kilo', $offer->harga_per_kilo) }}">
                @error('harga_per_kilo')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="berat" class="form-label @error('berat') is-invalid @enderror">Berat</label>
                <input type="text" class="form-control" id="berat" name="berat" required value="{{ old('berat', $offer->berat) }}">
                @error('berat')
                    <div class="invalid-feedback">
                      {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sub_total" class="form-label @error('sub_total') is-invalid @enderror">Sub Total</label>
                <input type="text" class="form-control" id="sub_total" name="sub_total" required value="{{ old('sub_total', $offer->sub_total) }}">
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