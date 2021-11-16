<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package br-location
 */

?>

<article id="post-<?php the_ID(); ?>"  class="grid justify-items-center">
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title text-2xl">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

			?>
		
	</header><!-- .entry-header -->

	<?php br_location_post_thumbnail(); ?>

	<div class="entry-content container mx-auto">
		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'br-location' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

	
		?>
	</div><!-- .entry-content -->


</article><!-- #post-<?php the_ID(); ?> -->
