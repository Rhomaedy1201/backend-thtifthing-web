<?php 
include 'connect.php';
session_start();

$e = $_SESSION['email'];
$q = mysqli_query($conn, "SELECT * FROM users where email = '$e'");
$row = mysqli_fetch_assoc($q);

$kategori_barang = $_POST['tkategori_barang'];
$q2 = mysqli_query($conn, "SELECT * FROM kategori_barang where nama_kategori = '$kategori_barang'");
$row2 = mysqli_fetch_array($q2);

$id_user = $row['id_user'];
$id_kategori = $row2['id_kategori'];
$nama_produk = $_POST['tnama_produk'];
$harga = $_POST['tharga'];
$stok = $_POST['tstok'];
$gambar = addslashes(file_get_contents($_FILES['tgambar']['tmp_name']));
$kondisi = $_POST['tkondisi'];
$bahan = $_POST['tbahan'];
$merek = $_POST['tmerk'];
$ukuran = $_POST['tukuran'];
$motif = $_POST['tmotif'];
$berat = $_POST['tberat'];
$deskripsi = $_POST['tdeskripsi'];
$id_terjual = 0;




$id_user = $row['id_user'];
$sql2 = mysqli_query($conn, "INSERT INTO `produk_user`(`id_user`, `id_kategori`, `nama_produk`, `harga`, `stok`, `gambar`, `kondisi`, `bahan`, `merek`, `ukuran`, `motif`, `berat`, `deskripsi`, `terjual`) VALUES ('$id_user','$id_kategori','$nama_produk','$harga','$stok','$gambar','$kondisi','$bahan','$merek','$ukuran','$motif','$berat','$deskripsi','$id_terjual')");

header('location:produk-saya.php');

 ?>