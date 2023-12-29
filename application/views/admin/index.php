<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@Fastmucare</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>dist/css/adminlte.min.css">
  <!-- sweetalert -->
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
    <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
<!-- jQuery -->
<script src="<?= base_url('assets/ds/')?>plugins/jquery/jquery.min.js"></script>

</head>
<body class="hold-transition sidebar-mini layout-fixed">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="<?= base_url('welcome')?>" class="nav-link">Home</a>
      </li>
      <!-- <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li> -->
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      
      
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <center>
      <a href="<?= BASE_URL('admin/welcome')?>" class="brand-link">
        <img src="<?= base_url('img/')?>logo.png" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Fastmucare</span>
      </a>
    </center>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/ds/')?>dist/img/undraw_profile.svg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $this->session->userdata('username') ?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <!-- <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="../../index.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v1</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index2.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v2</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="../../index3.html" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Dashboard v3</p>
                </a>
              </li>
            </ul>
          </li> -->
          <li class="nav-header">Pelaporan</li>
          <li class="nav-item">
            <a href="<?= base_url('admin/dataPelaporan')?>" class="nav-link">
              <i class="nav-icon far fa-file-word"></i>
              <p>
                Data Pelaporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('welcome')?>" class="nav-link">
              <i class="nav-icon fas fa-box-tissue"></i>
              <p>
                Kritik & Saran
              </p>
            </a>
          </li>
          <?php if($this->session->rules == "kepala"){ ?>
          <li class="nav-header">Data User</li>
          <li class="nav-item">
            <a href="<?= base_url('welcome')?>" class="nav-link">
              <i class="nav-icon fas fa-users-cog"></i>
              <p>
                Teknisi
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?= base_url('welcome')?>" class="nav-link">
              <i class="nav-icon far fa-user"></i>
              <p>
                Login Teknisi
              </p>
            </a>
          </li>
          <?php } ?>
          
          
          <li class="nav-header">Auth</li>
          <li class="nav-item">
            <a href="<?= base_url('auth/logout')?>" class="nav-link">
              <i class="nav-icon fas fa-sign-out-alt"></i>
              <p>
                Logout
                <!-- <span class="right badge badge-danger">New</span> -->
              </p>
            </a>
          </li>
        
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <?= $contents ?>
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/ds/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/ds/')?>plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- bs-custom-file-input -->
<script src="<?= base_url('assets/ds/')?>plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="<?= base_url('assets/ds/')?>plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/jszip/jszip.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/pdfmake/pdfmake.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/pdfmake/vfs_fonts.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="<?= base_url('assets/ds/')?>plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/ds/')?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?= base_url('assets/ds/')?>dist/js/demo.js"></script>
</body>
</html>

<!-- alert -->
<?php if ($this->session->has_userdata('success')) {?>   
      <script type="text/javascript">
            Swal.fire({
              icon: 'success',
              title: 'Oops...',
              text: '<?=$_SESSION['success']?>',
            })
      </script>
    <?php }?>

    <?php if ($this->session->has_userdata('failed')) {?>
      <script type="text/javascript">
            Swal.fire({
              icon: 'failed',
              title: 'Oops...',
              text: '<?=$_SESSION['failed']?>',
            })
      </script>
    <?php }?>

    <?php if ($this->session->has_userdata('avaible')) {?>   
      <script type="text/javascript">
            Swal.fire({
              icon: 'info',
              title: 'Oops...',
              text: '<?=$_SESSION['avaible']?>',
            })
      </script>
<?php }?>


<script>
  $(document).ready( function () {
    $('#tabel2').DataTable();
} );
</script>