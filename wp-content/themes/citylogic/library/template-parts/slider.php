<?php
global $is_logo_container_transparent, $slider_type, $slider_shortcode;

if ( $slider_type == 'plugin' ) :
?>
	<div class="slider-padder">
		<div class="slider-container">
			<?php
			if ( get_theme_mod( 'citylogic-slider-plugin-shortcode', customizer_library_get_default( 'citylogic-slider-plugin-shortcode' ) ) != '' ) {
				echo do_shortcode( esc_html( get_theme_mod( 'citylogic-slider-plugin-shortcode' ) ) );
			}
			?>
	    </div>
    </div>
<?php
elseif ( $slider_type == 'default' ) :
	$side_opacity_classes = array();
	$opacity_classes 	  = array();

	//$translucent_logo_container 	= get_theme_mod( 'citylogic-layout-logo-container-opacity', customizer_library_get_default( 'citylogic-layout-logo-container-opacity' ) ) < 1;
	//$translucent_navigation 		= get_theme_mod( 'citylogic-navigation-menu-opacity', customizer_library_get_default( 'citylogic-navigation-menu-opacity' ) ) < 1;	

	if ( get_theme_mod( 'citylogic-slider-text-overlay-text-shadow', customizer_library_get_default( 'citylogic-slider-text-overlay-text-shadow' ) ) ) {
		$opacity_classes[] = 'text-shadow';
	}

	$slider_categories = get_theme_mod( 'citylogic-slider-categories' );
	
	if ( $slider_categories ) {
        
		$slider_query = new WP_Query( 'cat=' . implode(',', $slider_categories) . '&posts_per_page=-1&orderby=date&order=DESC&id=slider' );
	        
		if ( $slider_query->have_posts() ) :
?>	
			<div class="slider-padder">
				<div class="slider-container default loading">
				
					<div class="controls-container">
						<div class="controls">
							<div class="prev">
								<i class="fa fa-angle-left"></i>
							</div>
							<div class="next">
								<i class="fa fa-angle-right"></i>
							</div>
						</div>
					</div>
				
					<ul class="slider">
				                    
						<?php
						while ( $slider_query->have_posts() ) : $slider_query->the_post();
						?>
				                    
						<li class="slide">
							<?php
							if ( has_post_thumbnail() ) :
								the_post_thumbnail( 'full', array( 'class' => '' ) );
							endif;
							?>
	
							<div class="opacity"></div>
	
				            <?php 
				            $content = trim( get_the_content() );
				            
				            if ( !empty( $content ) ) {
				            ?>
				            <div class="overlay-container">
				            	
								<div class="overlay">
									<div class="opacity <?php echo implode( ' ', $opacity_classes ); ?>">
										<?php
										echo $content;
										?>
									</div>
								</div>
				            	
							</div>
							<?php 
							}
							?>
						</li>
				                    
						<?php
						endwhile;
						?>
				                    
					</ul>
					
					<div class="pagination"></div>
					
				</div>
			</div>
	
<?php
		elseif ( $translucent_logo_container || $translucent_navigation ) :
?>
			<div class="slider-placeholder"></div>
<?php
		endif;
		wp_reset_postdata();
	
	} else {
?>

		<div class="slider-padder">
			<div class="slider-container default loading">
			
				<div class="controls-container">
					<div class="controls">
						<div class="prev">
							<i class="fa fa-angle-left"></i>
						</div>
						<div class="next">
							<i class="fa fa-angle-right"></i>
						</div>
					</div>
				</div>
	                        
	            <ul class="slider">
					<li class="slide">
	                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/slider-default01.jpg" width="1500" height="744" alt="<?php esc_attr_e('Demo Slide One', 'citylogic'); ?>" />
	                    <div class="opacity"></div>
						<div class="overlay-container">
						
		                    <div class="overlay">
		                    	<div class="opacity <?php echo implode( ' ', $opacity_classes ); ?>">
									<?php
	                        		_e( '<h2>Super Adaptable</h2><p>Anything and everything you need</p><p><a href="" class="button">Read More</a></p>', 'citylogic' );
									?>
		                        </div>
		                	</div>
	                    </div>
	                </li>
	                
	                <li class="slide">
	                    <img src="<?php echo get_template_directory_uri(); ?>/library/images/demo/slider-default02.jpg" width="1500" height="744" alt="<?php esc_attr_e('Demo Slide Two', 'citylogic'); ?>" />
						<div class="opacity">
						<div class="overlay-container">
						
							<div class="overlay">
		                    	<div class="opacity <?php echo implode( ' ', $opacity_classes ); ?>">
									<?php
	                        		_e( '<h2>Your Go-to Theme</h2><p>From Out the Box</p><p><a href="" class="button">Read More</a></p>', 'citylogic' );
									?>
		                        </div>
		                    </div>
						</div>
	                </li>
	            </ul>
	            
				<div class="pagination"></div>
				
	        </div>
        </div>

<?php
	}
else :
?>

	<div class="slider-padder">
		<div class="slider-container">
			<?php	
			echo do_shortcode( esc_html( $slider_shortcode ) );
			?>
		</div>
	</div>
<?php
endif;
?>
