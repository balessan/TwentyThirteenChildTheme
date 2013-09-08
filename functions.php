<?php

/**
 * Sets up the content width value based on the theme's design.
 * @see twentythirteen_content_width() for template-specific adjustments.
 */
if ( ! isset( $content_width ) )
	$content_width = 960;


/**
 * Adjusts content_width value for video post formats and attachment templates.
 *
 * @since Twenty Thirteen 1.0
 *
 * @return void
 */
function twentythirteen_child_content_width() {
	global $content_width;

	if ( is_attachment() )
		$content_width = 960;
	elseif ( has_post_format( 'audio' ) )
		$content_width = 484;
}
add_action( 'template_redirect', 'twentythirteen_child_content_width' );

/**
 * Initializes the loading of personnaly needed scripts
 * in the front-end pages.
**/
function init_personal_scripts() {
	if (!is_admin()) {
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-ui' );
		wp_enqueue_script( 'jquery-ui-accordion' );
	}
}
add_action( 'wp_enqueue_scripts', 'init_personal_scripts' );


