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

	<header class="header section--regular">
		<div class="wrapper header__wrapper">
			<a href="#" class="header__logo">
				<picture class="header__logo-pic">
					<img class="header__logo-img" src="./images/common/logo.svg" alt="Капитально" />
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
					<a href="#" class="header-burger__logo">
						<img src="./images/common/logo.svg" alt="Капитально" />
					</a>
					<nav class="header-burger-nav">
						<ul class="header-burger-nav__list">
							<li class="header-burger-nav__item">
								<a href="https://kapitalno.pro/cases" class="header-burger-nav__link">Кейсы</a>
							</li>
							<li class="header-burger-nav__item">
								<a href="https://kapitalno.pro/renovation" class="header-burger-nav__link">Ремонт старого фонда</a>
							</li>
							<li class="header-burger-nav__item">
								<a href="https://kapitalno.pro/houses" class="header-burger-nav__link">Ремонт квартир и домов</a>
							</li>
							<li class="header-burger-nav__item">
								<a href="https://kapitalno.pro/forbusiness" class="header-burger-nav__link">Для бизнеса</a>
							</li>
							<li class="header-burger-nav__item">
								<a href="https://kapitalno.pro/comingsoon" class="header-burger-nav__link">Дизайн</a>
							</li>
							<li class="header-burger-nav__item">
								<a href="https://kapitalno.pro/comingsoon" class="header-burger-nav__link">О компании</a>
							</li>
							<li class="header-burger-nav__item">
								<a href="https://kapitalno.pro/contacts" class="header-burger-nav__link">Контакты</a>
							</li>
						</ul>
					</nav>
				</div>
				<div class="header-burger__content-bottom">
					<a href="tel:+78124099432" class="header-burger__phone">+7 812 409-94-32</a>
					<button data-modal-open="callback-1" class="button button--primary header-burger__button">
						Получить консультацию
					</button>
				</div>
			</div>
		</div>
	</header>

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			if (is_front_page() && is_home()) :
			?>
				<h1 class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></h1>
			<?php
			else :
			?>
				<p class="site-title"><a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a></p>
			<?php
			endif;
			$kapitalno_description = get_bloginfo('description', 'display');
			if ($kapitalno_description || is_customize_preview()) :
			?>
				<p class="site-description"><?php echo $kapitalno_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
																		?></p>
			<?php endif; ?>
		</div><!-- .site-branding -->

		<nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e('Primary Menu', 'kapitalno'); ?></button>
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		</nav><!-- #site-navigation -->
	</header><!-- #masthead -->
