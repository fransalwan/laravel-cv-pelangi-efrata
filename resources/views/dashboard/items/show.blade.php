@extends('dashboard.layouts.main')

@section('container')
    <div class="card mt-3">
        <h5 class="card-header">Detail Barang</h5>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    @if ($item->image)
                    <img src="{{ asset('storage/' . $item->image) }}" class="card-img-top">
                    @else
                    <img src="https://source.unsplash.com/1200x600?empty" class="card-img-top">
                    @endif
                </div>
                <div class="col-md-6">
                    <table class="table">
                        <tr>
                            <td>Nama Barang</td>
                            <td><strong>{{ $item->name }}</strong></td>
                        </tr>
                        
                        <tr>
                            <td>Deskripsi</td>
                            <td><strong>{!! $item->desc !!}</strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong>{{ $item->stock }}</strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div class="btn btn-sm btn-success">Rp. {{ $item->price }}</div></strong></td>
                        </tr>
                    </table>
                    <a href="/dashboard/items" class="btn btn-sm btn-success"><span data-feather="arrow-left"></span> Back to all My Item</a>
                    <a href="/dashboard/items/{{ $item->slug }}/edit" class="btn btn-sm btn-warning"><span data-feather="edit"></span> Edit</a>
                    <form action="/dashboard/items/{{ $item->slug }}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')"><span data-feather="x-circle"></span> Delete</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection