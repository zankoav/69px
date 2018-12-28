<?php

class Lang {

	const COOKIE_KEY = 'lang';
	const LANGUAGES = [ 'ru', 'en' ];
	const BASE_LANG = 'ru';
	const CONSTANTS = [
		'404_title'                      => [
			'ru' => 'Ошибка 404',
			'en' => 'Error 404'
		],
		'404_description'                => [
			'ru' => 'Страница не найдена',
			'en' => 'Page not found'
		],
		'menu'                           => [
			'ru' => 'меню',
			'en' => 'menu'
		],
		'contacts'                       => [
			'ru' => 'Контакты',
			'en' => 'contacts'
		],
		'Location'                       => [
			'ru' => 'Адрес',
			'en' => 'Location'
		],
		'Design and development company' => [
			'ru' => 'Проектно-конструкторская компания',
			'en' => 'Design and development company'
		],
		'watch'                          => [
			'ru' => 'Смотреть',
			'en' => 'Watch'
		],
		'what'                           => [
			'ru' => 'Что',
			'en' => 'What'
		],
		'we do'                          => [
			'ru' => 'делаем',
			'en' => 'we do'
		],
		'The_mission'                    => [
			'ru' => 'Миссия компании-разработка эффективных проектных решений, соответствующих бизнес-целям клиентов',
			'en' => 'The mission of the company is to develop efficient design solutions suitable for business goals of the clients'
		],
		'We_help'                        => [
			'ru' => 'Мы помогаем компаниям сделать мир лучше',
			'en' => 'We help companies make the world better'
		],
		'more'                           => [
			'ru' => 'читать больше',
			'en' => 'More'
		],
		'they'                           => [
			'ru' => 'Они',
			'en' => 'They'
		],
		'trust_us'                       => [
			'ru' => 'доверяют нам',
			'en' => 'trust us'
		],
		'Just_a_selection'               => [
			'ru' => 'Всего лишь несколько глобальных компаний, с которыми мы сотрудничали',
			'en' => 'Just a selection of a few-several global companies that we\'ve collaborated to'
		],
		'Team'                           => [
			'ru' => 'Команда',
			'en' => 'Team'
		],
		'Everyone Matters'               => [
			'ru' => 'Каждый важен',
			'en' => 'Everyone Matters'
		],
		'Lets_get_touch'               => [
			'ru' => 'Давайте прикосновение',
			'en' => 'Let’s get touch'
		],
		'Feel free!'               => [
			'ru' => 'Не стесняйтесь!',
			'en' => 'Feel free!'
		],
		'Drop a line'               => [
			'ru' => 'Черкнуть',
			'en' => 'Drop a line'
		],
		'What is your name?'               => [
			'ru' => 'Как тебя зовут?',
			'en' => 'What is your name?'
		],
		'Your e-mail'               => [
			'ru' => 'Твой email',
			'en' => 'Your e-mail'
		],
		'send'               => [
			'ru' => 'Отправить',
			'en' => 'send'
		],
	];

	public static function current() {
		return ( isset( $_COOKIE[ self::COOKIE_KEY ] ) and in_array( $_COOKIE[ self::COOKIE_KEY ], self::LANGUAGES ) ) ?
			$_COOKIE[ self::COOKIE_KEY ] :
			self::LANGUAGES[0];
	}

	public static function get( $name, $echo = false ) {
		$value = self::CONSTANTS[ $name ][ self::current() ];
		if ( $echo ) {
			echo $value;
		} else {
			return $value;
		}
	}
}