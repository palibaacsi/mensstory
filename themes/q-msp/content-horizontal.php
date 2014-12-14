<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php  if ( !is_front_page() ) { ?>
		<header class="entry-header">
			<h1 class="entry-title"><?php // the_title();  ?></h1>
			<?php if ( has_post_thumbnail() && !is_search() && !post_password_required() ) { ?>
				<?php the_post_thumbnail( 'post_feature_full_width' ); ?>
			<?php } ?>
		</header>
	<?php } ?>
	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'quark' ),
			'after' => '</div>',
			'link_before' => '<span class="page-numbers">',
			'link_after' => '</span>'
		) ); ?>
	</div><!-- /.entry-content -->
	
		
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

	
	<footer class="entry-meta">
		<?php edit_post_link( esc_html__( 'Edit', 'quark' ) . ' <i class="fa fa-angle-right"></i>', '<div class="edit-link">', '</div>' ); ?>
	</footer><!-- /.entry-meta -->
	
<?php
/*
** Adding back Jetpack Sharing
 */ 
if ( function_exists( 'sharing_display' ) ) {
    sharing_display( '', true );
}
 
if ( class_exists( 'Jetpack_Likes' ) ) {
    $custom_likes = new Jetpack_Likes;
    echo $custom_likes->post_likes( '' );
}
?>
	
</article><!-- /#post -->
