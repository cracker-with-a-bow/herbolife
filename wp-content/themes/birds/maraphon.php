<?php
/*
Template Name: шаблон страницы Марафон успеха
*/
?>


<main id="primary" class="site-main">
	<div class="index-top-block background-with-mask maraphon">
		<div class="index-part-left">
			<div class="gap-for-header">
			<?php
			get_header(); ?>
			</div>
			<div class="container container-maraphon">
				<p class="maraphon-top-block__name">
					Избавьтесь <br class="br"> от&nbsp;7&nbsp;сантиметров <br class="br">
					в&nbsp;талии <span class="maraphon-top-block__name_yellow">за&nbsp;31&nbsp;день</span> <br class="br">
					<span class="maraphon-top-block__name_think">на&nbsp;марафоне стройности</span>
				</p>
				<p class="index-top-block__text">
					Авторский марафон Виолетты&nbsp;&mdash;
					это онлайн сообщество, объединяющее людей
					из&nbsp;многих стран с&nbsp;интересами
					в&nbsp;области здорового образа жизни.
				</p>
				<a href="#" class="index-top-block__btn btn-yellow">
					Марафон стройности
				</a>
			</div>
			<div class="index-part-right">
				<img src="<?php bloginfo("template_url"); ?>/img/photo-author-3.png" alt="photo-author" class="index-photo-author">
				<p class="maraphon-top-block__descr_green">
				<span class="maraphon__before_text_for-green">Рожкова Виолетта</span>
				</p>
				<p class="maraphon-top-block__descr_white">
				<span class="maraphon__before_text_for-white">Консультант по&nbsp;питанию</span>
					
				</p>
			</div>
		</div>
	</div>


		<?php
		get_template_part('includes/content-zachem'); /*блок с контентом про зачем нужен марафон*/
		get_template_part('includes/content-chat-bot'); /*блок с контентом про чат-бот*/
		get_template_part('includes/content-advantage'); /*блок с контентом преимущества*/
		get_template_part('includes/content-test-maraphon'); /*блок с контентом пробный марафон*/
		get_template_part('includes/content-how-maraphon'); /*блок с контентом как проходит марафон*/
		get_template_part('includes/content-consultation'); /*блок с контентом про консультацию*/
		get_template_part('includes/content-part-of-the-team'); /*блок с контентом про набирающиеся группы*/
		get_template_part('includes/content-news'); /*блок с контентом про новости*/



		get_footer();
		?>
</main>