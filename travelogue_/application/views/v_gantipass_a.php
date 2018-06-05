<?php
  $this->load->view('v_header_a');
?>

<h3><span class="glyphicon glyphicon-briefcase"></span>  Password</h3>
<br/><br/>
<br/>
<div class="col-md-5 col-md-offset-3">
	<form action="<?php echo base_url('c_admin/editPassword'); ?>" method="post">
		<div class="form-group">
			<input name="user" type="hidden" value="">
		</div>
		<div class="form-group">
			<label>Password Lama</label>
			<input name="oldpassword" type="password" class="form-control" id="oldpassword" placeholder="Password Lama .." required>
		</div>
		<div class="form-group">
			<label>Password Baru</label>
			<input name="newpassword" type="password" class="form-control" id="newpassword" placeholder="Password Baru .." required>
		</div>
		<div class="form-group">
			<label>Ulangi Password</label>
			<input name="password_confirmation" type="password" class="form-control" id="password_confirmation" placeholder="Ulangi Password .." required>
		</div>	
		<div class="form-group">
			<input type="submit" class="btn btn-info" value="Simpan">
			<input type="reset" class="btn btn-danger" value="reset">
		</div>																	
	</form>
</div>


<?php
  $this->load->view('v_footer_a');
?>