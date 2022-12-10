@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Data Penjualan</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
        </div>
    @endif
      <div class="table-responsive col-lg-8">
        <a href="/dashboard/booking/create" class="mb-3 btn btn-primary">Input Data Baru</a>
    
    <table class="table table-striped table-sm" id="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga Satuan</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($bookings as $book)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $book->tanggal }}</td>
              <td>{{ $book->pelanggan->name }}</td>
              <td>{{ $book->name }}</td>
              <td>{{ $book->harga_satuan }}</td>
              <td>{{ $book->jumlah }}</td>
              <td>{{ $book->sub_total }}</td>
              <td>
                  <a href="/dashboard/booking/{{ $book->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/booking/{{ $book->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="border-0 badge bg-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <span id="val" style="font-size: 20px;" class="text-end"></span>
        
    </div>

    <script>

      var table = document.getElementById("table"), sumVal = 0;

      for(var i = 1; i < table.rows.length; i++)
      {
        sumVal  = sumVal + parseInt(table.rows[i].cells[6].innerHTML);
      }

      document.getElementById("val").innerHTML = "Total : Rp. " + sumVal;
    </script>
    
@endsection