@extends('layouts.main')

@section('container')

<section id="contact" class="pb-32 pt-36 bg-slate-100 dark:bg-slate-800">
  <div class="container">
          <div class="w-full px-4">
            <div class="max-w-md mx-auto mb-16 text-center">
              <h4 class="mb-2 text-3xl font-semibold text-orange">FORM<br> PEMESANAN & PENAWARAN</h4>
            </div>
          </div>
            <form id="contact-frm" action="{{ route('contact-form.store') }}">
              <input type="hidden" id="token" value="{{ @csrf_token() }}">
              <div class="w-full mx-auto lg:w-2/3">
                <div class="w-full px-4 mb-8">
                <div id="res"></div>
                <br>
                <label for="name" class="text-base font-bold text-orange">Nama Lengkap</label>
                <input type="text" name="name" class=" w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange @error('name') is-invalid @enderror" id="name" placeholder="Nama Lengkap" autofocus value="{{ old('name') }}">
              </div>
              {{-- <div class="w-full px-4 mb-8">
                <label for="alamat" class="text-base font-bold text-orange">Alamat</label>
                <input type="text" name="alamat" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange" id="alamat" placeholder="Alamat">
              </div> --}}
              <div class="w-full px-4 mb-8">
                <label for="email" class="text-base font-bold text-orange">Email</label>
                <input type="email" name="email" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange" id="email" placeholder="Email">
              </div>
              <div class="w-full px-4 mb-8">
                <label for="NoHp" class="text-base font-bold text-orange">Nomor Handphone (Whatsapp)</label>
                <input type="text" name="NoHp" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange" id="NoHp" placeholder="Nomor Handphone">
              </div>
              <div class="w-full px-4 mb-8">
                <label for="msg" class="text-base font-bold text-orange">Pemesanan atau Penawaran</label>
                <textarea name="msg" class="w-full p-3 rounded-md bg-slate-200 text-dark focus:outline-none focus:ring-1 focus:border-orange" id="msg" placeholder="Isi sesuai format"></textarea>
                <ul class="max-w-xl text-base font-medium text-slate-500 lg:text-lg">
                  <li>
                    *format bisa dilihat di halaman <a href="/procedure" class="hover:text-orange dark:hover:text-orange text-slate-900 dark:text-white">Prosedur</a> 
                  </li>
                </ul>
              </div>
              
              <button class="w-full px-8 py-3 text-base font-semibold text-white transition duration-500 rounded-full bg-orange hover:opacity-80 hover:shadow-lg" id="btn" type="submit">Kirim</button>
            </div>
            </form>
          </main>
        </div>
      </section>
@endsection