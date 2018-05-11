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
        <div class="box">
          <div class="box-header">
            <h3 class="box-title">Data Tabel Kriteria</h3>
          </div>
          <div class="row">
            <div class="col-sm-12">

            </div>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="container">
              <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                  <div class="pull-right">
                    <button class="btn btn-primary">
                      <a href="<?php echo site_url('InputKriteriaController/index')?>" style="color:#fff;"></i>Input Kriteria Baru</a>
                    </button>
                  </div>
                </div>
              </div>
            </div>
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Kode</th>
                  <th>Nama Kriteria</th>
                  <th>Kategori</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                <?php $no = 1; 
                foreach($data as $data) { ?>

                <tr>
                  <td><?php echo $no;?></td>
                  <td><?php echo $data->kode;?></td>
                  <td><?php echo $data->nama_kriteria;?></td>   
                  <td><?php echo $data->bobot,'%';?></td>
                  <td>
                    <button class="btn btn-primary"><a href="<?php echo base_url() . "KriteriaController/edit_data/" . $data->kode; ?>" style="color:#fff;"><i class="fa fa-pencil-square-o"></i> Edit</a></button>
                    <button class="btn btn-danger"><a href="<?php echo base_url() . "KriteriaController/delete_data/" . $data->kode; ?>" style="color:#fff;"><i class="fa fa-pencil-square-o"></i> Delete</a></button>
                  </td>
                </tr>
                <?php  
                $no++;
              } ?>
            </tbody>
            <tfoot>
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Kriteria</th>
                <th>Kategori</th>
                <th>Aksi</th>
              </tr>
            </tfoot>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
    </section>

  </div>
  <?php include('./application//views/common/footer.php') ?>
</div>
</body>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
</html>
