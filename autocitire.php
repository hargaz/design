<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>HARGAZ Client Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="bower_components/Ionicons/css/ionicons.min.css">
  <!-- jvectormap -->
  <link rel="stylesheet" href="bower_components/jvectormap/jquery-jvectormap.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/skin-green.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
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
        Autocitire
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Autocitire</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	 	<div class="row">
	        <div class="col-xs-12">
		        <div class="box box-success">
		            <div class="box-header with-border">
		              <h3 class="box-title">Introduceti datele dumneavoastra</h3>
		            </div>
		            <div class="box-body">
		              <input class="form-control input-lg" type="text" placeholder="Cod client">
		              <br>
		              <input class="form-control input-lg" type="text" placeholder="Identificare contor">
		              <br>
		              <input class="form-control input-lg" type="text" placeholder="Index curent">
		              <br>
		            </div>
	            <!-- /.box-body -->
	            	<div class="box-footer">
                		<button type="submit" class="btn btn-primary pull-right">Trimite</button>
              		</div>
	          	</div>
	          <!-- /.box -->
	        </div>
	     </div>
	    
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


<?php
	include 'includes/footer.php';
?>
</body>
</html>
