<?php

/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package box
 */ ?>

<body>
	<?php
	get_header(); ?>

	<main id="primary" class="site-main">
		<div class="container">
			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php esc_html_e('Упс! Эта страница не найдена', 'birds'); ?></h1>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php esc_html_e('Может Вы искали что-то из списка ниже?', 'birds'); ?></p>

					<?

					get_template_part('includes/content-news'); /*блок с контентом про новости*/
					/*
					get_search_form();
*/
					?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->


		</div>
	</main>


	<?php

	get_template_part('includes/content-chat-bot'); /*блок с контентом про чат-бот*/
	get_template_part('includes/content-part-of-the-team'); /*блок с контентом про набирающиеся группы*/



	get_footer();
	?>
</body>