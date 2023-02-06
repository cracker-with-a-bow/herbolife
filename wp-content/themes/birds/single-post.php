<?php

/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package box
 */

get_header();
?>

<body>
	<div class="container">

<? true_breadcrumbs();  ?>
		<?php
		while (have_posts()) :
			the_post();

			get_template_part('template-parts/content', get_post_type());
		endwhile; // End of the loop.
		?>
	</div>
	<?
	get_template_part('includes/content-chat-bot'); /*блок с контентом про чат-бот*/
	get_template_part('includes/content-part-of-the-team'); /*блок с контентом про набирающиеся группы*/
	get_template_part('includes/content-news'); /*блок с контентом про новости*/

	?>
</body>
<?php
get_footer();
