<?php if ( ! defined( 'WPINC' ) ) {
	die;
}
function ft_shortcode_authorRecentPosts( $atts ) {
	// Configure defaults and extract the attributes into variables

	$args = array(
		'widget_id'    => $atts['widget_id'],
		'by_shortcode' => 'shortcode_',
	);

	ob_start();
	the_widget( 'authorRecentPosts', '', $args );
	$output = ob_get_clean();

	return $output;
}

add_shortcode( 'ft-authorrecentposts', 'ft_shortcode_authorRecentPosts' );