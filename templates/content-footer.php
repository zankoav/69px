<?php

	$options = SingletonOptions::getOptions();
	$email   = $options['contact_email'];
	$phone   = $options['contact_phone_number'];
	$ln      = Lang::current();
	$address = $options[ 'contact_address_' . $ln ];

	$Lets_get_touch    = Lang::get( 'Lets_get_touch' );
	$Feel_free         = Lang::get( 'Feel free!' );
	$Drop_a_line       = Lang::get( 'Drop a line' );
	$What_is_your_name = Lang::get( 'What is your name?' );
	$Your_e_mail       = Lang::get( 'Your e-mail' );
	$send              = Lang::get( 'send' );

	$menu_name = 'main';
	$location  = get_nav_menu_locations();
	$items     = wp_get_nav_menu_items( $location[ $menu_name ] );

	$prev_page     = null;
	$current_page  = null;
	$next_page     = null;
	$menu_items_id = null;

	for ( $i = 0; $i < count( $items ); $i ++ ) {
		$menu_items_id[] = $items[ $i ]->object_id;
		if ( $items[ $i ]->object_id == get_the_ID() ) {
			if ( $i === count( $items ) - 1 ) {

				$prev_item       = $items[ $i - 1 ];
				$prev_post_title = get_post_meta( $prev_item->object_id, "main_title_" . Lang::current(), 1 );

				if ( isset( $prev_post_title ) and ! empty( $prev_post_title ) ) {
					$prev_item->title = $prev_post_title;
				}

				$prev_page = [
					'title' => $prev_item->title,
					'url'   => $prev_item->url
				];

				$next_item       = $items[0];
				$next_post_title = get_post_meta( $next_item->object_id, "main_title_" . Lang::current(), 1 );

				if ( isset( $next_post_title ) and ! empty( $next_post_title ) ) {
					$next_item->title = $next_post_title;
				}

				$next_page = [
					'title' => $next_item->title,
					'url'   => $next_item->url
				];
			} else if ( $i === 0 ) {

				$prev_item       = $items[ count( $items ) - 1 ];
				$prev_post_title = get_post_meta( $prev_item->object_id, "main_title_" . Lang::current(), 1 );

				if ( isset( $prev_post_title ) and ! empty( $prev_post_title ) ) {
					$prev_item->title = $prev_post_title;
				}

				$prev_page = [
					'title' => $prev_item->title,
					'url'   => $prev_item->url
				];

				$next_item       = $items[ $i + 1 ];
				$next_post_title = get_post_meta( $next_item->object_id, "main_title_" . Lang::current(), 1 );

				if ( isset( $next_post_title ) and ! empty( $next_post_title ) ) {
					$next_item->title = $next_post_title;
				}

				$next_page = [
					'title' => $next_item->title,
					'url'   => $next_item->url
				];
			} else {
				$prev_item       = $items[ $i - 1 ];
				$prev_post_title = get_post_meta( $prev_item->object_id, "main_title_" . Lang::current(), 1 );

				if ( isset( $prev_post_title ) and ! empty( $prev_post_title ) ) {
					$prev_item->title = $prev_post_title;
				}


				$prev_page = [
					'title' => $prev_item->title,
					'url'   => $prev_item->url
				];

				$next_item       = $items[ $i + 1 ];
				$next_post_title = get_post_meta( $next_item->object_id, "main_title_" . Lang::current(), 1 );

				if ( isset( $next_post_title ) and ! empty( $next_post_title ) ) {
					$next_item->title = $next_post_title;
				}
				$next_page = [
					'title' => $items[ $i + 1 ]->title,
					'url'   => $items[ $i + 1 ]->url
				];
			}
		}
	}

?>

<div class="get-tuch">
    <div class="container container_small">
        <div class="get-tuch__title">
            <h3 class="title-2"><?= $Lets_get_touch ?><span class="title-2__subtitle"><?= $Feel_free ?></span></h3>
        </div>
        <div class="get-tuch__row">
            <div class="get-tuch__col">
                <form class="contact-form" action="/" method="post">
                    <div class="group-form ">
                        <label class="group-form__label" for="user-line"><?= $Drop_a_line ?></label>
                        <input class="group-form__input" id="user-line" type="text" name="user-line">
                    </div>
                    <div class="group-form ">
                        <label class="group-form__label" for="user-name"><?= $What_is_your_name ?></label>
                        <input class="group-form__input" id="user-name" type="text" name="user-name">
                    </div>
                    <div class="group-form group-form_last">
                        <label class="group-form__label" for="user-email"><?= $Your_e_mail ?></label>
                        <input class="group-form__input" id="user-email" type="email" name="user-email">
                    </div>
                    <a class="button " href="#">
                        <span class="button__line button__line_left"></span>
                        <span class="button__line button__line_right"></span>
                        <span class="button__text"><?= $send ?></span>
                    </a>
                </form>
            </div>
            <div class="get-tuch__col get-tuch__contacts">
                <div class="contacts contacts_light ">
                    <div class="contacts__cart">
                        <h4 class="contacts__cart-title"><?= Lang::get( 'contacts' ) ?></h4>
                        <p class="contacts__cart-text contacts__cart-text_email"><?= $email; ?></p>
                        <p class="contacts__cart-text"><?= $phone; ?></p>
                    </div>
                    <div class="contacts__cart">
                        <h4 class="contacts__cart-title"><?= Lang::get( 'Location' ) ?></h4>
                        <p class="contacts__cart-text"><?= $address; ?></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php if ( in_array( get_the_ID(), $menu_items_id ) ): ?>
    <nav class="navigation">
        <a class="navigation__item navigation__item_left" href="<?= $prev_page['url'] ?>"
           target="_blank"><?= $prev_page['title'] ?></a>
        <a class="navigation__item navigation__item_right" href="<?= $next_page['url'] ?>"
           target="_blank"><?= $next_page['title'] ?></a>
    </nav>
<?php endif; ?>

<footer class="footer">
    <div class="container">
        <div class="footer__context">
            <a class="logo " href="/">
                <img class="logo__icon" src="/wp-content/themes/69px/src/icons/logo.ced516.svg">
            </a>
            <div class="footer__copy-right">&copy; <span class="footer__copy-right-number">69</span>
                - <?= date( "Y" ); ?>
            </div>
            <ul class="socials undefined ">
                <li class="socials__item">
                    <a class="socials__link" href="<?= $options['telegram_link'] ?>">
                        <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-telegram.dd0ffa.svg"></a>
                </li>
                <li class="socials__item">
                    <a class="socials__link" href="<?= $options['insta_link'] ?>">
                        <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-instagram.73e216.svg"></a>
                </li>
                <li class="socials__item">
                    <a class="socials__link" href="<?= $options['facebook_social_link'] ?>">
                        <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-facebook.293ce7.svg"></a>
                </li>
                <li class="socials__item">
                    <a class="socials__link" href="<?= $options['linkedin_link'] ?>">
                        <img class="socials__icon" src="/wp-content/themes/69px/src/icons/linked-in.cbd19f.svg"></a>
                </li>
                <li class="socials__item">
                    <a class="socials__link" href="<?= $options['behance_url'] ?>">
                        <img class="socials__icon" src="/wp-content/themes/69px/src/icons/behance.920e86.svg"></a></li>
                <li class="socials__item">
                    <a class="socials__link" href="<?= $options['web_link'] ?>">
                        <img class="socials__icon" src="/wp-content/themes/69px/src/icons/web.b3a778.svg"></a></li>
            </ul>
        </div>
    </div>
</footer>
</div>