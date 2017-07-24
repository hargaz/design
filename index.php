<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HARGAZ Client Admin Panel</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><img src="dist/img/small-logo.png" /></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><img src="dist/img/logo.png" /></span>
    </a>

    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>

    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="dist/img/avatar.png" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Nume Prenume Client</p>
          
        </div>
      </div>
      
      <?php
      	include 'includes/nav.php';
      ?>

    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Version 1.0</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Info boxes -->
      <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon  bg-red"><i class="ion ion-ios-information-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Somatii</span>
              <span class="info-box-number"><a href="#">4</a><small> facturi</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-pie-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Consum lunar</span>
              <span class="info-box-number">41.410<small> mc</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-calculator-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Total plata</span>
              <span class="info-box-number">760 <small>lei</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-lightbulb-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Alt info util</span>
              <span class="info-box-number">2000 <small>unitate masura</small></span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

      <div class="row">
        <div class="col-md-12">
          <div class="box">
            <div class="box-header with-border">
              <h3 class="box-title">Consum anual</h3>

              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
               
                <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
              </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-8">
                  <p class="text-center">
                    <strong>Consum anul curent</strong>
                  </p>

                  <div class="chart">
                    
                    <canvas id="salesChart" style="height: 180px;"></canvas>
                  </div>
                  
                </div>
                <div class="col-md-4">
                	<div class="expl">
                		<h4>Explicatie</h4>
                		<div class="albastru"><span>Anul 2017</span></div>
                		<div class="gri"><span>Anul 2016</span></div>
                	</div>
                </div>
                
              </div>
              <!-- /.row -->
            </div>
            
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <div class="row">
      	<div class="col-md-12">
      		<h3>Text</h3>
      		<p>
      			Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis tempor neque ut aliquet rhoncus. In blandit nulla at pretium facilisis. Cras ac augue vulputate, congue nisl at, cursus nisi. Suspendisse a arcu libero. Nullam sed varius dolor, eu fringilla justo. Proin ex lacus, euismod ut nisl sed, ultricies sodales elit. Vivamus accumsan est a elit pharetra, eu vehicula lacus eleifend. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Vestibulum at elit lobortis urna elementum condimentum at sit amet mauris. Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      		</p>		
      	</div>
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

<?php
	include 'includes/footer.php';
?>
</body>
</html>
