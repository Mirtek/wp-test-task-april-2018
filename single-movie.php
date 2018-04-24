<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<?php
  setup_postdata( $post );
  wp_reset_postdata();

?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<h1><?php the_title(); ?></h1>
				<?php echo get_the_post_thumbnail($post->ID); ?>
				<p><?php echo get_the_content(); ?></p>
				<h2><?php echo get_post_meta($post->ID, '__movie_subtitle', true) ?></h2>
				<h4><?php echo get_post_meta($post->ID, '__movie_category', true) ?></h2>
				<h2><a href="<?php echo get_site_url() ?>/?add-to-cart=<?php echo $post->ID ?>">Buy Movie</a></h2>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php get_sidebar(); ?>
</div><!-- .wrap -->

<?php get_footer();
