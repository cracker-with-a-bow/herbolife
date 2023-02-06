<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package box
 */?>
<body>
		<?php
		get_header(); ?>
		<div class="container">
	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'page' );

		endwhile; // End of the loop.
		?>

</main>
		</div>
			


		<?php

		get_template_part('includes/content-chat-bot'); /*блок с контентом про чат-бот*/
		get_template_part('includes/content-part-of-the-team'); /*блок с контентом про набирающиеся группы*/



get_footer();
?>
