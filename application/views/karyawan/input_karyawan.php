<!DOCTYPE html>
<html>
<head>
  <?php include('./application//views/common/header.php') ?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
  <div class="wrapper">
    <?php include('./application//views/common/navbar.php') ?>
    <?php include('./application//views/common/sidemenu.php') ?>
    <div class="content-wrapper">
      <section class="content-header">
        <h1>
          Kriteria
          <small>Kriteria</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-edit"></i>Home</a></li>
          <li class="active">Kriteria</li>
        </ol>
      </section>
      <!-- /.box-header -->
      <div class="box-body">
        <form role="form" action="<?php echo base_url(). 'InputKaryawanController/postKaryawan'; ?>" method="post">
          <div class="container">
            <div class="row">
                <div class="col-sm-6">
                  <label>Nama Karyawan</label>
                  <input type="text" class="form-control" name="nama_karyawan" placeholder="Masukkan Nama Karyawan" >
                </div>
                <div class="col-sm-6">
                  <label>Jabatan</label>
                  <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan" >
                </div>
              </div>
            <br>
            <br>
            <div class="row">
                <div class="col-sm-2">
                <!-- <button class="btn btn-primary">
                  <a href="<?php echo site_url('InputperiodeController/index')?>" style="color:#fff;"></i>Submit</a>
                </button> -->
                <button type="submit" class="btn btn-primary btn-block">Add</button>
              </div>
            </div>
          </div>
        </form>
      </div>
      <!-- /.box-body -->
    </div>
    <?php include('./application//views/common/footer.php') ?>
  </div>
</body>
</html>
