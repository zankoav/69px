<?php
	/**
	 * Template Name: Services
	 */
$options = get_option( 'services_settings' );
$ln      = Lang::current();

$title = $options[THEME_NAME.'services_main_title_'.$ln];
$paragraph = $options[THEME_NAME.'services_main_paragraph_'.$ln];
	get_header();
?>

	<div class="services-main">
		<div class="container container_middle">
			<h1 class="title-1"><?= $title?></h1>
			<div class="animation-description"><?= $paragraph?></div>
		</div>
	</div>

<?php
	get_footer();
?>