    <section class="home-slider owl-carousel">
 
      <?php
    $educulture_sliders_posts = new WP_Query( array(
        'post_type' => 'slider',
        'posts_per_page'      => -1,  
    ) );

 if( $educulture_sliders_posts->have_posts() ):

 while ( $educulture_sliders_posts->have_posts() ):
     $educulture_sliders_posts->the_post();
$educulture_slider_iamge=get_the_post_thumbnail_url(null, "full");
    ?>
      <div class="slider-item" style="background-image:url(<?php echo esc_url($educulture_slider_iamge);?>);">
      	<div class="overlay"></div>
        <div class="container">
         
          <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
          <div class="col-md-8 text-center ftco-animate">
            <h1 class="mb-4 animated zoomIn"><?php bloginfo('description')?></h1>
             <p class="animated fadeInUp"><?php echo esc_html(wp_trim_words(get_the_excerpt(),27));?></p>
            <p  id="educulture-apply-now-button"><a href="<?php echo esc_html(get_theme_mod('educulture_apply_now_url'));?>" class="btn btn-secondary px-3 py-2 mt-5"><?php echo esc_html(get_theme_mod('educulture_apply_now_button',__('Apply Now','educulture')));?></a></p>
          </div>
        </div>
        </div>
      </div>
            <?php 
            endwhile;
            wp_reset_query();
            endif;
            ?>
     
    </section>