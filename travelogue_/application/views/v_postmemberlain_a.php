<?php
  $this->load->view('v_header_a');
?>

    <?php
        foreach ($dataPost as $isi){
        }
    ?>
        <form class="form" role="form" method="post" action="" style="margin: 30px 0px 70px -50px;">
            <div class="row" id="kol-tam" style="margin-left: 70px;margin-right: 20px;">
            <h1 style="text-align: center;margin-top: 5px;"><b><u>Post Member</u></b></h1>
                <div class="col-md-4" style="height: 450px;width: 485px;">
                    <div class="carousel slide article-slide" id="article-photo-carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner cont-slider">
                            <div class="item active">
                                <img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1?>">
                            </div>
                            <div class="item">
                                <img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar2 ?>">
                            </div>
                            <div class="item">
                                <img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar3 ?>">
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                                <img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1 ?>">
                            </li>
                            <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                <img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar2 ?>">
                            </li>
                            <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                                <img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar3 ?>">
                            </li>
                        </ol>

                        <?php 
                        if($isi->status =='unverified'){ ?>
                    <div style="margin : 150px 0px 0px 120px;">
                            
                        <?php }
                        else{ ?>
                        <div style="margin : 80px 0px 0px 85px;">
                            
                            
                            <?php } ?>
                        
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-5" style="margin: 30px 0 10px 0px;">
                    <div class="form-group">
                        <label for="judul" class="col-sm-3 control-label">Judul</label>
                        <div class="col-sm-9">
                            <label><?php echo $isi->judul ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><label class="col-sm-3 control-label" for="kota">Kategori</label>
                        <div class="col-sm-9">
                            <label><?php echo $isi->kategori ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><label class="control-label col-sm-3" for="alamat">Alamat</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4" id="alamat" name="alamat" disabled><?php echo $isi->alamat  ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br><br><br><br><label class="col-sm-3 control-label" for="kota">Kota</label>
                        <div class="col-sm-9">
                            <label><?php echo $isi->kota  ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><label class="control-label col-sm-3" for="desk">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" id="desk" disabled><?php echo $isi->deskripsi  ?></textarea>
                        </div>
                    </div><br>

                    <?php 
                    if($isi->status =='unverified'){ ?>
                        <button type="button" class="btn btn-warning" style="margin : 20px 0 0 120px;"><a href="<?php echo base_url('c_admin/verifikasi'); ?>/<?php echo $isi->id_post ?>">Verifikasi</a></button>
                    <?php }
                    else{ ?>
                        <button type="button" class="btn btn-warning" style="margin : 20px 0 0 120px;" disabled><span class="glyphicon glyphicon-ok"> Verified</span></button>
                            
                    <?php } ?>
                    <button type="button" class="btn btn-danger" style="margin : 20px 0 0 0"><a href="<?php echo base_url('c_admin/hapusPost'); ?>/<?php echo $isi->id_post ?>"><h9 style="color: white">Hapus Post</h9></a></button>

                </div>
            </div>
            
            <div class="col-md-4" id="l-post2" style="width: 230px;margin: 20px 0px 0 70px; float: left;">
                <div class="col-md-12" id="dp" style="margin: 8px -20px 10px 0px;">
                    <label style="margin-left: 10px;">Informasi Pemilik</label><br>
                    <img src="<?php echo base_url()?>assets/img/profile/<?php echo $isi->foto ; ?>" class="img-thumbnail" style="width: 180px;">
                </div>
                <div class="col-md-12">
                    <div class="col-md-9" style="margin-left: -10px;">
                        <label><a href="<?php echo base_url('c_admin/profilememberlain'); ?>/<?php echo $isi->id_member ; ?>"><?php echo $isi->nama_member  ?></a></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-9" style="margin-left: -10px;">
                        <label><?php echo $isi->no_hp  ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-9" style="margin : 0px 0px 5px -10px;">
                        <label><?php echo $isi->email  ?></label>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
</body>
</html>
<script type="text/javascript">
    // Stop carousel
$('.carousel').carousel({
  interval: false
});
</script>