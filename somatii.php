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
        Somatii de plata
        
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Somatii</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

	 	<div class="row">
	        <div class="col-xs-12">
	          <div class="box">
	            <div class="box-header">
	              <h3 class="box-title">Cod Client 10001</h3>
	
	              <div class="box-tools">
	                <div class="input-group input-group-sm" style="width: 150px;">
	                  <input type="text" name="table_search" class="form-control pull-right" placeholder="Cautare">
	
	                  <div class="input-group-btn">
	                    <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
	                  </div>
	                </div>
	              </div>
	            </div>
	            <!-- /.box-header -->
	            <div class="box-body table-responsive no-padding">
	              <table class="table table-hover">
	                <tr>
	                  <th>Client</th>
	                  <th>Detalii factura</th>
	                  <th>Scadenta</th>
	                  <th>Total</th>	                  
	                  <th>Status</th>
	                  <th></th>
	                </tr>


	                <tr >
	                  <td>10148</td>
	                  <td >515809HARGAZ/2017-06-01</td>
	                  <td>2017-07-01</td>
	                  <td>30750.00</td>	                 
	                  <td><span class="label label-danger">Scandenta!!!</span></td>
	                  <td><button type="button" class="btn btn-block btn-default">Plateste</button></td>
	                </tr>
	                 <tr >
	                  <td>10148</td>
	                  <td >515809HARGAZ/2017-06-01</td>
	                  <td>2017-07-01</td>
	                  <td>30750.00</td>	                 
	                  <td><span class="label label-danger">Scandenta!!!</span></td>
	                  <td><button type="button" class="btn btn-block btn-default">Plateste</button></td>
	                </tr>
	                 <tr >
	                  <td>10148</td>
	                  <td >515809HARGAZ/2017-06-01</td>
	                  <td>2017-07-01</td>
	                  <td>30750.00</td>	                 
	                  <td><span class="label label-danger">Scandenta!!!</span></td>
	                  <td><button type="button" class="btn btn-block btn-default">Plateste</button></td>
	                </tr>


	              </table>
	            </div>
	            <!-- /.box-body -->
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
