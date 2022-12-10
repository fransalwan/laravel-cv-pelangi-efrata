@extends('layouts.main')

@section('container')

    {{-- Category Section Start --}}
    <section id="category" class="pb-32 pt-36 bg-slate-100 dark:bg-slate-800">
        <div class="container" >
            <div class="w-full px-4" id='home'>
                <div class="max-w-full mx-auto mb-16 text-center">
                    <h4 class="mb-2 text-3xl font-semibold text-orange">Kategori Barang</h4>
                    <h2 class="mb-4 text-3xl font-bold text-dark sm:text-4xl lg:text-5xl dark:text-white">Semua Kategori</h2>
                    <p class="font-medium text-md text-slate-400 md:text-lg">Temukan Barang yang anda butuhkan</p>
                </div>
            </div>

            <div class="flex flex-wrap">
                @foreach ($categories as $category)
                <div class="w-1/2 px-2 py-2 md:w-1/3 lg:w-1/4">
                    <div class="mb-10 overflow-hidden bg-white shadow-lg rounded-xl">
                        <img src="{{ asset('storage/' . $category->image) }}" alt="programming" class="w-full">
                        <div class="px-6 py-8">
                            <a href="/items?category={{ $category->slug }}" class="block px-4 py-2 text-sm font-medium text-center text-white rounded-lg bg-orange hover:opacity-80">{{ $category->name }}</a>
                        </div>
                    </div>
                </div>
                    @endforeach
                </div>
            </div>
        </div> 
    </section>
    {{-- Category Section End --}}
@endsection

