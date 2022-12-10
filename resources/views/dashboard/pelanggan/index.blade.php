@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
        <h1 class="h2">Data Pelanggan</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
        </div>
    @endif
      <div class="table-responsive col-lg-10">
        <a href="/dashboard/pelanggan/create" class="mb-3 btn btn-primary">Input Data Baru</a>
    
    <table class="table table-striped table-sm" id="table">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pelanggan</th>
            <th scope="col">Alamat</th>
            <th scope="col">No HandPhone</th>
            <th scope="col">Email</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pelanggans as $book)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $book->name }}</td>
              <td>{{ $book->alamat }}</td>
              <td>{{ $book->NoHp }}</td>
              <td>{{ $book->email }}</td>
              <td>
                  <a href="/dashboard/pelanggan/{{ $book->id }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/pelanggan/{{ $book->id }}" method="post" class="d-inline">
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