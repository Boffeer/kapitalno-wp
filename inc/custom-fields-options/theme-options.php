<?php
if (!defined('ABSPATH')) {
	exit; // exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make('theme_options', 'kapitalno_theme_settings',  'Управление контентом')
	->add_fields(array(
		Field::make('header_scripts', 'crb_header_script', 'Header Script'),
		Field::make('footer_scripts', 'crb_footer_script', 'Footer Script'),
	));

// Add second options page under 'Basic Options'
Container::make('theme_options', 'kapitalno_theme_options', 'Контакты')
	->set_page_parent($basic_options_container) // reference to a top level container
	->add_tab('Контакты', array(
		Field::make('text', 'kapitalno_instagram', 'Instagram')
			->set_width(50),
		Field::make('text', 'kapitalno_facebook', 'Facebook')
			->set_width(50),
		Field::make('text', 'kapitalno_vk', 'VK')
			->set_width(50),
		Field::make('text', 'kapitalno_email', 'Email')
			->set_width(50),
		Field::make('text', 'kapitalno_phone', 'Телефон')
			->set_width(50),
		Field::make('text', 'kapitalno_privacy', 'Ссылка на политику конфиденциальности')
			->set_width(50),
	));

Container::make('post_meta', 'kapitalno_landing', 'Лендинг')
	->where('post_id', '=', '6')
	->add_tab('Заголовки в первом этаже', array(
		Field::make('complex', 'kapitalno_typewriter', 'Заголовки')
			->setup_labels(array(
				'plural_name' => 'заголовки',
				'singular_name' => 'заголовок'
			))
			->add_fields(array(
				Field::make('textarea', 'kapitalno_typewriter_total', 'Весь текст'),
				Field::make('textarea', 'kapitalno_typewriter_find', 'Найти текст'),
				Field::make('textarea', 'kapitalno_typewriter_replace', 'Заменить на')
			))
	))
	->add_tab('Освободили от хлопот с ремонтом', array(
		Field::make('textarea', 'kapitalno_experience_title', 'Заголовок блока'),
		Field::make('complex', 'kapitalno_experience', 'Освободили от хлопот с ремонтом')
			->setup_labels(array(
				'plural_name' => 'типы объектов',
				'singular_name' => 'тип объекта'
			))
			->add_fields(array(
				Field::make('text', 'kapitalno_experience_title', 'Заголовок'),
				Field::make('complex', 'kapitalno_experience_bullets', 'Буллеты')
					->setup_labels(array(
						'plural_name' => 'буллеты',
						'singular_name' => 'буллет'
					))
					->add_fields(array(
						Field::make('text', 'kapitalno_experience_bullet', 'Буллет'),
					)),
				Field::make('text', 'kapitalno_experience_link', 'Ссылка в кнопке'),
				Field::make('image', 'kapitalno_experience_image', 'Картинка')
					->set_value_type('url'),
			))
	))
	->add_tab('Кейсы до-после', array(
		Field::make('complex', 'kapitalno_cases', 'Кейсы до-после')
			->setup_labels(array(
				'plural_name' => 'кейсы',
				'singular_name' => 'кейс'
			))
			->add_fields(array(
				Field::make('image', 'kapitalno_cases_before', 'До')
					->set_width(50)
					->set_value_type('url'),
				Field::make('image', 'kapitalno_cases_after', 'После')
					->set_width(50)
					->set_value_type('url'),
			))
	))
	->add_tab('Отзывы', array(
		Field::make('complex', 'kapitalno_reviews', 'Отзывы')
			->setup_labels(array(
				'plural_name' => 'отзывы',
				'singular_name' => 'отзыв'
			))
			->add_fields(array(
				Field::make('text', 'kapitalno_reviews_name', 'Имя отзыва'),
				Field::make('textarea', 'kapitalno_reviews_feedback', 'Отызыв'),
			))
	))
	->add_tab('Специалисты', array(
		Field::make('complex', 'kapitalno_masters', 'Специалисты')
			->setup_labels(array(
				'plural_name' => 'специалисты',
				'singular_name' => 'специалиста'
			))
			->add_fields(array(
				Field::make('text', 'kapitalno_masters_name', 'Имя'),
				Field::make('text', 'kapitalno_masters_post', 'Должность'),
				Field::make('image', 'kapitalno_masters_photo', 'Фото')->set_value_type('url'),
				Field::make('textarea', 'kapitalno_masters_description', 'Описание'),
			))
	))
	->add_tab('Создаем резонансные решения', array(
		Field::make('complex', 'kapitalno_resonance', 'Создаем резонансные решения')
			->setup_labels(array(
				'plural_name' => 'новости',
				'singular_name' => 'новость'
			))
			->add_fields(array(
				Field::make('image', 'kapitalno_resonance_image', 'Картинка')
					->set_value_type('url'),
				Field::make('textarea', 'kapitalno_resonance_title', 'Заголовок новости'),
				Field::make('text', 'kapitalno_resonance_url', 'Ссылка на новость'),
			))
	))
	->add_tab('Культурно-историческое наследие', array(
		Field::make('complex', 'kapitalno_heritate', 'Культурно-историческое наследие')
			->setup_labels(array(
				'plural_name' => 'фото',
				'singular_name' => 'фото'
			))
			->add_fields(array(
				Field::make('image', 'kapitalno_heritate_image', 'Картинка')
					->set_value_type('url'),
				Field::make('text', 'kapitalno_heritate_caption', 'Текст под картинкой'),
				Field::make('text', 'kapitalno_heritate_tooltip', 'Подсказка'),
			))
	));
