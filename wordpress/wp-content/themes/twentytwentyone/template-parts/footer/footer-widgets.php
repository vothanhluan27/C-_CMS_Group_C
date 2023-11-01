<?php
<<<<<<< HEAD

=======
>>>>>>> 8_20_LePhuongLoc
/**
 * Displays the footer widget area.
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

<<<<<<< HEAD
if (is_active_sidebar('sidebar-1')) : ?>

<<<<<<< HEAD
	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<?php dynamic_sidebar( 'sidebar-2' ); ?>
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
		<?php dynamic_sidebar( 'sidebar-4' ); ?>
	</aside><!-- .widget-area -->
=======
	<div class="custom-footer">
		<div class="container">
			<aside class="widget-area">
				<?php dynamic_sidebar('sidebar-1'); ?>
				<!-- social -->
			</aside><!-- .widget-area -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa-brands fa-facebook-f"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa-brands fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa-brands fa-instagram"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa-brands fa-google-plus-g"></i></a></li>
						<li class="list-inline-item"><a href="https://www.fiverr.com/share/qb8D02" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>
			<div class="row pb">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					<p><u><a href="https://www.nationaltransaction.com/">National Transaction Corporation</a></u> is a Registered MSP/ISO of Elavon, Inc. Georgia [a wholly owned subsidiary of U.S. Bancorp, Minneapolis, MN]</p>
					<p class="h6">© All right Reversed.<a class="text-green ml-2" href="https://www.sunlimetech.com" target="_blank">Sunlimetech</a></p>
				</div>
				<hr>
			</div>
		</div>
	</div>
>>>>>>> 3_20_LePhuongLoc

<?php
=======
if ( is_active_sidebar( 'sidebar-1' ) ) : ?>

	<aside class="widget-area">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
	</aside><!-- .widget-area -->

	<?php
>>>>>>> 8_20_LePhuongLoc
endif;
