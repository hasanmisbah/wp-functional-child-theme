<?php 
remove_action( 'init', 'colormag_custom_header_setup' );
if(!function_exists('colormag_custom_header_setup')){
		function colormag_custom_header_setup() {
		add_theme_support( 'custom-header', apply_filters( 'colormag_custom_header_args', array(
			'default-image'				=> '',
			'header-text'				=> '',
			'default-text-color'		=> '',
			'width'						=> 1400,
			'height'					=> 400,
			'flex-width'				=> true,
			'flex-height'				=> true,
			'wp-head-callback'			=> '',
			'admin-head-callback'		=> '',
			'video'						=> true,
			'admin-preview-callback'	=> 'colormag_admin_header_image',
		) ) );
	}
}

?>