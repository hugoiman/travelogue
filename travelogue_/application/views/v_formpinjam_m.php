<?php
  $this->load->view('v_header_m');
?>

	<?php
		foreach ($dataPost as $isi){
		}
	?>

	<ol class="breadcrumb">
	  	<li>Home</li>
	  	<li>Post saya</li>
	  	<li class="active"><?php echo $isi->judul?></li>
	</ol>

	<form class="form" role="form" method="post" action="<?php echo base_url('c_peminjaman/pinjam'); ?>" style="margin: 30px 0px 70px -50px;">
		<input type="hidden" id="id_post" name="id_post" value="<?php echo $isi->id_post ?>">
		<input type="hidden" id="id_pemilik" name="id_pemilik" value="<?php echo $isi->id_member?>">
		<input type="hidden" id="id_peminjam" name="id_peminjam" value="<?php echo $this->session->userdata('id_member');?>">

		<div class="container" style="margin-bottom: 30px">
	        <div class="row" id="kol-tam">
	        	<div class="col-md-5">
					<div class="carousel slide article-slide" id="article-photo-carousel">
						<!-- Wrapper for slides -->
					  	<div class="carousel-inner cont-slider">
						    <div class="item active">
						      	<img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1?>">
						    </div>
						    <div class="item">
						      	<img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar2?>">
						    </div>
						    <div class="item">
						      	<img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar3?>">
						    </div>
					  	</div>
					  	<!-- Indicators -->
					  	<ol class="carousel-indicators">
						    <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
						      	<img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1?>">
						    </li>
						    <li class="" data-slide-to="1" data-target="#article-photo-carousel">
						      	<img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar2?>">
						    </li>
						    <li class="" data-slide-to="2" data-target="#article-photo-carousel">
						      	<img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar3?>">
						    </li>
					  	</ol>
					</div>
				</div>
				<div class="col-md-7" style="margin: 30px 0 20px 0;">
	                <div class="form-group">
	                    <label for="judul" class="col-sm-2 control-label">Judul</label>
	                    <div class="col-sm-8">
	                        <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $isi->judul ?>" disabled>
	                        <input type="hidden" class="form-control" id="judul" name="judul" value="<?php echo $isi->judul ?>">
	                    </div>
	                </div>
	                <div class="form-group">
				      	<br><br><label class="col-sm-2 control-label" for="nama">Nama Peminjam</label>
				      	<div class="col-sm-8">
					      	<input type="text" class="form-control" id="nama_member" name="nama_member" value="<?php echo $this->session->userdata('nama_member');?>" disabled>
				      	</div>
				    </div>
	                <div class="form-group">
	                    <br><br><label class="control-label col-sm-2" for="tgl_pinjam">Tgl Pinjam</label>
	                    <div class="col-sm-8">
	                        <input type="date" class="form-control" id="tgl_pinjam" name="tgl_pinjam" required>
	                    </div>
	                </div>
	                <div class="form-group">
				      	<br><br><br><br><br><label class="col-sm-2 control-label" for="kota">Tgl Selesai</label>
				      	<div class="col-sm-8">
					      	<input type="date" class="form-control" id="tgl_selesai" name="tgl_selesai" required>
				      	</div>
				    </div>
				    <div class="form-group">
	                    <br><br><label class="control-label col-sm-2" for="desk">Keterangan</label>
	                    <div class="col-sm-8">
	                        <textarea class="form-control" id="keterangan" name="keterangan" rows="6" required></textarea>
	                    </div>
	                </div><br>
	                <div style="right: : left;margin : 120px 125px 0 125px">
			        	<input type="submit" value="Pinjam" class="btn btn-primary btn-block btn-lg">
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
