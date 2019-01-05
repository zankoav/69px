<?php
	/**
	 * Created by PhpStorm.
	 * User: alexandrzanko
	 * Date: 12/4/18
	 * Time: 5:00 PM
	 * http://69px.zankoav.com/
	 */
	define( 'THEME_NAME', get_template() );
	define( 'BASE_URL', '/wp-content/themes/' . THEME_NAME );

	require_once __DIR__ . '/utils/Lang.php';
	require_once __DIR__ . '/utils/Assets.php';
	require_once __DIR__ . '/utils/SingletonOptions.php';

	require_once __DIR__ . '/core/cmb2/common.php';

	require_once __DIR__ . '/core/init_theme.php';
	require_once __DIR__ . '/core/styles.php';
	require_once __DIR__ . '/core/scripts.php';

//settings for services
	require_once __DIR__ . '/core/cmb2/servicePageSettings.php';
	require_once __DIR__ . '/core/cmb2/projectsPageSettings.php';
	require_once __DIR__ . '/core/cmb2/aboutUsPageSettings.php';
	require_once __DIR__ . '/core/cmb2/contactsPageSettings.php';

//add members
	require_once __DIR__ . '/core/customPostType/member.php';
	require_once __DIR__ . '/core/cmb2/member_meta.php';

//add meta titles
	require_once __DIR__ . '/core/customPostType/customPageMeta.php';


