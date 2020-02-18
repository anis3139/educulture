 <!--CLIENT AREA-->
 <section class="ftco-section">
     <div class="container">
         <div class="row">
             <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12  text-center heading-section ftco-animate">
                 <h2 class="mb-4 text-center mb-3" id="educulture-partners-heading"><?php echo esc_html(get_theme_mod('educulture_partners_heading',__('Add Partner Images','educulture')));?></h2>
                 <p class=" mb-4 text-center mb-5" id="educulture-partners-section-desc"><?php echo esc_html(get_theme_mod('educulture_partners_description'));?></p>
             </div>
         </div>
     </div>
     <div class="client-area  padding-bottom mt100 sm-mt10 xs-mt0">
         <div class="container">
             <div class="row">
                 <div class="col-md-12 col-lg-12 col-sm-12 col-xs-12">

                     <div class="client-slider owl-carousel">
                         <?php
                     $educulture_partners_posts = new WP_Query( array(
                         'post_type' => 'partners',
                         'posts_per_page'      => -1,  
                     ) );

                        if( $educulture_partners_posts->have_posts() ):

                        while ( $educulture_partners_posts->have_posts() ):
                            $educulture_partners_posts->the_post();
                        $educulture_partners_iamge=get_the_post_thumbnail_url(null, "educulture-blog-image");
                           ?>

                         <div class="single-client">
                             <img src="<?php echo esc_url($educulture_partners_iamge);?>" alt="<?php the_title();?>">
                         </div>
                         <?php 
                        endwhile;
                        wp_reset_query();
                        endif;
                        ?>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </section>
 <!--CLIENT AREA END-->
