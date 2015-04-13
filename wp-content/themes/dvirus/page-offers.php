<?php
/**
 * The template for displaying pages
 *
 * Template Name: Offers page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php
			$args = array(
				'posts_per_page'   => 5,
				'category'         => 5,
			);
			$posts_array = get_posts( $args );
			foreach ( $posts_array as $post ) : setup_postdata( $post );
			endforeach;
			wp_reset_postdata();
		?>

		</main><!-- .site-main -->
	</div><!-- .content-area -->

<?php get_footer(); ?>
