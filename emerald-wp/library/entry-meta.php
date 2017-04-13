<?php
/**
 * Entry meta information for posts
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

if ( ! function_exists( 'foundationpress_entry_meta' ) ) :
	function foundationpress_entry_meta() {
        echo '<p class="byline author">' . __( 'Written by ', 'foundationpress' ) . get_the_author() . '</p>';
        echo ' | ';
		echo '<time class="updated" datetime="' . get_the_time( 'c' ) . '">' . get_the_date() . '</time>';

	}
endif;
