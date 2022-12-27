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
          <li class="menu-item-has-children active dropdown">
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
                <i class="menu-icon fa ti-minus"></i><a href="#">Penilaian Toko</a>
              </li>
              <li>
                <i class="menu-icon fa ti-minus"></i><a href="#">Profil Toko</a>
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
              <a class="nav-link" href="#"><i class="fa fa- user"></i>My Profile</a>

              <a class="nav-link" href="#"><i class="fa fa- user"></i>Notifications
                <span class="count">13</span></a>

              <a class="nav-link" href="#"><i class="fa fa -cog"></i>Settings</a>

              <a class="nav-link" href="page-login.php"><i class="fa fa-power -off"></i>Logout</a>
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
                <h1>Produk Saya</h1>
              </div>
            </div>
          </div>
          <div class="col-sm-8">
            <div class="page-header float-right">
              <div class="page-title">
                <ol class="breadcrumb text-right">
                  <li><a href="produk-saya.php">Produk</a></li>
                  <li><a href="#">Toko</a></li>
                  <li class="active">Pengaturan</li>
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
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <strong class="card-title">Tabel Produk</strong>
              </div>
              <div class="card-body">
                <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modaltambah">
                  Tambah Data Produk
                </button>
                <table id="id_tabel" class="table table-striped table-bordered table-hover">
                  <thead>
                    <tr>
                      <th>NO</th>
                      <th>Gambar</th>
                      <th>Nama Produk</th>
                      <th>Harga</th>
                      <th>Stok</th>
                      <th>Kondisi</th>
                      <th>Bahan</th>
                      <th>Merk</th>
                      <th>Ukuran</th>
                      <th>Motif</th>
                      <th>Berat</th>
                      <th>Deskripsi</th>
                      <th>Aksi</th>
                    </tr>
                  </thead>

                  <?php

                  //persiapan menamplikan data
                  $e = $_SESSION['email'];
                  $q = mysqli_query($conn, "SELECT * FROM users where email = '$e'");
                  $row = mysqli_fetch_assoc($q);
                  $id_us = $row['id_user'];
                  $no = 1;
                  $tampil = mysqli_query($conn, "SELECT * FROM produk_user where id_user = '$id_us' ORDER BY id_produk DESC");
                  while ($data = mysqli_fetch_array($tampil)):
                  ?>

                  <tbody>
                    <tr>
                      <td>
                        <?= $no++ ?>
                      </td>
                      <td>
                        <?='<img src="data:image/png;base64,' . base64_encode($data['gambar']) . '">' ?>
                      </td>
                      <td>
                        <?= $data['nama_produk'] ?>
                      </td>
                      <td>
                        <?= $data['harga'] ?>
                      </td>
                      <td>
                        <?= $data['stok'] ?>
                      </td>
                      <td>
                        <?= $data['kondisi'] ?>
                      </td>
                      <td>
                        <?= $data['bahan'] ?>
                      </td>
                      <td>
                        <?= $data['merek'] ?>
                      </td>
                      <td>
                        <?= $data['ukuran'] ?>
                      </td>
                      <td>
                        <?= $data['motif'] ?>
                      </td>
                      <td>
                        <?= $data['berat'] ?>
                      </td>
                      <td>
                        <button type="button" class="btn btn-link btn-sm" data-toggle="modal"
                          data-target="#lihatDeskripsi<?= $data['id_produk'] ?>">
                          Lihat Deskripsi
                        </button>
                      </td>
                      <!-- Modal -->
                      <div class="modal fade" id="lihatDeskripsi<?= $data['id_produk'] ?>" tabindex="-1" role="dialog"
                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                            <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLongTitle">Deskripsi</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                              </button>
                            </div>
                            <div class="modal-body">
                              <p>
                                <?= $data['deskripsi'] ?>
                              </p>
                            </div>

                          </div>
                        </div>
                      </div>
                      <td>
                        <a href="" class="btn btn-warning btn-sm" data-toggle="modal"
                          data-target="#ubah<?= $data['id_produk'] ?>">Ubah</a><br>
                        <a href="delete_produk_saya.php?id=<?= $data['id_produk'] ?>"
                          class="btn btn-danger btn-sm">Hapus</a>
                      </td>
                    </tr>
                    <?php endwhile; ?>

                  </tbody>
                </table>
                <!-- Button trigger modal -->
                <?php
                $tampil = mysqli_query($conn, "SELECT * FROM produk_user");
                while ($data = mysqli_fetch_array($tampil)):
                ?>
                <div class="modal fade" id="ubah<?= $data['id_produk'] ?>" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <form method="POST" action="ubah_produk_saya.php?id=<?= $data['id_produk'] ?>"
                        enctype="multipart/form-data">
                        <div class="modal-body">


                          <div class="mb-3">
                            <label class="form-label">Masukkan Gambar Produk</label>
                            <input type="file" class="form-control-file" id="tgambar" name="tgambar">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="tnama_produk"
                              placeholder="Silahkan masukkan nama produk" name="tnama_produk"
                              value="<?= $data['nama_produk'] ?>">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control" id="tharga"
                              placeholder="Silahkan masukkan harga produk" name="tharga" value="<?= $data['harga'] ?>">
                          </div>

                          <div class="form-group">
                            <label class="form-label">Stok Produk</label>
                            <input type="number" class="form-control" id="tstok"
                              placeholder="Silahkan masukkan stok produk" name="tstok" value="<?= $data['stok'] ?>">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="tkategori_barang">
                              <?php
                  $id = $data['id_kategori'];
                  $q = mysqli_query($conn, "SELECT * FROM kategori_barang where id_kategori = '$id'");
                  while ($data2 = mysqli_fetch_array($q)):
                               ?>
                              <option value="<?= $data2['nama_kategori'] ?>"><?= $data2['nama_kategori'] ?></option>
                              <?php endwhile; ?>
                              <?php
                  $q = mysqli_query($conn, "SELECT * FROM kategori_barang");
                  while ($data1 = mysqli_fetch_array($q)):
                              ?>
                              <option value="<?= $data1['nama_kategori'] ?>"><?= $data1['nama_kategori'] ?></option>
                              <?php endwhile; ?>
                            </select>
                          </div>
                          <div class="mb-3">
                            <label class="form-label">Kondisi</label>
                            <select class="form-select" name="tkondisi">
                              <option value="<?= $data['kondisi'] ?>"><?= $data['kondisi'] ?></option>
                              <option value="Bagus">Bagus</option>
                              <option value="Kekurangan">Kekurangan</option>
                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Bahan</label>
                            <input type="text" class="form-control" id="tbahan"
                              placeholder="Silahkan masukkan bahan produk" name="tbahan" value="<?= $data['bahan'] ?>">
                          </div>

                          <div class="md-3">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control" id="tmerk"
                              placeholder="Silahkan masukkan merk produk" name="tmerk" value="<?= $data['merek'] ?>">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Ukuran</label>
                            <input type="text" class="form-control" id="tukuran"
                              placeholder="Silahkan masukkan ukuran produk" name="tukuran"
                              value="<?= $data['ukuran'] ?>">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Motif</label>
                            <input type="text" class="form-control" id="tmotif"
                              placeholder="Silahkan masukkan motif produk" name="tmotif" value="<?= $data['motif'] ?>">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Berat</label>
                            <input type="text" class="form-control" id="id_berat"
                              placeholder="Silahkan masukkan berat produk" name="tberat" value="<?= $data['berat'] ?>">
                          </div>

                          <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea class="form-control" id="id_deskripsi" name="tdeskripsi"
                              rows="3"><?= $data['deskripsi'] ?></textarea>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="tsimpan">Simpan</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>

                <?php endwhile; ?>

                <!-- Modal -->

                <div class="modal fade" id="modaltambah" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Tambah Produk</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        </button>
                      </div>
                      <form method="POST" action="tambah_produk_saya.php" enctype="multipart/form-data">
                        <div class="modal-body">


                          <div class="mb-3">
                            <label class="form-label">Masukkan Gambar Produk</label>
                            <input type="file" class="form-control-file" id="tgambar" name="tgambar">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="tnama_produk"
                              placeholder="Silahkan masukkan nama produk" name="tnama_produk">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="number" class="form-control" id="tharga"
                              placeholder="Silahkan masukkan harga produk" name="tharga">
                          </div>

                          <div class="form-group">
                            <label class="form-label">Stok Produk</label>
                            <input type="number" class="form-control" id="tstok"
                              placeholder="Silahkan masukkan stok produk" name="tstok">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Kategori</label>
                            <select class="form-select" name="tkategori_barang">
                              <option></option>
                              <?php
                              $q = mysqli_query($conn, "SELECT * FROM kategori_barang");
                              while ($data = mysqli_fetch_array($q)):
                              ?>
                              <option value="<?= $data['nama_kategori'] ?>"><?= $data['nama_kategori'] ?></option>
                              <?php endwhile; ?>
                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Kondisi</label>
                            <select class="form-select" name="tkondisi">
                              <option></option>
                              <option value="Bagus">Bagus</option>
                              <option value="Kekurangan">Kekurangan</option>
                            </select>
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Bahan</label>
                            <input type="text" class="form-control" id="tbahan"
                              placeholder="Silahkan masukkan bahan produk" name="tbahan">
                          </div>

                          <div class="md-3">
                            <label class="form-label">Merk</label>
                            <input type="text" class="form-control" id="tmerk"
                              placeholder="Silahkan masukkan merk produk" name="tmerk">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Ukuran</label>
                            <input type="text" class="form-control" id="tukuran"
                              placeholder="Silahkan masukkan ukuran produk" name="tukuran">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Motif</label>
                            <input type="text" class="form-control" id="tmotif"
                              placeholder="Silahkan masukkan motif produk" name="tmotif">
                          </div>

                          <div class="mb-3">
                            <label class="form-label">Berat</label>
                            <input type="text" class="form-control" id="id_berat"
                              placeholder="Silahkan masukkan berat produk" name="tberat">
                          </div>

                          <div class="mb-3">
                            <label>Deskripsi</label>
                            <textarea class="form-control" id="id_deskripsi" name="tdeskripsi" rows="3"></textarea>
                          </div>

                        </div>
                        <div class="modal-footer">
                          <button type="submit" class="btn btn-primary" name="tsimpan">Simpan</button>
                          <button type="button" class="btn btn-danger" data-dismiss="modal">Keluar</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>








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