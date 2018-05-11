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
          Dashboard
          <small>Landing Page</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
          <li class="active">Dashboard</li>
        </ol>
      </section>

      <div class="modal fade" id="myModal">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span></button>
                <center><h4 class="modal-title">Attention</h4></center>
              </div>
              <div class="modal-body">
                <p>Maaf anda tidak berhak mengakses halaman ini</p>
              </div>
              <div class="modal-footer">
                <center><button type="button" class="btn btn-default pull-left" data-dismiss="modal">Close</button></center>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <!-- /.modal-dialog -->
        </div>
        <!-- /.modal -->

      </div>
      <?php include('./application//views/common/footer.php') ?>
    </body>
    <script type="text/javascript">
      <?php if( $data == 'SUKSES' ){
        ?>
        $('#myModal').modal('show');
        <?php 
      }
      ?>
    </script>
    </html>
