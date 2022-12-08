<?php
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'databases.php';
// menangkap data yang dikirim dari form login
$email = $_POST['email'];
$kata_sandi = $_POST['kata_sandi'];
// menyeleksi data user dengan email dan kata_sandi yang sesuai
$login = mysqli_query($koneksi, "select * from users where email='$email' and kata_sandi='$kata_sandi'  ");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
// cek apakah email dan kata_sandi di temukan pada database
if ($cek > 0) {
	$data = mysqli_fetch_assoc($login);
	// cek jika user login sebagai admin
	if ($data['status'] == "penjual") {
		// buat session login dan email
		$_SESSION['email'] = $email;
		$_SESSION['status'] = "penjual";
		// alihkan ke halaman dashboard admin
		header("location:index.html");
		// cek jika user login sebagai user
	} else if ($data['status'] == "penjual") {
		// buat session login dpenjualname
		$_SESSION['email'] = $email;
		$_SESSION['status'] = "penjual";
		// alihkan ke halaman dashboard user
		header("location:index.html");
	} else {
		// alihkan ke halaman login kembali
		header("location:page-login.php?pesan=gagal");
	}
} else {
	header("location:page-login.php?pesan=gagal");
}