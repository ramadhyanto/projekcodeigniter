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
        <form role="form" action="<?php echo base_url(). 'InputKriteriaController/postKriteria'; ?>" method="post">
          <div class="container">
            <div class="row">
              <div class="col-sm-6">
                <label>Kode</label>
                <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode" >
              </div>
              <div class="col-sm-6">
                <label>Nama Kriteria</label>
                <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Nama Kriteria" >
              </div>
              <div class="col-sm-6">
                <label>Kategori</label>
                <input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori" >
              </div>
              <div class="col-sm-6">
                <label>Bobot</label>
                <div class="input-group">
                  <input type="text" class="form-control" name="bobot" placeholder="Masukkan Bobot" >
                  <span class="input-group-addon">%</span>
                </div>
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
