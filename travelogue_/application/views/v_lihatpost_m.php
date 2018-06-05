<?php
  $this->load->view('v_header_m');
?>

	<?php
		foreach ($dtPost as $isi){
		}
	?>

	<ol class="breadcrumb">
	  	<li>Home</li>
	  	<li>Post saya</li>
	  	<li class="active"><?php echo $isi['judul']?></li>
	</ol>

	<form class="form" role="form" method="post" action="" style="margin: 30px 0px 70px -50px;">
		<div class="container" style="margin-bottom: 30px">
	        <div class="row" id="kol-tam">
	        	<div class="col-md-5">
					<div class="carousel slide article-slide" id="article-photo-carousel">
						<!-- Wrapper for slides -->
					  	<div class="carousel-inner cont-slider">
						    <div class="item active">
						      	<img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar1']?>">
						    </div>
						    <div class="item">
						      	<img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar2']?>">
						    </div>
						    <div class="item">
						      	<img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar3']?>">
						    </div>
					  	</div>
					  	<!-- Indicators -->
					  	<ol class="carousel-indicators">
						    <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
						      	<img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar1']?>">
						    </li>
						    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
						      	<img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar2']?>">
						    </li>
						    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
						      	<img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar3']?>">
						    </li>
					  	</ol>
					</div>
				</div>
				<div class="col-md-7" style="margin: 30px 0 20px 0;">
	                <div class="form-group">
	                    <label for="judul" class="col-sm-2 control-label">Judul</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $isi['judul']?>" disabled>
	                    </div>
	                </div>
	                <div class="form-group">
				      	<br><br><label class="col-sm-2 control-label" for="kota">Kategori</label>
				      	<div class="col-sm-8">
					      	<input type="text" class="form-control" id="kategori" name="kategori" value="<?php echo $isi['kategori']?>" disabled>
				      	</div>
				    </div>
	                <div class="form-group">
	                    <br><br><label class="control-label col-sm-2" for="alamat">Alamat</label>
	                    <div class="col-sm-8">
	                        <textarea class="form-control" rows="4" id="alamat" name="alamat" disabled><?php echo $isi['alamat']?></textarea>
	                    </div>
	                </div>
	                <div class="form-group">
				      	<br><br><br><br><br><label class="col-sm-2 control-label" for="kota">Kota</label>
				      	<div class="col-sm-8">
					      	<input type="text" class="form-control" id="kota" name="kota" value="<?php echo $isi['kota']?>" disabled>
				      	</div>
				    </div>
				    <div class="form-group">
	                    <br><br><label class="control-label col-sm-2" for="desk">Deskripsi</label>
	                    <div class="col-sm-8">
	                        <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" id="desk" disabled><?php echo $isi['deskripsi']?></textarea>
	                    </div>
	                </div><br>
	                <div style="right: : left;margin : 120px 0 0 385px;">
			        	<button type="button" class="btn btn-info" id="tbt"><a href="<?php echo base_url('c_post/v_editPost'); ?>/<?php echo $isi['id_post']; ?>"><h9 style="color: black">Edit</h9></a></button>
						<button type="button" class="btn btn-danger" id="tbt" onclick="return confirm('Are you sure  to Delete?')"><a href="<?php echo base_url('c_post/deletePost'); ?>/<?php echo $isi['id_post']; ?>"><h9 style="color: black">Hapus</h9></a></button>
					</div>
	        	</div>

			</div>
		</div>
	</form>
<?php
  	$this->load->view('v_footer');
?>
<script type="text/javascript">
	// Stop carousel
$('.carousel').carousel({
  interval: false
});
</script>
