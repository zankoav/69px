<?php
	$menu_name = 'main';
	$locations = get_nav_menu_locations();
	$menu      = wp_get_nav_menu_object( $locations[ $menu_name ] );
	$menuitems = wp_get_nav_menu_items( $menu->term_id, array( 'order' => 'DESC' ) );
?>

<ul class="menu__items">
	<?php
		$count            = 0;
		$submenu          = false;
		foreach ( $menuitems as $item ):
			$link = $item->url;
			$title        = $item->title;
			$post_id      = $item->object_id;
			$post_title   = get_post_meta( $post_id, "main_title_" . Lang::current(), 1 );

			if ( isset( $post_title ) and ! empty( $post_title ) ) {
				$title = $post_title;
			}
			// item does not have a parent so menu_item_parent equals 0 (false)
			if ( ! $item->menu_item_parent ):
				// save this id for later comparison with sub-menu items
				$parent_id = $item->ID;
				$isActive = "";
				if ( (int) $item->object_id === get_the_ID() ) {
					$isActive = "menu__item_active";
				} ?>

                <li class="<?= "menu__item $isActive"; ?>" data-num="<?= "0" . ( $count + 1 ) ?>">
                <a href="<?= $link; ?>">
					<?= $title; ?>
                </a>
			<?php endif; ?>

			<?php if ( $parent_id == $item->menu_item_parent ): ?>

			<?php if ( ! $submenu ): $submenu = true; ?>
                <ul class="sub-menu">
			<?php endif; ?>

            <li class="item">
                <a href="<?php echo $link; ?>" class="title"><?php echo $title; ?></a>
            </li>

			<?php if ( isset( $menuitems[ $count + 1 ] ) and $menuitems[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ): ?>
                </ul>
				<?php $submenu = false; endif; ?>

		<?php endif; ?>

			<?php if ( isset( $menuitems[ $count + 1 ] ) and $menuitems[ $count + 1 ]->menu_item_parent != $parent_id ): ?>
            </li>
			<?php $submenu = false; endif; ?>

			<?php $count ++; endforeach; ?>

</ul>
