<?php
  $this->load->view('v_header_m');
?>

	<?php
		foreach ($dtPost as $isi){
		}
	?>

	<ol class="breadcrumb">
	  	<li><a href="#">Home</a></li>
	  	<li>Edit Post</li>
	  	<li class="active"><?php echo $isi['judul']?></li>
	</ol>
	<div class="container" style="margin-bottom: 30px">
        <h1 style="text-align: center;margin-top: -5px;"><b><u>Edit Post</u></b></h1>
        <div class="row" id="kol-tam">
        	<h3 style="margin-left: 30px;"><b>Edit Data</b></h3>
        	<form class="form-horizontal" role="form" method="post" action="<?php echo base_url('c_post/editPost'); ?>" style="margin-top: 30px">
				<div class="col-md-7">
                    <div class="form-group">
                        <label for="judul" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" id="judul" name="judul" value="<?php echo $isi['judul']?>" required>
                            <input type="hidden" name="id_post" id="id_post" value="<?php echo $isi['id_post'] ?>">
                        </div>
                    </div>
                    <label for="kategori" class="col-sm-2 control-label">Kategori</label>
                    <div class="radio">
                    	<div class="col-sm-8">
	                        <label>
	                            <input type="radio" name="kategori" id="kategori" value="kendaraan">
	                            Kendaraan
	                        </label>
	                        <label>
	                            <input type="radio" name="kategori" id="kategori" value="penginapan">
	                            Penginapan
	                        </label>
                    	</div>
                    </div>
                    <div class="form-group">
                        <br><label class="control-label col-sm-2" for="alamat">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="alamat" name="alamat" required><?php echo $isi['alamat']?></textarea>
                        </div>
                    </div>
            	</div>
	            <div class="col-md-6" style="margin: -20px 0 0 -100px;">
	            	<div class="form-group">
				      	<br><label class="col-sm-2 control-label" for="kota">Kota</label>
				      	<div class="col-sm-8">
					      	<select class="form-control" id="kota" name="kota" required>
					        	<option value=" "><?php echo $isi['kota']?></option>
				                <option value="Jakarta">Jakarta</option>
								<option value="Malang">Malang</option>
								<option value="Bogor">Bogor</option>
					      	</select>
				      	</div>
				    </div>

                	<div class="form-group">
                        <br><br><label class="control-label col-sm-2" for="desk">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" id="desk"><?php echo $isi['deskripsi']?></textarea>
                        </div>
                    </div>
	            </div>
            	<button type="submit" class="btn btn-info" style="float : right; margin: 10px 115px 10px 0px;">Edit Post</button>
        	</form>
        </div>

        <div class="row" id="kol-sec">
            <div class="col-md-12" style="margin: 0px 20px 10px 20px">
                <h3><b>Edit Foto</b></h3><br>
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('c_post/editGbrPost'); ?>">
                	<input type="hidden" name="id_post" id="id_post" value="<?php echo $isi['id_post'] ?>">
                	<div class="col-md-4">
		                <img class="img-thumbnail" id="dprofile" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar1'] ?>" style="width: width: 325px; height: 230px">
		                <div class="form-group">
		                    <br><input type="file" name="gambar1" id="gambar1" style="margin-left: 15px;"><br>
		                </div>
		            </div>
		            <div class="col-md-4">
		                <img class="img-thumbnail" id="dprofile" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar2'] ?>" style="width: width: 325px; height: 230px">
		                <div class="form-group">
		                    <br><input type="file" name="gambar2" id="gambar2" style="margin-left: 15px;"><br>
		                </div>
		            </div>
		            <div class="col-md-4">
		                <img class="img-thumbnail" id="dprofile" src="<?php echo base_url()?>assets/img/post/<?php echo $isi['gambar3'] ?>" style="width: width: 325px; height: 230px">
		                <div class="form-group">
		                    <br><input type="file" name="gambar3" id="gambar3" style="margin-left: 15px;"><br>
		                </div>
		            </div>
	                <button type="submit" class="btn btn-info" style="float : right;margin : -20px 65px 0px -15px;">Edit Poto</button>
	            </form>
            </div>
        </div>
    </div>
<?php
  	$this->load->view('v_footer');
?>
