<?php
	/**
	 * Template Name: Contacts
	 */
$options = get_option( 'contacts_settings' );
$ln      = Lang::current();

$title     = $options[ THEME_NAME . 'contacts_main_title_' . $ln ];
$paragraph = $options[ THEME_NAME . 'contacts_paragraph_' . $ln ];
$button_text     = $options[ THEME_NAME . 'button_text_' . $ln ];
$button_link = $options[ THEME_NAME . 'button_link_' . $ln ];
	get_header();
?>
	<div class="contact-main">
		<div class="container container_middle">
			<h1 class="title-1"><?= $title;?></h1>
			<div class="animation-description"><?= $paragraph;?></div>
			<div class="contact-main__button">
        <a class="button button_red" href="<?= $button_link;?>">
          <span class="button__line button__line_left"></span>
          <span class="button__line button__line_right"></span>
          <span class="button__text"><?= $button_text;?></span>
        </a>
			</div>
		</div>
	</div>
<?php
	get_footer();
?>