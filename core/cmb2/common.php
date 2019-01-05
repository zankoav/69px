<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 12/17/18
	 * Time: 12:28 PM
	 */


	add_action( 'cmb2_admin_init', 'common_theme_options_metabox' );
	/**
	 * Hook in and register a metabox to handle a theme options page and adds a menu item.
	 */
	function common_theme_options_metabox() {

		/**
		 * Registers options page menu item and form.
		 */
		$cmb_options = new_cmb2_box( array(
			'id'           => THEME_NAME . '_theme_options_page',
			'title'        => esc_html__( 'Настройки темы', THEME_NAME ),
			'object_types' => array( 'options-page' ),

			/*
			 * The following parameters are specific to the options-page box
			 * Several of these parameters are passed along to add_menu_page()/add_submenu_page().
			 */

			'option_key' => THEME_NAME . '_theme_options',
			// The option key and admin menu page slug.
			'icon_url'   => 'dashicons-palmtree',
			// Menu icon. Only applicable if 'parent_slug' is left empty.
			// 'menu_title'      => esc_html__( 'Options', 'cmb2' ), // Falls back to 'title' (above).
			// 'parent_slug'     => 'themes.php', // Make options page a submenu item of the themes menu.
			// 'capability'      => 'manage_options', // Cap required to view options-page.
			// 'position'        => 1, // Menu position. Only applicable if 'parent_slug' is left empty.
			// 'admin_menu_hook' => 'network_admin_menu', // 'network_admin_menu' to add network-level options page.
			// 'display_cb'      => false, // Override the options-page form output (CMB2_Hookup::options_page_output()).
			// 'save_button'     => esc_html__( 'Save Theme Options', 'cmb2' ), // The text for the options-page save button. Defaults to 'Save'.
			// 'disable_settings_errors' => true, // On settings pages (not options-general.php sub-pages), allows disabling.
			// 'message_cb'      => 'yourprefix_options_page_message_callback',
			// 'tab_group'       => '', // Tab-group identifier, enables options page tab navigation.
			// 'tab_title'       => null, // Falls back to 'title' (above).
			// 'autoload'        => false, // Defaults to true, the options-page option will be autloaded.
		) );

		/**
		 * Options fields ids only need
		 * to be unique within this box.
		 * Prefix is not needed.
		 */
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Логотип компании', THEME_NAME ),
			'id'   => 'bg_color',
			'type' => 'title',
		) );
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Светлый Логотип', THEME_NAME ),
			'id'   => 'logo_light',
			'type' => 'file'
		) );
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Темный Логотип', THEME_NAME ),
			'id'   => 'logo_dark',
			'type' => 'file'
		) );

//social links
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Социальные Сети', THEME_NAME ),
			'id'   => 'social_link_title',
			'type' => 'title',
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Telegram', THEME_NAME ),
			'id'      => 'telegram_link',
			'type'    => 'text_url',
			'default' => '#'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Instagram', THEME_NAME ),
			'id'      => 'insta_link',
			'type'    => 'text_url',
			'default' => '#'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Facebook', THEME_NAME ),
			'id'      => 'facebook_social_link',
			'type'    => 'text_url',
			'default' => '#'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'LinkedIn', THEME_NAME ),
			'id'      => 'linkedin_link',
			'type'    => 'text_url',
			'default' => '#'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Behance', THEME_NAME ),
			'id'      => 'behance_url',
			'type'    => 'text_url',
			'default' => '#'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Web', THEME_NAME ),
			'id'      => 'web_link',
			'type'    => 'text_url',
			'default' => '#'
		) );

//contact info
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Контакты', THEME_NAME ),
			'id'   => 'contact_info_title',
			'type' => 'title'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Email', THEME_NAME ),
			'id'      => 'contact_email',
			'type'    => 'text_email',
			'default' => 'hello@69px.by'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Телефон', THEME_NAME ),
			'id'      => 'contact_phone_number',
			'type'    => 'text',
			'default' => '+375(44)776-90-69'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Адрес RU', THEME_NAME ),
			'id'      => 'contact_address_en',
			'type'    => 'text',
			'default' => "16 Oktyabr'skaya str., Minsk"
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Адрес EN', THEME_NAME ),
			'id'      => 'contact_address_ru',
			'type'    => 'text',
			'default' => "г. Минск, ул. Октябрьская 16"
		) );

//we do
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Что мы делаем', THEME_NAME ),
			'id'   => 'we_do_title',
			'type' => 'title'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Заголовок услуги №1 RU', THEME_NAME ),
			'id'      => 'service_one_title_ru',
			'type'    => 'text_medium',
			'default' => 'RU UX|UI Design'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Заголовок услуги №1 EN', THEME_NAME ),
			'id'      => 'service_one_title_en',
			'type'    => 'text_medium',
			'default' => 'UX|UI Design'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Описание услуги №1 RU', THEME_NAME ),
			'id'      => 'service_one_paragraph_ru',
			'type'    => 'textarea_small',
			'default' => 'RU text'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Описание услуги №1 EN', THEME_NAME ),
			'id'      => 'service_one_paragraph_en',
			'type'    => 'textarea_small',
			'default' => 'Design and develop interfaces'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Заголовок услуги №2 RU', THEME_NAME ),
			'id'      => 'service_two_title_ru',
			'type'    => 'text_medium',
			'default' => 'RU text'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Заголовок услуги №2 EN', THEME_NAME ),
			'id'      => 'service_two_title_en',
			'type'    => 'text_medium',
			'default' => 'Service Design'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Описание услуги №2 RU', THEME_NAME ),
			'id'      => 'service_two_paragraph_ru',
			'type'    => 'textarea_small',
			'default' => 'RU text'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Описание услуги №2 EN', THEME_NAME ),
			'id'      => 'service_two_paragraph_en',
			'type'    => 'textarea_small',
			'default' => 'Help to create human-oriented services'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Заголовок услуги №3 RU', THEME_NAME ),
			'id'      => 'service_three_title_ru',
			'type'    => 'text_medium',
			'default' => 'RU text'
		) );
		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Заголовок услуги №3 EN', THEME_NAME ),
			'id'      => 'service_three_title_en',
			'type'    => 'text_medium',
			'default' => 'Mobile|AR'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Описание услуги №3 RU', THEME_NAME ),
			'id'      => 'service_three_paragraph_ru',
			'type'    => 'textarea_small',
			'default' => 'RU text'
		) );

		$cmb_options->add_field( array(
			'name'    => esc_html__( 'Описание услуги №3 EN', THEME_NAME ),
			'id'      => 'service_three_paragraph_en',
			'type'    => 'textarea_small',
			'default' => 'Mobile apps and Augmented Reality'
		) );

//logos collaborators
		$cmb_options->add_field( array(
			'name' => esc_html__( 'Наши партнеры', THEME_NAME ),
			'id'   => 'logos_collaborators_title',
			'type' => 'title'
		) );
		$logos_array = $cmb_options->add_field( array(
			'id'      => THEME_NAME . 'logos_array',
			'type'    => 'group',
			'options' => array(
				'group_title'   => __( 'Партнера {#}', THEME_NAME ),
				'add_button'    => __( 'Добавить Партнера', THEME_NAME ),
				'remove_button' => __( 'Удалить Партнера', THEME_NAME ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$cmb_options->add_group_field( $logos_array, array(
			'id'   => 'logos_ar_item',
			'description' => 'Реккомендуемый размер 480x130',
			'type' => 'file'
		) );

	}

	add_action( 'cmb2_admin_init', 'title_metabox' );
	/**
	 * Hook in and add a demo metabox. Can only happen on the 'cmb2_admin_init' or 'cmb2_init' hook.
	 */
	function title_metabox() {
		$prefix = 'main_title_';

		/**
		 * Sample metabox to demonstrate each field type included
		 */
		$cmb_demo = new_cmb2_box( array(
			'id'           => $prefix . 'metabox',
			'title'        => esc_html__( 'Заголовок', 'cmb2' ),
			'object_types' => [ 'post', 'page' ], // Post type
			// 'show_on_cb' => 'yourprefix_show_if_front_page', // function should return a bool value
			// 'context'    => 'normal',
			// 'priority'   => 'high',
			// 'show_names' => true, // Show field names on the left
			// 'cmb_styles' => false, // false to disable the CMB stylesheet
			// 'closed'     => true, // true to keep the metabox closed by default
			// 'classes'    => 'extra-class', // Extra cmb2-wrap classes
			// 'classes_cb' => 'yourprefix_add_some_classes', // Add classes through a callback.

			/*
			 * The following parameter is any additional arguments passed as $callback_args
			 * to add_meta_box, if/when applicable.
			 *
			 * CMB2 does not use these arguments in the add_meta_box callback, however, these args
			 * are parsed for certain special properties, like determining Gutenberg/block-editor
			 * compatibility.
			 *
			 * Examples:
			 *
			 * - Make sure default editor is used as metabox is not compatible with block editor
			 *      [ '__block_editor_compatible_meta_box' => false/true ]
			 *
			 * - Or declare this box exists for backwards compatibility
			 *      [ '__back_compat_meta_box' => false ]
			 *
			 * More: https://wordpress.org/gutenberg/handbook/extensibility/meta-box/
			 */
			// 'mb_callback_args' => array( '__block_editor_compatible_meta_box' => false ),
		) );

		$cmb_demo->add_field( array(
			'name' => esc_html__( 'Заголовок RU', 'cmb2' ),
			'desc' => esc_html__( 'Основной заголовок страницы RU', 'cmb2' ),
			'id'   => $prefix . 'ru',
			'type' => 'text',
		) );

		$cmb_demo->add_field( array(
			'name' => esc_html__( 'Заголовок EN', 'cmb2' ),
			'desc' => esc_html__( 'Основной заголовок страницы EN', 'cmb2' ),
			'id'   => $prefix . 'en',
			'type' => 'text',
		) );


	}