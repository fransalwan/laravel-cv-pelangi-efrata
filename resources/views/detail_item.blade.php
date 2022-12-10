@extends('layouts.main')

@section('container')

{{-- Detail Item Start Section --}}
<section id="detail_item" class="pb-32 pt-36 dark:bg-dark">
    <div class="container">
        <div class="w-full px-4">
            <h5 class="mb-5 text-3xl text-bold card-header text-orange">Detail Barang</h5>
            <div class="flex flex-wrap">
            <div class="w-full lg:w-1/2">
                <div>
                    <img src="{{ asset('storage/' . $item->image) }}" class="lg:rounded-md card-img-top">
                </div>
            </div>
            <div class="w-full lg:p-4 lg:w-1/2">
                <table class="block p-4 mb-5 border-2 table-auto dark:text-white">
                    <tbody>
                        <tr>
                          <td class="block mr-32">Nama Barang </td>
                          <td><strong>{{ $item->name }}</strong></td>
                        </tr>
                        <tr>
                            <td>Stok</td>
                            <td><strong>{{ $item->stock }} Unit</strong></td>
                        </tr>
                        <tr>
                            <td>Harga</td>
                            <td><strong><div>Rp. {{ $item->price }}</div></strong></td>
                        </tr>
                        <tr>
                            <td>Deskripsi: </td>
                            <td><strong>{!! $item->desc !!}</strong></td>
                        </tr>
                      </tbody>
                  </table>
                  <a href="/items" class="p-2 text-white bg-red-600 rounded-md">Kembali</a>
            </div>
        </div>
        </div>
    </div>
</section>
{{-- Detail Item End Section --}}
@endsection

