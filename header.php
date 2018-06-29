<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>

	<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
		<?php get_template_part( 'template-parts/mobile-off-canvas' ); ?>
	<?php endif; ?>

	<?php
	$args = array(
		'name'        => 'intro',
		'post_type'   => 'page',
		'post_status' => 'publish',
		'numberposts' => 1
	);
	$my_posts = get_posts($args);
	$intro_title = ( $my_posts ) ? $my_posts[0]->post_title : "";
	$intro_content = ( $my_posts ) ? $my_posts[0]->post_content : "";
	the_post();
	?>

    <div class="header-container">
        <header class="site-header" role="banner">
            <div class="grid-x grid-padding-x">
                <div class="cell small-12 medium-7 large-7 large-offset-1">
                    <div class="key-visual-mobile logo"></div>
                    <?php wp_nav_menu(['menu_class'=>'align-left show-for-medium menu']); ?>
                    <?php wp_nav_menu(['menu_class'=>'align-center show-for-small-only menu']); ?>
                    <h1 class="quote align-right show-for-medium"><?php the_title(); ?></h1>
                    <div class="short-bio"><?php the_excerpt(); ?></div>
                </div>

                <div class="cell auto">
									<div class="key-visual logo"></div>
								</div>
            </div>
        </header>
    </div>

