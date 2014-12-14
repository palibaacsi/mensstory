<?php
/**
 * Template Name: Page w/ Video
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header('video'); ?>

<style>

video#bgvid{
	position: absolute;
	min-width:100%;
	min-height:100%;
	width:auto;
	height:auto;
	background-size:cover;
	 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
   z-index:-1;
}
#maincontentcontainer {
margin-top: -4rem;
}

</style>

<video id="bgvid" autoplay poster="http://mark.barthmaier.com/wp-content/uploads/sites/7/2012/01/behind-the-counter-The-Suspect.png"> <!-- replace **image link** with your own file -->

<? // <source src="http://barthmaier.com//old/mark_no-sound.mp4" type="video/mp4" /> ?>
<source src="http://av.vimeo.com/30392/365/30571879.mp4" type="video/mp4" />

</video>
	<div id="primary" class="site-content row" role="main">

		<div class="col grid_8_of_12">

			<?php if ( have_posts() ) : ?>

				<?php // Start the Loop ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
				<?php endwhile; ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_8_of_12 -->
		<?php get_sidebar(); ?>

	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
