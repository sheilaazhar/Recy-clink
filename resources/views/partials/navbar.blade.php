<nav class="navbar navbar-dark navbar-expand-lg" style="background-color: #52B69A">
    <div class="container">
      <a class="navbar-brand" href="/">
        <img src={{ asset("./img/logo.png") }} alt="logo" height="35">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item ms-5">
            <a class="nav-link {{ ($active === "about") ? 'active' : '' }}" href="/about">About Us</a>
          </li>
          <li class="nav-item ms-5">
            <a class="nav-link {{ ($active === "help") ? 'active' : '' }}" href="/help">Help</a>
          </li>
          @auth
          <li class="nav-item ms-5">
            <a class="nav-link {{ ($active === "sampah") ? 'active' : '' }}" href="/sampah">Buang Sampah</a>
          </li>
          <li class="nav-item ms-5">
            <a class="nav-link {{ ($active === "posts") ? 'active' : '' }}" href="/posts">Posts</a>
          </li>
          <li class="nav-item ms-5">
            <a class="nav-link {{ ($active === "produk") ? 'active' : '' }}" href="/produk">Produk</a>
          </li>
          @endauth
        </ul>

        <ul class="navbar-nav ms-auto">
              @auth
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Welcome back, {{ auth()->user()->username }}
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/profil"><i class="bi bi-layout-text-sidebar-reverse"></i> Profil Saya</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <?php
                    $pesanan_utama = \App\Models\Pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
                    if(!empty($pesanan_utama))
                    {
                      $cart = \App\Models\PesananDetail::where('pesanan_id', $pesanan_utama->id)->count();
                    }
                    ?>
                    <a class="dropdown-item" href="/keranjang">
                      <i class="bi bi-cart4"></i>
                      @if(!empty($cart))
                      <span class="badge badge-danger">{{ $cart }}</span>
                      @endif
                       Keranjang</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <?php
                      $notif = \Illuminate\Notifications\DatabaseNotification::where('notifiable_id', Auth::user()->id)->where('read_at', NULL)->count();
                    ?>
                    <a class="dropdown-item" href="/notifikasi"><i class="bi bi-bell"></i>
                      @if(!empty($notif))
                      <span class="badge badge-danger">{{ $notif }}</span>
                      @endif
                       Notifikasi</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li>
                    <form action="/logout" method="post">
                      @csrf
                      <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                    </form>
                  </li>
                </ul>
              </li>
                  @else
              <li class="nav-item">
                <a href="/login" class="btn btn-success {{ ($active === "login") ? 'active' : '' }}"><i class="bi bi-box-arrow-in-right"></i> Login</a>
              </li>
              @endauth
            </ul>

        
      </div>
    </div>
  </nav>