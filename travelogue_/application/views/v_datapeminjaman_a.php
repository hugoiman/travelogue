<?php
  $this->load->view('v_header_a');
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Peminjaman</h3>
<br/>

<form action="<?php echo base_url('c_admin/cariPeminjaman'); ?>" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari... no peminjaman/nama member/judul" aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-1">No Peminjaman</th>
			<th class="col-md-2">Nama Member</th>
			<th class="col-md-2">Judul</th>
			<th class="col-md-1">Tanggal Pinjam</th>			
			<th class="col-md-1">Tanggal Selesai</th>
		</tr>
		<?php 
			$no = 1;
			foreach ($dataPost as $isi) {
				# code...
			?>
			<tr>
				<td class="col-md-1"><?php echo $no++ ?></td>
				<td class="col-md-1"><?php echo $isi->no_peminjaman ?></td>
				<td class="col-md-2"><?php echo $isi->nama_member ?></td>
				<td class="col-md-2"><?php echo $isi->judul ?></td>
				<td class="col-md-1"><?php echo $isi->tgl_pinjam ?></td>			
				<td class="col-md-1"><?php echo $isi->tgl_selesai ?></td>			
			</tr>	
		<?php
				}
			?>
	</table>
	<td colspan="6">Total Member</td>
	<td>			
		<?php echo $no -= 1 ?>
	</td>
</div>
	<?php
	  	$this->load->view('v_footer_a');
	?>