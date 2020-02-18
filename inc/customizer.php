<?php

function educulture_customizer_settings( $wp_educulture ) {
 
	
	$wp_educulture->add_panel( 'font_page', array(
  		'title'           => __( 'Front Page Settings', 'educulture' ),
		'priority' => 40, 
	) );
	
   
    /**
	 * Featured Post Settings
	 */
    
	$wp_educulture->add_section( 'educulture_featured_post', array(
		'title'           => __( 'Featured Posts Settings', 'educulture' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
   
    
    
    $wp_educulture->add_setting( 'educulture_featured_post_icon_one', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_icon_one', array(
		'label'    => __( 'Featured Post Icon One', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Select Featured Post Icon', 'educulture' ),
		'type'     => 'select',
        'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture'),
             'flaticon-reading' => __( 'Reading','educulture'),
             'flaticon-books' => __( 'Books','educulture' ),
             'flaticon-diploma' => __( 'Diploma' ,'educulture'),
             'flaticon-security' => __( 'Security','educulture' ),
             'flaticon-education' => __( 'Education','educulture'),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture'),
             'flaticon-kids' => __( 'kids','educulture'),
        ),
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_featured_post_icon_one',array(
		'selector'=>'#educulture-featured-icon-one',
		'settings'=>'educulture_featured_post_icon_one',
		'render_callback'=>function(){
			return get_theme_mod('educulture_featured_post_icon_one');
		}
	));
    
    
    
    
    $wp_educulture->add_setting( 'educulture_featured_post_heading_one', array(
		'default'   => "Certified Teachers",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_heading_one', array(
		'label'    => __( 'Heading One', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Heading', 'educulture' ),
		'type'     => 'text'
	) );    
    
    $wp_educulture->add_setting( 'educulture_featured_post_descriptions_one', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_descriptions_one', array(
		'label'    => __( 'Description One', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Description', 'educulture' ),
		'type'     => 'text'
	) );
 
    

    $wp_educulture->add_setting( 'educulture_featured_post_icon_two', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_icon_two', array(
		'label'    => __( 'Featured Post Icon Two', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Select Featured Post Icon', 'educulture' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture'),
             'flaticon-reading' => __( 'Reading','educulture'),
             'flaticon-books' => __( 'Books','educulture'),
             'flaticon-diploma' => __( 'Diploma','educulture'),
             'flaticon-security' => __( 'Security','educulture'),
             'flaticon-education' => __( 'Education','educulture' ),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture' ),
             'flaticon-kids' => __( 'kids','educulture'),
        ),
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_featured_post_icon_two',array(
		'selector'=>'#educulture-featured-con-two',
		'settings'=>'educulture_featured_post_icon_two',
		'render_callback'=>function(){
			return get_theme_mod('educulture_featured_post_icon_two');
		}
	));
    
    
    
    
    $wp_educulture->add_setting( 'educulture_featured_post_heading_two', array(
		'default'   => "Special Education",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_heading_two', array(
		'label'    => __( 'Heading Two', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Heading', 'educulture' ),
		'type'     => 'text'
	) );    
    
    $wp_educulture->add_setting( 'educulture_featured_post_descriptions_two', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_descriptions_two', array(
		'label'    => __( 'Description Two', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Description', 'educulture' ),
		'type'     => 'text'
	) );
 
    
    


    $wp_educulture->add_setting( 'educulture_featured_post_icon_three', array(
		'default'   => "flaticon-books",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_icon_three', array(
		'label'    => __( 'Featured Post Icon Three', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Select Featured Post Icon', 'educulture' ),
		'type'     => 'select',
       'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture' ),
             'flaticon-reading' => __( 'Reading','educulture' ),
             'flaticon-books' => __( 'Books','educulture' ),
             'flaticon-diploma' => __( 'Diploma','educulture' ),
             'flaticon-security' => __( 'Security','educulture' ),
             'flaticon-education' => __( 'Education','educulture' ),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture' ),
             'flaticon-kids' => __( 'kids','educulture' ),
        ),
        
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_featured_post_icon_three',array(
		'selector'=>'#educulture-featured-con-three',
		'settings'=>'educulture_featured_post_icon_three',
		'render_callback'=>function(){
			return get_theme_mod('educulture_featured_post_icon_three');
		}
	));
    
    
    
    
    $wp_educulture->add_setting( 'educulture_featured_post_heading_three', array(
		'default'   => "Special Education",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_heading_three', array(
		'label'    => __( 'Heading Three', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Heading', 'educulture' ),
		'type'     => 'text'
	) );    
    
    $wp_educulture->add_setting( 'educulture_featured_post_descriptions_three', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_descriptions_three', array(
		'label'    => __( 'Description Three', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Description', 'educulture' ),
		'type'     => 'text'
	) );
 
     


    $wp_educulture->add_setting( 'educulture_featured_post_icon_four', array(
		'default'   => "flaticon-diploma",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_icon_four', array(
		'label'    => __( 'Featured Post Icon Four', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Select Featured Post Icon', 'educulture' ),
		'type'     => 'select',
        'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture' ),
             'flaticon-reading' => __( 'Reading','educulture' ),
             'flaticon-books' => __( 'Books','educulture' ),
             'flaticon-diploma' => __( 'Diploma','educulture' ),
             'flaticon-security' => __( 'Security','educulture' ),
             'flaticon-education' => __( 'Education','educulture' ),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture' ),
             'flaticon-kids' => __( 'kids','educulture' ),
        ),
        
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_featured_post_icon_four',array(
		'selector'=>'#educulture-featured-con-four',
		'settings'=>'educulture_featured_post_icon_four',
		'render_callback'=>function(){
			return get_theme_mod('educulture_featured_post_icon_four');
		}
	));
    
    
    
    
    $wp_educulture->add_setting( 'educulture_featured_post_heading_four', array(
		'default'   => "Special Education",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_heading_four', array(
		'label'    => __( 'Heading Four', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Heading', 'educulture' ),
		'type'     => 'text'
	) );    
    
    $wp_educulture->add_setting( 'educulture_featured_post_descriptions_four', array(
		'default'   => "Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_featured_post_descriptions_four', array(
		'label'    => __( 'Description Four', 'educulture' ),
		'section'  => 'educulture_featured_post',
        'description' => __( 'Featured Post Description', 'educulture' ),
		'type'     => 'text'
	) );
 
    
	
	
	
	
	
	
	
	
	
	
	
	  
   /* -----------------
   About Section
   ------------------------*/
    
      
	$wp_educulture->add_section( 'educulture_about_section', array(
		'title'           => __( 'About Section Settings', 'educulture' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
	
	
	
    $wp_educulture->add_setting( 'educulture_about_heading', array(
		'default'   => "Why We Are The Best",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_heading', array(
		'label'    => __( 'About Section Heading', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'text'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_about_heading',array(
		'selector'=>'#educulture-about-heading',
		'settings'=>'educulture_about_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_about_heading');
		}
	));
    
    
       
    $wp_educulture->add_setting( 'educulture_about_sub_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_sub_heading', array(
		'label'    => __( 'About Section Sub Heading', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'textarea'
	) );
      
    
    
    
    $wp_educulture->add_setting( 'educulture_about_content_heading_one', array(
		'default'   => "Learning system",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_content_heading_one', array(
		'label'    => __( 'About Section Content Heading One', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'text'
	) );
    
    $wp_educulture->add_setting( 'educulture_about_content_desc_one', array(
		'default'   => "Far far away, behind the word mountains, far from the countries Vokalia.",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_content_desc_one', array(
		'label'    => __( 'About Section Content Descriptions One', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'textarea'
	) );
    
    
        
    $wp_educulture->add_setting( 'educulture_about_content_heading_two', array(
		'default'   => "Learning system",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_content_heading_two', array(
		'label'    => __( 'About Section Content Heading Two', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'text'
	) );
    
    $wp_educulture->add_setting( 'educulture_about_content_desc_two', array(
		'default'   => "Far far away, behind the word mountains, far from the countries Vokalia.",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_content_desc_two', array(
		'label'    => __( 'About Section Content Descriptions Two', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'textarea'
	) );
    
           
    $wp_educulture->add_setting( 'educulture_about_content_heading_three', array(
		'default'   => "Learning system",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_content_heading_three', array(
		'label'    => __( 'About Section Content Heading Three', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'text'
	) );
    
    $wp_educulture->add_setting( 'educulture_about_content_desc_three', array(
		'default'   => "Far far away, behind the word mountains, far from the countries Vokalia.",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_about_content_desc_three', array(
		'label'    => __( 'About Section Content Descriptions Three', 'educulture' ),
		'section'  => 'educulture_about_section',
		'type'     => 'textarea'
	) );
    
   
	

	
	

  /**
	 * Special Featured Settings
	 */
    
	$wp_educulture->add_section( 'educulture_special_featured', array(
		'title'           => __( 'Special Featured Settings', 'educulture' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
   

     
    $wp_educulture->add_setting( 'educulture_expert_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_expert_heading', array(
		'label'    => __( 'Special Featured Heading', 'educulture' ),
		'section'  => 'educulture_special_featured',
		'type'     => 'text'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_expert_heading',array(
		'selector'=>'#educulture-experiance-heading',
		'settings'=>'educulture_expert_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_expert_heading');
		}
	));
    
    
      $wp_educulture->add_setting( 'educulture_expert_content_heading_one', array(
		'default'   => "What We Are",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_expert_content_heading_one', array(
		'label'    => __( 'Heading', 'educulture' ),
		'description'    => __( 'Special Featured Section Content Heading One', 'educulture' ),
		'section'  => 'educulture_special_featured',
		'type'     => 'text'
	) );   
    
    $wp_educulture->add_setting( 'educulture_expert_content_desc_one', array(
		'default'   => "All sections required for online training are included to Edulogy.All sections required for online training are included to Edulogy",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_expert_content_desc_one', array(
		'label'    => __( 'Description', 'educulture' ),
		'description'    => __( 'Special Featured Section Content Description One', 'educulture' ),
		'section'  => 'educulture_special_featured',
		'type'     => 'textarea'
	) );
    
    
    $wp_educulture->add_setting( 'educulture_expert_content_heading_two', array(
		'default'   => "What We Are",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_expert_content_heading_two', array(
		'label'    => __( 'Heading', 'educulture' ),
		'description'    => __( 'Special Featured Section Content Heading Two', 'educulture' ),
		'section'  => 'educulture_special_featured',
		'type'     => 'text'
	) );   
    
    $wp_educulture->add_setting( 'educulture_expert_content_desc_two', array(
		'default'   => "All sections required for online training are included to Edulogy.All sections required for online training are included to Edulogy",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_expert_content_desc_two', array(
		'label'    => __( 'Description', 'educulture' ),
		'description'    => __( 'Special Featured Section Content Description Two', 'educulture' ),
		'section'  => 'educulture_special_featured',
		'type'     => 'textarea'
	) );
    
    
        $wp_educulture->add_setting( 'educulture_expert_content_heading_three', array(
		'default'   => "What We Are",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_expert_content_heading_three', array(
		'label'    => __( 'Heading', 'educulture' ),
		'description'    => __( 'Special Featured Section Content Heading Three', 'educulture' ),
		'section'  => 'educulture_special_featured',
		'type'     => 'text'
	) );   
    
    $wp_educulture->add_setting( 'educulture_expert_content_desc_three', array(
		'default'   => "All sections required for online training are included to Edulogy.All sections required for online training are included to Edulogy",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_expert_content_desc_three', array(
		'label'    => __( 'Description', 'educulture' ),
		'description'    => __( 'Special Featured Section Content Description Three', 'educulture' ),
		'section'  => 'educulture_special_featured',
		'type'     => 'textarea'
	) );
    
    
	
	
	
	
	
	
	  /**
	 * Front Page Settings
	 */
    
	$wp_educulture->add_section( 'educulture_front_page', array(
		'title'           => __( 'Others Section Settings', 'educulture' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
     
   
  
 /*   
   --------------
    Testimonials
    ----------------*/
         
    $wp_educulture->add_setting( 'educulture_testimonials_heading', array(
		'default'   => "What Parents Says About Us",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_testimonials_heading', array(
		'label'    => __( 'Testimonial Section Heading', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_testimonials_heading',array(
		'selector'=>'#educulture-testimonials-heading',
		'settings'=>'educulture_testimonials_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_testimonials_heading');
		}
	));
    
    
    
        
    $wp_educulture->add_setting( 'educulture_testimonials_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_testimonials_description', array(
		'label'    => __( 'Description', 'educulture' ),
		'description'    => __( 'Testimonial Section Description', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'textarea'
	) );
    
    
    
   /* ---------------
        blog section
        -------------*/
    
          
    $wp_educulture->add_setting( 'educulture_blog_heading', array(
		'default'   => "Recent Blog",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_blog_heading', array(
		'label'    => __( 'Blog Section Heading', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_blog_heading',array(
		'selector'=>'#educulture-blog-heading',
		'settings'=>'educulture_blog_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_blog_heading');
		}
	));
    
    
    
        
    $wp_educulture->add_setting( 'educulture_blog_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_blog_description', array(
		'label'    => __( 'Blog Section Description', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
        
   /* ---------------
       Apply Now Section
        -------------*/
    
          
    $wp_educulture->add_setting( 'educulture_apply_now_heading', array(
		'default'   => "Lets meet and talk! Call us at",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_apply_now_heading', array(
		'label'    => __( 'Apply Now Heading', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
    

        
    $wp_educulture->add_setting( 'educulture_apply_now_phone', array(
		'default'   => "+8801816366535",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_apply_now_phone', array(
		'label'    => __( 'Apply Now Phone', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
    
       
    $wp_educulture->add_setting( 'educulture_apply_now_image', array(
		'default'   => "Upload Image",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control(
		new WP_Customize_Image_Control(
			$wp_educulture,
			'educulture_apply_now_image',
			array(
				'label'      => __( 'Upload Apply Now Image', 'educulture' ),
				'section'    => 'educulture_front_page',
				'settings'   => 'educulture_apply_now_image',
			)
		)
	);
     
      
        
    $wp_educulture->add_setting( 'educulture_apply_now_url', array(
		'default'   => "http://www.rainyforest.xyz",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_apply_now_url', array(
		'label'    => __( 'Apply Now Button URL', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'url'
	) );
    
            
    $wp_educulture->add_setting( 'educulture_apply_now_button', array(
		'default'   => "Apply Now",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_apply_now_button', array(
		'label'    => __( 'Apply Now Button', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
    
      $wp_educulture->selective_refresh->add_partial('educulture_apply_now_button',array(
		'selector'=>'#educulture-apply-now-button',
		'settings'=>'educulture_apply_now_button',
		'render_callback'=>function(){
			return get_theme_mod('educulture_apply_now_button');
		}
	));
    
    /*----------------
        Partner Section
        ----------------*/
    
   $wp_educulture->add_setting( 'educulture_partners_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_partners_heading', array(
		'label'    => __( 'Partners Section Heading', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_partners_heading',array(
		'selector'=>'#educulture-partners-heading',
		'settings'=>'educulture_partners_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_partners_heading');
		}
	));
    
    
            
    
    $wp_educulture->add_setting( 'educulture_partners_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_partners_description', array(
		'label'    => __( 'Partners Section Description', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'textarea',
	) );  
    
   /* -----------------
    FAQ section
    -----------------*/
    
    
    
   $wp_educulture->add_setting( 'educulture_faq_heading', array(
		'default'   => "Frequently Asked Questions",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_faq_heading', array(
		'label'    => __( 'FAQ Section Heading', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'text'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_faq_heading',array(
		'selector'=>'#educulture-faq-heading',
		'settings'=>'educulture_faq_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_faq_heading');
		}
	));
    
    
            
    
    $wp_educulture->add_setting( 'educulture_faq_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_faq_description', array(
		'label'    => __( 'FAQ Section Description', 'educulture' ),
		'section'  => 'educulture_front_page',
		'type'     => 'textarea',
	) );
    
	    
    
    
    
    
    
    
       /*-------------- 
       Statistics
       -----------------*/
	
    $wp_educulture->add_section( 'educulture_statistics_section', array(
		'title'           => __( 'Statistics Settings', 'educulture' ),
		'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
	
	
	   
    $wp_educulture->add_setting( 'educulture_Statistics_image', array(
		'default'   => "Upload Image",
		'transport' => 'refresh',
	) );

	$wp_educulture->add_control(
		new WP_Customize_Image_Control(
			$wp_educulture,
			'educulture_Statistics_image',
			array(
				'label'      => __( 'Upload Statistics Image', 'educulture' ),
				'section'    => 'educulture_statistics_section',
				'settings'   => 'educulture_Statistics_image',
			)
		)
	);
	
	
	
	
	
	
	
	
	
    $wp_educulture->add_setting( 'educulture_statistics_heading', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_heading', array(
		'label'    => __( 'Statistics Section Heading', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'text'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_statistics_heading',array(
		'selector'=>'#educulture-statistics-heading',
		'settings'=>'educulture_statistics_heading',
		'render_callback'=>function(){
			return get_theme_mod('educulture_statistics_heading');
		}
	));
    
    
            
    
    $wp_educulture->add_setting( 'educulture_statistics_description', array(
		'default'   => "",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_description', array(
		'label'    => __( 'Statistics Section Description', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'textarea',
	) );
    
         
           
        
    $wp_educulture->add_setting( 'educulture_statistics_icon_one', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_educulture->add_control( 'educulture_statistics_icon_one', array(
		'label'    => __( 'Statistics Icon One', 'educulture' ),
		'section'  => 'educulture_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'educulture' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture' ),
             'flaticon-reading' => __( 'Reading','educulture' ),
             'flaticon-books' => __( 'Books','educulture' ),
             'flaticon-diploma' => __( 'Diploma','educulture' ),
             'flaticon-security' => __( 'Security','educulture' ),
             'flaticon-education' => __( 'Education','educulture' ),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture' ),
             'flaticon-kids' => __( 'kids','educulture' ),
        ),
        
	) );
    
        
    $wp_educulture->add_setting( 'educulture_statistics_one', array(
		'default'   => "50",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_one', array(
		'label'    => __( 'Statistics Countries Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_statistics_one',array(
		'selector'=>'#educulture-statistics-one',
		'settings'=>'educulture_statistics_one',
		'render_callback'=>function(){
			return get_theme_mod('educulture_statistics_one');
		}
	));
           
    $wp_educulture->add_setting( 'educulture_statistics_content_heading_one', array(
		'default'   => "Countries",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_content_heading_one', array(
		'label'    => __( 'Statistics Countries Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'text'
	) );
    
     $wp_educulture->add_setting( 'educulture_statistics_icon_two', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_educulture->add_control( 'educulture_statistics_icon_two', array(
		'label'    => __( 'Statistics Icon Two', 'educulture' ),
		'section'  => 'educulture_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'educulture' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture' ),
             'flaticon-reading' => __( 'Reading','educulture' ),
             'flaticon-books' => __( 'Books','educulture' ),
             'flaticon-diploma' => __( 'Diploma','educulture' ),
             'flaticon-security' => __( 'Security','educulture' ),
             'flaticon-education' => __( 'Education','educulture' ),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture' ),
             'flaticon-kids' => __( 'kids','educulture' ),
        ),
        
	) );
        
    $wp_educulture->add_setting( 'educulture_statistics_two', array(
		'default'   => "200",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_two', array(
		'label'    => __( 'Statistics Student Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_statistics_two',array(
		'selector'=>'#educulture-statistics-two',
		'settings'=>'educulture_statistics_two',
		'render_callback'=>function(){
			return get_theme_mod('educulture_statistics_two');
		}
	));
           
    $wp_educulture->add_setting( 'educulture_statistics_content_heading_two', array(
		'default'   => "Student Visa",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_content_heading_two', array(
		'label'    => __( 'Statistics Student Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'text'
	) );
    
    
        
            
       
    $wp_educulture->add_setting( 'educulture_statistics_icon_three', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_educulture->add_control( 'educulture_statistics_icon_three', array(
		'label'    => __( 'Statistics Icon Three', 'educulture' ),
		'section'  => 'educulture_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'educulture' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture' ),
             'flaticon-reading' => __( 'Reading','educulture' ),
             'flaticon-books' => __( 'Books','educulture' ),
             'flaticon-diploma' => __( 'Diploma','educulture' ),
             'flaticon-security' => __( 'Security','educulture' ),
             'flaticon-education' => __( 'Education','educulture' ),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture' ),
             'flaticon-kids' => __( 'kids','educulture' ),
        ),
        
	) );
       
  
        
    $wp_educulture->add_setting( 'educulture_statistics_three', array(
		'default'   => "200",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_three', array(
		'label'    => __( 'Statistics Happy Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_statistics_three',array(
		'selector'=>'#educulture-statistics-three',
		'settings'=>'educulture_statistics_three',
		'render_callback'=>function(){
			return get_theme_mod('educulture_statistics_three');
		}
	));
           
    $wp_educulture->add_setting( 'educulture_statistics_content_heading_three', array(
		'default'   => "Happy Smiles",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_content_heading_three', array(
		'label'    => __( 'Statistics Happy Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'text'
	) );
    
    
        
        
                 
       
    $wp_educulture->add_setting( 'educulture_statistics_icon_four', array(
		'default'   => "flaticon-reading",
		'transport' => 'postMessage',
	) );
    
    $wp_educulture->add_control( 'educulture_statistics_icon_four', array(
		'label'    => __( 'Statistics Icon four', 'educulture' ),
		'section'  => 'educulture_statistics_section',
        'description' => __( 'Select Statistics Post Icon', 'educulture' ),
		'type'     => 'select',
         'choices' => array(
             'flaticon-teacher' => __( 'Teacher','educulture' ),
             'flaticon-reading' => __( 'Reading','educulture' ),
             'flaticon-books' => __( 'Books','educulture' ),
             'flaticon-diploma' => __( 'Diploma','educulture' ),
             'flaticon-security' => __( 'Security','educulture' ),
             'flaticon-education' => __( 'Education','educulture' ),
             'flaticon-jigsaw' => __( 'Jigsaw','educulture' ),
             'flaticon-kids' => __( 'kids','educulture' ),
        ),
        
	) );
        
    $wp_educulture->add_setting( 'educulture_statistics_four', array(
		'default'   => "200",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_four', array(
		'label'    => __( 'Statistics parners Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'number'
	) );
    
        
    $wp_educulture->selective_refresh->add_partial('educulture_statistics_four',array(
		'selector'=>'#educulture-statistics-four',
		'settings'=>'educulture_statistics_four',
		'render_callback'=>function(){
			return get_theme_mod('educulture_statistics_four');
		}
	));
           
    $wp_educulture->add_setting( 'educulture_statistics_content_heading_four', array(
		'default'   => "Partners",
		'transport' => 'postMessage',
	) );

	$wp_educulture->add_control( 'educulture_statistics_content_heading_four', array(
		'label'    => __( 'Statistics parners Section', 'educulture' ),
		'section'  => 'educulture_statistics_section',
		'type'     => 'text'
	) );
    
    

    
	
	
	
	
	/*----------------
	Color Control
	-----------------*/
	
	 $wp_educulture->add_section( 'educulture_heading_color_section', array(
		'title'           => __( 'Front Page Color Control', 'educulture' ),
		 'panel' => 'font_page',
		'priority'        => '40',
		'active_callback' => function () {
			if(is_page_template('page-templates/landing.php')){
				return true;
			}
			return false;

			return is_page_template( 'page-templates/landing.php' );
		}
	) );
	
    
    $wp_educulture->add_setting( 'educulture_heading_color', array(
		'default'   => '#fda638',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_heading_color_control', array(
		'label'    => __( 'Header Color Control', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_heading_color'
	) ) );
    
    	
   
    $wp_educulture->add_setting( 'educulture_title_color', array(
		'default'   => '#fda638',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_title_color_control', array(
		'label'    => __( 'Title Color', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_title_color'
	) ) );
    
    $wp_educulture->add_setting( 'educulture_sub_title_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_sub_title_color_control', array(
		'label'    => __( 'Sub Title Color', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_sub_title_color'
	) ) );  
	
	
	
    $wp_educulture->add_setting( 'educulture_button_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_button_color_control', array(
		'label'    => __( 'Button Color', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_button_color'
	) ) );
    
    	
	
    $wp_educulture->add_setting( 'educulture_button_bg_color', array(
		'default'   => '#fda638',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_button_bg_color_control', array(
		'label'    => __( 'Button Background Color', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_button_bg_color'
	) ) );
    
        	
	
    $wp_educulture->add_setting( 'educulture_about_section_bg', array(
		'default'   => '#1EAAF1',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_about_section_color_control', array(
		'label'    => __( 'About Section Icon', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_about_section_bg'
	) ) );       	
	
/*	
	-------------------
		FAQ Section
	-------------------*/
	
	
    $wp_educulture->add_setting( 'educulture_faq_section_bg', array(
		'default'   => '#fff',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_faq_section_bg_control', array(
		'label'    => __( 'FAQ Section Background', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_faq_section_bg'
	) ) );
    
    	
   $wp_educulture->add_setting( 'educulture_faq_section_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_faq_section_color_control', array(
		'label'    => __( 'FAQ Section Font Color', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_faq_section_color'
	) ) );
    
    	

    
/*    
    --------------
		Topbar Color
	--------------*/
    
    
        	
   $wp_educulture->add_setting( 'educulture_topbar_background_color', array(
		'default'   => '#000',
		'transport' => 'postMessage'
	) );

	$wp_educulture->add_control( new WP_Customize_Color_Control( $wp_educulture, 'educulture_topbar_background_color_control', array(
		'label'    => __( 'Topbar Background Color', 'educulture' ),
		'section'  => 'educulture_heading_color_section',
		'settings' => 'educulture_topbar_background_color'
	) ) );
    
    
    
    
    
    
    
    
    
    
    

  
    
    
    
    
    
    
}

add_action( 'customize_register', 'educulture_customizer_settings' );

