<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 10/17/18
	 * Time: 3:07 PM
	 */

	//add_filter( 'nav_menu_css_class', 'change_class_tag_li', 1, 3 );
	function change_class_tag_li( $classes, $item, $args ) {

		$classes[] = 'menu__item';
		if ( in_array( 'current_page_item', $classes ) ) {
			$classes[] = 'menu__item_active';
		}
//		$item->title = get_post_meta( $item->object_id, 'btk_title_' . LANG::current(), 1 );

		return $classes;
	}

//	add_filter( 'wp_nav_menu', 'add_menu_link_class' );

	function add_menu_link_class( $ulclass ) {
		return preg_replace( '/<a /', '<a class="menu__list-item-link"', $ulclass );
	}
