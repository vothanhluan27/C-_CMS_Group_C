<?php
<<<<<<< HEAD

=======
>>>>>>> 8_20_LePhuongLoc
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
<<<<<<< HEAD
		<?php if (is_singular()) : ?>
			<?php the_title('<h1 class="entry-title default-max-width">', '</h1>'); ?>
		<?php else : ?>
			<?php the_title(sprintf('<h2 class="entry-title default-max-width"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
=======
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
>>>>>>> 8_20_LePhuongLoc
		<?php endif; ?>

		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
		the_content(
			twenty_twenty_one_continue_reading_text()
		);

		wp_link_pages(
			array(
<<<<<<< HEAD
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__('Page %', 'twentytwentyone'),
=======
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
>>>>>>> 8_20_LePhuongLoc
			)
		);

		?>
	</div><!-- .entry-content -->

<<<<<<< HEAD
	<div class="col-md-4 col-xs-9 shortdesc">
		<?php
		get_template_part('template-parts/entry-header');
		?>
		<?php
		if (is_search() || !is_singular() && 'summary' === get_theme_mod('blog_content', 'full')) {
			the_excerpt();
		} else {
			if (is_singular()) {
				the_content(__('Continue Reading', 'twentytwentyone'));
			} else {
				$post = get_post();
				echo substr($post->post_content, 0, 100);
			}
		}
		?>
	</div>
	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
=======
	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> 8_20_LePhuongLoc
