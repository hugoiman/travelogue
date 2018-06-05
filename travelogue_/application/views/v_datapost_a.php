<?php
  $this->load->view('v_header_a');
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Post</h3>
<br/>

<form action="<?php echo base_url('c_admin/cariPost'); ?>" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari... id post/judul/kategori/status" aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<div class="table-responsive" style="text-align: center;">
<table class="table table-bordered table-striped">
	<tr>
		<th class="col-md-1">No</th>
		<th class="col-md-1">ID Post</th>
		<th class="col-md-3">Judul</th>
		<th class="col-md-1">Kategori</th>
		<th class="col-md-2">Status</th>
		<th class="col-md-3">Opsi</th>
	</tr>
	<?php 
		$no = 1;
		foreach ($dataPost as $isi) {
			# code...
		?>
	<tr>
		<td class="col-md-1"><?php echo $no++ ?></td>
		<td class="col-md-1"><?php echo $isi->id_post ?></td>
		<td class="col-md-3"><?php echo $isi->judul ?></td>
		<td class="col-md-1"><?php echo $isi->kategori ?></td>
		<td class="col-md-2"><?php echo $isi->status ?></td>
		<td class="col-md-3">
		<?php 
		if($isi->status=='unverified'){ ?>
			<button type="button" class="btn btn-warning"><a href="<?php echo base_url('c_admin/verifikasi'); ?>/<?php echo $isi->id_post; ?>">verifikasi</a></button>
		<?php }
		else{ ?>
			<span class="glyphicon glyphicon-ok" style="margin: 0px 35px 0 30px;"></span>
		<?php } ?>
			<a href="<?php echo base_url('c_admin/detailPost'); ?>/<?php echo $isi->id_post; ?>" class="btn btn-info">Detail</a>
			<a onclick="return konfirmasi()" class="btn btn-danger" href="<?php echo base_url('c_admin/hapusPost'); ?>/<?php echo $isi->id_post; ?>">Hapus</a>
		</td>
	</tr>		
		<?php
			}
		?>
	<tr>
	</tr>
</table>
<td colspan="4">Total Post</td>
		<td>			
		<?php echo $no -= 1 ?>
		</td>
</div>

<?php
  $this->load->view('v_footer_a');
?>