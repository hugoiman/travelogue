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
    	<title>Travelogue</title>
    	<link rel="icon" type="png" href="<?php echo base_url()?>assets/img/logo.png">
    </head>
    <body>
    	<nav class="navbar navbar-default" style="position: fixed;width: 100%;z-index: 1000;">
	  	<div class="container-fluid" id="header">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="<?php echo base_url('c_member'); ?>">
        			<img class="logo" alt="Brand" src="<?php echo base_url()?>assets/img/logo.png">
      			</a>
	    	</div>

	    	<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav">
			        <li><a href="<?php echo base_url('c_member'); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			        <li class="dropdown">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> Kategori</a>
			          	<ul class="dropdown-menu">
				            <li><a href="<?php echo base_url('c_member/cari2'); ?>/<?php echo 'kendaraan'; ?>">Kendaraan</a></li>
				            <li><a href="<?php echo base_url('c_member/cari2'); ?>/<?php echo 'penginapan'; ?>">Penginapan</a></li>
				        </ul>
		        	</li>
		      	</ul>
	      		<form class="navbar-form navbar-left" role="form" method="get" action="<?php echo base_url('c_member/cari'); ?>">
	        		<div class="form-group" >
		          		<input type="text" id="cari" name="cari" class="form-control" placeholder="Cari... judul/kategori/pemilik/kota" required>
		        	</div>
	        		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	      		</form>
	      		<ul class="nav navbar-nav navbar-right">
			        <li>
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          				<span class="glyphicon glyphicon-align-justify"></span>
	          				<span class="caret"></span>
	          			</a>
			          	<ul class="dropdown-menu">
				            <li><a href="<?php echo base_url('c_post/lihatPostSaya'); ?>"><span class="glyphicon glyphicon-eye-open"></span> Lihat Post Saya</a></li>
				            <li><a href="<?php echo base_url('c_post/tambahPost'); ?>"><span class="glyphicon glyphicon-plus-sign"></span> Tambah Post</a></li>
				            <li><a href="<?php echo base_url('c_post/daftarPost'); ?>"><span class="glyphicon glyphicon-list-alt"></span> Daftar Post</a></li>
				            <li><a href="<?php echo base_url('c_peminjaman/riwayatMeminjam'); ?>"><span class="glyphicon glyphicon-list-alt"></span> Riwayat Meminjam</a></li>
				            <li><a href="<?php echo base_url('c_peminjaman/pemberitahuan'); ?>"><span class="glyphicon glyphicon-list-alt"></span> Pemberitahuan Peminjaman</a></li>
			          	</ul>
			        </li>
			        <li class="dropdown">
	          			<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
	          				<img class="profile" src="<?php echo base_url()?>assets/img/profile.png">
	          				<span class="caret"></span>
	          			</a>
			          	<ul class="dropdown-menu">
			          		<li style="margin-left: 15px">Hallo,<br><b><?php echo $this->session->userdata("nama_member"); ?></b></li>
			          		<li role="separator" class="divider"></li>
				            <li><a href="<?php echo base_url('c_member/profile'); ?>"><span class="glyphicon glyphicon-user"></span> Profile</a></li>
				            <li><a href="<?php echo base_url('c_member/pengaturan'); ?>"><span class="glyphicon glyphicon-cog"></span> Setting</a></li>
				            <li role="separator" class="divider"></li>
				            <li><a href="<?php echo base_url('c_member/logout'); ?>"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
			          	</ul>
	        		</li>
	      		</ul>
	    	</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>
	<div class="col-md-12">
