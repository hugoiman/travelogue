<?php
  $this->load->view('v_header_m');
?>
	<ol class="breadcrumb">
	  	<li><a href="<?php echo base_url('c_member'); ?>">Home</a></li>
	  	<li class="active">Post Saya</li>
	</ol>
	<div class="container">
		<h1 style="text-align: center;margin-top: -5px;"><b><u>Post Saya</u></b></h1>
		
			<?php
		        $no = 0;
		        foreach ($post as $isi){
		            $no++;
		            if($no%3 == 1 || $no%3 == 0){ ?>
		            	<div class="row"> 
		            <?php }
		    ?>
	        <div class="col-sm-6 col-md-4">
	            <div class="thumbnail">
	                <img src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1; ?>" style="width: 325px; height: 230px">
	                <div class="caption" style="text-align: center;">
	                    <h3 id="ljudul"><?php echo $isi->judul ?></h3>
	                    <p><?php echo $isi->kategori ?></p>
	                    <p><?php echo $isi->kota ?></p>
	                    <p><button type="button" class="btn btn-default" id="tbt"><a href="<?php echo base_url('c_post/lihatDetailPost'); ?>/<?php echo $isi->id_post; ?>"><h9 style="color: black">Lihat</h9></a></button>
		                <button type="button" class="btn btn-info" id="tbt"><a href="<?php echo base_url('c_post/v_editPost'); ?>/<?php echo $isi->id_post; ?>"><h9 style="color: black">Edit</h9></a></button>
		                <button type="button" class="btn btn-danger" id="tbt" onclick="return confirm('Are you sure  to Delete?')"><a href="<?php echo base_url('c_post/deletePost'); ?>/<?php echo $isi->id_post; ?>"><h9 style="color: black">Hapus</h9></a></button></p>
	                </div>
	            </div>
	        </div>
	        <?php
		        	}
		        
	    	?>
	    </div>
	</div>
<?php
  	$this->load->view('v_footer');
?>