<?php
/*
Template Name: шаблон страницы Обо мне
*/
?>


<main id="primary" class="site-main">
	<div class="index-top-block background-with-mask">
		<div class="index-part-left">
		<div class="gap-for-header">
		<?php
		get_header(); ?>
		</div>
		<div class="container about flex">
			<p class="index-top-block__descr">
				Консультант по&nbsp;питанию
			</p>
			<p class="index-top-block__name">
				Рожкова Виолетта
			</p>
			<p class="index-top-block__text">
				Привет, мне 45&nbsp;лет. Суммарно похудела на&nbsp;26,2&nbsp;кг
				и&nbsp;уже более чем 22&nbsp;года помогаю корректировать привычки
				в&nbsp;питании. За&nbsp;эти годы огромное количество людей
				воспользовались моими компетенциями, чтобы стать более здоровыми
				и&nbsp;счастливыми. Сейчас веду свой авторский марафон стройности
			</p>
			<a href="#" class="index-top-block__btn btn-yellow">
				Марафон стройности
			</a>
		</div>
		<div class="index-part-right">
		<img src="<?php bloginfo("template_url"); ?>/img/photo-author-1.png" alt="photo-author" class="index-photo-author">
		</div>
		</div>
	</div>


		<?php
		get_template_part('includes/content-skills'); /*блок с контентом про навыки*/
		get_template_part('includes/content-chat-bot'); /*блок с контентом про чат-бот*/
		get_template_part('includes/content-why'); /*блок с контентом "почему всё..."*/
		get_template_part('includes/content-consultation'); /*блок с контентом про консультацию*/
		get_template_part('includes/content-part-of-the-team'); /*блок с контентом про набирающиеся группы*/
		get_template_part('includes/content-news'); /*блок с контентом про новости*/
		get_footer();
?>
</main>
