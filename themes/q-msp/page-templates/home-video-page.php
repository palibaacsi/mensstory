<?php
/**
 * Template Name: HomePage w/ Video
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

get_header('video'); ?>

<style>

video#bgvid{
	min-width:100%;
	min-height:100%;
	width:auto;
	height:auto;
	background: url(http://mark.barthmaier.com/wp-content/uploads/sites/7/2012/01/behind-the-counter-The-Suspect.png) no-repeat top center; /* replace **image link** with your own file*/
	background-size:cover;
	 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
}
#maincontentcontainer {
margin-top: -4rem;
}
</style>

<video id="bgvid" autoplay poster="http://mark.barthmaier.com/wp-content/uploads/sites/7/2012/01/behind-the-counter-The-Suspect.png"> <!-- replace **image link** with your own file -->

<? // <source src="http://barthmaier.com//old/mark_no-sound.mp4" type="video/mp4" /> ?>
<source src="http://barthmaier.com//old/mark_no-sound.mp4" type="video/mp4" />

</video>
	<div id="primary" class="site-content row" role="main">
		<div class="col grid_12_of_12">
		

			<?php if ( have_posts() ) : ?>

				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'content', 'page' ); ?>
					<?php comments_template( '', true ); ?>
				<?php endwhile; // end of the loop. ?>

			<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_12_of_12 -->

	</div><!-- /#primary.site-content.row -->
	<?php get_sidebar( 'front' ); ?>

<?php get_footer(); ?>
