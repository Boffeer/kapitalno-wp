<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package kapitalno
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<?php $contacts = get_crb_contacts(); ?>

	<?php
	$burger_menu_id = 3;
	$burger_menu_items =  wp_get_nav_menu_items($burger_menu_id, [
		'output_key'  => 'menu_order',
	]);
	// get_vd($burger_menu_items);
	?>
	<header class="header section--regular">
		<div class="wrapper header__wrapper">
			<a href=<?php echo get_home_link(); ?>" class="header__logo">
				<picture class="header__logo-pic">
					<img class="header__logo-img" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo.svg" alt="Капитально" />
				</picture>
				<span class="header__logo-desc">
					ремонт и строительство по технологиям высокого качества
				</span>
			</a>
			<button class="header__burger">
				<span class="burger__line"></span>
				<span class="burger__line"></span>
				<span class="burger__line"></span>
			</button>
		</div>

		<div class="header-burger">
			<div class="header-burger__content">
				<div class="hedaer-buger__content-top">
					<button class="header-burger__close button--close">Закрыть</button>
					<a href="<?php echo get_home_link(); ?>" class="header-burger__logo">
						<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/common/logo.svg" alt="Капитально" />
					</a>
					<?php
					$burger_menu_id = 3;
					$burger_menu_items =  wp_get_nav_menu_items($burger_menu_id, [
						'output_key'  => 'menu_order',
					]);
					?>
					<nav class="header-burger-nav">
						<ul class="header-burger-nav__list">
							<?php foreach ($burger_menu_items as $menu_item) : ?>
								<li class="header-burger-nav__item">
									<a href="<?php echo $menu_item->url; ?>" class="header-burger-nav__link"><?php echo $menu_item->title; ?></a>
								</li>
							<?php endforeach; ?>
						</ul>
					</nav>
				</div>
				<div class="header-burger__content-bottom">
					<a href="tel:<?php echo $contacts['phone_raw']; ?>" class="header-burger__phone"><?php echo $contacts['phone']; ?></a>
					<button data-modal-open="callback-1" class="button button--primary header-burger__button">
						Получить консультацию
					</button>
				</div>
			</div>
		</div>
	</header>
