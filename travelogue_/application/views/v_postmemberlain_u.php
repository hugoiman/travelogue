<?php
  $this->load->view('v_header_u');
?>

    <?php
        foreach ($dataPost as $isi){
        }
    ?>

    <ol class="breadcrumb">
        <li>Home</li>
        <li><?php echo $isi->kategori?></li>
        <li class="active"><?php echo $isi->judul?></li>
    </ol>
        <form class="form" role="form" method="post" action="" style="margin: 30px 0px 70px -50px;">
            <div class="row" id="kol-tam" style="margin-left: 70px;margin-right: 20px;">
            
                <div class="col-md-4">
                    <div class="carousel slide article-slide" id="article-photo-carousel">
                        <!-- Wrapper for slides -->
                        <div class="carousel-inner cont-slider">
                            <div class="item active">
                                <img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1?>">
                            </div>
                            <div class="item">
                                <img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar2?>">
                            </div>
                            <div class="item">
                                <img alt="" class="thumbnail" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar3?>">
                            </div>
                        </div>
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li class="active" data-slide-to="0" data-target="#article-photo-carousel">
                                <img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar1?>">
                            </li>
                            <li class="" data-slide-to="1" data-target="#article-photo-carousel">
                                <img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar2?>">
                            </li>
                            <li class="" data-slide-to="2" data-target="#article-photo-carousel">
                                <img alt="" src="<?php echo base_url()?>assets/img/post/<?php echo $isi->gambar3?>">
                            </li>
                        </ol>
                    </div>
                </div>
                <div class="col-md-5" style="margin: 30px 0 20px 30px;">
                    <div class="form-group">
                        <label for="judul" class="col-sm-3 control-label">Judul</label>
                        <div class="col-sm-9">
                            <label><?php echo $isi->judul ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br><label class="col-sm-3 control-label" for="kota">Kategori</label>
                        <div class="col-sm-9">
                            <label><?php echo $isi->kategori ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br><label class="control-label col-sm-3" for="alamat">Alamat</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" rows="4" id="alamat" name="alamat" disabled><?php echo $isi->alamat ?></textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br><br><br><br><label class="col-sm-3 control-label" for="kota">Kota</label>
                        <div class="col-sm-9">
                            <label><?php echo $isi->kota ?></label>
                        </div>
                    </div>
                    <div class="form-group">
                        <br><br><label class="control-label col-sm-3" for="desk">Deskripsi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control" id="deskripsi" name="deskripsi" rows="6" id="desk" disabled><?php echo $isi->deskripsi ?></textarea>
                        </div>
                    </div><br>
                    <div style="right: : left;margin : 120px 0 0 460px;">
                        <input type="button" class="btn btn-primary" value="Pinjam" onclick="alert('Harap Login terlebih dahulu')">
                    </div>
                </div>
            
            <div class="col-md-4" id="l-post2" style="width: 230px;margin: 20px 20px 0 0; float: right;">
                <div class="col-md-12" id="dp" style="margin: 8px -20px 10px 0px;">
                    <label style="margin-left: 10px;">Informasi Pemilik</label><br>
                    <img src="<?php echo base_url()?>assets/img/profile/<?php echo $isi->foto; ?>" class="img-thumbnail" style="width: 180px;">
                </div>
                <div class="col-md-12">
                    <div class="col-md-9" style="margin-left: -10px;">
                        <label><a href="<?php echo base_url('c_user/profilememberlain'); ?>/<?php echo $isi->id_member; ?>"><?php echo $isi->nama_member ?></a></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-9" style="margin-left: -10px;">
                        <label><?php echo $isi->no_hp ?></label>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="col-md-9" style="margin : 0px 0px 5px -10px;">
                        <label><?php echo $isi->email ?></label>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
<?php
    $this->load->view('v_footer');
?>
<script type="text/javascript">
    // Stop carousel
$('.carousel').carousel({
  interval: false
});
</script>