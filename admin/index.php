<?php
if (isset($_SESSION['email'])) {
    header("Location: dashboard.php");
}
// mengaktifkan session pada php
session_start();
// menghubungkan php dengan koneksi database
include 'connect.php';
// menangkap data yang dikirim dari form login
if (isset($_POST['submit'])) {
    // Ambil data dari form login
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $kata_sandi = mysqli_real_escape_string($conn, $_POST['kata_sandi']);

    // Validasi input
    if (empty($email) || empty($kata_sandi)) {
        $error = "email dan kata sandi harus diisi!";
    } else {
        // Validasi email
        if (!$email) {
            $error = "email tidak ditemukan";
        } else {
            // Ambil kata_sandi hash dari database
            $query = "SELECT * FROM users WHERE email = '$email'";
            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $hash = $row['kata_sandi'];
            $status = $row['status'];

            // Bandingkan kata_sandi dengan hash yang tersimpan di database
            if (md5($kata_sandi) === $hash) {
                // Buat session jika kata_sandi sesuai
                $_SESSION['email'] = $email;
                if ($status === "super admin") {
                    header("Location: tambah-kategori.php");
                    exit;
                } elseif ($status === "penjual") {
                    header("Location: dashboard.php");
                    exit;
                } else {
                    $error = "status user, tidak bisa login";
                }
            } else {
                // var_dump(md5($kata_sandi) === $hash);
                $error = "email atau kata sandi salah!";


            }
        }
    }
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Go-Thrift</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <link rel="apple-touch-icon" href="images/icon.png" />
    <link rel="shortcut icon" href="images/icon.png" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" />
    <link rel="stylesheet" href="assets/css/cs-skin-elastic.css" />
    <link rel="stylesheet" href="assets/css/style.css" />

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800" rel="stylesheet" type="text/css" />

    <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
</head>

<body class="bg-dark">
    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="index.html">
                        <img class="align-content w-75" src="images/logo-dark.png" alt="" />
                    </a>
                </div>
                <br>
                <div class="login-form">
                    <form action="" method="post">
                        <?php
                        if (isset($error)) {
                            echo "<p>$error</p>";
                        }
                        ?>
                        <div class="form-group">
                            <label>Alamat Email</label>
                            <input type="text" name="email" class="form-control" placeholder="Email" />
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" name="kata_sandi" class="form-control" placeholder="Password" />
                        </div>

                        <button type="submit" name="submit" class="btn btn-outline-success"
                            style="background-color: #9E3EFF; color: aliceblue;">Masuk</button>
                        <a href="../index.php">Kembali</a>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>