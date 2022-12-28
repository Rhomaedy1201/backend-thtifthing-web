<?php 

include 'connect.php';
$id = $_GET['id'];
echo $id;
	$sql = mysqli_query($conn, "UPDATE `transaksi` SET `status`= 'Dikirim' WHERE id_transaksi = '$id'");
	header('location:pesanan-saya.php');


 ?>