<?php
  $this->load->view('v_header_a');
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Data Member</h3>
<br/>

<form action="<?php echo base_url('c_admin/cariMember'); ?>" method="get">
	<div class="input-group col-md-5 col-md-offset-7">
		<span class="input-group-addon" id="basic-addon1"><span class="glyphicon glyphicon-search"></span></span>
		<input type="text" class="form-control" placeholder="Cari... id member/nama member/email/no hp" aria-describedby="basic-addon1" name="cari">	
	</div>
</form>
<br/>
<div class="table-responsive">
	<table class="table table-bordered table-striped">
		<tr>
			<th class="col-md-1">No</th>
			<th class="col-md-2">ID Member</th>
			<th class="col-md-3">Nama Member</th>
			<th class="col-md-3">Email</th>
			<th class="col-md-3">No HP</th>
			<th class="col-md-2">Opsi</th>
		</tr>
		<?php 
			$no = 1;
			foreach ($dataPost as $isi) {
				# code...
			?>
		<tr>
			<th class="col-md-1"><?php echo $no++ ?></td>
			<th class="col-md-2"><?php echo $isi->id_member ?></td>
			<th class="col-md-3"><?php echo $isi->nama_member ?></td>
			<th class="col-md-3"><?php echo $isi->email ?></td>
			<th class="col-md-3"><?php echo $isi->no_hp ?></td>
			<th class="col-md-2">
				<a href="<?php echo base_url('c_admin/profilememberlain'); ?>/<?php echo $isi->id_member; ?>" class="btn btn-info">Detail</a>
				<a onclick="return konfirmasi()" class="btn btn-danger" href="<?php echo base_url('c_admin/hapusMember'); ?>/<?php echo $isi->id_member; ?>">Hapus</a>
			</td>
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