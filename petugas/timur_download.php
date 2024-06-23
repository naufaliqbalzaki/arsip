<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s'); 
$petugas = $_SESSION['id'];
$timur = $_GET['id'];

mysqli_query($koneksi, "insert into histori values (NULL,'$waktu','$petugas','$timur')")or die(mysqli_error($koneksi));

$data = mysqli_query($koneksi,"select * from timur where timur_id='$timur'");
$d = mysqli_fetch_assoc($data);
header("location:../timur/".$d['timur_file']);

