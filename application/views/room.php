<!-- ======= Cta Section ======= -->
<section id="cta" class="cta">
  <div class="container">

    <div class="text-center">
      <h3>PRODUCT LIMO</h3>
      <p>Home / Product</p>
    </div>

  </div>
</section><!-- End Cta Section -->



<!-- start portopolio -->
<section id="portfolio" class="portfolio">
  <div class="container">

    <div class="section-title">
      <h2>Product Limo</h2>
      <p>We are here to give the world enjoy every bite of their snack time </p>
    </div>

    <div class="row">
      <div class="col-lg-12 d-flex justify-content-center ">
        <ul id="portfolio-flters">
          <li data-filter="*" class="filter-active">Show All</li>
          <?php foreach ($menu as $menu_asli) : ?>
            <li data-filter=".<?php echo $menu_asli['id_produk'] ?>"><?php echo $menu_asli['produk_utama'] ?></li>
          <?php endforeach ?>
        </ul>
      </div>
    </div>
    <!-- filter selesai -->

    <div class="row portfolio-container">

      <?php foreach ($produk as $data) { ?>
        <div class="col-lg-4 col-md-6 portfolio-item  <?php echo $data['id_produk'] ?>">
          <img src="<?php echo base_url() . 'assets/images/' ?><?php echo $data['detail_gambar'] ?>" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4><?php echo $data['detail_judul'] ?></h4>
            <a href="<?php echo base_url() . 'assets/images/' ?><?php echo $data['detail_gambar'] ?>" data-gall="portfolioGallery" class="venobox preview-link" title="Show Photo"><i class="bx bxs-photo-album"></i></a>
            <a href="<?php echo base_url('Home/produk/' . $data['id_detail']); ?>" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>

      <?php } ?>
    </div>

  </div>
</section><!-- End Portfolio Section -->