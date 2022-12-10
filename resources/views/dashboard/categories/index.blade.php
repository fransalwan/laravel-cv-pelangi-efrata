@extends('dashboard.layouts.main')

@section('container')
    <div class="flex-wrap pt-3 pb-2 mb-3 d-flex justify-content-between flex-md-nowrap align-items-center border-bottom">
      <h1 class="h2">Kategori Barang</h1>
    </div>

    @if (session()->has('success'))
      <div class="alert alert-success col-lg-6" role="alert">
          {{ session('success') }}
        </div>
    @endif

    <div class="table-responsive col-lg-3">
      <a href="/dashboard/categories/create" class="mb-3 btn btn-primary">Create new category</a>
    <table class="table table-striped table-sm">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Kategori</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $category->name }}</td>
              <td>
                  <a href="/dashboard/categories/{{ $category->slug }}" class="badge bg-info"><span data-feather="eye"></span></a>
                  <a href="/dashboard/categories/{{ $category->slug }}/edit" class="badge bg-warning"><span data-feather="edit"></span></a>
                  <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
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