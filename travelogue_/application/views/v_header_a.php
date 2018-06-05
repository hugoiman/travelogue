<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap.min.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/bootstrap-theme.css" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url()?>assets/css/info_css.css" type="text/css">
	<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url()?>assets/js/info.js"></script>

	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.css">
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-ui/jquery-ui.js"></script>	
	<title>Travelogue</title>
    <link rel="icon" type="png" href="<?php echo base_url()?>assets/img/logo.png">
</head>
<body>
	<div class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
        			<img class="logo" alt="Brand" src="<?php echo base_url()?>assets/img/logo.png">
      			</a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">				
				<ul class="nav navbar-nav navbar-right">
					<li><a class="dropdown-toggle" data-toggle="dropdown" role="button" href="#">Hi , <?php echo $this->session->userdata("nama_admin"); ?><span class="glyphicon glyphicon-user" style="margin-left: 10px;"></span></a></li>
				</ul>
			</div>
		</div>
	</div>

	<div class="col-md-2">
		<div class="row">
			<div class="col-xs-6 col-md-12">
				<a class="thumbnail">
					<img class="img-responsive" src="<?php echo base_url()?>assets/img/profile/<?php echo $this->session->userdata("foto"); ?>">
				</a>
			</div>	
		</div>

		<div class="row"></div>
		<ul class="nav nav-pills nav-stacked">
			<li class="active"><a href="<?php echo base_url('c_admin/dashboard'); ?>"><span class="glyphicon glyphicon-home"></span>  Dashboard</a></li>			
			<li><a href="<?php echo base_url('c_admin/dataPeminjaman'); ?>"><span class="glyphicon glyphicon-briefcase"></span>  Data Peminjaman</a></li>
			<li><a href="<?php echo base_url('c_admin/dataMember'); ?>"><span class="glyphicon glyphicon-briefcase"></span>  Data Member</a></li>
			<li><a href="<?php echo base_url('c_admin/dataPost'); ?>"><span class="glyphicon glyphicon-briefcase"></span>  Data Post</a></li>    
			<li><a href="<?php echo base_url('c_admin/gantiFoto'); ?>"><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</a></li>
			<li><a href="<?php echo base_url('c_admin/gantiPassword'); ?>"><span class="glyphicon glyphicon-lock"></span> Ganti Password</a></li>
			<li><a href="<?php echo base_url('c_admin/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span>  Logout</a></li>			
		</ul>
	</div>
	<div class="col-md-10">
