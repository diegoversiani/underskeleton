<form role="search" method="get" action="<?php echo esc_url( home_url( '/' ) ); ?>">
  <label class="screen-reader-text"><?php echo _x( 'Search for:', 'label', 'underskeleton' ) ?></label>
  <input type="search" class="search-field"
      placeholder="<?php echo esc_attr_x( 'Search ...', 'placeholder', 'underskeleton' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label', 'underskeleton' ) ?>" /><input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'underskeleton' ) ?>">
</form>
