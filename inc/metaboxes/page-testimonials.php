<?php
function educulture_testimonials_metabox( $metaboxes ) {
    $metaboxes[] = array(
        'id'        => 'educulture_testimonials',
        'title'     => __( 'Testimonials Details', 'educulture' ),
        'post_type' => 'testimonials',
        'context'   => 'normal',
        'priority'  => 'default',
        'sections'  => array(
            array(
                'name'     => 'educulture_testimonials_section_one',
                'icon'   => 'fa fa-image',
                'fields' => array(
                    array(
                        'id'    => 't_designation',
                        'title'   => __( 'Designation', 'educulture' ),
                        'type'    => 'text',
             ), 
          ),
      ),
  ),
);
    return $metaboxes;
}
add_filter( 'cs_metabox_options', 'educulture_testimonials_metabox' );
