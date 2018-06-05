<?php
  $this->load->view('v_header_m');
?>
	<ol class="breadcrumb">
	  	<li><a href="#">Home</a></li>
	  	<li class="active">Daftar Post</li>
	</ol>

	<div class="container" style="margin-bottom: 30px">
        <h1 style="text-align: center;margin-top: -5px;"><b><u>Daftar Post</u></b></h1>
        <div class="table-responsive">
			<table class="table table-bordered table-striped">
				<tr>
					<th class="col-md-1">No</th>
					<th class="col-md-2">Judul</th>
					<th class="col-md-1">Kategori</th>
					<th class="col-md-2">Foto</th>
					<th class="col-md-1">Status</th>
					<th class="col-md-2">Opsi</th>
				</tr>
				<?php
                	$no = 1;
                	foreach ($post as $data){		
                		$id_post = $data->id_post;
            	?>
				<tr>
					<th class="col-md-1"><?php echo $no++ ?></th>
					<th class="col-md-2"><?php echo $data->judul; ?></th>
					<th class="col-md-1"><?php echo $data->kategori; ?></th>
					<th class="col-md-2">
						<img class="thumbnail" style="width: 230px;" src="<?php echo base_url()?>assets/img/post/<?php echo $data->gambar1; ?>">	
					</th>
					<th class="col-md-1"><?php echo $data->status; ?></th>
					<th class="col-md-2">
						<button type="button" class="btn btn-default" id="tbt"><a href="<?php echo base_url('c_post/lihatDetailPost'); ?>/<?php echo $data->id_post; ?>"><h9 style="color: black">Lihat</h9></a></button>
		                <button type="button" class="btn btn-info" id="tbt"><a href="<?php echo base_url('c_post/v_editPost'); ?>/<?php echo $data->id_post; ?>"><h9 style="color: black">Edit</h9></a></button>
		                <button type="button" class="btn btn-danger" id="tbt" onclick="return confirm('Are you sure  to Delete?')"><a href="<?php echo base_url('c_post/deletePost'); ?>/<?php echo $data->id_post; ?>"><h9 style="color: black">Hapus</h9></a></button>
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
        
	<?php
	  	$this->load->view('v_footer');
	?>