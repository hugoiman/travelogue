<?php
  $this->load->view('v_header_u');
?>
	<ol class="breadcrumb">
	  	<li class="active">Home</li>
	  	<li></li>
	  	<!-- <li><a href="#">Kategori</a></li>
	  	<li class="active">Kendaraan</li> -->
	</ol>
	<form method="get" enctype="multipart/form-data" action="<?php echo base_url('c_user/cariKK'); ?>">
        <div class="col-md-2" id="kolom_kiri">
            <h4>Cari berdasarkan...</h4>
            <br><label>Kategori</label>
            <div class="form-group">
                <select class='form-control' id="kategori" name="kategori" required>
                    <option value=""></option>
                    <option value="kendaraan">Kendaraan</option>
                    <option value="penginapan">Penginapan</option>
                </select>
            </div>
            <div class='form-group'>
                <label>Kota</label>
                <select class="form-control" id="kota" name="kota" required>
                    <option value=""></option>
                    <option value="jakarta">Jakarta</option>
                    <option value="malang">Malang</option>
                </select>
            </div>
            <div>
                <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
            </div>
        </div>
    </form>
    <div class="col-md-9">
    <?php
        $no = 0;
        foreach ($dataPost as $data){
            $no++;
            if($no%3 == 1){ ?>
                <div class="row">
            <?php } ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo base_url()?>assets/img/post/<?php echo $data->gambar1; ?>" style="width: 363px; height: 230px">
                    <div class="caption">
                        <h3 id="ljudul">Judul : <?php echo $data->judul ?></h3>
                        <p>Kategori : <?php echo $data->kategori ?></p>
                        <p>Pemilik : <?php echo $data->nama_member ?></p>
                        <p>No HP : <?php echo $data->no_hp ?></p>
                        <p>Kota : <?php echo $data->kota ?></p>
                        <p>
                            <input type="button" class="btn btn-primary" value="Pinjam" onclick="alert('Harap Login terlebih dahulu')">
                            <button type="button" class="btn btn-default"><a href="<?php echo base_url('c_post/lihatPostMemberLain'); ?>/<?php echo $data->id_post; ?>"><h9 style="color: black">Lihat</h9></a></button>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
<?php
  $this->load->view('v_footer');
?>
