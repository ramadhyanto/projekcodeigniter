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
        <?php foreach($data as $data): ?>
          <form role="form" action="<?php echo base_url(). 'KriteriaController/editKriteria'; ?>" method="post">
            <div class="container">
              <div class="row">
                <div class="col-sm-6">
                  <label>Kode</label>
                  <input type="text" class="form-control" name="kode" placeholder="Masukkan Kode" value="<?php echo $data->kode; ?>">
                </div>
                <div class="col-sm-6">
                  <label>Nama Kriteria</label>
                  <input type="text" class="form-control" name="nama_kriteria" placeholder="Masukkan Nama Kriteria" value="<?php echo $data->nama_kriteria; ?>">
                </div>
                <div class="col-sm-6">
                  <label>Kategori</label>
                  <input type="text" class="form-control" name="kategori" placeholder="Masukkan Kategori" value="<?php echo $data->kategori; ?>">
                </div> 
                <div class="col-sm-6">
                  <label>Bobot</label>
                  <div class="input-group">
                    <input type="text" class="form-control" name="bobot" placeholder="Masukkan Bobot" value="<?php echo $data->bobot; ?>">
                    <span class="input-group-addon">%</span>
                  </div>
                </div>
              </div>
              <br>
              <br>
              <div class="row">
                <div class="col-sm-2">
                <!-- <button class="btn btn-primary">
                  <a href="<?php echo site_url('KriteriaController/index')?>" style="color:#fff;"></i>Submit</a>
                </button> -->
                <button type="submit" class="btn btn-primary btn-block">Edit</button>
              </div>
            </div>
          </div>
        </form>
      <?php endforeach; ?>
    </div>
    <!-- /.box-body -->
  </div>
  <?php include('./application//views/common/footer.php') ?>
</div>
</body>
</html>
