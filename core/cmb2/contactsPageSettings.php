<?php
add_action( 'cmb2_admin_init', 'sixnene_px_contacts' );

function sixnene_px_contacts() {

	$prefix = THEME_NAME;

	$cmb_options = new_cmb2_box( array(
		'id'           => $prefix . '_contacts_page',
		'title'        => esc_html__( 'Настройка Страницы Контактов', THEME_NAME ),
		'object_types' => array( 'options-page' ),

		'option_key'   => 'contacts_settings',
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
		'name' => __( 'Приветствие', THEME_NAME ),
		'id'   => $prefix . 'welcome_contacts_title',
		'type' => 'title'
	) );


	$cmb_options->add_field( array(
		'name' => __( 'Заголовок RU', THEME_NAME),
		'id'   => $prefix . 'contacts_main_title_ru',
		'type' => 'text',
		'default' => 'Контакты'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Заголовок EN', THEME_NAME),
		'id'   => $prefix . 'contacts_main_title_en',
		'type' => 'text',
		'default' => 'Contacts'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Текст RU', THEME_NAME),
		'id'   => $prefix . 'contacts_paragraph_ru',
		'type' => 'textarea',
		'default' => 'НАША РАБОТА ПОРЕЗАЛА ТЕБЕ ГЛАЗ?'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Текст EN', THEME_NAME),
		'id'   => $prefix . 'contacts_paragraph_en',
		'type' => 'textarea',
		'default' => 'HAS OUR WORK CAU YOUR EYE?'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Текст кнопки RU', THEME_NAME),
		'id'   => $prefix . 'button_text_ru',
		'type' => 'text',
		'default' => 'Давайте выпьем кофе.'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Текст кнопки EN', THEME_NAME),
		'id'   => $prefix . 'button_text_en',
		'type' => 'text',
		'default' => 'Let’s have a coffee'
	) );

	$cmb_options->add_field( array(
		'name' => __( 'Ссылка кнопки', THEME_NAME),
		'id'   => $prefix . 'button_link',
		'type' => 'text_url',
		'default' => 'http://69pixels.com'
	) );
}