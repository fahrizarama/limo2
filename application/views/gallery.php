<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container">

    <div class="text-center">
      <h3>GALLERY LIMO</h3>
      <p>Home / Gallery</p>
    </div>

  </div>
</section><!-- End Cta Section -->



<!-- ======= Team Section ======= -->
<section id="team" class="team">
  <div class="container">

    <div class="section-title">
      <h2>Gallery</h2>
    </div>

    <div class="row">

      <?php foreach ($galeri_album as $data) { ?>
        <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
          <div class="member">
            <div class="member-img">
              <img src="<?php echo base_url() . 'assets/images/' ?><?php echo $data['album_gambar'] ?>" class="img-fluid" alt="">
              <div class="social">
                <a href="<?php echo base_url() . 'assets/images/' ?><?php echo $data['album_gambar'] ?>" class="venobox preview-link" title="Show Photo"><i class=" icofont-photobucket"></i></a>
              </div>
            </div>
            <div class="member-info">
              <h4><?php echo $data['album_nama'] ?></h4>
            </div>
          </div>
        </div>
      <?php } ?>

    </div>

  </div>
</section><!-- End Team Section -->