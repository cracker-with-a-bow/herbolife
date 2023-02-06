<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package box
 */

?>


<section class="news">
	<div class="container news__gap flex">
		<p class="news__header dark-header">
			Новости и&nbsp;статьи
		</p>

		<div class="news__container flex">
			<?

			$current_page = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$params = array(
				'posts_per_page' => 4, // количество постов на странице
				'paged'           => $current_page // текущая страница
			);
			query_posts($params);

			$wp_query->is_archive = true;
			$wp_query->is_home = false;

			while (have_posts()) : the_post();
				get_template_part('includes/content-news-card');

			endwhile;
			?>
		</div>
		<div class="news__container-btn flex">
		<a href="/blog/" class="news__btn">Все новости</a>
		</div>
	</div>
</section>