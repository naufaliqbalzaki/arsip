<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Dashboard</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Dashboard</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="traffice-source-area mg-b-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs">
                    <h3 class="box-title">Petugas</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash"></div>
                        </li>
                        <li class="text-right sp-cn-r">
                            <i class="fa fa-level-up" aria-hidden="true"></i> 
                            <span class="counter text-success">
                                <?php 
                                $jumlah_petugas = mysqli_query($koneksi,"select * from petugas");
                                ?>
                                <span class="counter"><?php echo mysqli_num_rows($jumlah_petugas); ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 table-mg-t-pro-n">
                    <h3 class="box-title">Total Unduh Pusat & Timur</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash2"></div>
                        </li>
                        <li class="text-right graph-two-ctn">
                            <i class="fa fa-level-up" aria-hidden="true"></i> 
                            <span class="counter text-purple">
                                <?php
                                // Menghubungkan ke database
                                $koneksi = mysqli_connect("localhost", "root", "" ,"db_arsip");
                                // Periksa koneksi
                                if (!$koneksi) {
                                    die("Koneksi gagal: " . mysqli_connect_error());
                                }
                                // Menghitung jumlah arsip dari tabel riwayat
                                $jumlah_riwayat = mysqli_query($koneksi, "SELECT * FROM riwayat");
                                $jumlah_riwayat_count = mysqli_num_rows($jumlah_riwayat);
                                // Menghitung jumlah arsip dari tabel histori
                                $jumlah_histori = mysqli_query($koneksi, "SELECT * FROM histori");
                                $jumlah_histori_count = mysqli_num_rows($jumlah_histori);
                                // Menghitung total arsip dari kedua tabel
                                $total_unduh = $jumlah_riwayat_count + $jumlah_histori_count;
                                ?>
                                <span class="counter"><?php echo $total_unduh; ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Total Arsip Pusat & Timur</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash3"></div>
                        </li>
                        <li class="text-right graph-three-ctn">
                            <i class="fa fa-level-up" aria-hidden="true"></i> 
                            <span class="counter text-info">
                                <?php
                                // Menghubungkan ke database
                                $koneksi = mysqli_connect("localhost", "root", "" ,"db_arsip");
                                // Periksa koneksi
                                if (!$koneksi) {
                                    die("Koneksi gagal: " . mysqli_connect_error());
                                }
                                // Menghitung jumlah arsip dari tabel arsip
                                $jumlah_arsip = mysqli_query($koneksi, "SELECT * FROM arsip");
                                $jumlah_arsip_count = mysqli_num_rows($jumlah_arsip);
                                // Menghitung jumlah arsip dari tabel timur
                                $jumlah_timur = mysqli_query($koneksi, "SELECT * FROM timur");
                                $jumlah_timur_count = mysqli_num_rows($jumlah_timur);
                                // Menghitung total arsip dari kedua tabel
                                $total_berkas = $jumlah_arsip_count + $jumlah_timur_count;
                                ?>
                                <span class="counter"><?php echo $total_berkas; ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12">
                <div class="white-box analytics-info-cs res-mg-t-30 res-tablet-mg-t-30 dk-res-t-pro-30">
                    <h3 class="box-title">Kategori Arsip</h3>
                    <ul class="list-inline two-part-sp">
                        <li>
                            <div id="sparklinedash4"></div>
                        </li>
                        <li class="text-right graph-four-ctn">
                            <i class="fa fa-level-down" aria-hidden="true"></i> 
                            <span class="text-danger">
                                <?php 
                                $jumlah_kategori = mysqli_query($koneksi,"select * from kategori");
                                ?>
                                <span class="counter"><?php echo mysqli_num_rows($jumlah_kategori); ?></span>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="product-sales-area mg-tb-30">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-sm-12 col-xs-12">
                <div class="product-sales-chart">
                    <div class="portlet-title">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="caption pro-sl-hd">
                                    <span class="caption-subject"><b>Grafik Total Arsip</b></span>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                <div class="actions graph-rp graph-rp-dl">
                                    <p>Grafik Jumlah Arsip Pusat dan Timur</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <ul class="list-inline cus-product-sl-rp">
                    </ul>

                    <!-- Script untuk Chart.js -->
                    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                    <!-- Bagian HTML untuk Grafik -->
                    <div class="product-sales-chart">
                        <canvas id="arsipChart" height="100"></canvas>
                    </div>

                    <script>
                        // Data untuk grafik (contoh)
                        var data = {
                            labels: ["Arsip Pusat", "Arsip Timur"],
                            datasets: [{
                                label: "Total Arsip",
                                backgroundColor: ["#3e95cd", "#8e5ea2"],
                                data: [<?php echo $jumlah_arsip_count; ?>, <?php echo $jumlah_timur_count; ?>]
                            }]
                        };

                        // Opsi konfigurasi untuk grafik
                        var options = {
                            title: {
                                display: true,
                                text: 'Total Arsip Pusat dan Timur'
                            }
                        };

                        // Inisialisasi grafik menggunakan Chart.js
                        var ctx = document.getElementById("arsipChart").getContext('2d');
                        var myChart = new Chart(ctx, {
                            type: 'bar',
                            data: data,
                            options: options
                        });
                    </script>

                    <div id="morris-area-chart"></div>
                </div>
            </div>


            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">

            <?php
                // Menghubungkan ke database
                $koneksi = mysqli_connect("localhost", "root", "", "db_arsip");
                // Periksa koneksi
                if (!$koneksi) {
                    die("Koneksi gagal: " . mysqli_connect_error());
                }
                // Menghitung jumlah arsip dari tabel riwayat
                $jumlah_riwayat = mysqli_query($koneksi, "SELECT * FROM riwayat");
                $jumlah_riwayat_count = mysqli_num_rows($jumlah_riwayat);
                // Menghitung jumlah arsip dari tabel histori
                $jumlah_histori = mysqli_query($koneksi, "SELECT * FROM histori");
                $jumlah_histori_count = mysqli_num_rows($jumlah_histori);
                // Menghitung total arsip dari kedua tabel
                $total_unduh = $jumlah_riwayat_count + $jumlah_histori_count;

                // Mengambil data admin
                $id = $_SESSION['id'];
                $saya = mysqli_query($koneksi, "SELECT * FROM admin WHERE admin_id='$id'");
                $s = mysqli_fetch_assoc($saya);
                ?>
                <div class="single-cards-item">
                    <div class="single-product-image">
                        <a href="#">

                            <img src="../assets/img/product/profile-bg.jpg" alt="">
                        </a>
                    </div>

                    <div class="single-product-text">
                        <?php 
                        if($s['admin_foto'] == ""){
                            ?>
                            <img class="img-user" src="../gambar/sistem/user.png">
                            <?php
                        }else{
                            ?>
                            <img class="img-user" src="../gambar/admin/<?php echo $s['admin_foto']; ?>">
                            <?php
                        }
                        ?>

                        <h4><a class="cards-hd-dn" href="#"><?php echo $s['admin_nama']; ?></a></h4>
                        <h5>Admin</h5>
                        <p class="ctn-cards">Pengelolaan Arsip Jadi Lebih Mudah Dengan Sistem Informasi Arsip Digital.</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<?php include 'footer.php'; ?>