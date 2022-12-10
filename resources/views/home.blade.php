@extends('layouts.main')

@section('container')

  {{-- Hero Section Start --}}
  <section id='home' class="pt-20 pb-12 dark:bg-dark">
    <div class="container">
    <div class="flex flex-wrap">
      <div class="self-end w-full mb-5 lg:w-1/2">
        <div class="relative mt-10 lg:mt-9 lg:right-0">
          <img src="img/home.jpg" alt="Pelangi Efrata" class="relative z-10 max-w-full mx-auto rounded-xl" style="border-radius: 10.5rem;">
        </div>
      </div>
      <div class="self-center w-full px-4 lg:w-1/2">
        <h1 class="text-base font-semibold text-orange md:text-xl">Halo Semua 👋, Kami <span class="block mt-1 text-4xl font-bold text-slate-900 lg:text-5xl dark:text-white">CV PELANGI EFRATA</span></h1>
        <h2 class="mb-5 text-lg font-medium text-slate-500 lg:text-2xl">Selamat Datang di website kami</h2>
        <p class="mb-10 text-lg font-medium leading-relaxed text-slate-800 dark:text-white">Kami perusahaan yang bergerak di bidang pembelian dan penjualan barang-barang bekas.<br><br> 
        
        Pembelian scrab besi-besi dari perusahaan kontraktor alat berat, bengkel mobil dan bengkel motor, scrab besi tua pabrik-pabrik serta barang-barang bekas rongsokan mobil, motor, sepeda bahkan alat-alat rumah tangga yg sudah rusak seperti kulkas, mesin jahit, tv, komputer dll.<br><br>
        
        Kami juga menjual besi-besi bekas yang masih bisa di pergunakan seperti besi pipa, ump, siku, plat, h-beam, cmp, wf, seling bekas, besi behel dan lain lain.</p>
        <a href="/items" class="px-8 py-3 text-base font-semibold text-white transition duration-300 ease-out rounded-full font bg-orange hover:shadow-lg hover:bg-yellow-500 hover:opacity-90">Kunjungi Toko Kami</a>
      </div>
    </div>
  </div>
  </section>
  {{-- Hero Section End --}}
  
  {{-- Offer Section Start --}}
  <section id='home' class="pb-32 pt-36 bg bg-slate-200 dark:bg-slate-800">
    <div class="container">
    <div class="flex flex-wrap">
      <div class="self-center w-full px-4 lg:w-1/2">
        <h1 class="text-base font-semibold text-orange md:text-xl"><span class="block mt-1 mb-3 text-4xl font-bold text-slate-900 lg:text-5xl dark:text-white">Penawaran</span></h1>
        <p class="mb-10 text-lg font-medium leading-relaxed text-slate-800 dark:text-white">Anda Bisa Menawarkan barang anda, kami menerima barang bekas ataupun besi-besi tua, Kami juga melayani dalam skala besar ke perusahaan-perusahaan atau pabrik-pabrik yang memiliki scrab besi yang tidak di pergunakan lagi atau yang sudah rusak, dan juga kami membeli barang bekas lainnya seperti Baterai rusak, kabel-kabel tembaga, besi stainles,aluminium, kuningan bekas dan juga drum-drum besi bekas dan drum plastik bekas baik dalam jumlah besar maupun kecil, dan kami siap dalam penjemputan ke tempat lokasi.</p>
        <p class="mb-10 font-medium leading-relaxed dark:text-white">Kami akan sangat senang bisa bermitra dengan anda!</p>
        <a href="/booking_offer_form" class="px-8 py-3 text-base font-semibold text-white transition duration-300 ease-out rounded-full font bg-orange hover:shadow-lg hover:bg-yellow-500 hover:opacity-90">Lakukan Penawaran</a>
      </div>

      <div class="self-end w-full lg:w-1/2 sm:mt-4">
        <div class="relative mt-10 lg:mt-9 lg:right-0">
          <img src="img/shake2.png" alt="Pelangi Efrata" class="relative z-10 max-w-full mx-auto">
          <span class="absolute -translate-x-1/2 -bottom-0 left-1/2 md:scale-125">
            <svg
                  width="330"
                  height="330"
                  viewBox="0 0 200 200"
                  xmlns="http://www.w3.org/2000/svg"
                >
                  <path
                    fill="#fb923c"
                    d="M51.6,-49.6C58,-33.1,48.2,-12.2,42.3,8C36.4,28.2,34.3,47.7,24.4,53.7C14.4,59.6,-3.6,52.1,-18.4,43.1C-33.2,34.1,-44.9,23.5,-52.2,7.4C-59.4,-8.6,-62.1,-30.2,-52.7,-47.3C-43.2,-64.5,-21.6,-77.2,0.5,-77.6C22.6,-78,45.2,-66,51.6,-49.6Z"
                    transform="translate(100 100) scale(1.2)"
                  />
                </svg>
          </span>
        </div>
      </div>
    </div>
  </div>
  </section>
  {{-- Offer Section End --}}
  
  {{-- How To Section Start --}}
<section id="about" class="pb-32 pt-36 bg-slate-100 dark:bg-slate-800">
  <div class="container">
    <h3 class="mb-10 text-4xl font-bold text-center text-orange">Prosedur Melakukan Pemesanan & Penawaran Barang</h3>
    <div class="flex flex-wrap">
      <div class="w-full px-4 mb-10 lg:w-1/2">
        <h2 class="max-w-xl mt-4 mb-5 text-xl font-bold text-dark lg:text-4xl dark:text-white">Pemesanan</h2>
        <hr>
        <p class="max-w-xl mt-3 text-base font-medium text-slate-500 lg:text-lg">
          <ul class="max-w-xl text-base font-medium text-slate-800 dark:text-white lg:text-lg">
            <li>
              1.	Lihat Barang yang anda butuhkan
            </li>
            <li>
              2.	Isi form <a href="/booking_offer_form" class="hover:text-orange dark:hover:text-orange text-slate-900 dark:text-white"><u>pemesanan & penawaran</u></a> sesuai input yang tersedia seperti nama, email, No Handphone, maupun input pemesanan
            </li>
            <li>
              3.	Berikut format untuk input pemesanan:
            </li>
            <br>
            <li>
              Salin Format ini untuk mengisi input pemesanan : Saya ingin memesan Besi pipa galvanis dengan spesifikasi sebagai berikut: Berat: 4.5 Kg, Panjang: 130 cm, Diameter: 5 cm, Tebal: 6 ml sebanyak 10 buah
            </li>
            <br>
            <li>
              4. Kirim bukti Transaksi melalui No Wa: 0895342746086 atau email: fransalwan55@gmail.com
            </li>
            <li>
              5. silahkan menunggu konfirmasi melalui email maupun wa, kami akan menjawab pesan anda 1 x 24 jam
            </li>
            <li>
              
            </li>
          </ul>
          </p>
      </div>
      <div class="w-full px-4 mb-13 lg:w-1/2">
        <h2 class="max-w-xl mt-4 mb-5 text-xl font-bold text-dark lg:text-4xl dark:text-white">Penawaran</h2>
        <hr>
        <p class="max-w-xl mt-3 text-base font-medium text-slate-500 lg:text-lg">
          <ul class="max-w-xl text-base font-medium text-slate-800 dark:text-white lg:text-lg">
            <li>
              1.	Isi form <a href="/booking_offer_form" class="hover:text-orange dark:hover:text-orange text-slate-900 dark:text-white"><u>pemesanan & penawaran</u></a> sesuai input yang tersedia seperti nama, email, No Handphone, maupun input penawaran
            </li>
            <li>
              2. Berikut format untuk melakukan penawaran:
            </li>
            <br>
            <li>
              Salin Format ini untuk mengisi input penawaran: Saya ingin menawarkan barang besi padat (sesuaikan dengan penawaran anda) dengan spesifikasi berat total kurang lebih 500 kg (sesuaikan dengan penawaran anda), alamat saya berada di jambi jl.lintas timur, rt. 12 no.04(sesuaikan alamat anda) anda bisa menghubungi saya di nomor 08**********
            </li>
            <br>
            <li>
              3. silahkan menunggu konfirmasi melalui email maupun wa, kami akan menjawab pesan anda 1 x 24 jam
            </li>
          </ul>
          </p>
      </div>
    </div>
  </div>
</section>
{{-- How To Section End --}}

@endsection

