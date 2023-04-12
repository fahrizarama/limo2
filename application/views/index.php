<!-- ======= Hero Section ======= -->
<section id="hero">
  <div class="hero-container">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>
      <?php foreach ($tampil_slider as $slider) : ?>

        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="carousel-item active" data-tumb="<?php echo base_url() . 'assets/images/' . $slider['slider_gambar']; ?>;">
            <img class="carousel-item active" style="" src="<?php echo base_url() . 'assets/images/slider2.JPG'; ?>">
            <div class="carousel-container">
              <div class="carousel-content">
              </div>
            </div>
          </div>

          <!-- Slide 1 -->
          <div class="carousel-item active" style="background-image: url(assets/img/slide/slide-1.jpg);">
            <div class="carousel-container">
              <div class="carousel-content">
                <h2 class="animate__animated animate__fadeInDown"></span></h2>
                <p class="animate__animated animate__fadeInUp"></p>
              </div>
            </div>
          </div>


        <?php endforeach ?>
        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon icofont-thin-double-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon icofont-thin-double-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

    </div>
  </div>
</section><!-- End Hero -->

<main id="main">

  <!-- ======= Team Section ======= -->
  <section id="team" class="team">
    <div class="container">
      <div class="section-title">
        <h2>Gallery</h2>
      </div>
      <div class="row">
        <?php foreach ($foto as $data) { ?>
          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <div class="member-img">
                <img src="<?php echo base_url() . 'assets/images/' ?><?php echo $data['gallery_gambar'] ?>" class="img-fluid" alt="">
                <div class="social">
                  <a href="<?php echo base_url() . 'assets/images/' ?><?php echo $data['gallery_gambar'] ?>" class="venobox preview-link" title="Show Photo"><i class=" icofont-photobucket"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4><?php echo $data['gallery_nama'] ?></h4>
              </div>
            </div>
          </div>
          <br> <br><br> <br>
        <?php } ?>
      </div>

      <!-- -------------------------- COBA Diagram Lingkaran --------------------------------------- -->
      <!-- butuh file Chart.js dan taruh di tag head -->
      <!-- <div class="col-md-12 col-lg-12">
        <div class="panel panel-widget">
          <center>
            <h3>Diagram Kategoti Produk</h3>
          </center>

          <canvas id="oilChart"></canvas>
          <script type="text/javascript">
            var oilCanvas = document.getElementById("oilChart");

            Chart.defaults.global.defaultFontFamily = "Lato";
            Chart.defaults.global.defaultFontSize = 18;

            var oilData = {
              labels: [

                "Limo Original",
                "Limo Variant",
                "Limo Limo Import",
              ],
              datasets: [{
                data: [<?php $total = 0;
                        foreach ($grafik_internal as $grafik) {
                          $total = $grafik['total'];
                          echo '"' . $total . '",';
                        } ?>],
                backgroundColor: [
                  "#228B22",
                  "#B22222",
                  "#C09348",
                ]
              }]
            };

            var pieChart = new Chart(oilCanvas, {
              type: 'pie',
              data: oilData
            });
          </script>
        </div>
      </div> -->
      <!-- -------------------------- END COBA Diagram --------------------------------------- -->

    </div>
  </section><!-- End Team Section -->



  <!-- ======= Cta Section ======= -->
  <section id="cta" class="cta">
    <div class="container">

      <div class="text-center">
        <h3>One Bite is never Enough</h3>
        <h3>Our Latest Products</h3>
      </div>

      <div class="text-center">
        <!-- start portfolio -->
        <section id="portfolio" class="portfolio">
          <div class="container">
            <div class="row portfolio-container">

              <?php foreach ($home as $data) { ?>
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

      </div>

    </div>
  </section><!-- End Cta Section -->