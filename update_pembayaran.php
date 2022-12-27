<?php 

include 'connect.php';
$id = $_GET['id'];
	$sql = mysqli_query($conn, "UPDATE `transaksi` SET `status`= 'sudah bayar' WHERE id_transaksi = '$id'");
	header('location:pesanan-saya.php');


 ?>