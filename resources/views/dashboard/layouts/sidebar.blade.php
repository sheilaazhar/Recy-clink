<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item mb-5 mt-3">
          <a class="nav-link">
            <span data-feather="user"></span>
            ADMIN RECY-CLINK!
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pengumpulan*') ? 'active' : '' }}" href="/dashboard/pengumpulan">
            <span data-feather="trash-2"></span>
            Data Pengumpulan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/pesanan*') ? 'active' : '' }}" href="/dashboard/pesanan">
            <span data-feather="dollar-sign"></span>
            Data Penjualan
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/produk*') ? 'active' : '' }}" href="/dashboard/produk">
            <span data-feather="shopping-bag"></span>
            Data Produk
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span data-feather="file-text"></span>
            Data Artikel
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" >
            <span data-feather="log-out"></span>
            Logout
          </a>
        </li>
      </ul>
    </div>
   
  </nav>