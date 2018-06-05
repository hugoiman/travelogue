<?php
  $this->load->view('v_header_m');
?>

	<ol class="breadcrumb">
	  	<li><a href="#">Home</a></li>
	  	<li class="active">Tambah Post</li>
	</ol>

	<div class="container" style="margin-bottom: 30px">
        <h1 style="text-align: center;margin-top: -5px;"><b><u>Tambah Post</u></b></h1>
        <div class="row" id="kol-tam">
        	<form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('c_post/addPost'); ?>" style="margin-top: 30px">
				<div class="col-md-7">
                    <div class="form-group">
                        <label for="judul" class="col-sm-2 control-label">Judul</label>
                        <div class="col-sm-8">
                        	<input type="hidden" name="id_member" value="<?php echo $this->session->userdata("id_member"); ?>">
                            <input type="hidden" name="status" value="unverified">
                            <input type="text" class="form-control" id="judul" name="judul" required>
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
                            <textarea class="form-control" rows="5" id="alamat" name="alamat" required></textarea>
                        </div>
                    </div>
                    <div class="form-group">
				      	<br><label class="col-sm-2 control-label" for="kota">Kota</label>
				      	<div class="col-sm-8">
					      	<select class="form-control" id="kota" name="kota" required>
					        	<option value=" "></option>
				                <option value="Jakarta">Jakarta</option>         
								<option value="Malang">Malang</option>
								<option value="Bogor">Bogor</option>
					      	</select>
				      	</div>
				    </div>
            	</div>
	            <div class="col-md-6" style="margin-left: -100px;">
                	<div class="form-group">
                        <label class="control-label col-sm-2" for="desk">Deskripsi</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" id="desk" required=""></textarea>
                        </div>
                    </div><br>
                    <?php for ($i=1; $i <=3 ; $i++) :?>
                    <div class="form-group">
                        <label for="judul" class="col-sm-2 control-label" style="margin-top: -6px;">Foto <?php echo $i;?></label>
                        <div class="col-sm-8">
                          	<input type="file" name="gambar<?php echo $i;?>" id="exampleInputFile">
             			</div>
                    </div>
                    <?php endfor;?>
	            </div>
            	<button type="submit" class="btn btn-info" style="float : right; margin: 10px 60px 10px 0px;">Tambah Post</button> 
        	</form>
        </div>
    </div>
<?php
    $this->load->view('v_footer');
?>