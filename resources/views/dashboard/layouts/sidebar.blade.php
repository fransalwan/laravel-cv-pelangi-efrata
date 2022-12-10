<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
  
  @can('admin')
    <h4 class="px-3 my-2 sidebar-heading d-flex align-items-center text-muted">
      <span>Administrator</span>
    </h4>

    <div class="position-sticky"> 
      <ul class="nav flex-column">
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/items*') ? 'active' : '' }}" href="/dashboard/items">
            <span data-feather="file-text"></span>
            Barang
          </a>
        </li>
      
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/categories*') ? 'active' : '' }}"  href="/dashboard/categories">
            <span data-feather="grid"></span>
            Kategori Barang
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/booking*') ? 'active' : '' }}"  href="/dashboard/booking">
            <span data-feather="grid"></span>
            Data Penjualan
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/offer*') ? 'active' : '' }}"  href="/dashboard/offer">
            <span data-feather="grid"></span>
            Data Pembelian
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/cetak-data-booking-form*') ? 'active' : '' }}"  href="/dashboard/cetak-data-booking-form">
            <span data-feather="grid"></span>
            Cetak Laporan Penjualan
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/cetak-data-offer-form*') ? 'active' : '' }}"  href="/dashboard/cetak-data-offer-form">
            <span data-feather="grid"></span>
            Cetak Laporan Pembelian
          </a>
        </li>

        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pelanggan*') ? 'active' : '' }}"  href="/dashboard/pelanggan">
            <span data-feather="grid"></span>
            Data Pelanggan
          </a>
        </li>
        
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/supplier*') ? 'active' : '' }}"  href="/dashboard/supplier">
            <span data-feather="grid"></span>
            Data Supplier
          </a>
        </li>
        
      </ul>
    @endcan

  </div>
</nav>