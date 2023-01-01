<?php
include 'connect.php';
session_start();

if (!isset($_SESSION['email'])) {
  header("Location: index.php");
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
  <title>
    <?= $_SESSION['email'] ?>
  </title>
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
          <li class="active">
            <a href="tambah-kategori.php"><i class="menu-icon ti-view-list-alt"></i>Tambah Kategori</a>
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
                <h1>Tambah Kategori</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">

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
      <!-- Animated -->
      <div class="animated fadeIn">
        <!-- Widgets  -->
        <div class="row">

          <div class="col-lg-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#tambahKategori"><i
                      class="fa fa"></i>&nbsp;
                    Tambah Kategori</button>
                </strong>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col" class="w-auto text-left">#</th>
                      <th scope="col" class="w-25">Gambar</th>
                      <th scope="col" class="w-50">Nama Kategori</th>
                      <th scope="col" class="w-25">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    $no = 0;
                    $sql = mysqli_query($conn, "SELECT * FROM kategori_barang");
                    while ($data = mysqli_fetch_array($sql)):
                      $no++;
                      ?>
                      <tr>
                        <th><?= $no ?></th>
                        <td>
                          <p class="rounded" style="width: 40%" src="">
                            <?='<img src="data:image/png;base64,' . base64_encode($data['gambar']) . '">' ?>
                          </p>
                        </td>
                        <td><?= $data['nama_kategori'] ?></td>

                        <td>
                          <button type="button" class="btn btn-outline-warning btn-sm" data-toggle="modal"
                            data-target="#ubahKategori<?= $data['id_kategori'] ?>"><i class="fa fa-pencil"></i>&nbsp;
                            Ubah Kategori</button>
                        </td>
                      </tr>
                      <?php endwhile; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="tambahKategori" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle"
      aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <form method="post" action="tambah_kategori.php" enctype="multipart/form-data">
            <div class="modal-body">

              <!-- Form -->
              <div class="col-lg-12">
                <div class="card">
                  <div class="card-header"></div>
                  <div class="card-body card-block">

                    <div class="form-group">
                      <label for="company" class=" form-control-label">Foto Kategori</label>
                      <input type="file" class="form-control-file" id="tgambar" name="tgambar">
                    </div>

                    <div class="form-group">
                      <label for="company" class=" form-control-label">Nama Kategori</label>
                      <input type="text" id="company" name="nama_kategori" placeholder="Nama" class="form-control">
                    </div>

                  </div>
                </div>
                <!-- END FORM -->

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Tambah</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>



    <!-- Modal ubah kategori -->
    <?php
    $sql2 = mysqli_query($conn, "SELECT * FROM kategori_barang");
    while ($data2 = mysqli_fetch_array($sql2)):
      ?>
      <form method="post" action="ubah_kategori.php" enctype="multipart/form-data">
        <div class="modal fade" id="ubahKategori<?= $data2['id_kategori'] ?>" tabindex="1" role="dialog"
          aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Kategori</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                <!-- Form -->
                <div class="col-lg-12">
                  <div class="card">
                    <div class="card-header"></div>
                    <div class="card-body card-block">
                      <div class="form-group">
                        <label for="id_kategori">ID Kategori</label>
                        <input type="text" id="id_kategori" name="id_kategori" placeholder="ID Kategori"
                          class="form-control" readonly value="<?= $data2['id_kategori'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="nama_kategori">Nama Kategori</label>
                        <input type="text" id="nama_kategori" name="nama_kategori" placeholder="Nama Kategori"
                          class="form-control" value="<?= $data2['nama_kategori'] ?>">
                      </div>
                      <div class="form-group">
                        <label for="tgambar">Foto Kategori</label>
                        <input type="file" class="form-control-file" id="tgambar" name="tgambar">
                      </div>

                    </div>
                  </div>
                  <!-- END FORM -->

                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
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