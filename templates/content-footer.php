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
            <span class="button__text"><?=$send?></span>
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
<nav class="navigation">
  <a class="navigation__item navigation__item_left" href="#" target="_blank">Contact</a>
  <a class="navigation__item navigation__item_right" href="#" target="_blank">About us</a>
</nav>
<footer class="footer">
  <div class="container">
    <div class="footer__context">
      <a class="logo " href="/">
        <img class="logo__icon" src="/wp-content/themes/69px/src/icons/logo.ced516.svg">
      </a>
      <div class="footer__copy-right">&copy; <span class="footer__copy-right-number">69</span> - <?= date( "Y" ); ?>
      </div>
      <ul class="socials undefined ">
        <li class="socials__item">
          <a class="socials__link" href="<?= $options['telegram_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-telegram.dd0ffa.svg"></a></li>
        <li class="socials__item">
          <a class="socials__link" href="<?= $options['insta_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-instagram.73e216.svg"></a></li>
        <li class="socials__item">
          <a class="socials__link" href="<?= $options['facebook_social_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-facebook.293ce7.svg"></a></li>
        <li class="socials__item">
          <a class="socials__link" href="<?= $options['linkedin_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/linked-in.cbd19f.svg"></a></li>
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