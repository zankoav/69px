<?php
function meta_titles_metabox() {

	$prefix = THEME_NAME;

	$cmb = new_cmb2_box( array(
		'id'           => $prefix . '_customer_meta',
		'title'        => 'Meta titles',
		'object_types' => array( 'post', 'page', 'member' ),
	) );

	$cmb->add_field( array(
		'name' => 'title en',
		'id'   => $prefix . '_meta_title_en',
		'type' => 'text'
	) );
	$cmb->add_field( array(
		'name' => 'title ru',
		'id'   => $prefix . '_meta_title_ru',
		'type' => 'text'
	) );

}

add_action( 'cmb2_admin_init', 'meta_titles_metabox' );