<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sistem Penunjang Keputusan | Log in</title>
  <!-- Tell the browser to be responsive to screen width -->
  <!-- Favicon Web -->
  <link rel="icon" href="<?=base_url()?>/assets/images/favicon.png" type="image/png">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/dist/css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url();?>/assets/plugins/iCheck/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Google Font -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
  <div class="login-box">
    <div class="login-logo">
      <a>Sistem Penunjang Keputusan</a>
    </div>
  </div>
  <form role="form" action="<?php echo base_url(). 'LoginController/postSignup'; ?>" method="post">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Masukkan Username" >
        </div>
        <div class="col-sm-6">
          <label>Name</label>
          <input type="text" class="form-control" name="nama_karyawan" placeholder="Masukkan Nama Karyawan" >
        </div>
        <div class="col-sm-6">
          <div class="form-group">
            <label>Select</label>
            <select class="form-control" name="role">
              <option>admin</option>
              <option>staff</option>
              <option>hrd</option>
            </div>
          </select>
        </div>
      </div>
      <div class="col-sm-6">
        <label>Password</label>
        <input type="password" class="form-control" name="password" placeholder="Masukkan Password" >
      </div>
      <div class="col-sm-12">
        <label>Jabatan</label>
        <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan" >
      </div>
    </div>
    <br>
    <br>
    <div class="row">
      <div class="col-sm-12">
        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign Up</button>
      </div>
    </div>
  </div>
</form>
</div>
<!-- /.login-box -->

<!-- jQuery 3 -->
<script src="<?php echo base_url();?>/assets/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- iCheck -->
<script src="<?php echo base_url();?>/assets/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>
</body>
</html>
