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
    	<script type="text/javascript">
    		$(document).ready(function(){
			        $('#email').change(function(){
			            var email = $('#email').val();
			            $.ajax({
			                url:"<?php echo base_url(); ?>c_user/cek_ketersediaan_email",
			                method:"POST",
			                data:{email:email},
			                success:function(data){
			                    $('#email_result').html(data);
			                }
			            });
			        });
			    });
    	</script>
    </head>
    <body>
    	<nav class="navbar navbar-default">
	  	<div class="container-fluid" id="header">
	    	<!-- Brand and toggle get grouped for better mobile display -->
	    	<div class="navbar-header">
	      		<a class="navbar-brand" href="c_user">
        			<img class="logo" alt="Brand" src="<?php echo base_url()?>assets/img/logo.png">
      			</a>
	    	</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
	    	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      		<ul class="nav navbar-nav">
			        <li><a href="<?php echo base_url('c_user'); ?>"><span class="glyphicon glyphicon-home"></span> Home</a></li>
			        <li class="dropdown">
		          		<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-list"></span> Kategori</a>
			          	<ul class="dropdown-menu">
				            <li><a href="<?php echo base_url('c_user/cari2'); ?>/<?php echo 'kendaraan'; ?>">Kendaraan</a></li>
				            <li><a href="<?php echo base_url('c_user/cari2'); ?>/<?php echo 'penginapan'; ?>">Penginapan</a></li>
				        </ul>
		        	</li>
		      	</ul>
	      		<form class="navbar-form navbar-left" role="form" method="get" action="<?php echo base_url('c_user/cari'); ?>">
	        		<div class="form-group" >
		          		<input type="text" id="cari" name="cari" class="form-control" placeholder="Cari... judul/kategori/pemilik/kota" required>
		        	</div>
	        		<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
	      		</form>
	      		<ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Admin?</b>
                            <span class="glyphicon glyphicon-log-in"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="<?php echo base_url('c_user/login_admin'); ?>" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><b>Member?</b>
                            <span class="glyphicon glyphicon-log-in"></span></a>
                        <ul id="login-dp" class="dropdown-menu">
                            <li>
                                <div class="row">
                                    <div class="col-md-12">
                                        <form class="form" role="form" method="post" action="<?php echo base_url('c_user/aksi_login'); ?>" accept-charset="UTF-8" id="login-nav">
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputEmail2">Email address</label>
                                                <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="Email address" required>
                                            </div>
                                            <div class="form-group">
                                                <label class="sr-only" for="exampleInputPassword2">Password</label>
                                                <input type="password" name="password" class="form-control" id="exampleInputPassword2" placeholder="Password" required>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
	      			<h5 type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal" style="margin-top:10px;">Register</h5>
	      			<div id="myModal" class="modal fade" role="dialog">
						<div class="modal-dialog">
							<!-- konten modal-->
							<div class="modal-content">
								<!-- body modal -->
								<div class="modal-body">
									<button type="button" class="close" data-dismiss="modal">&times;</button>
									<div class="container">
										<div class="row">
										    <div class="col-md-6" style="margin-left: -7px;">
												<form class="form" role="form" method="post" action="<?php echo base_url('c_user/dataRegister'); ?>">
													<img class="logo" alt="Brand" src="assets/img/logo.png">
													<h2 style="margin-left: 230px;">Register</h2>
													<hr class="colorgraph">
													<div class="form-group">
										                <input type="text" name="nama"  class="form-control input-lg" placeholder="Nama" tabindex="1" required>
													</div>

													<div class="form-group">
														<input type="text" name="email" id="email" class="form-control input-lg" placeholder="Email" tabindex="2" required="" ">
														<span id="email_result"></span>

													</div>
													<div class="row">
														<div class="col-xs-12 col-sm-6 col-md-6">
															<div class="form-group">
																<input type="password" name="password" id="password" class="form-control input-lg" placeholder="Password" tabindex="3" required>
															</div>
														</div>
														<div class="col-xs-12 col-sm-6 col-md-6">
															<div class="form-group">
																<input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password" tabindex="4" required>
															</div>
														</div>
													</div>
													<hr class="colorgraph">
													<div class="row">
														<div class="col-xs-12 col-md-12">
															<input type="submit" value="Register" class="btn btn-primary btn-block btn-lg" tabindex="7" onclick="return Validate()">
														</div>
													</div>
												</form>
											</div>
										</div>
										<!-- Modal -->
									</div>
								</div>
							</div>
						</div>
					</div>
	      		</ul>
	    	</div><!-- /.navbar-collapse -->
	  	</div><!-- /.container-fluid -->
	</nav>
	<div class="col-md-12">
