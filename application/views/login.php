<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@fastmucare</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- sweetalert -->
  <link rel='stylesheet' href="<?= base_url('node_modules')?>/sweetalert2/dist/sweetalert2.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url('assets/ds/')?>dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background: url(<?=base_url('img/GEDUNG.jpg')?>); background-size: 1372px 720px; background-repeat: no-repeat;">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="<?= base_url('assets/ds/')?>index2.html" class="h1">Fastmucare</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to get started</p>

      <form action="<?= base_url('auth/login')?>" method="post">
        <div class="input-group mb-3">
          <input type="text" name="id" class="form-control" placeholder="ID USER" autocomplete="off" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <!-- <div class="social-auth-links text-center mt-2 mb-3">
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
        </a>
      </div> -->
      <!-- /.social-auth-links -->

      <!-- <p class="mb-1">
        <a href="forgot-password.html">I forgot my password</a>
      </p>
      <p class="mb-0">
        <a href="register.html" class="text-center">Register a new membership</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?= base_url('assets/ds/')?>plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?= base_url('assets/ds/')?>plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url('node_modules')?>/sweetalert2/dist/sweetalert2.min.js"></script>
<!-- AdminLTE App -->
<script src="<?= base_url('assets/ds/')?>dist/js/adminlte.min.js"></script>
</body>
</html>
<!-- alert -->
<?php if ($this->session->has_userdata('success')) {?>   
      <script type="text/javascript">
            $(function () {
                Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '<?=$_SESSION['success']?>',
              })
            });
      </script>
    <?php }?>

    <?php if ($this->session->has_userdata('failed')) {?>
      <script type="text/javascript">
            $(function () {
                Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '<?=$_SESSION['failed']?>',
              })
            });
      </script>
    <?php }?>

    <?php if ($this->session->has_userdata('avaible')) {?>   
      <script type="text/javascript">
            $(function () {
                Swal.fire({
                icon: 'warning',
                title: 'Oops...',
                text: '<?=$_SESSION['avaible']?>',
              })
            });
      </script>
<?php }?>