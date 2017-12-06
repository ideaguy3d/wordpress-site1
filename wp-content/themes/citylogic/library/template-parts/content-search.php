<?php
/**
 * The template part for displaying results in search pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package CityLogic
 */

$classes = 'blog-post-side-layout ';
if ( !has_post_thumbnail() ) {
	$classes = 'post-no-img ';
}
?>
<article id="post-<?php the_ID(); ?>" <?php post_class( $classes ); ?>>
    
    <?php
	if ( has_post_thumbnail() ) {
	    $thumbnail_id = get_post_thumbnail_id($post->ID);
	    $args = array(
			'p' => $thumbnail_id,
			'post_type' => 'attachment'
	    );
	    $thumbnail = get_posts( $args );
		$thumbnail_image = wp_get_attachment_image_src( $thumbnail_id, 'citylogic_blog_img_side' );	    
	?>
    <div class="post-loop-images">
        
        <div class="post-loop-images-carousel-wrapper loading">
            <div class="post-loop-images-carousel">	
				<div>
					<img src="<?php echo $thumbnail_image[0]; ?>" alt="<?php echo $thumbnail[0]->post_title; ?>" />
				</div>
            </div>
            
        </div>
        
    </div>
    <?php 
	}
    ?>		
    
    <div class="post-loop-content">
    
    	<header class="entry-header">
    		<?php
    		the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
			?>

    		<?php if ( 'post' == get_post_type() ) : ?>
    		<div class="entry-meta">
    			<?php citylogic_posted_on(); ?>
    		</div><!-- .entry-meta -->
    		<?php endif; ?>
    	</header><!-- .entry-header -->

    	<div class="entry-content">
    		<?php
				if ( get_theme_mod( 'citylogic-blog-archive-layout', 'citylogic-blog-archive-layout-full' ) == 'citylogic-blog-archive-layout-full' ) :
					the_content( sprintf(
						/* translators: %s: Name of current post. */
						wp_kses( __( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'citylogic' ), array( 'span' => array( 'class' => array() ) ) ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					) );
				else :
	    			/* translators: %s: Name of current post */
	                the_excerpt();
				endif;
    		?>

    		<?php
    			wp_link_pages( array(
    				'before' => '<div class="page-links">' . __( 'Pages:', 'citylogic' ),
    				'after'  => '</div>',
    			) );
    		?>
    	</div><!-- .entry-content -->

    	<footer class="entry-footer">
    		<?php citylogic_entry_footer(); ?>
    	</footer><!-- .entry-footer -->
    
    </div>
    
    <div class="clearboth"></div>
</article><!-- #post-## -->