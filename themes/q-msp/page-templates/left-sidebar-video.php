<?php
/**
 * Template Name: Left Sidebar BG Vid
 *
 * Description: Displays a page with a left hand sidebar.
 *
 * @package Quark
 * @since Quark 1.0
 */

get_header('video'); ?>
<style>

video#bgvid{
	position: absolute;
	margin-left: 15rem;
	width: 80%;
	height: auto;
/*	width:auto;
	height:auto;
	min-width:90%;
	min-height:90%;
	background-size:cover;
	 -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover; 
   z-index:-1; */
}
#post-532 > header { display: none; }
#maincontentcontainer { 
	margin-top: -1rem;
}
#secondary-video {
	margin-left: -5rem;
}
</style>
	<div id="primary" class="site-content row" role="main" style="background:none;">

<video id="bgvid" controls preload="auto" > <!-- replace **image link** with your own file autoplay poster="https://api.monosnap.com/image/download?id=9pWqyOuEbFYcMm81gIRoKKOkzMqMhF" -->


<source src="http://wparm.me/markup/_I_Love_Men_Pollet-MSPDebut8_17_08.mp4" type="video/mp4" />

</video>

		<div class="col grid_8_of_12 video">
		
				<?php get_sidebar('video'); ?>
					<?php if ( have_posts() ) : ?>

						<?php // Start the Loop ?>
						<?php while ( have_posts() ) : the_post(); ?>
							<?php get_template_part( 'content', 'video' ); ?>
						<?php endwhile; ?>

						<?php quark_content_nav( 'nav-below' ); ?>

					<?php else : ?>

						<?php get_template_part( 'no-results' ); // Include the template that displays a message that posts cannot be found ?>

					<?php endif; // end have_posts() check ?>

		</div> <!-- /.col.grid_8_of_12.video -->

	</div> <!-- /#primary.site-content.row -->

<?php get_footer(); ?>
