<?php

/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package box
 */
?>

<body>
	<?php
	get_header(); ?>
	<div class="archive">
		<div class="container">


			<?php if (have_posts()) : ?>

				<header class="page-header">
					<?php
					the_archive_title('<h1 class="page-title">', '</h1>');
					the_archive_description('<div class="archive-description">', '</div>');
					?>
				</header><!-- .page-header -->
				<div class="news__container flex">
				<?
				/* Start the Loop */
				while (have_posts()) :
					the_post();

					/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
					get_template_part('includes/content-news-card');

				endwhile;

				the_posts_navigation();

			else :

				get_template_part('template-parts/content', 'none');

			endif;
				?>
				</div>

		</div>



		<?php

		get_template_part('includes/content-chat-bot'); /*блок с контентом про чат-бот*/
		get_template_part('includes/content-part-of-the-team'); /*блок с контентом про набирающиеся группы*/



		get_footer();
		?>
	</div>
</body>