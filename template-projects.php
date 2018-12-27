<?php
	/**
	 * Template Name: Projects
	 */
$options = get_option( 'projects_settings' );
$ln      = Lang::current();



$title = $options[THEME_NAME.'services_main_title_'.$ln];
$paragraph = $options[THEME_NAME.'services_main_paragraph_'.$ln];

	get_header();
?>
    <div class="projects-main">
        <div class="container container_middle">
            <h1 class="title-1"><?= $options[THEME_NAME.'services_main_title']?></h1>
            <div class="animation-description"><?= $options[THEME_NAME.'services_main_paragraph']?></div>
        </div>
    </div>
	<div class="paralax-window" style="background-image:url(/wp-content/themes/69px/src/icons/parallax-window.159d9b.jpg)"></div>
<?php
	get_footer();
?>