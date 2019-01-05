<?php
	add_action( 'cmb2_admin_init', 'sixnene_px_about_us' );

	function sixnene_px_about_us() {

		$prefix = THEME_NAME;

		$cmb_options = new_cmb2_box( array(
			'id'           => $prefix . '_about_us_page',
			'title'        => esc_html__( 'Настройка Страницы О Нас', THEME_NAME ),
			'object_types' => array( 'options-page' ),

			'option_key'  => 'about_us_settings',
			// 'icon_url'        => '', // Menu icon. Only applicable if 'parent_slug' is left empty.
			// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
			'parent_slug' => 'edit.php?post_type=page',
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
			'id'   => $prefix . 'welcome_about_us_title',
			'type' => 'title'
		) );

		$cmb_options->add_field( array(
			'name'    => __( 'Заголовок RU', THEME_NAME ),
			'id'      => $prefix . 'about_us_main_title_ru',
			'type'    => 'text',
			'default' => 'О нас'
		) );

		$cmb_options->add_field( array(
			'name'    => __( 'Заголовок EN', THEME_NAME ),
			'id'      => $prefix . 'about_us_main_title_en',
			'type'    => 'text',
			'default' => 'About us'
		) );

		$cmb_options->add_field( array(
			'name'    => __( 'Параграф №1 RU', THEME_NAME ),
			'id'      => $prefix . 'about_us_first_paragraph_ru',
			'type'    => 'textarea_small',
			'default' => 'МЫ - ПРОЕКТНО-КОНСТРУКТОРСКАЯ КОМПАНИЯ, БАЗИРУЮЩАЯСЯ В МИНСКЕ.'
		) );

		$cmb_options->add_field( array(
			'name'    => __( 'Параграф №1 EN', THEME_NAME ),
			'id'      => $prefix . 'about_us_first_paragraph_en',
			'type'    => 'textarea_small',
			'default' => 'WE ARE A DESIGN AND DEVELOPMENT COMPANY BASED IN MINSK.'
		) );

		$cmb_options->add_field( array(
			'name'    => __( 'Параграф №2 EN', THEME_NAME ),
			'id'      => $prefix . 'about_us_second_paragraph_en',
			'type'    => 'textarea_small',
			'default' => 'WE CONVERT MARKETING STRATEGIES INTO VISUALLY STUNNING DIGITAL SERVICES.'
		) );

		$cmb_options->add_field( array(
			'name'    => __( 'Параграф №2 RU', THEME_NAME ),
			'id'      => $prefix . 'about_us_second_paragraph_ru',
			'type'    => 'textarea_small',
			'default' => 'МЫ ПРЕОБРАЗУЕМ МАРКЕТИНГОВЫЕ СТРАТЕГИИ В ВИЗУАЛЬНО ОШЕЛОМЛЯЮЩИЕ ЦИФРОВЫЕ УСЛУГИ.'
		) );
	}