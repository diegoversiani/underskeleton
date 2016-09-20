<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
  <label class="screen-reader-text"><?php echo _x( 'Search for:', 'label' ) ?></label>
  <input type="hidden" value="1" name="sentence" />
  <input type="search" class="search-field"
      placeholder="<?php echo esc_attr_x( 'Search …', 'placeholder' ) ?>"
      value="<?php echo get_search_query() ?>" name="s"
      title="<?php echo esc_attr_x( 'Search for:', 'label' ) ?>" /><input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button' ) ?>">
</form>
