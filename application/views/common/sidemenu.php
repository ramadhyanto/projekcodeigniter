 <!-- Left side column. contains the logo and sidebar -->
 <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url();?>/assets/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $name ?></p>
        </div>
      </div>
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <!-- Dashboard -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('DashboardController/index') ?>"><i class="fa fa-circle-o"></i>Home</a></li>
          </ul>
        </li>
        <!-- Dashboard -->

        <!-- Periode Seleksi -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Periode Seleksi</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('PeriodeSeleksiController/index') ?>"><i class="fa fa-circle-o"></i>Periode Seleksi</a></li>
          </ul>
        </li>
        <!-- Periode Seleksi -->

        <!-- Kriteria -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Kriteria</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('KriteriaController/index') ?>"><i class="fa fa-circle-o"></i>Kriteria</a></li>
          </ul>
        </li>
        <!-- Kriteria -->

        <!-- Karyawan -->
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Karyawan</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="<?php echo site_url('KaryawanController/index') ?>"><i class="fa fa-circle-o"></i>Karyawan</a></li>
          </ul>
        </li>
        <!-- Karyawan -->

        <!-- <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li> -->
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>