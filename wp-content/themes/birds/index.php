<?php

/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package box
 */


?>


<?php
get_header();
?>

<div class="container blog flex">
	<div>
		<? true_breadcrumbs(); ?>
	</div>
	<p class="blog__header dark-header">
		Новости и&nbsp;статьи
	</p>

	<div class="entry-footer blog__category flex">
		<a href="http://herbalife/blog/" class="blog__category-item">Все новости</a>
		<?php birds_entry_footer(); ?>
	</div>

	<?
	if (have_posts()) :
		if (is_home() && !is_front_page()) :
	?>
			<ul class="blog__list flex list-reset">
			<?php endif;

		/* Start the Loop */
		while (have_posts()) : ?>
				<li class="blog__list-item flex">
					<?
					the_post();
					get_template_part( 'includes/content-news-card');
					?>
				</li>
			<?
		endwhile;
			?>
			</ul>
			<div class="blog__pagination">
			<?
			$args = array(
				'show_all'     => false, // показаны все страницы участвующие в пагинации
				'end_size'     => 5,     // количество страниц на концах
				'mid_size'     => 2,     // количество страниц вокруг текущей
				'prev_next'    => true,  // выводить ли боковые ссылки «предыдущая/следующая»
				'prev_text'    => __('Назад'),
				'next_text'    => __('Дальше'),
			);
			the_posts_pagination($args);

		else :

			get_template_part('template-parts/content', 'none');

		endif;
			?>
			</div>

</div>
</body>

<?php
get_template_part('includes/content-chat-bot'); /*блок с контентом про чат-бот*/
get_template_part('includes/content-part-of-the-team'); /*блок с контентом про набирающиеся группы*/
get_footer();
?>