<?php
/*
Template Name: шаблон страницы История успеха
*/
?>

<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;600;700&display=swap" rel="stylesheet">
</head>

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