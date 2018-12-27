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
		'name' => esc_html__( 'Светлый логотип', THEME_NAME ),
		'id'   => 'logo_light',
		'type' => 'file'
	) );
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Темный логотип', THEME_NAME ),
		'id'   => 'logo_dark',
		'type' => 'file'
	) );

//social links
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'Социальные ссылки', THEME_NAME ),
		'id'      => 'social_link_title',
		'type'    => 'title',
		'default' => '#'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'telegram', THEME_NAME ),
		'id'      => 'telegram_link',
		'type'    => 'text_url',
		'default' => '#'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'instagram', THEME_NAME ),
		'id'      => 'insta_link',
		'type'    => 'text_url',
		'default' => '#'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'facebook', THEME_NAME ),
		'id'      => 'facebook_social_link',
		'type'    => 'text_url',
		'default' => '#'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'linkedin', THEME_NAME ),
		'id'      => 'linkedin_link',
		'type'    => 'text_url',
		'default' => '#'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'behance', THEME_NAME ),
		'id'      => 'behance_url',
		'type'    => 'text_url',
		'default' => '#'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'web', THEME_NAME ),
		'id'      => 'web_link',
		'type'    => 'text_url',
		'default' => '#'
	) );

//contact info
	$cmb_options->add_field( array(
		'name' => esc_html__( 'Contact info', THEME_NAME ),
		'id'   => 'contact_info_title',
		'type' => 'title'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'email', THEME_NAME ),
		'id'      => 'contact_email',
		'type'    => 'text_email',
		'default' => 'hello@69px.by'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'phone number', THEME_NAME ),
		'id'      => 'contact_phone_number',
		'type'    => 'text',
		'default' => '+375(44)776-90-69'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'address', THEME_NAME ),
		'id'      => 'contact_address_en',
		'type'    => 'text',
		'default' => "16 Oktyabr'skaya str., Minsk"
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'адрес', THEME_NAME ),
		'id'      => 'contact_address_ru',
		'type'    => 'text',
		'default' => "г. Минск, ул. Октябрьская 16"
	) );

//we do
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'We do', THEME_NAME ),
		'id'      => 'we_do_title',
		'type'    => 'title'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 1 title ru', THEME_NAME ),
		'id'      => 'service_one_title_ru',
		'type'    => 'text_medium',
		'default' => 'RU UX|UI Design'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 1 title ru', THEME_NAME ),
		'id'      => 'service_one_paragraph_ru',
		'type'    => 'textarea_small',
		'default' => 'RU text'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 1 title en', THEME_NAME ),
		'id'      => 'service_one_title_en',
		'type'    => 'text_medium',
		'default' => 'UX|UI Design'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 1 title en', THEME_NAME ),
		'id'      => 'service_one_paragraph_en',
		'type' => 'textarea_small',
		'default'    => 'Design and develop interfaces'
	) );

	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 2 title ru', THEME_NAME ),
		'id'      => 'service_two_title_ru',
		'type'    => 'text_medium',
		'default' => 'RU text'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 2 title ru', THEME_NAME ),
		'id'      => 'service_two_paragraph_ru',
		'type'    => 'textarea_small',
		'default' => 'RU text'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 2 title en', THEME_NAME ),
		'id'      => 'service_two_title_en',
		'type'    => 'text_medium',
		'default' => 'Service Design'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 2 title en', THEME_NAME ),
		'id'      => 'service_two_paragraph_en',
		'type'    => 'textarea_small',
		'default' => 'Help to create human-oriented services'
	) );

	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 3 title ru', THEME_NAME ),
		'id'      => 'service_three_title_ru',
		'type'    => 'text_medium',
		'default' => 'RU text'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 3 title ru', THEME_NAME ),
		'id'      => 'service_three_paragraph_ru',
		'type'    => 'textarea_small',
		'default' => 'RU text'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 3 title en', THEME_NAME ),
		'id'      => 'service_three_title_en',
		'type'    => 'text_medium',
		'default' => 'Mobile|AR'
	) );
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'service 3 title en', THEME_NAME ),
		'id'      => 'service_three_paragraph_en',
		'type'    => 'textarea_small',
		'default' => 'Mobile apps and Augmented Reality'
	) );

//logos collaborators
	$cmb_options->add_field( array(
		'name'    => esc_html__( 'logos collaborators', THEME_NAME ),
		'id'      => 'logos_collaborators_title',
		'type'    => 'title'
	) );
	$logos_array = $cmb_options->add_field(array(
		'id' => THEME_NAME . 'logos_array',
		'type' => 'group',
		'options' => array(
			'group_title' => __('Logo {#}', THEME_NAME),
			'add_button' => __('Add Another logo', THEME_NAME),
			'remove_button' => __('Remove logo', THEME_NAME),
			'sortable' => true,
			'closed' => true,
		),
	));
	$cmb_options->add_group_field($logos_array, array(
		'id'      => 'logos_ar_item',
		'type'    => 'file'
	));

}

