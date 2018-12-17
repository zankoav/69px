<!doctype html>
<html lang="ru">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
	<?php
		wp_head();

		$options       = get_option( THEME_NAME . '_theme_options' );
		$isContactPage = is_page_template( 'template-contacts.php' );
		$bodyMod       = $isContactPage ? 'body_light' : '';
		$headerMod     = $isContactPage ? 'header_light' : '';

		$logoLight = $options['logo_light'];
		$logoDark  = $options['logo_dark'];
		$logoUrl   = $isContactPage ? $logoDark : $logoLight;
	?>
</head>
<body <?php body_class( $bodyMod ); ?>>
<div class="loader">
    <div class="loader__squear">
        <div class="loader__squear-top"></div>
        <div class="loader__squear-black"></div>
        <div class="loader__squear-bottom"></div>
    </div>
</div>
<div class="app app_hide">
    <header class="header header_top header_hide <?= $headerMod; ?>">
        <div class="container header__content">
            <a class="logo logo_first" href="/"><img class="logo__icon"
                                                     src="<?= $logoUrl; ?>"></a><a
                    class="menu  menu_first" href="#">
                <div class="menu__dotted "><span class="menu__dotte"></span><span class="menu__dotte"></span><span
                            class="menu__dotte"></span></div>
                <div class="menu__title">Menu</div>
            </a>
            <div class="lang  lang_first"><a class="lang__link lang__link_active" href="#" data-lang="ru">Ru</a><a
                        class="lang__link" href="#" data-lang="en">En</a></div>
        </div>
        <div class="header__slide-menu">
            <div class="header_top">
                <div class="container header__content"><a class="logo " href="/"><img class="logo__icon"
                                                                                      src="<?= $logoDark ?>"></a><a
                            class="menu menu_dark " href="#">
                        <div class="menu__dotted menu__dotted_close"><span class="menu__dotte"></span><span
                                    class="menu__dotte"></span><span class="menu__dotte"></span></div>
                        <div class="menu__title">Menu</div>
                    </a>
                    <div class="lang lang_dark "><a class="lang__link lang__link_active" href="#"
                                                    data-lang="ru">Ru</a><a class="lang__link" href="#" data-lang="en">En</a>
                    </div>
                </div>
            </div>
            <div class="menu__content">
                <div class="menu__inner container">
					<?php get_template_part( 'templates/content', 'menu' ); ?>
                    <div class="contacts  contacts_mobile_hide">
                        <div class="contacts__cart">
                            <h4 class="contacts__cart-title">Contacts</h4>
                            <p class="contacts__cart-text contacts__cart-text_email">hello@69px.by</p>
                            <p class="contacts__cart-text">+375 (44) 776-90-69</p>
                        </div>
                        <div class="contacts__cart">
                            <h4 class="contacts__cart-title">Location</h4>
                            <p class="contacts__cart-text">16 Oktyabr'skaya str., Minsk</p>
                        </div>
                        <div class="contacts__cart contacts__cart_empty">
                            <ul class="socials socials_small ">
                                <li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon"
                                                                                                 src="/wp-content/themes/69px/src/icons/ic-telegram-dark.dd946b.svg"></a>
                                </li>
                                <li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon"
                                                                                                 src="/wp-content/themes/69px/src/icons/ic-instagram-dark.683c33.svg"></a>
                                </li>
                                <li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon"
                                                                                                 src="/wp-content/themes/69px/src/icons/ic-facebook-dark.cf24aa.svg"></a>
                                </li>
                                <li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon"
                                                                                                 src="/wp-content/themes/69px/src/icons/linked-in-dark.be43ef.svg"></a>
                                </li>
                                <li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon"
                                                                                                 src="/wp-content/themes/69px/src/icons/behance-dark.cb6440.svg"></a>
                                </li>
                                <li class="socials__item"><a class="socials__link" href="#"><img class="socials__icon"
                                                                                                 src="/wp-content/themes/69px/src/icons/web-dark.75c770.svg"></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
