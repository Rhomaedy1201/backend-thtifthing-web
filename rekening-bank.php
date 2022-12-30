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

  <link rel="apple-touch-icon" href="https://i.imgur.com/QRAUqs9.png">
  <link rel="shortcut icon" href="https://i.imgur.com/QRAUqs9.png">

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

  <!-- card bank -->
  <link href="https://fonts.googleapis.com/css?family=Inconsolata" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Quicksand" rel="stylesheet">
  <link rel="stylesheet" href="https://pattern.kivan-works.com/fonts/kredit.css">
  <link rel="stylesheet" href="assets/css/style-card-bank.css" />

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
          <li class="menu-item-has-children active dropdown">
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
          <a class="navbar-brand" href="./"><img src="images/gothrif.png" alt="Logo"></a>
          <a class="navbar-brand hidden" href="./"><img src="images/gothrif.png" alt="Logo"></a>
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
              <a class="nav-link" href="page-login.php"><i class="fa fa-power-off"></i>Logout</a>
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
                <h1>Rekening Bank</h1>
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

    <div class="content">
      <div class="animated fadeIn">
        <div class="row">
          <?php
          $email = $_SESSION['email'];
          $getid = mysqli_query($conn, "SELECT id_user FROM `users` where email = '$email' ");
          $gid = mysqli_fetch_array($getid);
          $id = $gid['id_user'];
          $q = mysqli_query($conn, "SELECT * FROM `rekening_bank` where id_user = '$id' ");
          while ($data = mysqli_fetch_array($q)):
            ?>
            <div class="container-card">
              <a href="#" data-toggle="modal" data-target="#editCard<?= $data['id_rekening'] ?>">
                <header>
                  <span class="logo-card">
                    <h5>BANK <?= strtoupper($data['nama_bank']) ?></ h5>
                  </span>
                </header>

                <div class="card-details">
                  <div class="name-number">
                    <h6>Card Number</h6>
                    <h5 class="number">
                      <?= $data['no_rekening'] ?>
                    </h5>
                    <h5 class="name"><?= $data['nama_pemilik_bank'] ?></h5>
                  </div>
                  <div class="valid-date">
                  </div>
                </div>
              </a>
            </div>
            <?php endwhile; ?>

          <div class="container-card">
            <a href="#" data-toggle="modal" data-target="#inputCard">
              <header>
                <span class="logo-card">
                  <h5>Klik untuk menambah bank</h5>
                </span>
              </header>

              <div class="card-details">
                <div class="name-number">
                  <h6>Card Number</h6>
                  <h5 class="number">****************</h5>
                  <h5 class="name">.........</h5>
                </div>
                <div class="valid-date">
                </div>
              </div>
            </a>
          </div>


        </div>
      </div><!-- .animated -->
    </div><!-- .content -->


  </div>


  <!-- Modal -->
  <form method="post" action="tambah_rekening.php">
    <div class="modal fade" id="inputCard" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-header"></div>
                <div class="card-body card-block">
                  <form action="#" method="post" class="">
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                        <input type="text" id="username" name="namaBank" placeholder="Nama Bank" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-code-fork"></i></div>
                        <input type="number" id="email" name="noRekening" placeholder="No Rekening"
                          class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                        <input type="text" id="password" name="namaPemilik" placeholder="Nama Pemilik"
                          class="form-control">
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
            <button type="submit" class="btn btn-primary">Simpan Bank</button>
          </div>
        </div>
      </div>
    </div>
  </form>


  <!-- edit -->
  <?php
  $q1 = mysqli_query($conn, "SELECT * FROM `rekening_bank`");
  while ($data1 = mysqli_fetch_array($q1)):
    ?>
    <form method="post" action="ubah_rekening.php?id=<?= $data1['id_rekening'] ?>">
      <div class="modal fade" id="editCard<?= $data1['id_rekening'] ?>" tabindex="-1" role="dialog"
        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header"></div>
                  <div class="card-body card-block">
                    <form action="#" method="post" class="">
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-credit-card"></i></div>
                          <input type="text" id="username" value="<?= $data1['nama_bank'] ?>" name="namaBank"
                            placeholder="Nama Bank" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-code-fork"></i></div>
                          <input type="number" id="email" value="<?= $data1['no_rekening'] ?>" name="noRekening"
                            placeholder="No Rekening" class="form-control">
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="input-group">
                          <div class="input-group-addon"><i class="fa fa-user-circle"></i></div>
                          <input type="text" id="password" value="<?= $data1['nama_pemilik_bank'] ?>" name="namaPemilik"
                            placeholder="Nama Pemilik" class="form-control">
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Keluar</button>
              <button type="submit" class="btn btn-primary">Ubah Bank</button>
            </div>
          </div>
        </div>
      </div>
    </form>
    <?php endwhile; ?>
  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
  <script src="assets/js/main.js"></script>


</body>

</html>