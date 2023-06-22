<!-- ================================================ -->


<!-- ================================================ -->


<!-- ================================================ -->

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

        <?php
        echo form_open('uang_muka/tambah');
        ?>
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
            <h2 class="text-center fw-bold">#UANG MUKA</h2>
            <h1>Input Uang Muka</h1>
            <nav>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </nav>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">

                <!-- Left side columns -->
                <form>
                    <?php
                    echo form_open('uang_muka/tambah');
                    ?>
                    <!--  -->
                    <div class="row mb-3">
                        <label for="inputText" class="col-sm-2 col-form-label">Jumlah Uang Muka</label>
                        <div class="col-sm-4">
                            <input type="text" name="UM" class="form-control">
                        </div>
                    </div>

                    <button type="submit" onclick="tombol()" class="col-1 offset-2  btn btn-primary" name="submit">Simpan</button>
                </form>
                <!-- End Default Table Example -->

                <div class="row mt-5">
                    <?php echo anchor('uang_muka', '<i class="array(btn btn-primary bi bi-arrow-left-square-fill fs-3"></i>') ?>
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <script>
        function tombol() {

            swal({

                title: "Berhasil!",

                text: "Data Telah Ditambah",

                icon: "success",

                button: true

            });

        }
    </script>
</body>

</html>