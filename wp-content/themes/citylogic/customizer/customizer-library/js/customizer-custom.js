/**
 * CityLogic Customizer Custom Functionality
 *
 */
( function( $ ) {
	
	function citylogic_set_option( id, value ) {
		var api = wp.customize;
		
		var control = api.control.instance( id );
	    control.setting.set( value );
	    return;
	}		
    
    $( window ).load( function() {
    	
    	// Show / Hide Navigation Menu Color setting
        citylogic_toggle_navigation_settings();
        
        $( '#customize-control-citylogic-navigation-menu-alignment select' ).on( 'change', function() {
        	citylogic_toggle_navigation_settings();
        } );
        
        function citylogic_toggle_navigation_settings() {
        	var navigationLayout = $( '#customize-control-citylogic-navigation-menu-alignment select' ).val();
        	
            if ( navigationLayout == 'inline' ) {
            	$( '#customize-control-citylogic-navigation-menu-color' ).hide();
            } else {
            	$( '#customize-control-citylogic-navigation-menu-color' ).show();
            }
        }        
    	
        
    	// Show / Hide slider settings
        //var sliderType = $( '#customize-control-citylogic-slider-type select' ).val();
        citylogic_toggle_slider_settings();
        
        $( '#customize-control-citylogic-slider-type select' ).on( 'change', function() {
        	//sliderType = $( this ).val();
        	citylogic_toggle_slider_settings();
        } );
        
        function citylogic_toggle_slider_settings() {
        	var sliderType = $( '#customize-control-citylogic-slider-type select' ).val();
        	
            if ( sliderType == 'citylogic-slider-default' ) {
                $( '#customize-control-citylogic-slider-categories' ).show();
                $( '#customize-control-citylogic-slider-text-overlay-text-shadow' ).show();
                
                // Responsive settings
                $( '#customize-control-citylogic-slider-has-min-width' ).show();

            	citylogic_toggle_slider_min_width();
                
                $( '#customize-control-citylogic-slider-plugin-shortcode' ).hide();
                
            } else if ( sliderType == 'citylogic-slider-plugin' ) {
                $( '#customize-control-citylogic-slider-categories' ).hide();
                $( '#customize-control-citylogic-slider-text-overlay-text-shadow' ).hide();                
                
                // Responsive settings
                $( '#customize-control-citylogic-slider-has-min-width' ).hide();
                $( '#customize-control-citylogic-slider-min-width' ).hide();
                
                // Slideshow settings
                $( '#customize-control-citylogic-slider-transition-speed' ).hide();
                
                $( '#customize-control-citylogic-slider-plugin-shortcode' ).show();
                
            } else {
	            $( '#customize-control-citylogic-slider-categories' ).hide();
                $( '#customize-control-citylogic-slider-text-overlay-text-shadow' ).hide();                
                
                // Responsive settings
                $( '#customize-control-citylogic-slider-has-min-width' ).hide();
                $( '#customize-control-citylogic-slider-min-width' ).hide();
                
                // Slideshow settings
                $( '#customize-control-citylogic-slider-transition-speed' ).hide();
                
                $( '#customize-control-citylogic-slider-plugin-shortcode' ).hide();
                
            }
        }
    	
        // Show / hide slider min width
        $( '#customize-control-citylogic-slider-has-min-width input' ).on( 'change', function() {
        	citylogic_toggle_slider_min_width();
        } );
        
        function citylogic_toggle_slider_min_width() {
        	if ( $( '#customize-control-citylogic-slider-has-min-width input' ).prop('checked') && $( '#customize-control-citylogic-slider-has-min-width input' ).is(':visible') ) {
        		$( '#customize-control-citylogic-slider-min-width' ).show();
        	} else {
        		$( '#customize-control-citylogic-slider-min-width' ).hide();
        	}
        }        

        // Show / hide header image min width
        citylogic_toggle_header_image_min_width();
        
        $( '#customize-control-citylogic-header-image-has-min-width input' ).on( 'change', function() {
        	citylogic_toggle_header_image_min_width();
        } );
        
        function citylogic_toggle_header_image_min_width() {
        	if ( $( '#customize-control-citylogic-header-image-has-min-width input' ).prop('checked') && $( '#customize-control-citylogic-header-image-has-min-width input' ).is(':visible') ) {
        		$( '#customize-control-citylogic-header-image-min-width' ).show();
        	} else {
        		$( '#customize-control-citylogic-header-image-min-width' ).hide();
        	}
        }        
        
        
        // Show / hide blog archive options
        //var blogArchiveLayout = $( '#customize-control-citylogic-blog-archive-layout select' ).val();
        citylogic_toggle_blog_archive_settings();
        
        $( '#customize-control-citylogic-blog-archive-layout select' ).on( 'change', function() {
        	//blogArchiveLayout = $( this ).val();
        	citylogic_toggle_blog_archive_settings();
        } );
        
        function citylogic_toggle_blog_archive_settings() {
        	var blogArchiveLayout = $( '#customize-control-citylogic-blog-archive-layout select' ).val();
        	
            if ( blogArchiveLayout == 'citylogic-blog-archive-layout-full' ) {
                $( '#customize-control-citylogic-blog-excerpt-length' ).hide();
                $( '#customize-control-citylogic-blog-read-more-text' ).hide();
                
            } else if ( blogArchiveLayout == 'citylogic-blog-archive-layout-excerpt' ) {
                $( '#customize-control-citylogic-blog-excerpt-length' ).show();
                $( '#customize-control-citylogic-blog-read-more-text' ).show();
                
            }
        }            
        
    } );
    
} )( jQuery );