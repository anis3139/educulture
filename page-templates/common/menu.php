<nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco_navbar ftco-navbar-light" id="ftco-navbar">
    <div class="container d-flex align-items-center logo">
        <a class="navbar-brand" href="<?php site_url();?>"> <?php if(has_custom_logo()){
                  the_custom_logo();
                }else{
                    echo "<h1><a href='".home_url("/")."'>".get_bloginfo('name')."</a></h1>";
                }
                ?></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> <?php _e('Menu','educulture')?>
        </button>
        <div class="collapse navbar-collapse justify-content-end" id="ftco-nav">
		   <?php
			$educulture_main_menu = wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'menu_id' => 'topmenu',
					'menu_class' => 'navbar-nav ml-auto',
					'container' => 'false', // Remove Defult Div Container
					'echo' => false 
				)
			);
			$educulture_main_menu = str_replace("sub-menu", "sub-menu sub_menu pages",  $educulture_main_menu);
			echo $educulture_main_menu;
			?>

        </div>
    </div>
</nav>
