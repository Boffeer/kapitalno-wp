<?php
if (!defined('ABSPATH')) {
	exit; // exit if accessed directly
}

use Carbon_Fields\Container;
use Carbon_Fields\Field;

// Default options page
$basic_options_container = Container::make('theme_options', 'kaplitalno_theme_settings',  'Управление контентом')
	->add_fields(array(
		Field::make('header_scripts', 'crb_header_script', 'Header Script'),
		Field::make('footer_scripts', 'crb_footer_script', 'Footer Script'),
	));

// Add second options page under 'Basic Options'
Container::make('theme_options', 'kaplitalno_theme_options', 'Контакты')
	->set_page_parent($basic_options_container) // reference to a top level container
	->add_tab('Контакты', array(
		Field::make('text', 'kaplitalno_instagram', 'Instagram')
			->set_width(50),
		Field::make('text', 'kaplitalno_facebook', 'Facebook')
			->set_width(50),
		Field::make('text', 'kaplitalno_vk', 'VK')
			->set_width(50),
		Field::make('text', 'kaplitalno_email', 'Email')
			->set_width(50),
		Field::make('text', 'kaplitalno_phone', 'Телефон')
			->set_width(50),
		Field::make('text', 'kaplitalno_privacy', 'Ссылка на политику конфиденциальности')
			->set_width(50),
	));

Container::make('post_meta', 'kaplitalno_landing', 'Лендинг')
	->where('post_id', '=', '6')
	->add_tab('Заголовки в первом этаже', array(
		Field::make('complex', 'kaplitalno_typewriter', 'Заголовки')
			->add_fields(array(
				Field::make('textarea', 'kaplitalno_typewriter_total', 'Весь текст'),
				Field::make('text', 'kaplitalno_typewriter_find', 'Найти текст'),
				Field::make('text', 'kaplitalno_typewriter_replace', 'Заменить на')
			))
	))
	->add_tab('Освободили от хлопот с ремонтом', array(
		Field::make('text', 'kaplitalno_help_title', 'Заголовок блока'),
		Field::make('complex', 'kaplitalno_help', 'Освободили от хлопот с ремонтом')
			->add_fields(array(
				Field::make('text', 'kapitalno_help_title', 'Заголовок'),
				Field::make('complex', 'kaplitalno_help_bullets', 'Буллеты')
					->add_fields(array(
						Field::make('text', 'kapitalno_help_bullet', 'Буллет'),
					)),
				Field::make('text', 'kapitalno_help_link', 'Ссылка в кнопке'),
				Field::make('image', 'kapitalno_help_image', 'Картинка')
					->set_value_type('url'),
			))
	))
	->add_tab('Кейсы до-после', array(
		Field::make('complex', 'kaplitalno_cases', 'Кейсы до-после')
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
		Field::make('complex', 'kaplitalno_reviews', 'Отзывы')
			->setup_labels(array(
				'plural_name' => 'отзывы',
				'singular_name' => 'отзыв'
			))
			->add_fields(array(
				Field::make('text', 'kapitalno_reviews_name', 'Описание урока'),
				Field::make('textarea', 'kapitalno_reviews_feedback', 'Описание урока'),
			))
	))
	->add_tab('Создаем резонансные решения', array(
		Field::make('complex', 'kaplitalno_resonance', 'Создаем резонансные решения')
			->setup_labels(array(
				'plural_name' => 'новости',
				'singular_name' => 'новость'
			))
			->add_fields(array(
				Field::make('image', 'kapitalno_resonance_image', 'Картинка')
					->set_value('url'),
				Field::make('textarea', 'kapitalno_resonance_title', 'Заголовок новости'),
				Field::make('text', 'kapitalno_reviews_url', 'Ссылка на новость'),
			))
	))
	->add_tab('Специалисты', array(
		Field::make('complex', 'kaplitalno_masters', 'Специалисты')
			->setup_labels(array(
				'plural_name' => 'специалисты',
				'singular_name' => 'специалисты'
			))
			->add_fields(array(
				Field::make('text', 'kapitalno_reviews_name', 'Описание урока'),
				Field::make('textarea', 'kapitalno_reviews_feedback', 'Описание урока'),
			))
	))
	->add_tab('культурно-историческое наследие', array(
		Field::make('complex', 'kaplitalno_heritate', 'Культурно-историческое наследие')
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
