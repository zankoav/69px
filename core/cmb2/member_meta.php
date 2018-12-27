<?php

function  member_metabox() {

	$prefix = THEME_NAME;

	$cmb = new_cmb2_box( array(
		'id'           => $prefix.'_customer_meta',
		'title'        => 'Person Information',
		'object_types' => array( 'member' ),
	) );

	$cmb->add_field( array(
		'name' => 'name en',
		'id'   => $prefix.'_name_en',
		'type' => 'text'
	) );
	$cmb->add_field( array(
		'name' => 'name ru',
		'id'   => $prefix.'_name_ru',
		'type' => 'text'
	) );

	$cmb->add_field( array(
		'name' => 'position en',
		'id'   => $prefix.'_position_en',
		'type' => 'text'
	) );
	$cmb->add_field( array(
		'name' => 'position ru',
		'id'   => $prefix.'_position_ru',
		'type' => 'text'
	) );


	$cmb->add_field( array(
		'name' => 'photo',
		'id'   => $prefix.'_member_photo',
		'type' => 'file'
	) );
	$cmb->add_field( array(
		'name' => 'instagram',
		'id'   => $prefix.'_linked_in_link',
		'type' => 'text_url',
		'default' => '#'
	) );
	$cmb->add_field( array(
		'name' => 'facebook',
		'id'   => $prefix.'_facebook_link',
		'type' => 'text_url',
		'default' => '#'
	) );

}
add_action( 'cmb2_admin_init', 'member_metabox' );