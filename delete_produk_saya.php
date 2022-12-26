<?php 

include 'connect.php';

$id = $_GET['id'];

$sql = mysqli_query($conn, "DELETE FROM produk_user where id_produk = '$id'");

header('location:produk-saya.php');

 ?>