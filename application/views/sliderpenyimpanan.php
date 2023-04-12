<!-- ======= Hero Section ======= -->
<section>
    <div class="slider">
        <div class="callbacks_container">
            <ul class="rslides callbacks callbacks1" id="slider4">
                <?php foreach ($tampil_slider as $slider) : ?>
                    <li>
                        <div class="w3layouts-banner-top slide-depan" style="background-image:url(<?php echo base_url() . 'assets/images/' . $slider['slider_gambar']; ?>);">
                            <div class="agileits-banner-info">
                                <!--
									<h3><span><?php echo $slider['slider_judul'] ?></span></h3>
									<p><?php echo $slider['slider_deskripsi'] ?></p>
								-->
                                <!-- <a href="#" data-toggle="modal" data-target="#myModal">Read More <i class="fa fa-caret-right" aria-hidden="true"></i></a> -->
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>
            </ul>
        </div>
        <div class="clearfix"> </div>

        <!--banner Slider starts Here-->
    </div>
</section>
<!-- End Hero -->