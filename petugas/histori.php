<?php include 'header.php'; ?>

<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Data Riwayat Unduhan Arsip Timur</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Riwayat</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="panel panel">

        <div class="panel-heading">
            <h3 class="panel-title">Data Riwayat Unduhan Arsip Timur</h3>
        </div>
        <div class="panel-body">


            <table id="table" class="table table-bordered table-striped table-hover table-datatable">
                <thead>
                    <tr>
                        <th width="1%">No</th>
                        <th width="18%">Waktu Upload</th>
                        <th width="30%">Nama Petugas</th>
                        <th width="30%">Arsip Yang Diunduh</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    include '../koneksi.php';
                    $no = 1;
                    $saya = $_SESSION['id'];
                    $timur = mysqli_query($koneksi,"SELECT * FROM histori,timur,petugas WHERE histori_timur=timur_id and histori_petugas=petugas_id ORDER BY histori_id DESC");
                    while($p = mysqli_fetch_array($timur)){
                        ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td><?php echo date('H:i:s  d-m-Y',strtotime($p['histori_waktu'])) ?></td>
                            <td><?php echo $p['petugas_nama'] ?></td>
                            <td><a style="color: blue" href="timur_preview.php?id=<?php echo $p['timur_id']; ?>"><?php echo $p['timur_izin'] ?></a></td>
                        </tr>
                        <?php 
                    }
                    ?>
                </tbody>
            </table>


        </div>

    </div>
</div>


<?php include 'footer.php'; ?>