<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

$waktu = date('Y-m-d H:i:s'); 
$petugas = $_SESSION['id'];
$izin  = $_POST['izin'];
$alamat  = $_POST['alamat'];
$pengusaha  = $_POST['pengusaha'];
$sk  = $_POST['sk'];
$lemari = $_POST['lemari'];
$box = $_POST['box'];

$rand = rand();

$filename = $_FILES['file']['name'];
$jenis = pathinfo($filename, PATHINFO_EXTENSION);

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

if($jenis == "php") {
	header("location:timur.php?alert=gagal");
}else{
	move_uploaded_file($_FILES['file']['tmp_name'], '../timur/'.$rand.'_'.$filename);
	$nama_file = $rand.'_'.$filename;
	mysqli_query($koneksi, "insert into timur values (NULL,'$waktu','$petugas', '$izin', '$alamat', '$pengusaha', '$sk', '$lemari', '$box','$jenis','$kategori','$keterangan','$nama_file')")or die(mysqli_error($koneksi));
	header("location:timur.php?alert=sukses");
}
