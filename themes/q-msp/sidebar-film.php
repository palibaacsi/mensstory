<?php
/**
 * The Sidebar containing the main widget areas.
 *
 * @package Quark
 * @since Quark 1.0
 */
?>
	<div class="col grid_4_of_12 video">

		<div id="secondary" class="widget-area" role="complementary">
			<?php
			do_action( 'before_sidebar' );
			
                if ( is_single() && get_post_meta( $post->ID, 'Unique Sidebar Content', true ) ) :
                        echo get_post_meta( $post->ID, 'Unique Sidebar Content', true );
                endif;
                
                ?>
        </div><!-- #secondary -->
<?php // endif; ?>

	</div> <!-- /.col.grid_4_of_12 -->
