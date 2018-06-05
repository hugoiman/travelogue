<?php
  $this->load->view('v_header_u');
?>
	<ol class="breadcrumb">
	  	<li><a href="<?php echo base_url('c_member'); ?>">Home</a></li>
	  	<li class="active">Profile</li>
	</ol>
	<?php
        foreach ($dataPost as $isi){
        }
    ?>
	<div class="container" style="margin-bottom: 30px;">
        <h1 style="text-align: center;margin-top: -5px;"><b><u>Profile</u></b></h1>
        <div class="row" id="rprofile">
            <div class="col-md-4" id="dp">
                <img class="img-circle" id="dprofile" src="<?php echo base_url()?>assets/img/profile/<?php echo $isi['foto']?>">
            </div>
            <div class="col-md-7">
                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('c_member/pengaturan'); ?>" style="margin: 30px 0px 70px -50px;">
                	<div class="form-group">
				    	<label for="nama" class="col-sm-2 control-label">Nama</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="nama_member" disabled value="<?php echo $isi['nama_member']?>">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="email" class="col-sm-2 control-label">Email</label>
				    	<div class="col-sm-10">
				      		<input type="email" class="form-control" id="email" disabled value="<?php echo $isi['email']?>">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="no_hp" class="col-sm-2 control-label">No HP</label>
				    	<div class="col-sm-10">
				      		<input type="text" class="form-control" id="no_hp" disabled value="<?php echo $isi['no_hp']?>">
				    	</div>
				  	</div>
				  	<div class="form-group">
				    	<label for="alamat" class="col-sm-2 control-label">Alamat</label>
				    	<div class="col-sm-10">
				      		<textarea type="text" class="form-control" id="alamat" rows="5" disabled><?php echo $isi['alamat']?></textarea>
				    	</div>
				  	</div>
				</form>
            </div>
        </div>
    </div>

    <?php
  	$this->load->view('v_footer');
?>