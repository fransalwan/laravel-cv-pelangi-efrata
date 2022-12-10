@extends('layouts.main')

@section('container')
{{-- Jumbotron Section Start --}}
<div class="dark:bg-dark" id='home'>
  <div class="flex justify-center">
    <h1 class="absolute p-4 mt-20 text-4xl font-bold text-center lg:text-5xl text-orange" style="background-color: rgba(0, 0, 0, 0.6)">CV PELANGI EFRATA <span class="block text-lg text-white">kami perusahaan yang bergerak di bidang jual beli barang bekas</span></h1>
    <img src="/img/home.jpeg"  alt="home">
  </div>
</div>
{{-- Jumbotron Section End --}}



{{-- About Section Start --}}
<section id="about" class="pt-20 pb-32 dark:bg-dark">
  <div class="container">
    <div class="flex flex-wrap">
      <div class="w-full px-4 mb-10 lg:w-1/2">
        <h3 class="mb-3 text-lg font-bold uppercase text-orange lg:text-3xl">Visi & Misi Kami</h3>
        <h2 class="max-w-xl mb-2 text-3xl font-bold text-dark lg:text-2xl dark:text-white">Visi</h2>
        <p class="max-w-xl text-base font-medium text-slate-800 dark:text-white text-dark:text-slate-300 lg:text-lg">Menjadi perusahaan yang dapat bersaing dengan perusahaan besi tua lokal maupun global yang ada di indonesia, baik dalam segi pembelian maupun penjualan barang bekas</p>
        <h2 class="max-w-xl mt-4 mb-2 text-3xl font-bold text-dark lg:text-2xl dark:text-white">Misi</h2>
        <p class="max-w-xl text-base font-medium text-slate-800 dark:text-white text-dark:text-slate-300 lg:text-lg">Misi kami menjangkau sebanyak mungkin mitra kerja. Kami juga akan berusaha semaksimal mungkin untuk meningkatkan kepedulian terhadap kebutuhan pelanggan dalam menyediakan barang yang mereka butuhkan dengan harga yang terjangkau dan juga berkualitas</p>
      </div>
      <div class="w-full px-4 lg:w-1/2">
        <h3 class="mb-3 text-lg font-bold uppercase text-orange lg:text-xl">Alamat Kami</h3>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2696259092622!2d103.54594843969367!3d-1.5964598027812718!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e258956f44d7a11%3A0xf6582641a506e88f!2sCV%20PELANGI%20EFRATA!5e0!3m2!1sen!2sid!4v1647403786373!5m2!1sen!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" class="mb-5 rounded-xl"></iframe>
        <p class="max-w-xl text-base font-medium text-slate-800 dark:text-white lg:text-lg">Telanaipura, Jl. Lintas Sumatra No.rt 12, Penyengat Rendah, Kec. Telanaipura, Kota Jambi, Jambi 36361</p>
      </div>
    </div>
  </div>
</section>
{{-- About Section End --}}

{{-- History Section Start --}}
<section id="contact" class="pb-32 pt-36 bg-slate-200 dark:bg-slate-800">
  <div class="container max-w-2xl">
    <div class="w-full px-4">
        <h2 class="mb-2 text-3xl font-bold text-orange sm:text-4xl lg:text-5xl dark:text-orange">Sejarah <span class="block mt-4 text-4xl font-bold text-slate-900 lg:text-5xl dark:text-white">CV PELANGI EFRATA</span></h2>
        <p class="font-medium text-md text-slate-800 dark:text-white md:text-lg">Pada tahun 1997 kami sebagai pencari barang bekas mengumpulkan barang seperti botol beling bekas minuman,besi-besi bekas dari bengkel-bengkel sepeda motor, alat-alat rumah tangga yg sudah tidak bisa di gunakan lagi seperti kuali bocor, periuk rusak, ember pecah, sepeda rusak bahkan besi-besi scrab perusahaan-perusahaan, bahkan kontraktor dan barang bekas lainnya di berbagai tempat untuk dijual ke beberapa pengepul di kota Jambi, yang mana usaha sedemikian terus kami tekuni dengan usaha dan kerja keras serta keyakinan yang kuat untuk bisa terus berkembang menjadi usaha yg benar-benar bisa menjadi suatu usaha yg menjanjikan sampai tahun 2003. Pada awal 2003 kami membuka lapak untuk menampung atau membeli dari orang-orang yang mencari ke luar kota jambi hingga semakin hari semakin membuat usaha kami kian besar.<br><br>
         
        Pada 03 Desember 2014 kami mendirikan badan usaha secara resmi yaitu CV PELANGI EFRATA yg mendukung perusahaan kami untuk lebih luas merambah pasar penjualan dan pembelian kami sampai keluar provinsi di Indonesia termasuk Jakarta, dan kami sudah banyak menjalin kerja sama dalam hal penjualan dan pembelian kepada perusahaan-perusahaan yang saling membutuhkan dengan barang-barang yang ada di perusahaan kami dalam hal ini barang bekas dan besi-besi bekas yang masih bisa di pakai dengan beberapa perbaikan.<br><br>

        Seiring berjalannya waktu, kami terus menambah cabang-cabang lapak kami dalam pembelian dan penjualan di beberapa daerah di sekitaran provinsi jambi, dan semakin hari kami menyajikan peningkatan pelayanan yg semakin profesional dalam menghadapi pelanggan kami baik pembeli maupun penjual hingga sampai saat ini.<br><br>

        Pada Akhirnya 03 Desember 2014 berdirilah CV.PELANGI EFRATA yang sampai saat ini dalam pengiriman dan pembeliannya sudah merambah ke beberapa provinsi di indonesia termasuk Jakarta</p>
    </div>
  </div>
</section>
{{-- History Section End --}}
@endsection