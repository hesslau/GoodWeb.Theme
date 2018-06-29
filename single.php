<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>

<?php get_template_part( 'template-parts/featured-image' ); ?>
<div class="main-container">
	<div class="grid-x">
		<main class="main-content fullWidth">

			<?php while ( have_posts() ) : the_post(); ?>
			<?php $colorClass = isBright(get_post_meta( get_the_ID(), 'color', true )) ? 'bright' : ''; ?>
				<div class="showcase <?php echo $colorClass; ?>" style="background: <?php echo get_post_meta( get_the_ID(), 'color', true ); ?>">
					<div class="title"><?php the_title(); ?></div>
					<div class="meta">
						<span class="field"><?php echo get_post_meta( get_the_ID(), 'field', true ); ?></span>
						<span class="year"><?php echo get_post_meta( get_the_ID(), 'year', true ); ?></span>
					</div>

					<div class="image" style="background:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>') no-repeat;"></div>
					<div class="content">
						<?php the_content(); ?>
					</div>
				</div>

				<?php //the_post_navigation(); ?>
				<?php //comments_template(); ?>

			<?php endwhile; ?>
		</main>
		<?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
