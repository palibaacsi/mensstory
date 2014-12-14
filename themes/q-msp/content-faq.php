<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<header class="entry-header">
			
			<?php /* quark_posted_on(); ?>
			<?php if ( has_post_thumbnail() && !is_search() ) { ?>
				<a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( esc_html__( 'Permalink to %s', 'quark' ), the_title_attribute( 'echo=0' ) ) ); ?>">
					<?php the_post_thumbnail( 'post_feature_full_width' ); ?>
				</a>
			<?php } */ ?>
		</header> <!-- /.entry-header -->

		<?php if ( is_search() ) { // Only display Excerpts for Search ?>
			<div class="entry-summary">
				<?php the_excerpt(); ?>
			</div> <!-- /.entry-summary -->
		<?php }
		else { ?>
			<div class="entry-content">
			
			
				<?php the_content( wp_kses( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'quark' ), array( 'span' => array( 
					'class' => array() ) ) )
					); ?>

					<h1><?php if( get_field('faqs') ): ?></h1>
					
					<ol class="questions"> 
						<?
						$i=1;
						?>

						<? while( has_sub_field('faqs') ): ?>
	
							<li><a href="#q-<? echo $i++; ?>"><? the_sub_field('question'); ?></a></li>

							<? endwhile; ?>
					</ol>
					<?php endif; // end FAQ check ?>

					<h1><?php if( get_field('faqs') ): ?></h1>
					
					<ol class="answers"> 
						<?
						$i=1;
						?>

						<? while( has_sub_field('faqs') ): ?>
	
							<li>
								<h3><a id="q-<? echo $i++; ?>"><? the_sub_field('question'); ?></a></h3>
								<? the_sub_field('answer'); ?>
								<h5><a href="#top">Back to top</a></h5>
								
							</li>
							
							<? endwhile; ?>
					</ol>
					<?php endif; // end FAQ check ?>

					
				<?php wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'quark' ),
					'after' => '</div>',
					'link_before' => '<span class="page-numbers">',
					'link_after' => '</span>'
				) ); ?>
			</div> <!-- /.entry-content -->
		<?php } ?>

		<footer class="entry-meta">
			<?php if ( is_singular() ) {
				// Only show the tags on the Single Post page
				quark_entry_meta();
			} ?>
			<?php edit_post_link( esc_html__( 'Edit', 'quark' ) . ' <i class="fa fa-angle-right"></i>', '<div class="edit-link">', '</div>' ); ?>
			<?php if ( is_singular() && get_the_author_meta( 'description' ) && is_multi_author() ) {
				// If a user has filled out their description and this is a multi-author blog, show their bio
				get_template_part( 'author-bio' );
			} ?>
		</footer> <!-- /.entry-meta -->
		
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
	</article> <!-- /#post -->
