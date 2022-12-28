<?php
include 'connect.php';
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
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <title>Go-Thrift</title>
  <meta name="description" content="Ela Admin - HTML5 Admin Template" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />

  <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png" />
  <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png" />

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css" />
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css" />
  <link rel="stylesheet" href="assets/css/cs-skin-elastic.css" />
  <link rel="stylesheet" href="assets/css/style.css" />
  <!-- <script type="text/javascript" src="https://cdn.jsdelivr.net/html5shiv/3.7.3/html5shiv.min.js"></script> -->
  <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet" />

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
            <a href="dashboard.php"><i class="menu-icon fa ti-dashboard"></i>Dashboard</a>
          </li>
          <li class="menu-item-has-children active dropdown">
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
                <i class="menu-icon fa ti-minus"></i><a href="#">Penghasilan Saya</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
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
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa ti-settings"></i>Pengaturan</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Pengaturan Toko</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!-- /.navbar-collapse -->
    </nav>
  </aside>

  <!-- Left Panel -->

  <!-- Right Panel -->

  <div id="right-panel" class="right-panel">
    <!-- Header-->
    <header id="header" class="header">
      <div class="top-left">
        <div class="navbar-header">
          <a class="navbar-brand" href="./"><img src="images/logo.png" alt="Logo" /></a>
          <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo" /></a>
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

            <div class="dropdown for-notification">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-bell"></i>
                <span class="count bg-danger">3</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="notification">
                <p class="red">You have 3 Notification</p>
                <a class="dropdown-item media" href="#">
                  <i class="fa fa-check"></i>
                  <p>Server #1 overloaded.</p>
                </a>
                <a class="dropdown-item media" href="#">
                  <i class="fa fa-info"></i>
                  <p>Server #2 overloaded.</p>
                </a>
                <a class="dropdown-item media" href="#">
                  <i class="fa fa-warning"></i>
                  <p>Server #3 overloaded.</p>
                </a>
              </div>
            </div>

            <div class="dropdown for-message">
              <button class="btn btn-secondary dropdown-toggle" type="button" id="message" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-envelope"></i>
                <span class="count bg-primary">4</span>
              </button>
              <div class="dropdown-menu" aria-labelledby="message">
                <p class="red">You have 4 Mails</p>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Jonathan Smith</span>
                    <span class="time float-right">Just now</span>
                    <p>Hello, this is an example msg</p>
                  </div>
                </a>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Jack Sanders</span>
                    <span class="time float-right">5 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                  </div>
                </a>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Cheryl Wheeler</span>
                    <span class="time float-right">10 minutes ago</span>
                    <p>Hello, this is an example msg</p>
                  </div>
                </a>
                <a class="dropdown-item media" href="#">
                  <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg" /></span>
                  <div class="message media-body">
                    <span class="name float-left">Rachel Santos</span>
                    <span class="time float-right">15 minutes ago</span>
                    <p>Lorem ipsum dolor sit amet, consectetur</p>
                  </div>
                </a>
              </div>
            </div>
          </div>

          <div class="user-area dropdown float-right">
            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true"
              aria-expanded="false">
              <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar" />
            </a>

            <div class="user-menu dropdown-menu">
              <a class="nav-link" href="#"><i class="fa fa-user"></i>My Profile</a>

              <a class="nav-link" href="#"><i class="fa fa-bell-o"></i>Notifications
                <span class="count">13</span></a>

              <a class="nav-link" href="#"><i class="fa fa-cog"></i>Settings</a>

              <a class="nav-link" href="#"><i class="fa fa-power-off"></i>Logout</a>
            </div>
          </div>
        </div>
      </div>
    </header>
    <!-- /header -->
    <!-- Header-->

    <div class="breadcrumbs">
      <div class="breadcrumbs-inner">
        <div class="row m-0">
          <div class="col-sm-4">
            <div class="page-header float-left">
              <div class="page-title">
                <h1>Pesanan Saya</h1>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="content">
      <div class="animated fadeIn">
        <div class="row">

          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title">Data Pesanan</strong>
              </div>
              <div class="card-body bg-white">
                <h5><?php

                $q = mysqli_query($conn, "SELECT COUNT(id_transaksi) FROM transaksi");
                $pesanan = mysqli_fetch_array($q);
                echo $pesanan['COUNT(id_transaksi)'];

                ?> Pesanan</h5>
                <br>
                <div class="table-stats bg-light rounded">
                  <table class="table">
                    <thead class="">
                      <tr>
                        <th class="align-top" style="width: 45%;">Produk</th>
                        <th class="align-top" style="width: 20%;">Jumlah Harus Dibayar</th>
                        <th class="align-top" style="width: 10%;">Status</th>
                        <th class="align-top" style="width: 10%;">Tanggal Pembelian</th>
                        <th class="align-top" style="width: 15%;">Aksi</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div>
                  <?php

                  $sql = mysqli_query($conn, "SELECT DISTINCT id_alamat_user FROM transaksi");
                  while ($data = mysqli_fetch_array($sql)):
                  ?>
                  <!-- item transaksi atau pesanan saya -->
                  <?php
                    $id = $data['id_alamat_user'];
                    $sql1 = mysqli_query($conn, "SELECT DISTINCT detail_alamat_user.nama_lengkap_kontak_alamat, 
                                                  detail_alamat_user.id_alamat_user 
                                                  FROM transaksi INNER JOIN detail_alamat_user 
                                                  ON detail_alamat_user.id_alamat_user = transaksi.id_alamat_user
                                                  WHERE transaksi.id_alamat_user = '$id'");
                    while ($data1 = mysqli_fetch_array($sql1)):
                  ?>
                  <div class="card">
                    <div class="card-header bg-flat-color-2">
                      <strong class="card-title color-white">
                        <?= $data1['nama_lengkap_kontak_alamat'] ?></strong>
                    </div>
                    <div class="table table-item table-stats">

                      <table>
                        <style>
                          .table-item,
                          td h6 {
                            font-size: 13px;
                          }
                        </style>
                        <?php
                      $sql2 = mysqli_query($conn, "SELECT transaksi.id_transaksi,id_alamat_user, produk_user.nama_produk, produk_user.harga, transaksi.status, produk_user.gambar, tanggal_beli, detail_transaksi.jumlah 
                                                        FROM produk_user INNER JOIN transaksi INNER JOIN detail_transaksi 
                                                        ON produk_user.id_produk = detail_transaksi.id_produk 
                                                        AND transaksi.id_transaksi = detail_transaksi.id_transaksi
                                                        WHERE id_alamat_user = '$id'");
                      while ($data2 = mysqli_fetch_array($sql2)):
                        ?>
                        <tr>
                          <td class="align-top" style="width: 100%; display: flex; justify-content: space-between; ">
                            <div class="item" style="display: flex;">
                              <img class="rounded image-table" src="" alt="">
                              <p><?='<img src="data:image/png;base64,' . base64_encode($data2['gambar']) . '">' ?></p>
                              <h6 style="font-weight: 500;"><?= $data2['nama_produk'] ?></h6>
                            </div>
                            <div>
                              <p><?= $data2['jumlah'] ?>x</p>
                            </div>
                          </td>
                          <td class="align-top" style="width: 17%;">Rp<?= $data2['harga'] ?></td>
                          <td class="align-top" style="width: 10%;"><?= $data2['status'] ?></td>
                          <td class="align-top" style="width: 10%;"><?= date('d-m-Y', strtotime($data2['tanggal_beli'])) ?></td>
                          <td class="align-top" style="width: 15%;">
                            <a href="" style="font-size: 5;" data-toggle="modal" class="text-info"
                              id="btnRincianPesanan" data-target="#rincianPesanan<?= $data2['id_transaksi'] ?>">
                              <i class="ti-receipt"></i>
                              Periksa Rician</a>
                        </tr>
                        <?php endwhile; ?>
                      </table>

                    </div>
                  </div>
                  <!-- akhir per item -->
                  <?php endwhile; ?>
                  <?php endwhile; ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- .animated -->
    </div><!-- .content -->

    <!-- periksa rincian -->
    <!-- modals -->
    <!-- Modal -->
    <!-- Modal -->
    <?php
    $sql = mysqli_query($conn, "SELECT transaksi.id_transaksi,transaksi.id_alamat_user, transaksi.status, bukti_pembayaran,no_resi, harga_pengiriman, nama_pengiriman, detail_jalan, 
                              detail_patokan, provinsi, kota, kode_pos
                              FROM detail_alamat_user INNER JOIN transaksi INNER JOIN metode_pengiriman 
                              ON detail_alamat_user.id_alamat_user = transaksi.id_alamat_user 
                              AND transaksi.id_pengiriman = metode_pengiriman.id_pengiriman");

    while ($data3 = mysqli_fetch_array($sql)):
    ?>
    <div class="modal fc-center fade" id="rincianPesanan<?= $data3['id_transaksi'] ?>" data-backdrop="static"
      tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalCenterTitle">Rincian pesanan</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="col-lg-20">
              <div class="card">
                <form method="post" action="update_pembayaran.php?id=<?= $data3['id_transaksi'] ?>">

                  <!-- data table modals -->
                  <!-- <div class="table-stats bg-light rounded"> -->
                  <div class="table-stats order-table ov-h bg-light">
                    <table class="table ct-start">
                      <thead class="ct-start">
                        <tr>
                          <th class="align-top"><?php echo $data3['id_transaksi'] ?>Alamat</th>
                          <th class="align-top">Jenis Pengiriman</th>
                          <th class="align-top">Ongkir</th>
                          <th class="align-top">No Resi</th>
                          <th class="align-top">Bukti Pembayaran</th>
                          <th class="align-top">Aksi</th>
                        </tr>
                      </thead>
                      <tr>
                        <td class="align-top"><?= $data3['detail_jalan'] ?>,<br><?= $data3['detail_patokan'] ?><br><?= $data3['provinsi'] ?>, <?= $data3['kota'] ?><br>POS <?= $data3['kode_pos'] ?></td>
                        <td class="align-top"><?= $data3['nama_pengiriman'] ?></td>
                        <td class="align-top">Rp<?= $data3['harga_pengiriman'] ?></td>
                        <td class="align-top">JT0923873666</td>
                        <td class="align-top"><?='<img src="data:image/png;base64,' . base64_encode($data3['bukti_pembayaran']) . '">' ?></td>
                        <?php
      if ($data3['status'] == "belum dibayar") {

      } elseif ($data3['status'] == "Diproses") {
                        ?>
                        <td class="align-top">
                          <a href="update_resi.php?id=<?= $data3['id_transaksi'] ?>" id="btn-update-resi"
                            class="btn btn-outline-warning btn-sm"><i class="fa fa-edit"></i>&nbsp;
                            Update Resi</a>
                        </td>
                        <?php } ?>
                      </tr>
                    </table>
                  </div>

                  <!-- end content table modals -->
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary btn-terimaPembayaran" name="up">Terima Pembayaran
              dan Proses
              Barang</button>
          </div>
          </form>
        </div>
      </div>
    </div>
    <?php endwhile; ?>

  </div>

  <!-- modals script -->
  <script>
    function disableBtn() {
      document.getElementById('btn-update-resi').disabled = false;
    }
  </script>

  <!-- /#right-panel -->

  <!-- Right Panel -->

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="assets/js/main.js"></script>

  <!--  Chart js -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

  <!--Chartist Chart-->
  <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
  <script src="assets/js/init/weather-init.js"></script>

  <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
  <script src="assets/js/init/fullcalendar-init.js"></script>

</body>

</html>