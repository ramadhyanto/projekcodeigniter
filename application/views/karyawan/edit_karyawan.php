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
          Karyawan
          <small>Karyawan</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-edit"></i>Home</a></li>
          <li class="active">Karyawan</li>
        </ol>
      </section>
      <!-- /.box-header -->
      <div class="box-body">
        <?php foreach($data as $data): ?>
          <form role="form" action="<?php echo base_url(). 'KaryawanController/editKaryawan'; ?>" method="post">
            <div class="container">
              <div class="row">
                <input type="hidden" class="form-control" name="id" placeholder="Masukkan ID Karyawan" value="<?php echo $data->id; ?>">
                <div class="col-sm-6">
                  <label>Nama Karyawan</label>
                  <input type="text" class="form-control" name="name" placeholder="Masukkan Nama Karyawan" value="<?php echo $data->name; ?>">
                </div>
                <div class="col-sm-6">
                  <label>Jabatan</label> <input type="text" class="form-control" name="jabatan" placeholder="Masukkan Jabatan" value="<?php echo $data->jabatan; ?>">
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
