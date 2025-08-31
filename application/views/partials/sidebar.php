<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?= base_url('dashboard'); ?>">INTERNSHIP</a>
    </div>
    <div class="sidebar-brand sidebar-brand-sm">
      <a href="<?= base_url('dashboard'); ?>">logo</a>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Sidebar Menu</li>
      <li class="dropdown active">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-fire"></i> <span>Home</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('sales'); ?>">Main Page</a></li>
        </ul>
      </li>

      <li class="menu-header">Options</li>
      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="fas fa-columns"></i> <span>Settings</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('layout/default'); ?>">Helpdesk</a></li>
          
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="nav-link has-dropdown"><i class="far fa-user"></i> <span>Helpdesk</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?= base_url('auth/forgot'); ?>">Lupa Password</a></li>
          <li><a class="nav-link" href="<?= base_url('auth/login'); ?>">Login</a></li>
          <li><a class="nav-link" href="<?= base_url('auth/register'); ?>">Register</a></li>
          <li><a class="nav-link" href="<?= base_url('auth/reset'); ?>">Logout</a></li>
        </ul>
      </li>


      <li><a class="nav-link" href="<?= base_url('credits'); ?>"><i class="fas fa-pencil-ruler"></i> <span>Question</span></a></li>
    </ul>
  </aside>
</div>
