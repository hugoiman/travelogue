<?php
  $this->load->view('v_header_m');
?>
	<ol class="breadcrumb">
	  	<li><a href="<?php echo base_url('c_member'); ?>">Home</a></li>
	  	<li class="active">Pengaturan</li>
	</ol>

	<div class="container" style="margin-bottom: 30px;">
        <h1 style="text-align: center;margin-top: -5px;"><b><u>Pengaturan</u></b></h1>
        <div class="col-md-3" id="pp">
            <h3><b>Informasi Umum</b></h3><br>
            <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data" action="<?php echo base_url('c_member/uploadFoto'); ?>">
                <img class="img-circle" id="dprofile" src="<?php echo base_url()?>assets/img/profile/<?php echo $this->session->userdata("foto"); ?>" style="width: 240px">
                <div class="form-group">
                    <?php
                      if(isset($error)){
                        echo $error;
                      }
                    ?>
                    <br><input type="file" name="newfoto" id="exampleInputFile" class="form-controls"><br>
                </div>
                <button type="submit" class="btn btn-info" style="margin : -30px 0px 0px -15px;">Edit Poto</button>
            </form>
        </div>
        <div class="row" id="kol-prof">
            <div class="col-md-8">
                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('c_member/editProfile'); ?>" style="margin-top: 50px">
                    <div class="form-group">
                        <br><br><label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-8">
                            <input type="hidden" name="id_member" value="<?php echo $this->session->userdata("id_member"); ?>">
                            <input type="name" class="form-control" id="name" name="nama_member" value="<?php echo $this->session->userdata("nama_member"); ?>" required>
                        </div>
                    </div>
                    <div class="form-group" >
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" id="email" name="email" value="<?php echo $this->session->userdata("email"); ?>" required>
                            <span id="email_result"></span>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="no_hp">No HP</label>
                        <div class="col-sm-8">
                            <input type="no_hp" class="form-control" id="no_hp" name="no_hp" value="<?php echo $this->session->userdata("no_hp"); ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="alamat">Alamat</label>
                        <div class="col-sm-8">
                            <textarea class="form-control" rows="5" id="alamat" name="alamat"><?php echo $this->session->userdata("alamat"); ?>
                            </textarea>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-info" style="float: right;margin: -50px -40px 0px 0px;">Edit</button>
                </form>
            </div>
        </div>
        <div class="row" id="kol-sec">
            <div class="col-md-8" style="margin: 0px 20px 10px 20px">
                <h3><b>Keamanan</b></h3>
                <form class="form-horizontal" role="form" method="post" action="<?php echo base_url('c_member/editPassword'); ?>" style="margin-top: 30px">
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password Lama</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="oldpassword" name="oldpassword" placeholder="Password Lama" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Password Baru</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="newpassword" name="newpassword" placeholder="Password Baru" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password_confirmation" class="col-sm-3 control-label">Ulangi Password</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="Ulangi Password Baru" required>
                        </div>
                    </div>

                    <input type="submit" class="btn btn-info" value="Edit" style="float: right;margin: 0px 65px 0px 0px;">
                </form>
            </div>
        </div>
    </div>

    <?php
    $this->load->view('v_footer');
?>
