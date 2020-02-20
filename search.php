<?php get_header();?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('<?php echo get_template_directory_uri()?>./assets/images/computer-search.jpg');">
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <h1 class="search text-danger font-weight-bold"><?php _e('Search Results...','educulture');?></h1>
            </div>
        </div>
    </div>
</section>
<section <?php post_class();?> class="ftco-section bg-light">
    <div class="container">
        <div class="text-center mt-3">
            <?php
        echo get_search_form();
        ?>
        </div>
        <div class="search-result text-center mt-3">
            <?php
        if(is_search()){
        ?>
            <h3><span class="text-primary"><?php _e("You searched for:","educulture") ?></span> <?php the_search_query(); ?></h3>
            <?php
         }
        ?>
        </div>
        <div class="posts single-page">
            <?php
        if ( ! have_posts() ):
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 p-3 text-center">
                        <h4 class=" bg-gradient-warning text-danger font-weight-bold">
                            <?php _e('No result found','educulture'); ?>
                        </h4>
                    </div>
                </div>
            </div>
            <?php endif;?>
        </div>
        <div class="row">
            <div class="col-md-10 offset-md-1">


                <?php 
                while(have_posts()):
                the_post();
                    ?>
                <div class="co<?php echo esc_attr($educulture_layout_class_second); ?>  blog-section ftco-animate">
                    <div class="blog-entry">


                        <div class="text bg-white p-4">
                            <a href="<?php the_permalink();?>"><h2 class="text-center text-primary"><?php the_title();?></h2></a>
                            <div class="meta mb-4 text-center"><em><?php echo the_author_posts_link();?></em><span class="mx-2">&bullet;</span> <a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a></div>
                            <p class="text-justify mt-5"><?php the_content();?></p>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>
            </div>
			 <div class="col-md-8 offset-md-2 text-center my-5">
				<div class="block-27 text-center">
					<?php the_posts_pagination();?>
				</div>
			</div>
        </div>
    </div>
</section>

<?php get_footer();?>

<?php wp_footer();?>
