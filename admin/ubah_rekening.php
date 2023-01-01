<?php 
include 'connect.php';
session_start();
$id = $_GET['id'];
$namabank = $_POST['namaBank'];
$norekening = $_POST['noRekening'];
$namapemilik = $_POST['namaPemilik'];

$sql3 = mysqli_query($conn, "UPDATE `rekening_bank` SET `nama_bank`='$namabank',`no_rekening`='$norekening',`nama_pemilik_bank`='$namapemilik' WHERE id_rekening = '$id'");
header('location:rekening-bank.php');

?>