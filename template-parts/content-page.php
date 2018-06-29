<?php
/**
 * The default template for displaying page content
 *
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="entry-content">
		<?php

		$postsByCategory = get_post_meta( get_the_ID(), 'cards', true );
		if($postsByCategory != "") {
			?>
			<div class="grid-x grid-padding-x">
			<?php
			$query = new WP_Query( array( 'category_name' => $postsByCategory ) );
			while ( $query->have_posts() ) : $query->the_post();
				get_template_part( 'template-parts/content', get_post_format() );
			endwhile;
			?>
			</div>
			<?php
		}

		?>
		<?php the_content(); ?>
		<?php edit_post_link( __( '(Edit)', 'foundationpress' ), '<span class="edit-link">', '</span>' ); ?>
	</div>
	<footer>
		<?php
			wp_link_pages(
				array(
					'before' => '<nav id="page-nav"><p>' . __( 'Pages:', 'foundationpress' ),
					'after'  => '</p></nav>',
				)
			);
		?>
		<?php $tag = get_the_tags(); if ( $tag ) { ?><p><?php the_tags(); ?></p><?php } ?>
	</footer>
</article>
