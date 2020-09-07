<?php 
session_start();
include ('../config/koneksi.php');
if($_SESSION['level']==""){
  echo "<script language=javascript>
  window.alert('Silahkan Login Sebagai Admin!');
  window.location='../login.php';
  </script>";
}
?>
<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon">
          <i class="fas fa-user"></i>
        </div>
        <div class="sidebar-brand-text mx-3"><?php echo $_SESSION['username']; ?></div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="index.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider">

        <div class="sidebar-heading">
          Data
        </div>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
          <a class="nav-link" href="datadokter.php">
            <i class="fas fa-fw fa-database"></i>
            <span>Data Dokter</span></a>
          </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="datapelayanan.php">
              <i class="fas fa-fw fa-database"></i>
              <span>Data Pelayanan</span></a>
            </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="datapasien.php">
              <i class="fas fa-fw fa-database"></i>
              <span>Data Pasien</span></a>
            </li>

          <!-- Nav Item - Tables -->
          <li class="nav-item">
            <a class="nav-link" href="datareservasi.php">
              <i class="fas fa-fw fa-database"></i>
              <span>Data Reservasi</span></a>
            </li>

            <div class="sidebar-heading">
              Laporan
            </div>

            <li class="nav-item">
              <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <i class="fas fa-fw fa-report"></i>
                <span>Laporan Reservasi</span>
              </a>
              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar" style="">
                <div class="bg-white py-2 collapse-inner rounded">
                  <a class="collapse-item" href="harianreservasi.php">Harian</a>
                  <a class="collapse-item" href="bulananreservasi.php">Bulanan</a>
                  <a class="collapse-item" href="tahunanreservasi.php">Tahunan</a>
                </div>
              </div>
            </li>      
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
              <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

          </ul>
          <!-- End of Sidebar -->

          <!-- Content Wrapper -->
          <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

              <!-- Topbar -->
              <nav class="navbar navbar-expand bg-blue topbar mb-4 static-top shadow">
                UPTD Rumah Sakit Hewan Sumatera Barat, Melayani Mulai Pukul 08.00 - Pukul 16.00
                <!-- Topbar Navbar -->
                <ul class="navbar-nav ml-auto">

                  <div class="topbar-divider d-none d-sm-block"></div>

                  <!-- Nav Item - Tables -->
                  <li class="nav-item">
                    <a class="nav-link" href="logout.php">
                      <i class="fas fa-fw fa-sign-out-alt"></i>
                      <span>Logout</span></a>
                    </li>

                  </ul>

                </nav>
        <!-- End of Topbar -->