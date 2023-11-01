<<<<<<< HEAD
<div class="container-fluid">
    <div class="row">
        <div class="col-md-4">
            <div class="box-category box-xemnhieu">
                <hgroup class="width_common title-box-category">
                    <h2 class="parent-cate active"><a
                                data-itm-source="#vn_source=Home&amp;vn_campaign=Box-XemNhieuNhat&amp;vn_medium=TitleBoxXemNhieuNhat&amp;vn_term=Desktop"
                                title="Xem nhiều" href="/tin-xem-nhieu" class="inner-title" data-itm-added="1">Xem nhiều</a></h2>
                </hgroup>
                <div class="width_common list-top-view">
                    <?php $the_query = new WP_Query( 'posts_per_page=8' ); ?>
                    <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
                        <article class="item-news">
                            <span class="number-top-view"><?php echo $the_query->max_num_comment_pages++ ?></span>
                            <h3 class="title-news"><a href=""><?php the_title(); ?><span class="meta-news"></a>
                            </h3>
                        </article>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div></div>
        <div class="col-md-6"></div>
        <div class="col-md-3"></div>
    </div>
</div>
=======
<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
		the_content();

		wp_link_pages(
			array(
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> 13_20_LePhuongLoc
