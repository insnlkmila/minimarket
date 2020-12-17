<?php
include('koneksi.php');
if(isset($_POST['edit'])){ 
  $id_barang =$_POST['id_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga = $_POST['harga'];
  $keterangan = $_POST['keterangan'];
  
  $sql	= 'update barang set nama_barang="'.$nama_barang.'", harga="'.$harga.'", keterangan="'.$keterangan.'" where id_barang="'.$id_barang.'"';
  $query  = mysqli_query($db_link,$sql);
  
  if($query){
    header('location: data_barang.php'); 
  }
  else{
    echo 'Gagal';
  }
}
?>
