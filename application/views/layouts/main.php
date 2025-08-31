<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title><?= isset($title) ? $title : 'INTERNSHIP'; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/modules/fontawesome/css/all.min.css') ?>">

  <!-- Template CSS -->
  <link rel="stylesheet" href="<?= base_url('assets/css/style.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/components.css') ?>">
</head>

<body>
  <div id="app">
    <div class="main-wrapper">

      <!-- Navbar -->
      <?php $this->load->view('partials/navbar'); ?>

      <!-- Sidebar -->
      <?php $this->load->view('partials/sidebar'); ?>

      <!-- Main Content -->
      <div class="main-content">
         <?php $this->load->view('home/index'); ?>
      </div>

      <!-- Footer -->
      <?php $this->load->view('partials/footer'); ?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/modules/jquery.min.js') ?>"></script>
  <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/stisla.js') ?>"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>
</body>
</html>
