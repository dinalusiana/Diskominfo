<?php
include "../cek_session.php"
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Diskominfo</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../asset/css/all.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../asset/css/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../asset/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../asset/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../asset/css/daterangepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-nav navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" style="padding: 8px 10px; margin-top: 2.5px;"><i class="fas fa-bars"></i></a>
      </li>
      <!-- <li class="nav-item">
        <a href="home.php" class="nav-link" style="padding: 8px 10px;">
           <h5 style="font-weight: 500;">Data Center - Dinas Komunikasi dan Informatika Jawa Tengah</h5>
         </a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- User Dropdown Menu -->
      <li class="dropdown user user-menu" style="vertical-align: middle;">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
          <img src="../asset/img/avatar.png" class="user-image" alt="User Image">
          <span class="hidden-xs" style="color: grey; font-family: sans-serif;">Welcome, <b><?php echo $_SESSION['username']?></b></span>
        </a>
        <ul class="dropdown-menu" style="width: 100%">
          <!-- User image -->
          <li class="user-header" style="background-color: #151139;">
            <img src="../asset/img/avatar.png" class="img-circle" alt="UserImage">
            <p style="color: grey; font-family: sans-serif;">Admin - Data Center</p>
          </li>
          <!-- Menu Footer-->
          <li class="user-footer">
            <div class="pull-right" style="display: flex; justify-content: flex-end;">
              <a href="../index.php" class="btn btn-dark">Logout</a>
            </div>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="home.php" class="brand-link">
      <img src="../asset/img/logo.png" alt="AdminLogo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Diskominfo Jateng</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="home.php" class="nav-link active">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Home
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="datacolocation.php" class="nav-link">
              <i class="nav-icon fas fa-server"></i>
              <p>
                Colocation
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="datahosting.php" class="nav-link">
              <i class="nav-icon fas fa-desktop"></i>
              <p>
                Hosting
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Form
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../pages/form_pengajuan_colocation.php" class="nav-link">
                  <i class="ml-4"></i>
                  <p style="font-size: 14px">Pengajuan Co-Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/form_persetujuan_colocation.php" class="nav-link">
                  <i class="ml-4"></i>
                  <p style="font-size: 14px">Persetujuan Co-Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/form_pencabutan_colocation.php" class="nav-link">
                  <i class="ml-4"></i>
                  <p style="font-size: 14px">Pencabutan Co-Location</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/form_ba_serahterima.php" class="nav-link">
                  <i class="ml-4"></i>
                  <p style="font-size: 14px">Berita Acara Serah Terima Server</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../pages/form_ba_pengambilan.php" class="nav-link">
                  <i class="ml-4"></i>
                  <p style="font-size: 14px">Berita Acara Pengambilan Server</p>
                </a>
              </li>
               <li class="nav-item">
                <a href="../pages/form_permohonan_izin.php" class="nav-link">
                  <i class="ml-4"></i>
                  <p style="font-size: 14px">Permohonan Izin Akses Data</p>
                </a>
              </li>
            </ul>
          </li><br><br>
          <!-- <li class="nav-item has-treeview">
            <a href="../index.php" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Logout
              </p>
            </a>
          </li> -->
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

