<?php
/**
 * Template Name: Full Split Widgets Page
 *
 * Description: Displays a full-width front page. The front page template provides an optional
 * banner section that allows for highlighting a key message. It can contain up to 2 widget areas,
 * in one or two columns. These widget areas are dynamic so if only one widget is used, it will be
 * displayed in one column. If two are used, then they will be displayed over 2 columns.
 * There are also four front page only widgets displayed just beneath the main content. Like the
 * banner widgets, they will be displayed in anywhere from one to four columns, depending on
 * how many widgets are active.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content row" role="main">
		<div class="col grid_12_of_12">
		
			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; /*/ end have_posts() check 

		</div> <!-- /.col.grid_12_of_12 -->
		
			<div class="col grid_12_of_12"> */ ?>
	
	<section id="horizontal-container">
			<div class="col grid_6_of_12">
				<div id="horiz-left" class="horiz">
					<?php dynamic_sidebar( 'horiz-left' ); ?>
				</div>  <!-- /#horiz-left -->
			</div> <!-- /.col.grid_6_of_12 -->

			<div class="col grid_6_of_12">
				<div id="horiz-right"  class="horiz">
					<?php dynamic_sidebar( 'horiz-right' ); ?>
				</div>  <!-- /#horiz-right -->
			</div> <!-- /.col.grid_6_of_12 -->
	</section> <!--/#horizontal-container -->

	</div><!-- /#primary.site-content.row -->

<?php get_footer(); ?>
