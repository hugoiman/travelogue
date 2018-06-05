<?php
  $this->load->view('v_header_m');
?>
	<ol class="breadcrumb">
	  	<li><a href="#">Home</a></li>
	  	<li class="active">Riwayat Meminjam</li>
	</ol>

	<div class="container" style="margin-bottom: 30px">
        <h1 style="text-align: center;margin-top: -5px;"><b><u>Riwayat Meminjam</u></b></h1>
        <div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th class="col-md-1">No</th>
					<th class="col-md-1">No Peminjaman</th>
					<th class="col-md-2">Judul</th>
					<th class="col-md-1">Tanggal Pinjam</th>
					<th class="col-md-1">Tanggal Selesai</th>
					<th class="col-md-1">Status</th>
					<th class="col-md-2">Opsi</th>
				</tr>
				<?php
                	$no = 1;
                	foreach ($dataPost as $data){		
                		
            	?>
				<tr>
					<th class="col-md-1"><?php echo $no++ ?></th>
					<th class="col-md-1"><?php echo $data->no_peminjaman; ?></th>
					<th class="col-md-2"><?php echo $data->judul; ?></th>
					<th class="col-md-1"><?php echo $data->tgl_pinjam; ?></th>
					<th class="col-md-1"><?php echo $data->tgl_selesai; ?></th>
					<th class="col-md-1"><?php echo $data->status; ?></th>
					<th class="col-md-2">
						<button type="button" class="btn btn-default" id="tbt"><a href="<?php echo base_url('c_post/lihatPostMemberLain'); ?>/<?php echo $data->id_post; ?>"><h9 style="color: black">Lihat</h9></a></button>
					<?php if($data->status == 'belum disetujui'){ ?>
						<button type="button" class="btn btn-default" id="tbt" disabled>Print</button>
					<?php } ?>
					<?php if($data->status == 'sudah disetujui'){ ?>
						<button type="button" class="btn btn-default" id="tbt" >Print</button>
					<?php } ?>
					<?php 
						if($data->status == 'permintaan ditolak'){ ?>
						<button type="button" class="btn btn-default" id="tbt" disabled>Print</button>
					<?php } ?>
		                <button type="button" class="btn btn-danger" id="tbt" onclick="return confirm('Apakah anda yakin ingin membatalkan?')"><a href="<?php echo base_url('c_peminjaman/batalPinjam'); ?>/<?php echo $data->no_peminjaman; ?>"><h9 style="color: black">Batal</h9></a></button>
					
					</th>
				</tr>		
					<?php
						}
					?>
				<tr>
					
				</tr>
				
			</table>
			<td colspan="6">Total Post</td>
			<td>			
				<?php echo $no -= 1 ?>
			</td>
		</div>
        
	</div>
	<?php
  	$this->load->view('v_footer');
?>