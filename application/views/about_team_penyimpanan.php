

<!-- ------------------------------ tim ------------------------------- -->


<section id="ts-team" class="ts-team dark-bg">
      <div class="container">
         <div class="row text-center">
            <h3 class="section-sub-title">Team</h3>
         </div><!--/ Title row end -->

         <div class="row">

            <div id="team-slide" class="owl-carousel owl-theme team-slide">
               <div class="item">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img alt="" src="<?php echo base_url().'assets/images/team/team3.jpg'?>" class="img-responsive">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="ts-name">Nama</h3>
                        <p class="ts-designation">Profesi</p>
                        <p class="ts-description">Deskripsi</p>
                        
                     </div>
                  </div><!--/ Team wrapper end -->
               </div><!-- Team 1 end -->

               <div class="item">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img alt="" src="<?php echo base_url().'assets/images/team/team3.jpg'?>" class="img-responsive">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="ts-name">Nama</h3>
                        <p class="ts-designation">Profesi</p>
                        <p class="ts-description">Deskripsi</p> 
                     </div>
                  </div><!--/ Team wrapper end -->
               </div><!-- Team 2 end -->

               <div class="item">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img alt="" src="<?php echo base_url().'assets/images/team/team3.jpg'?>" class="img-responsive">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="ts-name">Nama</h3>
                        <p class="ts-designation">Profesi</p>
                        <p class="ts-description">Deskripsi</p>
                     </div>
                  </div><!--/ Team wrapper end -->
               </div><!-- Team 3 end -->

               <div class="item">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img alt="" src="<?php echo base_url().'assets/images/team/team3.jpg'?>" class="img-responsive">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="ts-name">Nama</h3>
                        <p class="ts-designation">Profesi</p>
                        <p class="ts-description">Deskripsi</p>
                        
                     </div>
                  </div><!--/ Team wrapper end -->
               </div><!-- Team 4 end -->

               <div class="item">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img alt="" src="<?php echo base_url().'assets/images/team/team3.jpg'?>" class="img-responsive">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="ts-name">Nama</h3>
                        <p class="ts-designation">Profesi</p>
                        <p class="ts-description">Deskripsi</p>
                     </div>
                  </div><!--/ Team wrapper end -->
               </div><!-- Team 5 end -->

            </div><!-- Team slide end -->

         </div><!--/ Content row end -->
      </div><!--/ Container end -->
   </section><!--/ Team end -->



<!-- ------------------------------------------------------ pemisah -------------------------------------------- -->
<section id="ts-team" class="ts-team dark-bg">
      <div class="container">
         <div class="row text-center">
            <h3 class="section-sub-title">Team</h3>
         </div><!--/ Title row end -->
         <div class="row">
            <div id="team-slide" class="owl-carousel owl-theme team-slide">
            <?php foreach($home as $data) { ?>
               <div class="item">
                  <div class="ts-team-wrapper">
                     <div class="team-img-wrapper">
                        <img style="height:50vh; width: 42vh; position: relative;" alt="" src="<?php echo base_url().'assets/images/' ?><?php echo $data['detail_gambar'] ?>" class="img-responsive">
                     </div>
                     <div class="ts-team-content">
                        <h3 class="ts-name">Nama</h3>
                        <p class="ts-designation">Profesi</p>
                        <p class="ts-description">Deskripsi</p> 
                     </div>
                  </div><!--/ Team wrapper end -->
               </div><!-- Team 1 end --> 
               <?php } ?>
            </div><!-- Team slide end -->
         </div><!--/ Content row end -->
      </div><!--/ Container end -->
   </section><!--/ Team end -->