<?php 
include '../koneksi.php';
$id = $_GET['id'];

// hapus file lama
$lama = mysqli_query($koneksi,"select * from timur where timur_id='$id'");
$l = mysqli_fetch_assoc($lama);
$nama_file_lama = $l['timur_file'];
unlink("../timur/".$nama_file_lama);

mysqli_query($koneksi, "delete from timur where timur_id='$id'");
header("location:timur.php");
