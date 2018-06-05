<?php
  $this->load->view('v_header_a');
?>

<h3><span class="glyphicon glyphicon-picture"></span>  Ganti Foto</h3>
<br/><br/>

<br/>
<div class="col-md-5 col-md-offset-3">
	<form action="<?php echo base_url('c_admin/uploadFoto'); ?>" method="post" enctype="multipart/form-data">
		<div class="form-group">
			<input name="user" type="hidden" value="">
		</div>
		<div class="form-group">
			<label>Foto</label>
			<input type="file" name="newfoto" class="form-control"><br>
		</div>
    <?php
      if(isset($error)){
        echo $error;
      }
    ?>
		<div class="form-group">
			<label></label>
			<input type="submit" class="btn btn-info" name="newfoto">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>
	</form>
</div>

<?php
  $this->load->view('v_footer_a');
?>
