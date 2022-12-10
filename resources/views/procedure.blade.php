@extends('layouts.main')

@section('container')
    
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
            <br>
            <li class="text-slate-500">
              *Untuk pengiriman barang bisa dijemput ke lokasi atau bisa diantar dengan mengirimkan alamat anda ke email kami <span class="text-white">cvpelangiefrata@gmail.com</span>
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