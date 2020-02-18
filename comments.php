 <div class="pt-5">
     <h3 class="mb-5">
         <?php
                $educulture_cn = get_comments_number();
                if ( $educulture_cn <= 1 ) {
                    echo esc_html($educulture_cn) . " " . __( "Comment", "educulture" );
                } else {
                    echo esc_html($educulture_cn) . " " . __( "Comments", "educulture" );
                }
                ?>
     </h3>
     
     
     <ul class="comment-list">
     <?php
                wp_list_comments(
                    
                );
                ?>
     </ul>
     <div class="comments-pagination">
                <?php
                the_comments_pagination( array(
                    'screen_reader_text' => __( 'Pagination', 'educulture' ),
                    'prev_text'          => '<' . __( 'Previous Comments', 'educulture' ),
                    'next_text'          => '>' . __( 'Next Comments', 'educulture' ),
                ) );
                ?>
            </div>
     <div class="comment-form-wrap pt-5">
        
         <h3 class="h2">
                    <?php _e("Add Comment","educulture"); ?>
                </h3>

                <?php
                comment_form();
                ?>

         
     </div>
 </div>
