<?php 
function custom_readmore() {
	return '<p class="readmore"><a class="readmore__link" href="' . get_permalink() . '">Read More</a></p>';
}
add_filter( 'the_content_more_link', 'custom_readmore' );