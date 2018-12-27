<?php
add_action( 'cmb2_admin_init', 'sixnene_px_project' );

function sixnene_px_project() {

	$prefix = THEME_NAME;

	$cmb_options = new_cmb2_box( array(
		'id'           => $prefix . '_projects_page',
		'title'        => esc_html__( 'Настройки страницы проекты', THEME_NAME ),
		'object_types' => array( 'options-page' ),

		'option_key'   => 'projects_settings',
		// 'icon_url'        => '', // Menu icon. Only applicable if 'parent_slug' is left empty.
		// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
		'parent_slug'  => 'edit.php?post_type=page',
		// 'capability'      => 'manage_options', // Cap required to view options-page.
		// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
		// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
		// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
		// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
		// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
		// 'message_cb'      => 'yourprefix_options_page_message_callback',
	) );

	$cmb_options->add_field( array(
		'name' => __( 'title', THEME_NAME),
		'id'   => $prefix . 'projects_main_title_en',
		'type' => 'text',
		'default' => 'Projects'
	) );
	$cmb_options->add_field( array(
		'name' => __( 'title', THEME_NAME),
		'id'   => $prefix . 'projects_main_title_ru',
		'type' => 'text',
		'default' => 'Проекты'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'paragraph', THEME_NAME),
		'id'   => $prefix . 'projects_main_paragraph_en',
		'type' => 'textarea',
		'default' => 'It’s not just about business, just enjoy.'
	) );
	$cmb_options->add_field( array(
		'name' => __( 'paragraph', THEME_NAME),
		'id'   => $prefix . 'projects_main_paragraph_ru',
		'type' => 'textarea',
		'default' => 'Дело не только в бизнесе, просто наслаждайся.'
	) );

}