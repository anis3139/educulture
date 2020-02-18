<section class="ftco-section testimony-section bg-light">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4" id="educulture-testimonials-heading"><?php echo esc_html(get_theme_mod('educulture_testimonials_heading',__('What Parents Says About Us','educulture')));?></h2>
                <p id="educulture-testimonials-description"><?php echo esc_html(get_theme_mod('educulture_testimonials__description'));?></p>
            </div>
        </div>

        <div class="row ftco-animate justify-content-center">
            <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                           <?php
                        $educulture_testimonials_posts = new WP_Query( array(
                        'post_type' => 'testimonials',
                        'posts_per_page'      => -1,  
                        ) );
                        if( $educulture_testimonials_posts->have_posts() ):
                        while ( $educulture_testimonials_posts->have_posts() ):
                        $educulture_testimonials_posts->the_post();
                        $educulture_testimonials_iamge=get_the_post_thumbnail_url(null, "full");
                    $educulture_testimonials_meta= get_post_meta(get_the_ID(),'educulture_testimonials',true);
                    ?>
                    <div class="item">
                     
                        <div class="testimony-wrap d-flex">
                           
                            <div class="user-img mr-4" style="background-image: url(<?php echo esc_url($educulture_testimonials_iamge);?>)">
                            </div>
                            <div class="text ml-2 bg-light">
                                <span class="quote d-flex align-items-center justify-content-center">
                                    <i class="icon-quote-left"></i>
                                </span>
                                <p class="testimony-hight overflow-hidden"><?php echo esc_html(wp_trim_words(get_the_excerpt(),40));?></p>
                                <p class="name"><?php the_title();?></p>
                                <?php if($educulture_testimonials_meta):?>
                                <span class="position"><?php 
                                    echo esc_html($educulture_testimonials_meta['t_designation']);?>
                                 </span>
                                 <?php endif;?>
                            </div>
                           
                        </div>
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
</section>
