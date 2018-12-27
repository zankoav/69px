<?php
/**
 * Template Name: About us
 */

$options = get_option( 'about_us_settings' );
$ln      = Lang::current();

$title            = $options[ THEME_NAME . 'about_us_main_title_' . $ln ];
$first_paragraph  = $options[ THEME_NAME . 'about_us_first_paragraph_' . $ln ];
$second_paragraph = $options[ THEME_NAME . 'about_us_second_paragraph_' . $ln ];

$Team             = Lang::get( 'Team' );
$Everyone_Matters = Lang::get( 'Everyone Matters' );

$query        = new WP_Query( array( 'post_type' => '$member' ) );
$members      = $query->get_posts();
$members_meta = array();
foreach ( $members as $item ) {
	$members_meta[] = get_post_meta( $item->ID );
}
get_header();
?>

  <div class="about-main">
    <div class="container container_middle">
      <h1 class="title-1"><?= $title ?></h1>

			<?php if ( ! is_null( $first_paragraph ) || ! empty( $first_paragraph ) ): ?>
        <div class="animation-description"><?= $first_paragraph ?></div>
			<?php endif; ?>

			<?php if ( ! is_null( $second_paragraph ) || ! empty( $second_paragraph ) ): ?>
        <div class="animation-description"><?= $second_paragraph ?></div>
			<?php endif; ?>

    </div>
  </div>
  <div class="team">
    <div class="container container_middle">
      <div class="team__title">
        <h3 class="title-2"><?= $Team; ?><span class="title-2__subtitle"><?= $Everyone_Matters; ?></span></h3>
      </div>
    </div>
    <div class="container">
      <div class="team__list">

				<?php foreach ( $members_meta as $item ):
					$name = $item[ THEME_NAME . '_name_' . $ln ][0];
					$position = $item[ THEME_NAME . '_position_' . $ln ][0];
					$photo = $item[ THEME_NAME . '_member_photo' ][0];
					$linked_in_link = $item[ THEME_NAME . '_linked_in_link' ][0];
					$facebook_link = $item[ THEME_NAME . '_facebook_link' ][0];
					?>

          <div class="team__item">
            <div class="user">
              <div class="user__image" style="background-image:url(<?= $photo; ?>)">
                <span class="user__lines user__lines_left"></span>
                <span class="user__lines user__lines_right"></span>
                <div class="user__socials">

									<?php if ( $linked_in_link !== '#' ): ?>
                    <a class="user__link" href="<?= $linked_in_link; ?>" target="_blank">
                      <i class="fab fa-linkedin-in"></i></a>
									<?php endif; ?>
									<?php if ( $facebook_link !== '#' ): ?>
                    <a class="user__link" href="<?= $facebook_link; ?>" target="_blank">
                      <i class="fab fa-facebook-f"></i></a>
									<?php endif; ?>
                </div>
              </div>
              <div class="user__date">
                <h3 class="user__name"><?= $name; ?></h3>
                <p class="user__position"><?= $position; ?></p>
              </div>
            </div>
          </div>

				<?php endforeach; ?>
      </div>
    </div>
  </div>

<?php get_template_part( '/templates/brands_array' ) ?>

  <div class="paralax-window"
       style="background-image:url(/wp-content/themes/69px/src/icons/parallax-window.159d9b.jpg)"></div>


<?php
get_footer();
?>