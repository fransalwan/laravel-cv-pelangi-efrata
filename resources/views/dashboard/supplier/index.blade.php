@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Data Supplier</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
        </div>
    @endif
      <div class="table-responsive col-lg-10">
        <a href="/dashboard/supplier/create" class="mb-3 btn btn-primary">Input Data Baru</a>
    
    <table class="table table-striped table-sm" id="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Supplier</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HandPhone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($supplier as $offer)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $offer->name }}</td>
              <td>{{ $offer->alamat }}</td>
              <td>{{ $offer->NoHp }}</td>
              <td>{{ $offer->email }}</td>
              <td>
                  <a href="/dashboard/supplier/{{ $offer->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/supplier/{{ $offer->id }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="border-0 badge bg-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span></button>
                  </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        
    </div>
@endsection