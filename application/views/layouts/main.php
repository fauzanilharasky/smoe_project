<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=5, shrink-to-fit=no">
  <title><?= isset($title) ? $title : 'INTERNSHIP'; ?></title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?= base_url('assets/modules/bootstrap/css/bootstrap.min.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/modules/fontawesome/css/all.min.css') ?>">
	<link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.min.css" rel="stylesheet">
	<link href="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/r-2.5.0/datatables.min.css" rel="stylesheet">

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
        <?= isset($content) ? $content : '' ?>
      </div>

      <!-- Footer -->
      <?php $this->load->view('partials/footer'); ?>
    </div>
  </div>

  <!-- General JS Scripts -->
  <script src="<?= base_url('assets/modules/jquery.min.js') ?>"></script>
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.17.2/dist/sweetalert2.all.min.js"></script>
	<script src="https://cdn.datatables.net/v/bs5/jq-3.7.0/jszip-3.10.1/dt-1.13.6/b-2.4.1/b-html5-2.4.1/b-print-2.4.1/r-2.5.0/datatables.min.js"></script>
  <script src="<?= base_url('assets/modules/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?= base_url('assets/modules/nicescroll/jquery.nicescroll.min.js') ?>"></script>
  <script src="<?= base_url('assets/js/stisla.js') ?>"></script>

  <!-- Template JS File -->
  <script src="<?= base_url('assets/js/scripts.js') ?>"></script>
  <script src="<?= base_url('assets/js/custom.js') ?>"></script>

	<?php if (!empty($notifikasi)): ?>
    <script>
        Swal.fire({
            text: '<?= $notifikasi ?>',
            icon: '<?= $type ?>',
            confirmButtonText:'OK',
            showCloseButton: true,
            timer: 2000,
        })
    </script>
	<?php endif; ?>
	
	<?php if (isset($dataTable)) echo $dataTable; ?>
</body>
</html>
