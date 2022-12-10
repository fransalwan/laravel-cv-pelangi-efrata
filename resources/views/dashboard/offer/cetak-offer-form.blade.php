@extends('dashboard.layouts.main')

@section('container')
<div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
    <h1 class="h2">Cetak Laporan Pembelian</h1>
</div>

<div class="col-lg-8">
        <div class="mb-3">
            <label for="tglawal" class="form-label">Tanggal Awal</label>
            <input type="date" class="form-control @error('tglawal') is-invalid @enderror" id="tglawal" name="tglawal" required autofocus value="{{ old('tglawal') }}">
            @error('tglawal')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="tglakhir" class="form-label">Tanggal Akhir</label>
            <input type="date" class="form-control @error('tglakhir') is-invalid @enderror" id="tglakhir" name="tglakhir" required autofocus value="{{ old('tglakhir') }}">
            @error('tglakhir')
                <div class="invalid-feedback">
                  {{ $message }}
                </div>
            @enderror
        </div>

        <a href="" onclick="this.href='offer/cetak-data-pertanggal/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value " target="_blank" class="mb-3 btn btn-success">Preview Laporan</a>
        
        <a href="" onclick="this.href='offer/downloadPDF/'+ document.getElementById('tglawal').value + '/' + document.getElementById('tglakhir').value " target="_blank" class="mb-3 btn btn-success">Download PDF</a>
        
</div>

@endsection