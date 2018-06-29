<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
$colorClass = isBright(get_post_meta( get_the_ID(), 'color', true )) ? 'bright' : '';
$link = get_post_meta( get_the_ID(), 'link', true );
$hoverClass = ($link == '') ? '' : 'hover';
?>
<div class="cell small-12 medium-12 large-6">
	<div class="work <?php echo $colorClass; echo $hoverClass;?>" style="background: <?php echo get_post_meta( get_the_ID(), 'color', true ); ?>">
		<div class="overlay"></div>
		<div class="image" style="background:url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full') ?>') no-repeat;"></div>
		<div class="content">

            <?php if($link): ?>
                <a href="<?php echo $link; ?>" target="_blank"><div class="title"><?php the_title(); ?></div></a>
			    <a href="<?php echo $link; ?>" target="_blank"><div class="tagline"><?php echo get_post_meta( get_the_ID(), 'tagline', true ); ?></div></a>
			<?php else: ?>
                <div class="title"><?php the_title(); ?></div>
                <div class="tagline"><?php echo get_post_meta( get_the_ID(), 'tagline', true ); ?></div>
            <?php endif; ?>

            <div class="meta">
				<div class="field"><?php echo get_post_meta( get_the_ID(), 'field', true ); ?></div>
				<span class="year"><?php echo get_post_meta( get_the_ID(), 'year', true ); ?></span>
			</div>
		</div>
	</div>
</div>



