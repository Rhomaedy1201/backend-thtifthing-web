<?php
//koneksi database
$server = "localhost";
$user = "root";
$password = "";
$db = "go_thrift";

//buat koneksi
$koneksi = mysqli_connect($server, $user, $password, $db) or die(mysqli_error($koneksi));