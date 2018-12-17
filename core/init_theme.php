<?php

	add_action( 'after_setup_theme', 'btk_theme_init' );

	function btk_theme_init() {
		/**
		 * add title tag auto
		 */
		add_theme_support( 'title-tag' );

		/**
		 * add thumbnails for all post types
		 */
		add_theme_support( 'post-thumbnails' );

		/**
		 * add custom-logo in customizer
		 */
		add_theme_support( 'custom-logo' );

		add_theme_support( 'menus' );

		register_nav_menu( 'main', 'Main Menu' );

		/**
		 * add html5 support
		 */
		add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );

	}


	// allow SVG uploads
	add_filter( 'upload_mimes', 'custom_upload_mimes' );
	function custom_upload_mimes( $existing_mimes = array() ) {
		$existing_mimes['svg'] = 'image/svg+xml';

		return $existing_mimes;
	}

	function fix_svg() {
		echo '<style type="text/css">
          .attachment-266x266, .thumbnail img {
               width: 100% !important;
               height: auto !important;
          }
          </style>';
	}

	add_action( 'admin_head', 'fix_svg' );