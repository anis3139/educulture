<?php


function educulture_about_us_customize_register($wp_educulture){
	

  /**
	 * About us Page Settings
	 */
    
	$wp_educulture->add_section( 'educulture_about_page', array(
		'title'           => __( 'About Page Settings', 'educulture' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/about-us.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/about-us.php' );
		}
	) );
     
    $wp_educulture->add_setting( 'educulture_about_featured_content_heading', array(
		'default'   => "Welcome to educulture",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_featured_content_heading', array(
		'label'    => __( 'Featured Heading', 'educulture' ),
		'section'  => 'educulture_about_page',
		'type'     => 'text',

	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_about_featured_content_heading',array(
		'selector'=>'#educulture-about-content-heading',
		'settings'=>'educulture_about_featured_content_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_about_featured_content_heading');
		}
	));     
    
	
	     
    $wp_educulture->add_setting( 'educulture_about_featured_content', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_featured_content', array(
		'label'    => __( 'Featured Description', 'educulture' ),
		'section'  => 'educulture_about_page',
		'type'     => 'textarea',

	) );
    
          
    $wp_educulture->add_setting( 'educulture_about_featured_image', array(
		'default'   => "Upload Image",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_educulture,
			'educulture_about_featured_image',
			array(
				'label'      => __( 'Upload About Featured Image', 'educulture' ),
				'section'    => 'educulture_about_page',
				'settings'   => 'educulture_about_featured_image',
				'width'		=>500,
				'height'	=>500,
			)
		)
	);
    
	
	   
    $wp_educulture->selective_refresh->add_partial('educulture_about_featured_image',array(
		'selector'=>'#educulture-about-featured-image',
		'settings'=>'educulture_about_featured_image',
		'render_callback'=>function(){
			return get_theme_mod('educulture_about_featured_image');
		}
	));     
    
	
	
    $wp_educulture->add_setting( 'educulture_about_history_heading', array(
		'default'   => "Our History",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_history_heading', array(
		'label'    => __( 'History Heading', 'educulture' ),
		'section'  => 'educulture_about_page',
		'type'     => 'text',

	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_about_history_heading',array(
		'selector'=>'#educulture-history-heading',
		'settings'=>'educulture_about_history_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_about_history_heading');
		}
	));     
    
		
	
	  $wp_educulture->add_setting( 'educulture_about_history_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_history_description', array(
		'label'    => __( 'History Description', 'educulture' ),
		'section'  => 'educulture_about_page',
		'type'     => 'textarea',

	) );
    
	
	
	
	
    $wp_educulture->add_setting( 'educulture_about_vision_heading', array(
		'default'   => "Our Vision",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_vision_heading', array(
		'label'    => __( 'History Heading', 'educulture' ),
		'section'  => 'educulture_about_page',
		'type'     => 'text',

	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_about_vision_heading',array(
		'selector'=>'#educulture-vision-heading',
		'settings'=>'educulture_about_vision_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_about_vision_heading');
		}
	));     
    
		
	
	  $wp_educulture->add_setting( 'educulture_about_vision_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_vision_description', array(
		'label'    => __( 'Vision Description', 'educulture' ),
		'section'  => 'educulture_about_page',
		'type'     => 'textarea',

	) );
    
	
	
	
	/**
	 * Study Abroad Page Settings
	 */
    
	$wp_educulture->add_section( 'educulture_study_abroad', array(
		'title'           => __( 'Study Abroad Settings', 'educulture' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/studyabroads.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/studyabroads.php' );
		}
	) );
     
	
	   $wp_educulture->add_setting( 'educulture_study_abroad_image', array(
		'default'   => "Upload Image",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control(
		new WP_Customize_Cropped_Image_Control(
			$wp_educulture,
			'educulture_study_abroad_image',
			array(
				'label'      => __( 'Upload About Featured Image', 'educulture' ),
				'section'    => 'educulture_study_abroad',
				'settings'   => 'educulture_study_abroad_image',
				'width'		=>500,
				'height'	=>500,
			)
		)
	);
    
	
	 $wp_educulture->selective_refresh->add_partial('educulture_study_abroad_image',array(
		'selector'=>'#educulture-study-abroad-image',
		'settings'=>'educulture_study_abroad_image',
		'render_callback'=>function(){
			return get_theme_mod('educulture_study_abroad_image');
		}
	)); 
	
	$wp_educulture->add_setting( 'educulture_study_abroad_heading', array(
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_study_abroad_heading', array(
		'label'    => __( 'Heading', 'educulture' ),
		'section'  => 'educulture_study_abroad',
		'type'     => 'text',

	) );
	
    $wp_educulture->selective_refresh->add_partial('educulture_study_abroad_heading',array(
		'selector'=>'#educulture-study-abroad-heading',
		'settings'=>'educulture_study_abroad_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_study_abroad_heading');
		}
	));
	
		
	$wp_educulture->add_setting( 'educulture_study_abroad_description', array(
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_study_abroad_description', array(
		'label'    => __( 'Description', 'educulture' ),
		'section'  => 'educulture_study_abroad',
		'type'     => 'textarea',

	) );
	
	    
    /**
	 * Contact Pages Settings
	 */

	$wp_educulture->add_section( 'educulture_contact_page', array(
		'title'           => __( 'Contact Page setting', 'educulture' ),
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/contact-us.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/contact-us.php' );
		}
	) );
    
       $wp_educulture->add_setting( 'educulture_address', array(
		'default'   => "Khilgoan, Dhaka-1219, Bangladesh",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_address', array(
		'label'    => __( 'Address', 'educulture' ),
		'section'  => 'educulture_contact_page',
		'type'     => 'text',

	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_address',array(
		'selector'=>'#educulture-address',
		'settings'=>'educulture_address',
		'render_callback'=>function(){
			return get_theme_mod('educulture_address');
		}
	));
     
    $wp_educulture->add_setting( 'educulture_phone', array(
		'default'   => "008801816366535",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_phone', array(
		'label'    => __( 'Phone', 'educulture' ),
		'section'  => 'educulture_contact_page',
		'type'     => 'text',

	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_phone',array(
		'selector'=>'#educulture-phone',
		'settings'=>'educulture_phone',
		'render_callback'=>function(){
			return get_theme_mod('educulture_phone');
		}
	));     
    
    
    $wp_educulture->add_setting( 'educulture_email', array(
		'default'   => "anis904692@gmail.com",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_email', array(
		'label'    => __( 'Email', 'educulture' ),
		'section'  => 'educulture_contact_page',
		'type'     => 'text',

	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_email',array(
		'selector'=>'#educulture-email',
		'settings'=>'educulture_email',
		'render_callback'=>function(){
			return get_theme_mod('educulture_email');
		}
	));
     
    
    $wp_educulture->add_setting( 'educulture_contact_form', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_contact_form', array(
		'label'    => __( 'Contact Form', 'educulture' ),
		'section'  => 'educulture_contact_page',
		'type'     => 'textarea',

	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_contact_form',array(
		'selector'=>'#educulture-contact-form',
		'settings'=>'educulture_contact_form',
		'render_callback'=>function(){
			return get_theme_mod('educulture_contact_form');
		}
	));
    
    
    
     /**
	 * Apply Now Pages Settings
	 */

	$wp_educulture->add_section( 'educulture_apply_now_page', array(
		'title'           => __( 'Apply Now settings', 'educulture' ),
		'priority'        => '30',
		'active_callback' => function () {
			if(is_page_template('page-templates/apply-form.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/apply-form.php' );
		}
	) );
    
       $wp_educulture->add_setting( 'educulture_apply_heading', array(
		'default'   => "Interested in studying abroad with Gratuate Track?",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_apply_heading', array(
		'label'    => __( 'Apply Heading', 'educulture' ),
		'section'  => 'educulture_apply_now_page',
		'type'     => 'text',

	) );
    
       
	 $wp_educulture->selective_refresh->add_partial('educulture_apply_heading',array(
		'selector'=>'#educulture-apply-heading',
		'settings'=>'educulture_apply_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_apply_heading');
		}
	));
	
	    $wp_educulture->add_setting( 'educulture_apply_sub_heading', array(
		'default'   => "Enter your details and we will call you back when it suits you.",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_apply_sub_heading', array(
		'label'    => __( 'Apply Sub Heading', 'educulture' ),
		'section'  => 'educulture_apply_now_page',
		'type'     => 'text',

	) );
    
       
	 $wp_educulture->selective_refresh->add_partial('educulture_apply_sub_heading',array(
		'selector'=>'#educulture-apply-sub-heading',
		'settings'=>'educulture_apply_sub_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_apply_sub_heading');
		}
	));
	
	
	 $wp_educulture->add_setting( 'educulture_apply_image', array(
		'default'   => "Upload Image",
		'transport' => 'refresh',
	) );

	$wp_educulture->add_control(
		new WP_Customize_Image_Control(
			$wp_educulture,
			'$wp_educulture',
			array(
				'label'      => __( 'Upload Apply Now Image', 'educulture' ),
				'section'    => 'educulture_apply_now_page',
				'settings'   => 'educulture_apply_image',
			)
		)
	);
	
	 $wp_educulture->selective_refresh->add_partial('educulture_apply_image',array(
		'selector'=>'#educulture-apply-image',
		'settings'=>'educulture_apply_image',
		'render_callback'=>function(){
			return get_theme_mod('educulture_apply_image');
		}
	));
	
}


add_action('customize_register','educulture_about_us_customize_register');
