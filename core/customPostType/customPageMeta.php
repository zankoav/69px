<?php

	add_filter( 'the_title', 'change_title', 10, 2 );
	function change_title( $title, $id ) {
		$post_title = get_post_meta( $id, "main_title_" . Lang::current(), 1 );

		if ( isset( $post_title ) and ! empty( $post_title ) ) {
			return $post_title;
		}

		return $title;
	}