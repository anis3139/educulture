<?php 
/**
* Template Name: Apply Form
*/
?>



<?php get_header();?>
<?php get_template_part("/page-templates/common/hero-blog");?>



<?php
 $educulture_apply_image_id =get_theme_mod("educulture_apply_image","full");
?>

<section id="educulture-apply-image" class="ftco-section ftco-consult ftco-no-pt ftco-no-pb mt-5 mb-5" data-stellar-background-ratio="0.5">

	<div class="row justify-content-between">
		<div class="col-md-6 apply-now-img" style="background-image: url(<?php echo esc_url($educulture_apply_image_id);?>);">
			<div class="apply-now-left heading-section heading-section-white ftco-animate  mb-5">
				<h2 class="mb-3" id="educulture-apply-heading"><?php echo esc_html(get_theme_mod('educulture_apply_heading',__('Interested in studying abroad with Gratuate Track?','educulture')));?></h2>
				<p id="educulture-apply-sub-heading"><?php echo esc_html(get_theme_mod('educulture_apply_sub_heading',__('Enter your details and we will call you back when it suits you.','educulture')));?></p>
			</div>
		</div>
		<div class="col-md-6 p-5 px-md-5 apply-now-right">
			<form action="#" class="appointment-form ftco-animate">
				<?php
					wp_nonce_field('reservation','rn');
					?>
				<div class="d-md-flex">
					<div class="form-group">
						<input type="text" id="name" class="form-control required" placeholder="<?php _e('Name','educulture');?>" required>
					</div>
				</div>
				<div class="d-md-flex">
					<div class="form-group">
						<input type="text" class="form-control required" placeholder="<?php _e('Phone','educulture');?>" id="phone" required>
					</div>
				</div>
				<div class="d-md-flex">
					<div class="form-group">
						<input type="email" class="form-control required" placeholder="<?php _e('Email','educulture');?>" id="email" required>
					</div>
				</div>
				<div class="d-md-flex">
					<div class="form-group">
						<div class="form-field">
							<div class="select-wrap">
								<div class="icon"><span class="ion-ios-arrow-down"></span></div>
								<select name="" id="country" class="form-control" required>
									<option disabled selected hidden value="Select Your Country" class=" bg-primary"><?php _e('Select Your Country','educulture');?></option>
									<option value="UK" class=" bg-primary"><?php _e('UK','educulture');?></option>
									<option value="Canada" class=" bg-primary"><?php _e('Canada','educulture');?></option>
									<option value="USA" class=" bg-primary"><?php _e('USA','educulture');?></option>
									<option value="Australia" class=" bg-primary"><?php _e('Australia','educulture');?></option>
									<option value="Europe" class=" bg-primary"><?php _e('Europe','educulture');?></option>
								</select>
							</div>
						</div>
					</div>

				</div>
				<div class="d-md-flex mt-3">
					<div class="form-group ml-md-4">
						<input type="submit" id="reservenow" value="Apply Now" class="btn btn-secondary  py-3 px-4">
					</div>
				</div>
			</form>
		</div>
	</div>

</section>










<?php get_footer();?>
