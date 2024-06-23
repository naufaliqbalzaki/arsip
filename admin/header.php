<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Admin - DPM-PTSP SURABAYA</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/DPMBG.ico">
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="../assets/css/owl.carousel.css">
    <link rel="stylesheet" href="../assets/css/owl.theme.css">
    <link rel="stylesheet" href="../assets/css/owl.transitions.css">
    <link rel="stylesheet" href="../assets/css/animate.css">
    <link rel="stylesheet" href="../assets/css/normalize.css">
    <link rel="stylesheet" href="../assets/css/meanmenu.min.css">
    <link rel="stylesheet" href="../assets/css/main.css">
    <link rel="stylesheet" href="../assets/css/educate-custon-icon.css">
    <link rel="stylesheet" href="../assets/css/morrisjs/morris.css">
    <link rel="stylesheet" href="../assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="../assets/css/metisMenu/metisMenu-vertical.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="../assets/css/calendar/fullcalendar.print.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../assets/css/style.css">

    <link rel="stylesheet" type="text/css" href="../assets/js/DataTables/datatables.css">

    <script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <?php 
    include '../koneksi.php';
    session_start();
    if($_SESSION['status'] != "admin_login"){
        header("location:../login.php?alert=belum_login");
    }
    ?>
</head>
<body>
<div class="left-sidebar-pro">
        <nav id="sidebar" class="">
            <div class="sidebar-header">
            <a href="index.html" style="display: block; padding-top: 20px; pointer-events: none;">
            <img class="main-logo" src="../assets/img/logo/dpmptsp.png" alt="" />
            </a>
            <strong>
            <a href="index.html" style="display: block; padding-top: 10px; pointer-events: none;">
            <img src="../assets/img/logo/logodp.png" alt="" style="position: relative; top: -25px;" />
            </a>
            </strong>
            </div>
            <div class="left-custom-menu-adp-wrap comment-scrollbar">

                <nav class="sidebar-nav left-sidebar-menu-pro" style="margin-top: 30px">

                    <ul class="metismenu" id="menu1">
                        <li class="active">
                            <a href="index.php">
                                <span class="educate-icon educate-home icon-wrap"></span>
                                <span class="mini-click-non">Dashboard</span>
                            </a>
                        </li>

                        <li>
                            <a href="kategori.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                        </li>

                        <li>
                            <a href="petugas.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Petugas</span></a>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                <span class="mini-click-non">Data Arsip</span>
                                <span class="caret"></span> <!-- Menambahkan ikon caret -->
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="arsip.php"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Pusat</a></li>
                                <li><a href="timur.php"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Timur</a></li>
                            </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                <span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                <span class="mini-click-non">Riwayat Unduh</span>
                                <span class="caret"></span> <!-- Menambahkan ikon caret -->
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="riwayat.php"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Pusat</a></li>
                                <li><a href="histori.php"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Timur</a></li>
                            </ul>
                        </li>

                        <li>
                            <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                        </li>

                        <li>
                            <a href="backup.php" aria-expanded="false">
                            <span class="fas fa-download icon-wrap sub-icon-mg" aria-hidden="true"></span>
                            <span class="mini-click-non">Backup Data</span>
                            </a>
                        </li>

                        <li>
                            <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                        </li>

                    </ul>
                </nav>
            </div>
        </nav>
    </div>
    <!-- End Left menu area -->
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row" style="background-color: #2C559E;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #2C559E;">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="../assets/img/logo/dpmptsp.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-advance-area">
            <div class="header-top-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="background-color: #2C559E;">
                            <div class="header-top-wraper">
                                <div class="row">
                                    <div class="col-lg-1 col-md-0 col-sm-12 col-xs-12" style="background-color: #2C559E;">
                                        <div class="menu-switcher-pro">
                                            <button type="button" id="sidebarCollapse" class="btn bar-button-pro header-drl-controller-btn btn-info navbar-btn" style="background-color: #2C559E;">
                                                <i class="educate-icon educate-nav"></i>
                                            </button>
                                        </div>
                                    </div>
                                    <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12" style="background-color: #2C559E;">
                                        <div class="header-top-menu tabl-d-n">
                                            <ul class="nav navbar-nav mai-top-nav">
                                                <li class="nav-item"><a href="#" class="nav-link">ARSIP DIGITAL DPM-PTSP SURABAYA</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="header-right-info">
                                            <ul class="nav navbar-nav mai-top-nav header-right-menu">

                                            <li class="nav-item">
                                                    <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle"><i class="educate-icon educate-bell" aria-hidden="true"></i><span class="indicator-nt"></span></a>
                                                    <div role="menu" class="notification-author dropdown-menu animated zoomIn">
                                                        <div class="notification-single-top">
                                                            <h1>Riwayat Unduh Terakhir</h1>
                                                        </div>
                                                        <ul class="notification-menu">
                                                <?php
                                                // Koneksi ke database
                                                $koneksi = mysqli_connect("localhost", "root", "" ,"db_arsip");

                                                // Query untuk mengambil data dari tabel riwayat dan arsip
                                                $arsip = mysqli_query($koneksi, "SELECT 'Arsip Pusat' AS source, riwayat_waktu AS waktu, petugas_nama, arsip_izin, arsip_pengusaha FROM riwayat, arsip, petugas WHERE riwayat_arsip = arsip_id AND riwayat_petugas = petugas_id ORDER BY riwayat_id DESC");

                                                // Query untuk mengambil data dari tabel histori dan timur
                                                $timur = mysqli_query($koneksi, "SELECT 'Arsip Timur' AS source, histori_waktu AS waktu, petugas_nama, timur_izin, timur_pengusaha FROM histori, timur, petugas WHERE histori_timur = timur_id AND histori_petugas = petugas_id ORDER BY histori_id DESC");

                                                // Gabungkan hasil query ke dalam satu array
                                                $notifications = [];
                                                while ($row = mysqli_fetch_assoc($arsip)) {
                                                    $notifications[] = $row;
                                                }

                                                while ($row = mysqli_fetch_assoc($timur)) {
                                                    $notifications[] = $row;
                                                }

                                                // Urutkan notifikasi berdasarkan waktu
                                                usort($notifications, function($a, $b) {
                                                    return strtotime($b['waktu']) - strtotime($a['waktu']);
                                                });
                                                ?>

                                                <ul class="notification-menu">
                                                    <?php foreach ($notifications as $p): ?>
                                                        <li>
                                                            <a href="<?php echo $p['source'] == 'Arsip Pusat' ? 'riwayat.php' : 'histori.php'; ?>">
                                                                <div class="notification-content">
                                                                    <p>
                                                                        <small><i><?php echo date('H:i:s  d-m-Y', strtotime($p['waktu'])) ?></i></small>
                                                                        <br>
                                                                        <b><?php echo $p['petugas_nama'] ?></b> Mengunduh Berkas Perizinan 
                                                                        <b><?php echo $p['arsip_izin'] ?? $p['timur_izin']; ?></b> Milik 
                                                                        <b><?php echo $p['arsip_pengusaha'] ?? $p['timur_pengusaha']; ?></b> dari 
                                                                        <b><?php echo $p['source']; ?></b>.
                                                                    </p>
                                                                </div>
                                                            </a>
                                                            <hr>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>

                                                <div class="notification-view">
                                                </div>

                                                </div>
                                            </li>

                                            <li class="nav-item">
                                                <a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
                                                    <?php 
                                                    $id_admin = $_SESSION['id'];
                                                    $profil = mysqli_query($koneksi,"select * from admin where admin_id='$id_admin'");
                                                    $profil = mysqli_fetch_assoc($profil);
                                                    if($profil['admin_foto'] == ""){ 
                                                      ?>
                                                      <img src="../gambar/sistem/user.png" style="width: 20px;height: 20px">
                                                  <?php }else{ ?>
                                                    <img src="../gambar/admin/<?php echo $profil['admin_foto'] ?>" style="width: 20px;height: 20px">
                                                <?php } ?>
                                                <span class="admin-name"><?php echo $_SESSION['nama']; ?> [ <b>Administrator</b> ]</span>
                                                <i class="fa fa-angle-down edu-icon edu-down-arrow"></i>
                                            </a>
                                            <ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
                                                <li><a href="profil.php"><span class="edu-icon edu-home-admin author-log-ic"></span>Profil Saya</a></li>
                                                <li><a href="gantipassword.php"><span class="edu-icon edu-user-rounded author-log-ic"></span>Ganti Password</a></li>
                                                <li><a href="logout.php"><span class="edu-icon edu-locked author-log-ic"></span>Log Out</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Mobile Menu start -->
    <div class="mobile-menu-area" style="background-color: #2C559E;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="mobile-menu">
                        <nav id="dropdown">
                            <ul class="mobile-menu-nav">
                                <li class="active">
                                    <a href="index.php">
                                        <span class="educate-icon educate-home icon-wrap"></span>
                                        <span class="mini-click-non">Dashboard</span>
                                    </a>
                                </li>
                                <li>
                                    <a href="kategori.php" aria-expanded="false"><span class="educate-icon educate-course icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Kategori</span></a>
                                </li>

                                <li>
                                    <a href="petugas.php" aria-expanded="false"><span class="educate-icon educate-professor icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Data Petugas</span></a>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                        <span class="mini-click-non">Data Arsip</span>
                                        <span class="caret"></span> <!-- Menambahkan ikon caret -->
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="arsip.php"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Pusat</a></li>
                                        <li><a href="timur.php"><span class="educate-icon educate-data-table icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Timur</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                                        <span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span> 
                                        <span class="mini-click-non">Riwayat Unduh</span>
                                        <span class="caret"></span> <!-- Menambahkan ikon caret -->
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a href="riwayat.php"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Pusat</a></li>
                                        <li><a href="histori.php"><span class="educate-icon educate-form icon-wrap sub-icon-mg" aria-hidden="true"></span>Arsip Timur</a></li>
                                    </ul>
                                </li>

                                <li>
                                    <a href="gantipassword.php" aria-expanded="false"><span class="educate-icon educate-danger icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Ganti Password</span></a>
                                </li>

                                <li>
                                    <a href="backup.php" aria-expanded="false">
                                    <span class="fas fa-download icon-wrap sub-icon-mg" aria-hidden="true"></span>
                                    <span class="mini-click-non">Backup Data</span>
                                    </a>
                                </li>

                                <li>
                                    <a href="logout.php" aria-expanded="false"><span class="educate-icon educate-pages icon-wrap sub-icon-mg" aria-hidden="true"></span> <span class="mini-click-non">Logout</span></a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

