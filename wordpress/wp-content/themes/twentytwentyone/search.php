<?php
<<<<<<< HEAD
=======

>>>>>>> 13_20_LePhuongLoc
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();
<<<<<<< HEAD

if ( have_posts() ) {
	?>
	<header class="page-header alignwide">
		<h1 class="page-title">
			<?php
			printf(
				/* translators: %s: Search term. */
				esc_html__( 'Results for "%s"', 'twentytwentyone' ),
				'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
			);
			?>
		</h1>
	</header><!-- .page-header -->

	<div class="search-result-count default-max-width">
		<?php
		printf(
			esc_html(
				/* translators: %d: The number of search results. */
				_n(
					'We found %d result for your search.',
					'We found %d results for your search.',
					(int) $wp_query->found_posts,
					'twentytwentyone'
				)
			),
			(int) $wp_query->found_posts
		);
		?>
	</div><!-- .search-result-count -->
	<?php
	// Start the Loop.
	while ( have_posts() ) {
		the_post();

		/*
		 * Include the Post-Format-specific template for the content.
		 * If you want to override this in a child theme, then include a file
		 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
		 */
		get_template_part( 'template-parts/content/content-excerpt', get_post_format() );
	} // End the loop.

	// Previous/next page navigation.
	twenty_twenty_one_the_posts_navigation();

	// If no content, include the "No posts found" template.
} else {
	get_template_part( 'template-parts/content/content-none' );
}

get_footer();
=======
?>
<div class="row" style="display: flex;">
	<div class="col-md-3 col-bg">
		<p class="title-tt">Trang Mới Nhất</p>
		<div class="border-tt">
			<br>
		</div>
		<div class='page-class'>
			<?php
			// Lấy danh sách các bài viết
			$args = array(
				'post_type' => 'Page %', // Loại bài viết bạn muốn lấy
				'posts_per_page' => -1, // -1 để lấy tất cả các bài viết
			);
			$query = new WP_Query($args);
			// Kiểm tra xem có bài viết nào không
			if ($query->have_posts()) {
				// Bắt đầu vòng lặp
				while ($query->have_posts()) {
					$query->the_post();
					// Lấy tiêu đề của bài viết
					$title = sprintf('<h4 class="title-class">%s</h4>', get_the_title());
					// Lấy nội dung của bài viết
					$content = sprintf('<div class="content-class">%s</div>', get_post_field('post_content'));
					// Hiển thị tiêu đề và nội dung
					echo $title;
					echo '<hr width="45px;" 
					size="10" style ="
					margin: 0;"> ';
					echo $content;
				}
				// Đặt lại trạng thái của vòng lặp
				wp_reset_postdata();
			} else {
				// Không có bài viết nào được tìm thấy
				echo 'Không có bài viết nào.';
			}
			?>
		</div>
	</div>
	<div class="col-md-9">
		<?php
		if (have_posts()) {
		?>
			<header class="page-header alignwide">
				<h1 class="page-title result-tt">
					<?php
					printf(
						/* translators: %s: Search term. */
						esc_html__('Results for "%s"', 'twentytwentyone'),
						'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
					);
					?>
				</h1>
			</header><!-- .page-header -->

			<div class="search-result-count default-max-width col-md-9 search-css">
				<?php
				printf(
					esc_html(
						/* translators: %d: The number of search results. */
						_n(
							'We found %d result for your search.',
							'We found %d results for your search.',
							(int) $wp_query->found_posts,
							'twentytwentyone'
						)
					),
					(int) $wp_query->found_posts
				);
				?>
			</div><!-- .search-result-count -->
			<?php
			// Start the Loop.
			while (have_posts()) {
				the_post();

				/*
         * Include the Post-Format-specific template for the content.
         * If you want to override this in a child theme, then include a file
         * called content-___.php (where ___ is the Post Format name) and that will be used instead.
         */
				get_template_part('template-parts/content/content-excerpt', get_post_format());
			} // End the loop.

			// Previous/next page navigation.
			twenty_twenty_one_the_posts_navigation();

			// If no content, include the "No posts found" template. 
			?>
	</div>
</div>
<?php
		} else {
			get_template_part('template-parts/content/content-none');
		}

		get_footer();
>>>>>>> 13_20_LePhuongLoc
