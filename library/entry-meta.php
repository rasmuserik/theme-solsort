<?php
/**
 * Entry meta information for posts
 *
 * @package WordPress
 * @subpackage FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
    $category = get_the_category();
    echo sprintf('<a href="%s">%s</a>, ',
      get_category_link($category[0]->cat_ID),
      $category[0]->name);
		echo '<time class="updated" datetime="'. get_the_time( 'c' ) .'">'. sprintf( __( '%s', 'foundationpress' ), get_the_date()) .'</time>';
	}
endif;
?>
