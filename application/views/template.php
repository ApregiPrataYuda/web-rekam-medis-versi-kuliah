<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Rekam-medis</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?= base_url()?>assets/back-end/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/back-end/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/back-end/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/back-end/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?= base_url()?>assets/back-end/dist/css/skins/_all-skins.min.css">
 
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-green sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <header class="main-header">
    <!-- Logo -->
    <a href="#" class="logo">
      <span class="logo-mini"><b>RM</b>D</span>
      <span class="logo-lg"><b>Rekam </b>medis rs bintang amin</span>
    </a>
    <nav class="navbar navbar-static-top">
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </a>

       
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li class="dropdown messages-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <i class="fa fa-flag-o"></i>
              <span class="label label-success">5</span>
            </a>
            <ul class="dropdown-menu">
              <li class="header">You have 4 messages</li>
                <ul class="menu">
                  <li>
                    <a href="#">
                      <h3>
                        Design and coding
                        <small class="pull-right">20%</small>
                      </h3>
                      <div class="progress xs">
                        <div class="progress-bar progress-bar-aqua" style="width: 20%" role="progressbar"
                             aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                          <span class="sr-only">20% Complete</span>
                        </div>
                      </div>
                    </a>
                  </li>
                
                </ul>
              </li>
              <li class="footer">
                <a href="#">View all tasks</a>
              </li>
            </ul>
          </li>
          
          <!-- User Account: style can be found in dropdown.less -->
          <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="<?=base_url()?>assets/back-end/dist/img/jp.jpg" class="user-image" alt="User Image">
              <span class="hidden-xs"><?=$this->fungsi->user_login()->username?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                <img src="<?=base_url()?>assets/back-end/dist/img/jp.jpg" class="img-circle" alt="User Image">
               
                 <p>
                   <?=$this->fungsi->user_login()->name?> - <?=$this->fungsi->user_login()->username?>
                  <small><?=$this->fungsi->user_login()->address?></small>
                </p>
              </li>
              <li class="user-footer">
                <div class="pull-left">
                  <a href="<?=site_url('Profile') ?>" class="btn btn-default btn-flat">Profile</a>
                </div>
                <div class="pull-right">
                  <a href="<?=site_url('Auth/logout')?>" onclick="return confirm('apakah anda yakin akan keluar!');" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <aside class="main-sidebar">
    <section class="sidebar">
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?=base_url()?>assets/back-end/dist/img/jp.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?=$this->fungsi->user_login()->username?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

       
          <li <?=$this->uri->segment(1) == 'Dashboard' || $this->uri->segment(1) == '' ? 'class="active"' : ''?>>
          <a href="<?=site_url('Dashboard')?>"><i class="fa fa-dashboard"></i><span>Dashboard</span></a>
          </li>


           
          <li <?=$this->uri->segment(1) == 'Pasien'  ? 'class="active"' : ''?>>
          <a href="<?=site_url('Pasien')?>"><i class="fa fa-users"></i><span>Data Pasien</span></a>
          </li>
          
              <?php if ($this->session->userdata('level') == 1 ) { ?>
         <li <?=$this->uri->segment(1) == 'Dokter'  ? 'class="active"' : ''?>>
          <a href="<?=site_url('Dokter')?>"><i class="fa fa-user"></i><span>Data Dokter</span></a>
          </li>

         <li  <?=$this->uri->segment(1) == 'poliklinik'  ? 'class="active"' : ''?> >
          <a href="<?=site_url('poliklinik')?>"><i class=" fa fa-hospital-o"></i><span>Data poliklinik</span></a>
          </li>
      
          <li <?=$this->uri->segment(1) == 'Obat'  ? 'class="active"' : ''?>>
          <a href="<?=site_url('Obat')?>"><i class="fa  fa-file-text-o"></i><span>Data  obat</span></a>
          </li>

          <li  <?=$this->uri->segment(1) == 'Rekam_medis'  ? 'class="active"' : ''?>>
          <a href="<?=site_url('Rekam_medis')?>"><i class="fa  fa-medkit"></i><span>Rekam medis</span></a>
          </li>
      

    
        <li class="header">Setting</li>
        <li <?=$this->uri->segment(1) == 'User'  ? 'class="active"' : ''?>>
          <a href="<?=site_url('User')?>"><i class="fa  fa-cog"></i><span>users</span></a>
          </li>
         <?php } ?>
    </section>
  </aside>

   <script src="<?= base_url()?>assets/back-end/bower_components/jquery/dist/jquery.min.js"></script>


  <div class="content-wrapper">
       <?=$contents ?>
 </div>

        
 
  <footer class="main-footer">
    <div class="pull-right hidden-xs">
      <b>Version</b> 0.0.0
    </div>
    <strong>Copyright &copy;2020 <a href="https://Apregiphiiwp.io">Apregiphiiwp</a>.</strong> All rights
    reserved.
  </footer>

  </div>
   


<script src="<?= base_url()?>assets/back-end/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/back-end/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?= base_url()?>assets/back-end/dist/js/adminlte.min.js"></script>
<script src="<?= base_url()?>assets/back-end/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url()?>assets/back-end/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?= base_url()?>assets/back-end/plugins/bootstrap-slider/bootstrap-slider.js"></script>

<script>
 $(document).ready(function() {
        $('#table1').DataTable()
 }) 
</script>





</body>
</html>
