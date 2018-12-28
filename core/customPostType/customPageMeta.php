<?php

## Добавляем блоки в основную колонку на страницах постов и пост. страниц
add_action('add_meta_boxes', 'Multilang_titles_custom_box');
function Multilang_titles_custom_box(){
	$screens = array( 'post', 'page' );
	add_meta_box( 'myplugin_sectionid', 'Multilang titles', 'myplugin_meta_box_callback', $screens, 'normal' );
}

// HTML код блока
function myplugin_meta_box_callback( $post, $meta ){
	$screens = $meta['args'];

	// Используем nonce для верификации
	wp_nonce_field( plugin_basename(__FILE__), 'myplugin_noncename' );


	$meta = get_post_meta($post->ID);
	$en_title = $meta['ML_title_for_menu_en'][0];
	$ru_title = $meta['ML_title_for_menu_ru'][0];
	// Поля формы для введения данных
	?>
	<br/>
	<label for="ML_title_for_menu_en"><?= __("Title for main menu en", 'myplugin_textdomain' ); ?></label>
	<input type="text" id= "ML_title_for_menu_en" name="ML_title_for_menu_en" value="<?= $en_title;?>" size="50" />
	<br/>
	<label for="ML_title_for_menu_ru"><?= __("Title for main menu ru", 'myplugin_textdomain' ); ?></label>
	<input type="text" id= "ML_title_for_menu_eru" name="ML_title_for_menu_ru" value="<?= $ru_title;?>" size="50" />
<?php
}

## Сохраняем данные, когда пост сохраняется
add_action( 'save_post', 'add_multylang' );
function add_multylang( $post_id ) {
	// Убедимся что поле установлено.
	if ( !isset($_POST['ML_title_for_menu_en']) || !isset($_POST['ML_title_for_menu_en']))
		return;

	// проверяем nonce нашей страницы, потому что save_post может быть вызван с другого места.
	if (!wp_verify_nonce($_POST['myplugin_noncename'], plugin_basename(__FILE__)) )
		return;

	// если это автосохранение ничего не делаем
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE )
		return;

	// проверяем права юзера
	if( ! current_user_can( 'edit_post', $post_id ) )
		return;

	// Все ОК. Теперь, нужно найти и сохранить данные
	// Очищаем значение поля input.
	$title_en = sanitize_text_field( $_POST['ML_title_for_menu_en'] );
	$title_ru = sanitize_text_field( $_POST['ML_title_for_menu_ru'] );

	// Обновляем данные в базе данных.
	update_post_meta( $post_id, 'ML_title_for_menu_en', $title_en );
	update_post_meta( $post_id, 'ML_title_for_menu_ru', $title_ru );
}


//--------------------------------------------------------------------------------------change title menu item

add_filter('the_title', 'change_title',10 ,2);
function change_title($title, $id){
	$current_lg = Lang::current();
	$post_meta = get_post_meta($id);

	$current_lang_title = $post_meta["ML_title_for_menu_".$current_lg][0];


	$title = $current_lang_title ;
	return $title;
}