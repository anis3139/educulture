<?php 
/**
* Template Name: Study Abroad
*/
?>


<?php get_header();?>
<?php get_template_part("/page-templates/common/hero-blog");?>




<section class="ftco-section ftco-counter img" id="section-counter" data-stellar-background-ratio="0.5">
	<div class="container">
		<div class="text-center heading-section ftco-animate">
			<h2 class="mb-4" id="educulture-study-abroad-heading"><?php echo esc_html(get_theme_mod('educulture_study_abroad_heading',__('Welcome To educulture','educulture')));?></h2>
			<p id="educulture-study-abroad-description"><?php echo esc_html(get_theme_mod('educulture_study_abroad_description'));?></p>
		</div>

		<div class="row d-md-flex align-items-center justify-content-center">
			<div class="col-md-6 p-5">
				<?php
                        $educulture_study_abroad_posts = new WP_Query( array(
                        'post_type' => 'studyabroads',
                        'posts_per_page'      => -1,  
                        ) );
                        if( $educulture_study_abroad_posts->have_posts() ):
                        while ( $educulture_study_abroad_posts->have_posts() ):
                        $educulture_study_abroad_posts->the_post();
                   	?>
				<a class="" href="<?php the_permalink();?>">
					<div class="">
						<p class="text-center text-light study-country-item">
						<?php the_title();?>
						</p>
					</div>
				</a>
				<?php 
                        endwhile;
                        wp_reset_query();
                        endif;
                    ?>

			</div>
			<div class="col-md-6 p-5" id="educulture-study-abroad-image">
				<?php 
				$about_study_abroad_image= get_theme_mod("educulture_study_abroad_image");
				echo wp_get_attachment_image($about_study_abroad_image,"large");
				?>
			</div>
		</div>
	</div>
</section>



<?php get_template_part("/page-templates/template-parts/statistics")?>
<?php get_template_part("/page-templates/common/partner")?>
<?php get_template_part("/page-templates/common/apply-now")?>






<?php get_footer();?>