<?php 

	include 'connect.php';

	$id_kategori = $_POST['id_kategori'];
    $nama_kategori = $_POST['nama_kategori'];
    $gambar = addslashes(file_get_contents($_FILES['tgambar']['tmp_name']));

    
    if ($id_kategori == '' || $nama_kategori == '') {
        echo "Please fill out all the required fields.";
        header('location:tambah-kategori.php');
    } else {
        $sql = "UPDATE `kategori_barang` SET `nama_kategori`='$nama_kategori'";
        if ($gambar != '') {
            $sql .= ", `gambar`='$gambar'";
        }
        $sql .= " WHERE `id_kategori`='$id_kategori'";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            header('location:tambah-kategori.php');
        } else {
            header('location:tambah-kategori.php');
        }
    }

 ?>