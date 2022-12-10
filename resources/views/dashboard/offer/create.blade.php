@extends('dashboard.layouts.main')

@section('container')
<div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
    <h1 class="h2">Input Data Supplier</h1>
</div>

<div class="col-lg-8">
    <form method="post" action="/dashboard/offer" class="mb-5">
        @csrf
        <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Transaksi</label>
            <input type="date" class="form-control @error('tanggal') is-invalid @enderror" id="tanggal" name="tanggal" required autofocus value="{{ old('tanggal') }}">
            @error('tanggal')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="supplier" class="form-label">Nama Supplier</label>
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
            <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" required autofocus value="{{ old('name') }}">
            @error('name')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="harga_per_kilo" class="form-label @error('harga_per_kilo') is-invalid @enderror">Harga/Kg</label>
            <input type="number" class="form-control" id="harga_per_kilo" onkeyup="sum();" name="harga_per_kilo" required value="{{ old('harga_per_kilo') }}">
            @error('harga_per_kilo')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="berat" class="form-label @error('berat') is-invalid @enderror">Berat</label>
            <input type="number" step="any"  class="form-control" id="berat" onkeyup="sum();" name="berat" required value="{{ old('berat') }}">
            @error('berat')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sub_total" class="form-label @error('sub_total') is-invalid @enderror">Sub Total</label>
            <input type="number" class="form-control" id="sub_total" onkeyup="sum();" name="sub_total" readonly>
            @error('sub_total')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>
        
        <button type="submit" class="btn btn-primary">Input Data</button>
      </form>
</div>

<script>
    function sum() {
        var txtFirstNumberValue = document.getElementById('harga_per_kilo').value;
        var txtSecondNumberValue = document.getElementById('berat').value;
        var result = parseInt(txtFirstNumberValue) * parseFloat(txtSecondNumberValue);
        if (!isNaN(result)) {
            document.getElementById('sub_total').value=result;
        }
    }
</script>
@endsection