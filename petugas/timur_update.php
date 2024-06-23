<?php 
include '../koneksi.php';
session_start();
date_default_timezone_set('Asia/Jakarta');

// $waktu = date('Y-m-d H:i:s'); 
// $petugas = $_SESSION['id'];
$id  = $_POST['id'];
$izin   = $_POST['izin'];
$alamat = $_POST['alamat'];
$pengusaha  = $_POST['pengusaha'];
$sk     = $_POST['sk'];
$lemari = $_POST['lemari'];
$box    = $_POST['box'];

$rand = rand();

$filename = $_FILES['file']['name'];

$kategori = $_POST['kategori'];
$keterangan = $_POST['keterangan'];

if($filename == ""){

	mysqli_query($koneksi, "update timur set timur_izin='$izin', timur_alamat='$alamat', timur_pengusaha='$pengusaha', timur_sk='$sk', timur_lemari='$lemari', timur_box='$box', timur_kategori='$kategori', timur_keterangan='$keterangan' where timur_id='$id'")or die(mysqli_error($koneksi));
	header("location:timur.php");

}else{

	$jenis = pathinfo($filename, PATHINFO_EXTENSION);

	if($jenis == "php") {
		header("location:timur.php?alert=gagal");
	}else{

		// hapus file lama
		$lama = mysqli_query($koneksi,"select * from timur where timur_id='$id'");
		$l = mysqli_fetch_assoc($lama);
		$nama_file_lama = $l['timur_file'];
		unlink("../timur/".$nama_file_lama);

		// upload file baru
		move_uploaded_file($_FILES['file']['tmp_name'], '../timur/'.$rand.'_'.$filename);
		$nama_file = $rand.'_'.$filename;
		mysqli_query($koneksi, "update timur set timur_izin='$izin', timur_alamat='$alamat', timur_pengusaha='$pengusaha', timur_sk='$sk', timur_lemari='$lemari', timur_box='$box', timur_jenis='$jenis', timur_kategori='$kategori', timur_keterangan='$keterangan', timur_file='$nama_file' where timur_id='$id'")or die(mysqli_error($koneksi));
		header("location:timur.php?alert=sukses");
	}
}

