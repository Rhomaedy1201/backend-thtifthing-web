<?php
include('connect.php');
session_start();
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Go-Thrift</title>
  <meta name="description" content="Ela Admin - HTML5 Admin Template">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="apple-touch-icon" href="images/icon.png">
  <link rel="shortcut icon" href="images/icon.png">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
  <link rel="stylesheet" href="assets/css/cs-skin-elastic.css">
  <link rel="stylesheet" href="assets/css/lib/datatable/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="assets/css/style.css">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>
  <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />

  <style>
    body {
      background-color: #f1f2f7;
    }

    #weatherWidget .currentDesc {
      color: #ffffff !important;
    }

    .traffic-chart {
      min-height: 335px;
    }

    #flotPie1 {
      height: 150px;
    }

    #flotPie1 td {
      padding: 3px;
    }

    #flotPie1 table {
      top: 20px !important;
      right: -10px !important;
    }

    .chart-container {
      display: table;
      min-width: 270px;
      text-align: left;
      padding-top: 10px;
      padding-bottom: 10px;
    }

    #flotLine5 {
      height: 105px;
    }

    #flotBarChart {
      height: 150px;
    }

    #cellPaiChart {
      height: 160px;
    }
  </style>
</head>

<body>
  <!-- Left Panel -->
  <aside id="left-panel" class="left-panel">
    <nav class="navbar navbar-expand-sm navbar-default">
      <div id="main-menu" class="main-menu collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="">
            <a href="dashboard.php"><i class="menu-icon fa ti-dashboard"></i>Dashboard
            </a>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa ti-clipboard"></i>Pesanan</a>
            <ul class="sub-menu children dropdown-menu">
              <li><i class="fa ti-minus"></i><a href="pesanan-saya.php">Pesanan Saya</a></li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa ti-briefcase"></i>Produk</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="produk-saya.php">Produk Saya</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon ti-wallet"></i>Keuangan</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="penghasilan-saya.php">Penghasilan Saya</a>
              </li>
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="rekening-bank.php">Rekening Bank</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children active dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa ti-archive"></i>Toko</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="profile-toko.php">Profil Toko</a>
              </li>
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="laporan-saya.php">Laporan Saya</a>
              </li>
            </ul>
          </li>

        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>
  <!-- /#left-panel -->
  <!-- Right Panel -->
  <div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
      <div class="top-left">
        <div class="navbar-header">
          <a class="navbar-brand" href="./"><img src="images/logo-light.png" alt="Logo"></a>
          <a class="navbar-brand hidden" href="./"><img src="images/logo-light.png" alt="Logo"></a>
          <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
        </div>
      </div>
      <div class="top-right">
        <div class="header-menu">
          <div class="header-left">
            <button class="search-trigger">
              <i class="fa fa-search"></i>
            </button>
            <div class="form-inline">
              <form class="search-form">
                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search" />
                <button class="search-close" type="submit">
                  <i class="fa fa-close"></i>
                </button>
              </form>
            </div>

          </div>

          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar" />
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="logout.php?logout=true"><i class="fa fa-power-off"></i>Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /#header -->

    <div class="breadcrumbs">
      <div class="breadcrumbs-inner">
        <div class="row m-0">
          <div class="col-sm-4">
            <div class="page-header float-left">
              <div class="page-title">
                <h1>Profile Toko</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <!-- <li><a href="produk-saya.php">Produk</a></li>
                  <li><a href="#">Toko</a></li>
                  <li class="active">Pengaturan</li> -->
                </ol>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- /#header -->
    <!-- Content -->
    <?php
    $email = $_SESSION['email'];
    $q = mysqli_query($conn, "SELECT * FROM `detail_alamat_user` JOIN `users` ON detail_alamat_user.id_user = users.id_user WHERE email = '$email'");
    while ($data = mysqli_fetch_array($q)):
      ?>
      <div class="content">
        <div class="animated fadeIn">
          <div class="row ">


            <div class="col-md-12">
              <section class="card">
                <div class="twt-feed blue-bg">
                  <div class="corner-ribon black-ribon">
                    <i class="fa"></i>
                  </div>
                  <div class="fa wtt-mark"></div>
                  <div class="media">
                    <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt=""
                      src="images/admin.jpg">
                    <div class="media-body">
                      <h2 class="text-white display-6"><?= $data['nama_lengkap'] ?>
                        <?php if ($data['status'] == "penjual") { ?>

                          <i class="fa fa-check-circle-o"></i>

                          <?php } ?>
                      </h2>
                      <p class="text-light"><?= $data['email'] ?></p>
                    </div>
                  </div>
                </div>


                <ul class="list-group list-group-flush">
                  <li class="list-group-item">
                    <a href="#"> No Hp : <?= $data['no_hp_kontak_alamat'] ?></a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">Status : <?= $data['status'] ?> </a>
                  </li>
                  <li class="list-group-item">
                    <a href="#">Alamat : <?= $data['provinsi'] ?>, <?= $data['detail_jalan'] ?>, <?= $data['kota'] ?>
                      <?= $data['kecamatan'] ?>, <?= $data['kode_pos'] ?>
                    </a>
                  </li>
                </ul>


              </section>
              <button type="button" class="btn btn-primary">
                <a href="pengaturan-toko.php?id=<?= $data['id_user'] ?>" class="text-white">
                  <i class="fa fa-pencil"></i>&nbsp;
                  Edit Toko
                </a>
              </button>
            </div>
          </div>
        </div><!-- .animated -->
      </div><!-- .content -->
      <?php endwhile; ?>


  </div>








  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="assets/js/main.js"></script>


  <script src="assets/js/lib/data-table/datatables.min.js"></script>
  <script src="assets/js/lib/data-table/dataTables.bootstrap.min.js"></script>
  <script src="assets/js/lib/data-table/dataTables.buttons.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.bootstrap.min.js"></script>
  <script src="assets/js/lib/data-table/jszip.min.js"></script>
  <script src="assets/js/lib/data-table/vfs_fonts.js"></script>
  <script src="assets/js/lib/data-table/buttons.html5.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.print.min.js"></script>
  <script src="assets/js/lib/data-table/buttons.colVis.min.js"></script>
  <script src="assets/js/init/datatables-init.js"></script>


  <script type="text/javascript">
    $(document).ready(function () {
      $('#bootstrap-data-table-export').DataTable();
    });
  </script>

</body>

</html>