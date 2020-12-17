<?php 
include('koneksi.php');
$ni = $_GET['ni'];

$sql = 'delete from keranjangbelanja where id_belanja="'.$ni.'"';
$query = mysqli_query($db_link,$sql);
header('location: index1.php');

?>