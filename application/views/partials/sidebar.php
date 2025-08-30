<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url('dashboard'); ?>">INTERNSHIP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?= base_url('dashboard'); ?>">logo</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">داشبورد</li>
      <li class="dropdown active">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i> <span>menu</span></a>
        <ul class="dropdown-menu">
          <li class="active"><a class="nav-link" href="<?= base_url('dashboard'); ?>">Home</a></li>
          <li><a class="nav-link" href="<?= base_url('sales'); ?>">Sales</a></li>
        </ul>
      </li>

      <li class="menu-header">Options</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Settings</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('layout/default'); ?>">Helpdesk</a></li>
          
        </ul>
      </li>

      <li><a class="nav-link" href="<?= base_url('blank'); ?>"><i class="far fa-square"></i> <span>صفحه خالی</span></a></li>

      <!-- <li class="menu-header">امکانات دیگر</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i> <span>کامپوننت ها</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('components/gallery'); ?>">گالری</a></li>
          <li><a class="nav-link" href="<?= base_url('components/upload'); ?>">مولتی آپلود</a></li>
          <li><a class="nav-link" href="<?= base_url('components/tab'); ?>">تب</a></li>
          <li><a class="nav-link" href="<?= base_url('components/table'); ?>">جدول</a></li>
        </ul>
      </li> -->

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Helpdesk</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('auth/forgot'); ?>">Lupa Password</a></li>
          <li><a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a></li>
          <li><a class="nav-link" href="<?= base_url('auth/register'); ?>">Register</a></li>
          <li><a class="nav-link" href="<?= base_url('auth/reset'); ?>">Logout</a></li>
        </ul>
      </li>

      <!-- <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-exclamation"></i> <span>خطاها</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('errors/error_503'); ?>">503</a></li>
          <li><a class="nav-link" href="<?= base_url('errors/error_403'); ?>">403</a></li>
          <li><a class="nav-link" href="<?= base_url('errors/error_404'); ?>">404</a></li>
          <li><a class="nav-link" href="<?= base_url('errors/error_500'); ?>">500</a></li>
        </ul>
      </li> -->

      <li><a class="nav-link" href="<?= base_url('credits'); ?>"><i class="fas fa-pencil-ruler"></i> <span>Question</span></a></li>
    </ul>

    <div class="mt-4 mb-4 p-3 hide-sidebar-mini">
      <a href="https://getstisla.com/docs" target="_blank" class="btn btn-primary btn-lg btn-block btn-icon-split">
        <i class="fas fa-rocket"></i> Rocket
      </a>
    </div>
  </aside>
</div>
