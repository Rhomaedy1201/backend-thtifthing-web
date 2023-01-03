<?php

include 'connect.php';
$id = $_GET['id'];
$no_resi = $_POST['no_resi'];
$sql = mysqli_query($conn, "UPDATE `transaksi` SET `no_resi`= '$no_resi' WHERE id_transaksi = '$id'");
header('location:pesanan-saya.php');


?>