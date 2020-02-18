<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
    <span class="screen-reader-text"><?php _e( '', 'educulture' ) ?></span>
    <input type="search" class="search-field"
           placeholder="<?php _e( 'Type Keyword …', 'educulture' ) ?>"
           value="<?php echo get_search_query() ?>" name="s"
           title="<?php _e( 'Search for:', 'educulture' ) ?>"/>
    <input type="submit" class="search-submit"
           value="<?php _e( 'Go', 'educulture' ) ?>"/>
</form>