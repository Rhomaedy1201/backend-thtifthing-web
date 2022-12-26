<?php

//memanggil koneksi database
include "databases.php";

//pengujian jika tombol simpan di klik
if (isset($_POST['tsimpan'])) {

        //persiapan simpan data baru
        $simpan = mysqli_query($koneksi, "INSERT INTO go_thrift (gambar, nama_produk, harga, stok, kondisi, bahan, merek, ukuran, motif, berat, deskripsi)
                                       VALUES ( '$_POST[tgambar]',
                                                '$_POST[tnama_produk]',
                                                '$_POST[tharga]',
                                                '$_POST[tstok]',
                                                '$_POST[tkondisi]',
                                                '$_POST[tbahan]',
                                                '$_POST[tmerk]',
                                                '$_POST[tukuran]',
                                                '$_POST[tmotif]',
                                                '$_POST[tberat]',
                                                '$_POST[tdeskripsi]') ");
        //jika simpan data sukses
        if ($simpan) {
                echo "<script>
                alert('Simpan Data Sukses!');
                document.location='produk-saya.php';
            </script>";
        } else {
                echo "<script>
        alert('Simpan Data Gagal!');
                document.location='produk-saya.php';
        </script>";
        }
}

?>