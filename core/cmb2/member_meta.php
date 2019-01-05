<?php

function  member_metabox() {

	$prefix = THEME_NAME;

	$cmb = new_cmb2_box( array(
		'id'           => $prefix.'_customer_meta',
		'title'        => 'Информация о сотруднике',
		'object_types' => array( 'member' ),
	) );


	$cmb->add_field( array(
		'name' => 'Имя RU',
		'id'   => $prefix.'_name_ru',
		'type' => 'text'
	) );

	$cmb->add_field( array(
		'name' => 'Имя EN',
		'id'   => $prefix.'_name_en',
		'type' => 'text'
	) );

	$cmb->add_field( array(
		'name' => 'Должность RU',
		'id'   => $prefix.'_position_ru',
		'type' => 'text'
	) );

	$cmb->add_field( array(
		'name' => 'Должность EN',
		'id'   => $prefix.'_position_en',
		'type' => 'text'
	) );

	$cmb->add_field( array(
		'name' => 'Фото',
		'id'   => $prefix.'_member_photo',
		'desc' => 'Реккомендуемое разрешение 540x700',
		'type' => 'file'
	) );
	$cmb->add_field( array(
		'name' => 'Instagram',
		'id'   => $prefix.'_linked_in_link',
		'type' => 'text_url',
		'default' => '#'
	) );
	$cmb->add_field( array(
		'name' => 'Facebook',
		'id'   => $prefix.'_facebook_link',
		'type' => 'text_url',
		'default' => '#'
	) );

}
add_action( 'cmb2_admin_init', 'member_metabox' );