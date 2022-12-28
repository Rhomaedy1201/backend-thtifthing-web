<?php 
include 'connect.php';
session_start();

$email = $_SESSION['email'];
$getid = mysqli_query($conn, "SELECT id_user FROM `users` where email = '$email' ");
$gid = mysqli_fetch_array($getid);
$id = $gid['id_user'];

$namabank = $_POST['namaBank'];
$norekening = $_POST['noRekening'];
$namapemilik = $_POST['namaPemilik'];

$sql2 = mysqli_query($conn, "INSERT INTO `rekening_bank`(`id_user`, `nama_bank`, `no_rekening`, `nama_pemilik_bank`) VALUES ('$id','$namabank','$norekening','$namapemilik')");

header('location:rekening-bank.php');

 ?>