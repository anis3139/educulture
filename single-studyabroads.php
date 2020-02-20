<?php get_header();?>
<?php get_template_part("/page-templates/common/hero-blog");?>


<?php 
global $educulture_section_id;
$educulture_section             = get_post( $educulture_section_id );
$educulture_section_title       = $educulture_section->post_title;
$educulture_section_description = $educulture_section->post_content;

?>




<section class="ftco-section ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="text-center heading-section ftco-animate">
			<h2 class="section-title mb-3">
				<?php echo esc_html($educulture_section_title);?>
			</h2>
			<p class="lead text-justify" data-aos="fade-up" data-aos-delay="100">
				<?php echo wp_kses_post($educulture_section_description);?>
			</p>
		</div>

		<div class="row mt-5">
			<?php
                  $educulture_video_posts = new WP_Query( array(
                  'post_type' => 'video',
                  'posts_per_page'      => -1,  
                  ) );
                  if( $educulture_video_posts->have_posts() ):
                  while ( $educulture_video_posts->have_posts() ):
                  $educulture_video_posts->the_post();
             ?>
			<div class="col-md-4 blog-box">
				<div class="text-center">
					<h3><?php the_title();?></h3>
				</div>
				<div class="video text-center">
					<?php the_content();?>
				</div>
				
			</div>
			<?php 
                endwhile;
               wp_reset_query();
                endif;
             ?>
		</div>


	</div>
</section>



<?php get_template_part("/page-templates/common/faq")?>






<?php get_template_part("/page-templates/common/apply-now")?>






<?php get_footer();?>