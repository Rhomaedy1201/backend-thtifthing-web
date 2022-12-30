<?php 

include 'connect.php';

$query = "SELECT * FROM `kategori_barang` ORDER BY id_kategori DESC LIMIT 1";
$result = mysqli_query($conn, $query);
$d = mysqli_fetch_array($result);
$id = $d['id_kategori'];
$pisahts = substr($id, 2, 3);
$hasil = $pisahts + 1;
$hasil = "TS" . sprintf("%03d", $hasil);

echo $hasil;
 ?>