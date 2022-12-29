<?php 
include 'connect.php';
session_start();

$id = $_GET['id'];

$getPw = mysqli_query($conn, "SELECT kata_sandi FROM users WHERE id_user = '$id'");
$data = mysqli_fetch_array($getPw);
$pw = $data['kata_sandi'];

$nama_lengkap = $_POST['nama_lengkap'];
$no_hp = $_POST['no_hp'];
$status = $_POST['status'];
$pw_lama = $_POST['password_lama'];
$pw_baru = md5($_POST['password_baru']);


if (md5($pw_lama) === $pw) {
	$q = mysqli_query($conn, "UPDATE `users` SET `nama_lengkap`='$nama_lengkap',`no_hp`='$no_hp',`kata_sandi`='$pw_baru',`status`='$status' WHERE id_user = '$id'");
	header('location:profile-toko.php');
	
}else{
	$err = "";
	header("location:pengaturan-toko.php?id=".urlencode($id)."&err=".urlencode($err));
}
