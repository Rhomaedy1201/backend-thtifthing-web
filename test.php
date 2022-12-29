<?php 

include 'connect.php';

$query = "SELECT * FROM `kategori_barang` where id_kategori = 'TS001'";

// Jalankan query
$result = mysqli_query($conn, $query);

// Ambil data dari hasil query
$d = mysqli_fetch_array($result);
$id = $d['id_kategori'];

// Hilangkan karakter "TS" pada ID
$pisahts = substr($id, 2, 3);

// Tambahkan 1 pada ID
$hasil = $pisahts + 1;

// Tambahkan karakter "TS" kembali pada ID
$hasil = "TS" . sprintf("%03d", $hasil);

echo $hasil;
 ?>