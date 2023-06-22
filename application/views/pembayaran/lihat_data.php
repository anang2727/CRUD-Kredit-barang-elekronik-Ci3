<!-- ================================================    
 -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Toko ABC Matang Glumpang Dua</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/logo-.ico" rel="icon">
  <link href="<?= base_url() ?>assets/img/logo-" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: NiceAdmin
  * Updated: Mar 09 2023 with Bootstrap v5.2.3
  * Template URL: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <span class="d-none d-lg-block">Toko ABC</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <div class="search-bar">
      <form class="search-form d-flex align-items-center" method="POST" action="#">
        <input type="text" name="query" placeholder="Search" title="Enter search keyword">
        <button type="submit" title="Search"><i class="bi bi-search"></i></button>
      </form>
    </div><!-- End Search Bar -->


  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="<?= base_url() ?>">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-menu-button-wide"></i><span>INPUT</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>

            <?php echo anchor('uang_muka', 'Uang Muka'); ?>

          </li>
          <li>
            <?php echo anchor('lama_angsuran', 'Lama Angsuran'); ?>
          </li>
          <li>
            <?php echo anchor('uang_angsuran', 'Uang Angsuran'); ?>
          </li>
          <li>
            <?php echo anchor('kreditur', 'Kreditur'); ?>
          </li>
          <li>
            <?php echo anchor('pembayaran', 'Pembayaran'); ?>
          </li>
          <li>
            <?php echo anchor('elektronik', 'Elektronik'); ?>
          </li>
          <li>
            <?php echo anchor('pegawai', 'Pegawai'); ?>
          </li>
          <li>
            <?php echo anchor('pengambilan', 'Pengambilan'); ?>
          </li>

        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-journal-text"></i><span>INFORMASI</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <?php echo anchor('kreditur/daftar', 'Daftar Kreditur'); ?>
          </li>
          <li>
            <?php echo anchor('kreditur/laporan_kreditur', 'Laporan Kreditur'); ?>
          </li>
          <li>
            <?php echo anchor('pembayaran/rekapitulasi', 'Rekapitulasi Belum/Lunas'); ?>
          </li>
          <li>
            <?php echo anchor('elektronik/daftar', 'Elektronik'); ?>
          </li>

        </ul>
      </li><!-- End Forms Nav -->

      <!-- Brosur  -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('elektronik/brosur') ?>">
          <i class="bi bi-card-heading"></i>
          <span>BROSUR</span>
        </a>
      </li><!-- End brosur -->




      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#icons-nav" data-bs-toggle="collapse" href="#">
          <i class="bi bi-calendar"></i><span>KREDITUR</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="icons-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <?php echo anchor('pembayaran/kartu', 'Kartu Bayar Angsuran'); ?>
          </li>
          <li>
            <?php echo anchor('kreditur/detail', 'Kartu Kreditur'); ?>
          </li>
        </ul>


        <!-- ================================================ -->
      <li class="nav-item">
        <a class="nav-link collapsed" href="<?php echo site_url('auth/logout') ?>">
          <i class="bi bi-box-arrow-in-left"></i>
          <span>Logout</span>
        </a>

      </li><!-- End Login Page Nav -->


  </aside><!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h2 class="text-center fw-bold">#PEMBAYARAN</h2>
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <button class="btn float-end btn-warning bi bi-printer fw-bold " onclick="window.print();">
      <?php echo anchor('pembayaran/cetak', 'Print', array('class' => 'text-dark btn-sm')); ?>
    </button>
    <?php echo anchor('pembayaran/tambah', 'Tambah', array('class' => ' btn btn-primary mb-3 bi bi-plus btn-sm')); ?>
    <section class="section dashboard">
      <div class="row">

        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">

            <!-- Table  -->
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pembayaran</h5>

                <!-- Default Table -->
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nomor Bayar</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Jumlah</th>
                      <th scope="col">Angsuran Ke</th>
                      <th scope="col">Kode Kreditur</th>
                      <th scope="col">Kode Pegawai</th>
                      <th scope="col">Nomor Ambil</th>
                      <th scope="col" class="text-center">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 1;
                    foreach ($record->result() as $r) {
                      echo "<tr>
            <td>$no</td>
            <td>$r->NB</td>
            <td scope=row>$r->TBTP</td>
            <td scope=row>$r->JMA</td>
            <td scope=row>$r->AA</td>
            <td scope=row>$r->NMK</td>
            <td scope=row>$r->KDP</td>
            <td scope=row>$r->NAM</td>
            <td width='2'>" . anchor('pembayaran/edit/' . $r->NAM, '<i class="bi bi-pencil"></i>', array('class' => 'btn btn-success btn-sm')) . "</td>
            <td width='20'>" . anchor('pembayaran/delete/' . $r->NAM, '<i class="bi bi-trash"></i>', array('class' => 'btn btn-danger btn-sm')) . "</td>
            <tr>";
                      $no++;
                    } ?>
                  </tbody>
                </table>
                <!-- End Default Table Example -->
              </div>
            </div>


          </div><!-- End Right side columns -->

        </div>
    </section>

  </main><!-- End #main -->


  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>CodeLazz</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
      Designed by <a href="https://github.com/niawanart">NiawanArt</a>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/chart.js/chart.umd.js"></script>
  <script src="<?= base_url() ?>assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/quill/quill.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?= base_url() ?>assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>assets/js/main.js"></script>

</body>

</html>