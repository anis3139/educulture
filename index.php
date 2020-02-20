<?php get_header();?>
<?php get_template_part("/page-templates/common/hero-blog")?>

<?php 
$educulture_layout_class="col-md-8";
$educulture_layout_class_second="col-md-6 col-lg-6 mb-4 mb-lg-6";
if(!is_active_sidebar("sidebar-blog")){
    $educulture_layout_class="col-md-12";
    $educulture_layout_class_second="col-md-4 col-lg-4 mb-4 mb-lg-4";
};

?>


<section <?php post_class();?> class="ftco-section bg-light">
	<div class="container  blog-section ">
		<div class="row">

			<?php 
                if(is_active_sidebar("sidebar-blog")):
            ?>
			<div class="col-md-4 col-lg-4">
				<?php 
                         if ( is_active_sidebar( "sidebar-blog" ) ) {
                        dynamic_sidebar( "sidebar-blog" );
                            }
                          ?>
			</div>
			<?php endif; ?>


			<div class="<?php echo esc_attr($educulture_layout_class); ?> row">


				<?php 
                while(have_posts()):
                the_post();
                    ?>
				<div class="<?php echo esc_attr($educulture_layout_class_second); ?> blog-box ftco-animate">
					<div class="blog-entry ">
						<a href="<?php the_permalink();?>">
							<?php 
                        if(has_post_thumbnail()){
                        the_post_thumbnail("educulture-blog-image",array("class"=>"img-fluid"));
                        }
                        ?>
						</a>

						<div class="text bg-white p-4">
							<h3 class="heading"><a href="<?php the_permalink();?>"><?php the_title();?></a></h3>
							<div class="meta mb-4"><em><?php echo the_author_posts_link();?></em><span class="mx-2">&bullet;</span> <a href="<?php the_permalink(); ?>"><?php echo get_the_date();?></a><span class="mx-2">&bullet;</span> <a href="#"><?php echo get_the_tag_list("<span>",",&nbsp","</span>");?></a></div>
							<p><?php the_excerpt(); ?></p>

						</div>
					</div>
				</div>
				<?php endwhile;?>
			</div>

		</div>

		<div class="col-md-8 offset-md-2 text-center my-5">
			<div class="block-27 text-center">
				<?php the_posts_pagination();?>
			</div>
		</div>

	</div>
</section>

<?php get_footer();?>

<?php wp_footer();?>
