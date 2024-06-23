<?php include 'header.php'; ?>
<div class="breadcome-area">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcome-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcome-heading">
                                <h4 style="margin-bottom: 0px">Preview Arsip</h4>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <ul class="breadcome-menu" style="padding-top: 0px">
                                <li><a href="index.php#">Home</a> <span class="bread-slash">/</span></li>
                                <li><span class="bread-blod">Preview Arsip</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid">


    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel">

                <div class="panel-heading">
                    <h3 class="panel-title">Preview Arsip</h3>
                </div>
                <div class="panel-body">

                    <a href="timur.php" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i> Kembali</a>

                    <br>
                    <br>

                    <?php 
                    $id = $_GET['id'];  
                    $data = mysqli_query($koneksi,"SELECT * FROM timur,kategori,petugas WHERE timur_petugas=petugas_id and timur_kategori=kategori_id and timur_id='$id'");
                    while($d = mysqli_fetch_array($data)){
                        ?>

                        <div class="row">
                            <div class="col-lg-4">

                                <table class="table">
                                    <tr>
                                        <th>Jenis Perizinan</th>
                                        <td><?php echo $d['timur_izin']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Alamat</th>
                                        <td><?php echo $d['timur_alamat']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Nama Pengusaha / Badan Usaha</th>
                                        <td><?php echo $d['timur_pengusaha']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>No SK</th>
                                        <td><?php echo $d['timur_sk']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Filing Cabinet / Lemari Arsip</th>
                                        <td><?php echo $d['timur_lemari']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Box</th>
                                        <td><?php echo $d['timur_box']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Waktu Upload</th>
                                        <td><?php echo date('H:i:s  d-m-Y',strtotime($d['timur_waktu_upload'])) ?></td>
                                    </tr>
                                    <tr>
                                        <th>Kategori</th>
                                        <td><?php echo $d['kategori_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Jenis File</th>
                                        <td><?php echo $d['timur_jenis']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Petugas Pengupload</th>
                                        <td><?php echo $d['petugas_nama']; ?></td>
                                    </tr>
                                    <tr>
                                        <th>Keterangan</th>
                                        <td><?php echo $d['timur_keterangan']; ?></td>
                                    </tr>
                                </table>

                            </div>
                            <div class="col-lg-8">

                                <?php 
                                if($d['timur_jenis'] == "png" || $d['timur_jenis'] == "jpg" || $d['timur_jenis'] == "gif" || $d['timur_jenis'] == "jpeg"){
                                    ?>
                                    <img src="../timur/<?php echo $d['timur_file']; ?>">
                                    
                                    <?php
                                }elseif($d['timur_jenis'] == "pdf"){
                                    ?>

                                    <div class="pdf-singe-pro">
                                        <a class="media" href="../timur/<?php echo $d['timur_file']; ?>"></a>
                                    </div>

                                    <?php
                                }else{
                                    ?>
                                    <p>Preview tidak tersedia, silahkan upload file terlebih dahulu</p>.
                                    <?php
                                }
                                ?>

                            </div>
                        </div>







                        <?php 
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>


</div>



<?php include 'footer.php'; ?>