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
  <title>Ela Admin - HTML5 Admin Template</title>
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
            <a href="index.php"><i class="menu-icon fa ti-dashboard"></i>Dashboard</a>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa ti-truck"></i>Pengiriman</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="fa ti-minus"></i><a href="#">Pengiriman Saya</a>
              </li>
              <li>
                <i class="fa ti-minus"></i><a href="#">Pengaturan Pengiriman</a>
              </li>
            </ul>
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
              <i class="menu-icon fa fa-bar-chart-o"></i>Data</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Produk Saya</a>
              </li>
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Tambah Produk Baru</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa ti-comments"></i>Layanan Konsumen</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Asisten Chat</a>
              </li>
            </ul>
          </li>
          <li class="menu-item-has-children dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="menu-icon fa ti-archive"></i>Toko</a>
            <ul class="sub-menu children dropdown-menu">
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Penilaian Toko</a>
              </li>
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Profil Toko</a>
              </li>
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Laporan Saya</a>
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
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Akun</a>
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
                <h5>12 Pesanan</h5>
                <br>
                <div class="table-stats bg-light rounded">
                  <table class="table">
                    <thead class="">
                      <tr>
                        <th class="align-top" style="width: 45%;">Produk</th>
                        <th class="align-top" style="width: 20%;">Jumlah Harus Dibayar</th>
                        <th class="align-top" style="width: 10%;">Jasa Kirim</th>
                        <th class="align-top" style="width: 10%;">Tanggal Pembelian</th>
                        <th class="align-top" style="width: 15%;">Aksi</th>
                      </tr>
                    </thead>
                  </table>
                </div>
                <div>

                  <!-- item transaksi atau pesanan saya -->
                  <div class="card">
                    <div class="card-header bg-flat-color-2">
                      <strong class="card-title color-white">
                        Akbar</strong>
                    </div>
                    <div class="table table-item table-stats">

                      <table>
                        <style>
                          .table-item,
                          td h6 {
                            font-size: 13px;
                          }
                        </style>
                        <tr>
                          <td class="align-top" style="width: 100%; display: flex; justify-content: space-between; ">
                            <div class="item" style="display: flex;">
                              <img class="rounded image-table" src="images/avatar/1.jpg" alt="">
                              <h6 style="font-weight: 500;">Baju Bekas Berkualitas</h6>
                            </div>
                            <div>
                              1x
                            </div>
                          </td>
                          <td class="align-top" style="width: 17%;">Rp45.000</td>
                          <td class="align-top" style="width: 10%;">Pos Regular</td>
                          <td class="align-top" style="width: 10%;">12-Des-2022</td>
                          <td class="align-top" style="width: 15%;"><a href="#" style="font-size: 5;">
                              <i class="ti-receipt"></i>
                              Periksa Rician</a>
                          </td>
                        </tr>
                      </table>

                    </div>
                  </div>
                  <!-- akhir per item -->

                </div>
              </div>
            </div>
          </div>


        </div>
      </div><!-- .animated -->
    </div><!-- .content -->


  </div>
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