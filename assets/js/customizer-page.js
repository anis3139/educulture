;
(function ($) {

/*	----------------------
	About Page
-------------------------------*/
    
    wp.customize('educulture_about_featured_content',function(value){
        value.bind(function(newvalue){
            $("#educulture-about-content").html(newvalue);
        });
    }); 
	
	 wp.customize('educulture_about_history_description',function(value){
        value.bind(function(newvalue){
            $("#educulture-history-description").html(newvalue);
        });
    }); 
	
	 wp.customize('educulture_about_vision_description',function(value){
        value.bind(function(newvalue){
            $("#educulture-vision-description").html(newvalue);
        });
    }); 
	
/*	
----------------
	Study Abroad
	-------------*/
		
	 wp.customize('educulture_study_abroad_description',function(value){
        value.bind(function(newvalue){
            $("#educulture-study-abroad-description").html(newvalue);
        });
    });
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	

})(jQuery);
