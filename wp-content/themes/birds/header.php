<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package box
 */


?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<?php wp_head(); ?>

	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">




</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>

	<header id="masthead" class="site-header">
		<div class="container">
			<div class="header flex">
				<div class="part-left">
					<p class="header__name">Рожкова Виолетта</p>
					<p class="header__slogan">Меняю привычки в питании</p>
				</div>
				<div class="menu-btn">
					<span></span>
					<span></span>
					<span></span>
				</div>
				<div class="site-branding">
								<?php
								if ( is_front_page() ) :


							 //получаем прямую ссылку на картинку логотипа
									$logo_img = '';
									if( $custom_logo_id = get_theme_mod('custom_logo') ){
										$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
											'class'    => 'header__name',
											'itemprop' => 'header__name',
										));
									}
									echo '<div class="site-logo">';
									echo $logo_img;  

									echo '</div>';
								else :
									?>
									<a href="/" class="custom-logo-link" rel="home">
										<?php	
										$logo_img = '';
										if( $custom_logo_id = get_theme_mod('custom_logo') ){
											$logo_img = wp_get_attachment_image( $custom_logo_id, 'full', false, array(
												'class'    => 'header__name',
												'itemprop' => 'header__name',
											));
										}
										echo '<div class="site-logo">';
										echo $logo_img;  

										echo '</div>';
										?>

									</a>
									<?php
								endif;
								?>
							</div><!-- .site-branding -->
				<nav id="site-navigation" class="main-navigation flex">

					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-1',
							'menu_id'        => 'primary-menu',
						)
					);
					?>
				</nav><!-- #site-navigation -->

				<div class="header__contacts flex">
					<address class="header-contacts__social-icons flex">
						<ul class="social-icons flex list-reset">
							<li class="social-icons__elem header-icon">
								<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/telegram.svg" alt="telegram-icon"></a>
							</li>
							<li class="social-icons__elem header-icon">
								<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/whatsapp.svg" alt="whatsapp-icon"></a>
							</li>
							<li class="social-icons__elem header-icon">
								<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/viber.svg" alt="viber-icon"></a>
							</li>
						</ul>
						<a class="social-icons__header-tel" href="tel:+375441234567">+375 44 123-45-67</a>
					</address>
					<a class="header__back-call" href="#">Обратный звонок</a>
				</div>
			</div>
		</div>
	</header>
	<script defer src="empty-textarea.js"></script>
</body>