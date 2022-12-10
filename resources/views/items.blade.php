@extends('layouts.main')

@section('container')

{{-- Barang Section Start --}}
<section id="category" class="pb-32 pt-36 bg-slate-100 dark:bg-slate-800">
    <div class="container" id='home'>
        <div class="w-full px-4">
            <div class="max-w-full mx-auto mb-16 text-center" >
                <h4 class="mb-2 text-lg font-semibold text-orange" >Barang</h4>
                <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">{{ $title }}</h2>
                <form action="/items">
                    @if (request('category'))
                        <input type="hidden" name="category" value="{{ request('category') }}">
                    @endif
                    <div class="mb-3 input-group">
                        <input type="text" class="w-1/2 p-3 mr-2 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange" placeholder="Search.." name="search" value="{{ request('search') }}">
                        <button class="p-4 py-3 text-lg text-center text-white rounded-lg bg-orange hover:opacity-80" type="submit">Cari</button>
                        </div>
                </form>
                <p class="font-medium text-md text-slate-400 md:text-lg">Temukan Barang yang anda butuhkan</p>
            </div>
        </div>

        <div class="flex flex-wrap">
            @if ($items->count())
            @foreach ($items as $item)
                <div class="w-1/2 px-2 py-2 md:w-1/3 lg:w-1/4">
                    <div class="overflow-hidden bg-white shadow-lg rounded-xl">
                    <div class="absolute p-1 rounded-tl-lg" style="background-color: rgba(0, 0, 0, 0.7)"><a href="/items?category={{ $item->category->slug }}" class="text-white text-decoration-none">{{ $item->category->name }}</a></div>
                    <img src="{{ asset('storage/' . $item->image) }}" alt="programming" class="w-full">
                    <div class="px-6 py-8">
                        <h3 class="mb-2 font-bold">{{ $item->name }}</h3>
                        <h3 class="mb-2">Rp. {{ $item->price }}</h3>
                        <p class="mb-4 text-sm truncate">{!! $item->desc !!}</p>
                        <a href="items/{{ $item->slug }}" class="block py-2 text-sm font-medium text-center text-white rounded-lg bg-orange hover:opacity-80" >Detail</a>
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="container">
            <p class="m-5 text-center text-white fs-4 bg-dark">Barang Tidak Ditemukan</p>
        </div>
        @endif
        
        <div class="flex justify-center m-5">
            {{ $items->links() }}
        </div>
    </div> 
</section>
{{-- Barang Section End --}}
@endsection

