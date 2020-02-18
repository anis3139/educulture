<?php 
/**
* Template Name: Contact us
*/
?>
<?php get_header();?>
<?php get_template_part("/page-templates/common/hero-blog");?>



<section class="ftco-section contact-section">
	<div class="container">
		<div class="row d-flex contact-info">
			<div class="col-md-4 d-flex">
				<div class="bg-light align-self-stretch box p-4 text-center">
					<h2 class="mb-4 text-danger"><?php _e('Address ','educulture');?></h2>
					<hr class="contact-underline">
					<p id="educulture-address"><?php echo esc_html(get_theme_mod('educulture_address',__('Contact: Khilgoan, Dhaka-1219, Bangladesh','educulture')));?></p>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="bg-light align-self-stretch box p-4 text-center">
					<h2 class="mb-4 text-danger"><?php _e('Contact Number ','educulture');?></h2>
					<hr class="contact-underline">
					<p id="educulture-phone"><a href="tel:<?php echo esc_html(get_theme_mod('educulture_phone',__('00801816366535','educulture')));?>"><?php echo esc_html(get_theme_mod('educulture_phone',__('00801816366535','educulture')));?></a></p>
				</div>
			</div>
			<div class="col-md-4 d-flex">
				<div class="bg-light align-self-stretch box p-4 text-center">
					<h2 class="mb-4 text-danger"><?php _e('Email Address ','educulture');?></h2>
					<hr class="contact-underline">
					<p id="educulture-email"><a href="mailto:<?php echo esc_html(get_theme_mod('educulture_email',__('anis904692@gmail.com','educulture')));?>"><?php echo esc_html(get_theme_mod('educulture_email',__('anis904692@gmail.com','educulture')));?></a></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section ftco-no-pt ftco-no-pb contact-section pl-5 mb-5">
	<div class="container">
		<div class="row d-flex align-items-stretch no-gutters">
			<div class="col-md-6 p-4 p-md-5 order-md-last bg-light" id="educulture-contact-form">
					<?php 
					$educulture_contact_form=get_theme_mod("educulture_contact_form");
                       if($educulture_contact_form){
                       echo do_shortcode($educulture_contact_form);
                        };
                        ?>

			</div>
			<div class="col-md-6 d-flex align-items-stretch p-5">
				<div id="map">
					<?php 
                         if ( is_active_sidebar( "google-map" ) ) {
                        dynamic_sidebar( "google-map" );
                        }
                        ?>
				</div>
			</div>
		</div>
	</div>
</section>






<?php get_template_part("/page-templates/common/apply-now")?>


<?php get_footer();?>
