<?php

/* Disable the Admin Bar. */
add_filter( 'show_admin_bar', '__return_false' );

/* Remove the Admin Bar preference in user profile */
remove_action( 'personal_options', '_admin_bar_preferences' );

/* Increase length of excerpt returned */
function custom_excerpt_length( $length ) {
	return 55;
}
add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );

/* Replace [...] of excerpts with Read More link */
function new_excerpt_more($more) {
  global $post;
	return ' <a href="'. get_permalink($post->ID) . '" class="readmore">Read more &raquo;</a>';
}
add_filter('excerpt_more', 'new_excerpt_more');

?>
