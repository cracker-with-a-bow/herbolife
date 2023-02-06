<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package box
 */

?>


<footer id="colophon" class="site-footer">
	<div class="site-info">
		<div class="container">
			<div class="footer-container flex">
				<div class="site-info__element footer-text">
					<p class="footer-text__name">Рожкова Виолетта</p>
					<p class="footer-text__slogan">Меняю привычки в&nbsp;питании</p>
				</div>
				<div class="site-info__element footer-contacts">
					<p class="footer-contacts__header">Контакты</p>
					<address class="footer-contacts__social-icons">
						<ul class="social-icons flex list-reset">
							<li class="social-icons__elem">
								<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/telegram.svg" alt="telegram-icon"></a>
							</li>
							<li class="social-icons__elem">
								<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/whatsapp.svg" alt="whatsapp-icon"></a>
							</li>
							<li class="social-icons__elem">
								<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/viber.svg" alt="viber-icon"></a>
							</li>
						</ul>
						<a class="social-icons__footer-tel" href="tel:+375441234567">+375 44&nbsp;123 45&nbsp;67</a>
					</address>
				</div>
				<div class="site-info__element footer-menu">
					<p class="footer-contacts__header">Как похудеть?</p>
					<ul class="footer-menu__items list-reset">
						<li class="footer-menu__item">
							Обо мне
						</li>
						<li class="footer-menu__item">
							Марафоны стройности
						</li>
						<li class="footer-menu__item">
							Истории успеха
						</li>
						<li class="footer-menu__item">
							Блог
						</li>
					</ul>
				</div>
				<div class="site-info__element social-contacts">
					<p class="footer-contacts__header-smaller">Мои соцсети</p>
					<ul class="social-icons flex list-reset">
						<li class="social-icons__elem">
							<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/insta.svg" alt="instagram-icon"></a>
						</li>
						<li class="social-icons__elem">
							<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/vk.svg" alt="vk-icon"></a>
						</li>
						<li class="social-icons__elem">
							<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/ok.svg" alt="ok-icon"></a>
						</li>
						<li class="social-icons__elem">
							<a class="social-icons__elem-link" href="<?php bloginfo("url"); ?>"><img src="<?php bloginfo("template_url"); ?>/img/facebook.svg" alt="facebook-icon"></a>
						</li>
					</ul>
				</div>
			</div>
			<div class="site-footer__text">
			* Любые утверждения в&nbsp;отношении контроля веса относятся к&nbsp;Программе контроля веса Herbalife Nutrition, включающей, помимо прочего, сбалансированную диету,
			регулярные физические упражнения, ежедневное потребление необходимого количества жидкости, употребление пищевых добавок в&nbsp;случае необходимости и&nbsp;достаточный отдых.
			Все результаты индивидуальны и&nbsp;могут различаться.
		</div>
		</div>

	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>

</html>