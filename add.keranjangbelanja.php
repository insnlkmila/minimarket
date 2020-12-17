<?php 
include('koneksi.php');
if(isset($_POST['add'])){
	$id_belanja =$_POST['id_belanja'];
	$nama_barang = $_POST['nama_barang'];
	$jumlah = $_POST['jumlah'];
	$harga = $_POST['harga'];

	$sql = 'insert into keranjangbelanja(id_belanja,nama_barang,jumlah,harga) value("'.$id_belanja.'","'.$nama_barang.'","'.$jumlah.'","'.$harga.'")';
	$query = mysqli_query($db_link,$sql);

	if($query){
		header('location: index1.php');

	}
	else{
		echo 'Gagal';
	}

	} ?>




