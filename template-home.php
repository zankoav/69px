<?php
/**
 * Template Name: Home
 */
$options = SingletonOptions::getOptions();
$ln      = Lang::current();

$logoLight = $options['logo_light'];

$service_one_t   = $options[ 'service_one_title_' . $ln ];
$service_one_p   = $options[ 'service_one_paragraph_' . $ln ];
$service_two_t   = $options[ 'service_two_title_' . $ln ];
$service_two_p   = $options[ 'service_two_paragraph_' . $ln ];
$service_three_t = $options[ 'service_three_title_' . $ln ];
$service_three_p = $options[ 'service_three_paragraph_' . $ln ];
$logos_array     = $options[ THEME_NAME . '_portfolio_slider' ];

$Design_and       = Lang::get( 'Design and development company' );
$Watch            = Lang::get( 'watch' );
$what             = Lang::get( 'what' );
$we_do            = Lang::get( 'we do' );
$The_mission      = Lang::get( 'The_mission' );
$We_help          = Lang::get( 'We_help' );
$more             = Lang::get( 'more' );
$they             = Lang::get( 'they' );
$trust_us         = Lang::get( 'trust_us' );
$Just_a_selection = Lang::get( 'Just_a_selection' );
get_header();
?>
<div class="main main_hide">
  <video class="main__video-sorce" loop="true">
    <source type="video/mp4" src="/wp-content/themes/69px/src/video/video_2.53bcc3.mp4">
  </video>
  <div class="container h-100">
    <div class="main__content h-100">
      <div class="main__video main__video_first">
        <div class="main__video-link"><?= $Watch; ?></div>
      </div>
      <img class="main__down-icon" src="/wp-content/themes/69px/src/icons/bottom-arrow.35a95a.svg">
      <ul class="socials socials_vertical socials_first">

        <li class="socials__item"><a class="socials__link" href="<?= $options['telegram_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-telegram.dd0ffa.svg">
          </a>
        </li>
        <li class="socials__item"><a class="socials__link" href="<?= $options['instaa_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-instagram.73e216.svg">
          </a>
        </li>
        <li class="socials__item"><a class="socials__link" href="<?= $options['facebook_social_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/ic-facebook.293ce7.svg">
          </a>
        </li>
        <li class="socials__item">
          <a class="socials__link" href="<?= $options['linkedin_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/linked-in.cbd19f.svg">
          </a>
        </li>
        <li class="socials__item">
          <a class="socials__link" href="<?= $options['behance_url'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/behance.920e86.svg">
          </a>
        </li>
        <li class="socials__item">
          <a class="socials__link" href="<?= $options['web_link'] ?>">
            <img class="socials__icon" src="/wp-content/themes/69px/src/icons/web.b3a778.svg">
          </a>
        </li>
      </ul>
      <div class="main__slogan main__slogan_first">
        <div class="main__slogan-wrapper">
          <h1 class="main__title">
            <span class="main__title-word">Each</span>
            <span class="main__title-word">pixel</span>
            <span class="main__title-word">matters<span class="main__title-word-romb"></span></span>
          </h1>
          <h6 class="main__subtitle main__subtitle_first"><?= $Design_and; ?></h6>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="we-do">
  <div class="container">
    <div class="we-do__wrapper">
      <div class="we-do__wrapper-top">
        <header class="we-do__header">
          <div class="we-do__header-title">
            <h2 class="red-title red-title_we-do"><span class="red-title__gray"><?= $what ?></span>
              <span class="red-title__red"><?= $we_do ?></span>
            </h2>
          </div>
          <div class="we-do__text"><?= $The_mission; ?>
          </div>
        </header>
        <div class="we-do__text we-do__text_left"><?= $We_help ?></div>
        <div class="we-do__button"><a class="button button_red" href="#">
            <span class="button__line button__line_left"></span>
            <span class="button__line button__line_right"></span>
            <span class="button__text"><?= $more; ?></span>
          </a>
        </div>
      </div>
      <div class="we-do__services">

        <div class="we-do__service">
          <div class="service">
            <h3 class="service__title"><?= $service_one_t; ?></h3>
            <p class="service__subtitle"><?= $service_one_p; ?></p>
          </div>
        </div>
        <div class="we-do__service">
          <div class="service">
            <h3 class="service__title"><?= $service_two_t; ?></h3>
            <p class="service__subtitle"><?= $service_two_p; ?></p>
          </div>
        </div>
        <div class="we-do__service">
          <div class="service">
            <h3 class="service__title"><?= $service_three_t; ?></h3>
            <p class="service__subtitle"><?= $service_three_p; ?></p>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>

<?php get_template_part('/templates/brands_array')?>

<div class="paralax-window" style="background-image:url(/wp-content/themes/69px/src/icons/parallax-window.159d9b.jpg)"></div>

<?php
get_footer();
?>

