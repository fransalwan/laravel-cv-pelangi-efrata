@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Data Pembelian</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-8">
      <a href="/dashboard/offer/create" class="mb-3 btn btn-primary">Input Data Baru</a>
    <table class="table table-striped table-sm" id="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Tanggal Transaksi</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga/Kg</th>
            <th scope="col">Berat</th>
            <th scope="col">Sub Total</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($offers as $offer)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $offer->tanggal }}</td>
              <td>{{ $offer->supplier->name }}</td>
              <td>{{ $offer->name }}</td>
              <td>{{ $offer->harga_per_kilo }}</td>
              <td>{{ $offer->berat }}</td>
              <td>{{ $offer->sub_total }}</td>
              <td>
                  <a href="/dashboard/offer/{{ $offer->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/offer/{{ $offer->id }}" method="post" class="d-inline">
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