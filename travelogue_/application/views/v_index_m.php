<?php
  $this->load->view('v_header_m');
?>

	<ol class="breadcrumb">
	  	<li class="active">Home</li>
	  	<li></li>
	  	<!-- <li><a href="#">Kategori</a></li>
	  	<li class="active">Kendaraan</li> -->
	</ol>
	<form method="get" enctype="multipart/form-data" action="<?php echo base_url('c_member/cariKK'); ?>">
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
        foreach ($dataPost as $isi){
            $no++;
            if($no%3 == 1){ ?>
                <div class="row">
            <?php } ?>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <img src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1; ?>" style="width: 363px; height: 230px">
                    <div class="caption">
                        <h3 id="ljudul"><?php echo $isi->judul ?></h3>
                        <p><b><?php echo $isi->kategori ?></b></p>
                        <p>Pemilik : <b><?php echo $isi->nama_member ?></b></p>
                        <p>No HP : <b><?php echo $isi->no_hp ?></b></p>
                        <p>Kota : <b><?php echo $isi->kota ?></b></p>
                        <p>

                            <button type="button" class="btn btn-primary"><a href="<?php echo base_url('c_peminjaman/formpinjam'); ?>/<?php echo $isi->id_post; ?>"><h9 style="color: white">Pinjam</h9></a></button>
                            <button type="button" class="btn btn-default"><a href="<?php echo base_url('c_post/lihatPostMemberLain'); ?>/<?php echo $isi->id_post; ?>"><h9 style="color: black">Lihat</h9></a></button>
                        </p>
                    </div>
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
    <!-- Modal Tambah -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Detail Barang</h4>
                </div>
                <div class="modal-body">
                    <div class="fetched-data"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Keluar</button>
                </div>
            </div>
        </div>
    </div>
    <!-- END Modal Tambah -->
    </div>
<?php
    $this->load->view('v_footer');
?>
