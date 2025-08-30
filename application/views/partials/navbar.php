<nav class="navbar navbar-expand-lg main-navbar" style="background-color:#6777ef;">
  <form class="form-inline ml-auto">
    <ul class="navbar-nav ml-3">
      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
      <li><a href="#" data-toggle="search" class="nav-link nav-link-lg d-sm-none"><i class="fas fa-search"></i></a></li>
    </ul>
    <div class="search-element text-right text-danger">
      <input class="form-control" type="search" placeholder="Cari..." aria-label="Search" data-width="250">
      <button class="btn" type="submit"><i class="fas fa-search"></i></button>
      <div class="search-backdrop"></div>
    </div>
  </form>

  <ul class="navbar-nav navbar-right">
    <!-- Messages -->
    <li class="dropdown dropdown-list-toggle">
      <a href="#" data-toggle="dropdown" class="nav-link nav-link-lg message-toggle beep">
        <i class="far fa-envelope"></i>
      </a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Pesan
          <div class="float-right">
            <a href="#">Tandai semua dibaca</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-message">
          <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-avatar">
              <img alt="image" src="<?= base_url('assets/img/avatar/avatar-1.png') ?>" class="rounded-circle">
              <div class="is-online"></div>
            </div>
            <div class="dropdown-item-desc">
              <b>Admin</b>
              <p>Selamat datang di aplikasi!</p>
              <div class="time">10 menit lalu</div>
            </div>
          </a>
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">Lihat semua pesan<i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>

    <!-- Notifications -->
    <li class="dropdown dropdown-list-toggle">
      <a href="#" data-toggle="dropdown" class="nav-link notification-toggle nav-link-lg beep">
        <i class="far fa-bell"></i>
      </a>
      <div class="dropdown-menu dropdown-list dropdown-menu-right">
        <div class="dropdown-header">Notifikasi
          <div class="float-right">
            <a href="#">Tandai semua dibaca</a>
          </div>
        </div>
        <div class="dropdown-list-content dropdown-list-icons">
          <a href="#" class="dropdown-item dropdown-item-unread">
            <div class="dropdown-item-icon bg-primary text-white">
              <i class="fas fa-code"></i>
            </div>
            <div class="dropdown-item-desc">
              Ada update sistem baru!
              <div class="time text-primary">2 menit lalu</div>
            </div>
          </a>
        </div>
        <div class="dropdown-footer text-center">
          <a href="#">Lihat semua <i class="fas fa-chevron-right"></i></a>
        </div>
      </div>
    </li>

    <!-- User -->
    <li class="dropdown">
      <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
        <img alt="image" src="<?= base_url('assets/img/avatar/avatar-1.png') ?>" class="rounded-circle mr-1">
        <div class="d-sm-none d-lg-inline-block">Halo, User</div>
      </a>
      <div class="dropdown-menu dropdown-menu-right">
        <div class="dropdown-title">Login 5 menit lalu</div>
        <a href="#" class="dropdown-item has-icon">
          <i class="far fa-user"></i> Profil
        </a>
        <a href="#" class="dropdown-item has-icon">
          <i class="fas fa-cog"></i> Pengaturan
        </a>
        <div class="dropdown-divider"></div>
        <a href="#" class="dropdown-item has-icon text-danger">
          <i class="fas fa-sign-out-alt"></i> Logout
        </a>
      </div>
    </li>
  </ul>
</nav>
