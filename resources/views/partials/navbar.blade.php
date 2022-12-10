  <header class="absolute top-0 left-0 z-10 flex items-center w-full bg-transparent">
    <div class="container">
      <div class="relative flex items-center justify-between">
        <div class="px-4">
          <a href="/" class="block py-6 text-lg font-bold text-orange">PELANGI EFRATA</a>
        </div>
        <div class="flex items-center px-4">
          <button id="hamburger" name="hamburger" type="button" class="absolute block right-4 lg:hidden">
            <span class="transition duration-300 ease-in-out origin-top-left hamburger-line"></span>
            <span class="transition duration-300 ease-in-out hamburger-line"></span>
            <span class="transition duration-300 ease-in-out origin-bottom-left hamburger-line"></span>
          </button>

          <nav id="nav-menu" class="absolute hidden py-5 bg-white rounded-lg shadow-lg max-w-[250px] w-full right-4 top-full lg:block lg:static lg:bg-transparent lg:max-w-full lg:shadow-none lg:rounded-none dark:bg-dark dark:shadow-slate-500 lg:dark:bg-transparent">
            <ul class="block lg:flex">
              <li class="group">
                <a href="/" class=" sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('/') ? 'active' : '' }}">Beranda</a>
              </li>
              <li class="group">
                <a href="/about" class="sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('about') ? 'active' : '' }}">Tentang Kami</a>
              </li>
              <li class="group">
                <a href="/items" class="sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('items*') ? 'active' : '' }}">Barang</a>
              </li>
              <li class="group">
                <a href="/categories" class="sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('categories') ? 'active' : '' }}">Kategori</a>
              </li>
              <li class="group">
                <a href="/booking_offer_form" class="sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('booking_offer_form') ? 'active' : '' }}">Pemesanan & Penawaran</a>
              </li>
              
              <li class="group">
                <a href="/procedure" class="sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('procedure') ? 'active' : '' }}">Prosedur</a>
              </li>

              @auth
              <li>
                <form action="/logout" method="post">
                  @csrf
                  <button type="submit" class="sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('logout') ? 'active' : '' }}">Logout <span data-feather="log-out"></span></button>
                </form>
              </li>
              @else
              <li class="group">
                <a href="/login" class="sm:text-md flex py-2 mx-6  text-dark group-hover:text-orange dark:text-white {{ Request::is('login') ? 'active' : '' }}">Login</a>
              </li>
              @endauth

              <li class="flex items-center pl-8 mt-3 lg:mt-0">
                <div class="flex">
                  <span class="mr-2 text-sm text-slate-500">light</span>
                  <input type="checkbox" class="hidden" id="dark-toggle">
                  <label for="dark-toggle">
                    <div class="flex items-center h-5 p-1 rounded-full cursor-pointer w-9 bg-slate-500">
                      <div class="w-4 h-4 transition duration-300 ease-in-out bg-white rounded-full toggle-circle"></div>
                    </div>
                  </label>
                  <span class="ml-2 text-sm text-slate-500">dark</span>
                </div>
              </li>
            </ul>
            
          </nav>
        </div>
      </div>
    </div>
  </header>
