<?php 
include('koneksi.php');
if(isset($_POST['add'])){
	$nama_siswa =$_POST['nama_siswa'];
	$nama_buku = $_POST['nama_buku'];
	$tanggal_pinjam = $_POST['tanggal_pinjam'];

	$sql = 'insert into perpus(nama_siswa,nama_buku,tanggal_pinjam) value("'.$nama_siswa.'","'.$nama_buku.'","'.$tanggal_pinjam.'")';
	$query = mysqli_query($db_link,$sql);

	if($query){
		header('location: index.php');

	}
	else{
		echo 'Gagal';
	}

	} ?>
