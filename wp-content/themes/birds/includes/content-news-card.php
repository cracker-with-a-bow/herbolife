<?php

/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package box
 */

?>


<article class="news-card">
	<div class="news-card__img">
	<?
	birds_post_thumbnail();
	?>
	</div>
	<div class="blog__preview">
		<?php
		add_filter('the_title', 'max_title_length');
		if (is_singular()) :
			the_title('<p class="entry-title">', '</p>');
		else :
			the_title('<p class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></p>');
		endif; ?>
		<p class="blog__preview-time">
			<?
			birds_posted_on();
			?>
		</p>
		<div class="blog__preview_entry-footer flex">
			<?php /*birds_entry_footer(); */
			
			if ( 'post' === get_post_type() ) {
				global $post;
				
				/* translators: used between list items, there is a space after the comma */
				$categories_list = get_the_category( $post->ID );
				//var_dump( $categories_list );
				/*if ( $categories_list ) {
					/* translators: 1: list of categories. */
					//printf(  esc_html__( 'tg', 'birds' ) , $categories_list ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped			
				//}
				foreach( get_the_category() as $categories_list ) {
					printf( '<span class="news-card__category">' . esc_html__( $categories_list->name) . '</span>'); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped

				}
			
			}
			?>
		</div>
	</div>
</article>
