<?php

$options = SingletonOptions::getOptions();
$ln      = Lang::current();

$logos_array     = $options[ THEME_NAME . 'logos_array' ];
$they             = Lang::get( 'they' );
$trust_us         = Lang::get( 'trust_us' );
?>

<div class="trust-us">
	<div class="trust-us__map-wrapper">
		<img class="trust-us__map" src="/wp-content/themes/69px/src/icons/map.72565f.png"></div>
	<div class="container">
		<div class="trust-us__header-wrapper scrollme">
			<div class="trust-us__header">
				<h2 class="trust-us__title animateme" data-when="enter" data-from="0.75" data-to="0.25" data-opacity="0"
				    data-translatex="-200">
					<span class="trust-us__title-first"><?= $they; ?></span>
					<span class="trust-us__title-secound"><?= $trust_us; ?></span>
				</h2>
				<p class="trust-us__description animateme"
				   data-when="enter" data-from="0.7" data-to="0.2" data-opacity="0" data-translatex="-200"> <?= $Just_a_selection ?></p>
			</div>
		</div>
		<div class="trust-us__partners scrollme">

			<?php foreach ( $logos_array as $item ): ?>

				<div class="trust-us__partner animateme"
				     data-when="enter" data-from="0.75" data-to="0.25" data-opacity="0" data-scale="0.5"
				     data-translatey="50">
					<img class="trust-us__partner-image" src="<?= $item['logos_ar_item'] ?>">
				</div>

			<?php endforeach; ?>

		</div>
	</div>
</div>
