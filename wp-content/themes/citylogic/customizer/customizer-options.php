<?php
/**
 * Defines customizer options
 *
 * @package Customizer Library Demo
 */

function citylogic_customizer_library_options() {
	
	// Theme defaults
	
	// Site Logo Area
	$header_color = '#FFFFFF';
	$header_solid_font_color = '#5A5A5A';
	$header_transparent_font_color = '#FFFFFF';
	
	// Navigation Menu
	$navigation_menu_color = '#F1F1F0';
	$navigation_menu_solid_font_color = '#5A5A5A';
	$navigation_menu_transparent_font_color = '#FFFFFF';
	
	$background_color = '#FFFFFF';
	$primary_color = '#03b2c7';
	$secondary_color = '#278b9e';
	$link_color = '#788F98';
	$link_rollover_color = '#278b9e';

	$footer_color = '#F4F4F4';

	// Fonts
	$site_title_font_color = '#03b2c7';
    $body_font_color = '#5A5A5A';
    $heading_font_color = '#5A5A5A';

	// Stores all the controls that will be added
	$options = array();

	// Stores all the sections to be added
	$sections = array();

	// Stores all the panels to be added
	$panels = array();
	
	// Adds the sections to the $options array
	$options['sections'] = $sections;
	
	$dividerCount = 0;
	
	// Site Identity
	$section = 'title_tagline';
	
	$sections[] = array(
		'id' => $section,
		'title' => __( 'Site Identity', 'citylogic' ),
		'priority' => '25'
	);
	
	if ( ! function_exists( 'has_custom_logo' ) ) {
		$options['citylogic-logo'] = array(
			'id' => 'citylogic-logo',
			'label'   => __( 'Logo', 'citylogic' ),
			'section' => $section,
			'type'    => 'image'
		);
	}

	
    // Colors Settings
    $panel = 'citylogic-colors';
    
    $panels[] = array(
    	'id' => $panel,
    	'title' => __( 'Colors', 'citylogic' ),
    	'priority' => '30'
    );
	
    	// General Settings - Sub-section
	    $section = 'citylogic-general-colors';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'General', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );
		
		$options['citylogic-background-color'] = array(
			'id' => 'citylogic-background-color',
			'label'   => __( 'Background Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $background_color
		);

		$options['citylogic-primary-color'] = array(
			'id' => 'citylogic-primary-color',
			'label'   => __( 'Primary Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $primary_color
		);	    

		$options['citylogic-secondary-color'] = array(
			'id' => 'citylogic-secondary-color',
			'label'   => __( 'Secondary Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $secondary_color
		);
		
    	// Site Logo Area - Sub-section
	    $section = 'citylogic-site-logo-area-colors';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'Site Logo Area', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );
		
		$options['citylogic-header-color'] = array(
			'id' => 'citylogic-header-color',
			'label'   => __( 'Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $header_color
		);
	    
	    $options['citylogic-site-title-font-color'] = array(
	    	'id' => 'citylogic-site-title-font-color',
	    	'label'   => __( 'Site Title Color', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'color',
	    	'default' => $site_title_font_color
	    );
		
	    $options['citylogic-header-solid-font-color'] = array(
	    	'id' => 'citylogic-header-solid-font-color',
	    	'label'   => __( 'Solid - Font Color', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'color',
	    	'default' => $header_solid_font_color,
	    	'description' => __( 'This is the color that the text will be when the site logo area is solid', 'citylogic' )
	    );
	    
	    $options['citylogic-header-transparent-font-color'] = array(
	    	'id' => 'citylogic-header-transparent-font-color',
	    	'label'   => __( 'Transparent - Font Color', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'color',
	    	'default' => $header_transparent_font_color,
	    	'description' => __( 'This is the color that the text will be when the site logo area is transparent', 'citylogic' )
	    );
		
    	// Navigation Menu - Sub-section
	    $section = 'citylogic-navigation-menu-colors';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'Navigation Menu', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );
	    
		$options['citylogic-navigation-menu-color'] = array(
			'id' => 'citylogic-navigation-menu-color',
			'label'   => __( 'Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $navigation_menu_color
		);
		
	    $options['citylogic-navigation-menu-solid-font-color'] = array(
	    	'id' => 'citylogic-navigation-menu-solid-font-color',
	    	'label'   => __( 'Solid - Font Color', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'color',
	    	'default' => $navigation_menu_solid_font_color,
	    	'description' => __( 'This is the color that the text will be when the navigation menu is solid', 'citylogic' )
	    );
	    
	    $options['citylogic-navigation-menu-transparent-font-color'] = array(
	    	'id' => 'citylogic-navigation-menu-transparent-font-color',
	    	'label'   => __( 'Transparent - Font Color', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'color',
	    	'default' => $navigation_menu_transparent_font_color,
	    	'description' => __( 'This is the color that the text will be when the navigation menu is transparent', 'citylogic' )
	    );

    	// Page Content - Sub-section
	    $section = 'citylogic-page-content-colors';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'Page Content', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );
	    
	    $options['citylogic-heading-font-color'] = array(
	    	'id' => 'citylogic-heading-font-color',
	    	'label'   => __( 'Heading Color', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'color',
	    	'default' => $heading_font_color
	    );
	    
	    $options['citylogic-body-font-color'] = array(
	    	'id' => 'citylogic-body-font-color',
	    	'label'   => __( 'Body Text Color', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'color',
	    	'default' => $body_font_color
	    );
	    
		$options['citylogic-link-color'] = array(
			'id' => 'citylogic-link-color',
			'label'   => __( 'Link Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $link_color
		);
		
		$options['citylogic-link-rollover-color'] = array(
			'id' => 'citylogic-link-rollover-color',
			'label'   => __( 'Link Rollover Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $link_rollover_color
		);
	    
    	// Footer - Sub-section
	    $section = 'citylogic-footer-colors';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'Footer', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );
	    
		$options['citylogic-footer-color'] = array(
			'id' => 'citylogic-footer-color',
			'label'   => __( 'Color', 'citylogic' ),
			'section' => $section,
			'type'    => 'color',
			'default' => $footer_color
		);
		
		
    // Header Settings
    $panel = 'citylogic-header';
    
    $panels[] = array(
    	'id' => $panel,
    	'title' => __( 'Header', 'citylogic' ),
    	'priority' => '35'
    );
	    
		// Site Logo Area - Sub-section
	    $section = 'citylogic-header-site-logo-area';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'Site Logo Area', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );

	    $options['citylogic-header-shop-links'] = array(
	    	'id' => 'citylogic-header-shop-links',
	    	'label'   => __( 'Shop Links', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'checkbox',
	    	'default' => 1,
			'description' => __( 'Display the My Account and Checkout links when WooCommerce is active.', 'citylogic' )
	    );
	    
	    
	    //  Navigation Menu - Sub-section
	    $section = 'citylogic-header-navigation-menu';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'Navigation Menu', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );
    
	    $choices = array(
	    	'left-aligned' => 'Left aligned',
	    	'inline' => 'Inline'
	    );
	    $options['citylogic-navigation-menu-alignment'] = array(
	    	'id' => 'citylogic-navigation-menu-alignment',
	    	'label'   => __( 'Alignment', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'select',
	    	'choices' => $choices,
	    	'default' => 'inline'
	    );
	    
		
		// Global Settings - Sub-section
	    $section = 'citylogic-header-text';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'Header Text', 'citylogic' ),
	    	'priority' => '35',
	    	'panel' => $panel
	    );

	    $options['citylogic-header-info-text-one'] = array(
	    	'id' => 'citylogic-header-info-text-one',
	    	'label'   => __( 'Info Text', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'text',
	    	'default' => __( 'Call Us: 555-CITYLOGIC', 'citylogic' )
	    );
	    
	   
    // Social Settings
    $section = 'citylogic-social';
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Social Media Links', 'citylogic' ),
    	'priority' => '35'
    );
    
    $options['citylogic-social-right-aligned-buttons'] = array(
    	'id' => 'citylogic-social-right-aligned-buttons',
    	'label'   => __( 'Show right aligned social media buttons', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 1
    );
    
    $options['citylogic-social-email'] = array(
    	'id' => 'citylogic-social-email',
    	'label'   => __( 'Email Address', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    $options['citylogic-social-skype'] = array(
    	'id' => 'citylogic-social-skype',
    	'label'   => __( 'Skype Name', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    $options['citylogic-social-tumblr'] = array(
    	'id' => 'citylogic-social-tumblr',
    	'label'   => __( 'Tumblr', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    $options['citylogic-social-flickr'] = array(
    	'id' => 'citylogic-social-flickr',
    	'label'   => __( 'Flickr', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text'
    );
    
    
    // Search Settings
    $section = 'citylogic-search';
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Search', 'citylogic' ),
    	'priority' => '35'
    );
    
    $options['citylogic-navigation-menu-search-button'] = array(
    	'id' => 'citylogic-navigation-menu-search-button',
    	'label'   => __( 'Show Search in the Navigation Menu', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 1
    );

    $options['citylogic-search-placeholder-text'] = array(
    	'id' => 'citylogic-search-placeholder-text',
    	'label'   => __( 'Default Search Field Text', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => __( 'Search...', 'citylogic' )
    );
    
    $options['citylogic-website-text-no-search-results-heading'] = array(
    	'id' => 'citylogic-website-text-no-search-results-heading',
    	'label'   => __( 'No Search Results Heading', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text',
		'default' => __( 'Nothing Found!', 'citylogic' )
    );
    $options['citylogic-website-text-no-search-results-text'] = array(
        'id' => 'citylogic-website-text-no-search-results-text',
        'label'   => __( 'No Search Results Message', 'citylogic' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'citylogic' )
    );
    
    
    // Slider Settings
    
    $section = 'citylogic-slider';
	
    $sections[] = array(
        'id' => $section,
        'title' => __( 'Slider', 'citylogic' ),
        'priority' => '35'
    );
    
    $choices = array(
        'citylogic-slider-default' => 'Default Slider',
        'citylogic-slider-plugin' => 'Slider Plugin',
        'citylogic-no-slider' => 'None'
    );
    $options['citylogic-slider-type'] = array(
        'id' => 'citylogic-slider-type',
        'label'   => __( 'Slider', 'citylogic' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
    	'default' => 'citylogic-no-slider'
    );
    
    $options['citylogic-slider-categories'] = array(
    	'id' => 'citylogic-slider-categories',
    	'label'   => __( 'Post Categories', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'dropdown-categories',
    	'description' => __( 'Select the categories of the posts you want to display in the slider. The featured image will be the slide image and the post content will display over it. Hold down the Ctrl (windows) / Command (Mac) button to select multiple categories.', 'citylogic' )
    );
    
    $options['citylogic-slider-overlay-opacity'] = array(
    	'id' => 'citylogic-slider-overlay-opacity',
    	'label'   => __( 'Overlay Opacity', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'range',
    	'default' => 0.3,
    	'input_attrs' => array(
    		'min'   => 0,
    		'max'   => 1,
    		'step'  => 0.1,
    		'style' => 'color: #000000'
   		)
    );
    
	$options['citylogic-slider-text-overlay-text-shadow'] = array(
		'id' => 'citylogic-slider-text-overlay-text-shadow',
		'label'   => __( 'Display a drop shadow on the text overlay text', 'citylogic' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0
	);
            
    $options['citylogic-slider-has-min-width'] = array(
    	'id' => 'citylogic-slider-has-min-width',
    	'label'   => __( 'Slider image has a minimum width', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 0
    );
    
    $options['citylogic-slider-min-width'] = array(
    	'id' => 'citylogic-slider-min-width',
    	'label'   => __( 'Minimum Width', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'pixels',
    	'default' => 600
    );
    	
    $options['citylogic-slider-transition-speed'] = array(
    	'id' => 'citylogic-slider-transition-speed',
    	'label'   => __( 'Transition Speed', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'milliseconds',
    	'default' => 450,
    	'description' => __( 'The speed it takes to transition between slides in milliseconds. 1000 milliseconds equals 1 second.', 'citylogic' )
    );
    
    $options['citylogic-slider-plugin-shortcode'] = array(
    	'id' => 'citylogic-slider-plugin-shortcode',
    	'label'   => __( 'Slider Shortcode', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text',
    	'description' => __( 'Enter the shortcode given by the slider plugin you\'re using.', 'citylogic' )
    );
    
    
    // Header Media
    $section = 'header_image';
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Header Image', 'citylogic' ),
    	'priority' => '35'
    );
    
    $options['citylogic-header-image-overlay-opacity'] = array(
    	'id' => 'citylogic-header-image-overlay-opacity',
    	'label'   => __( 'Overlay Opacity', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'range',
    	'default' => 0,
    	'input_attrs' => array(
    		'min'   => 0,
    		'max'   => 1,
    		'step'  => 0.1,
    		'style' => 'color: #000000'
   		)
    );    
    
    $options['citylogic-header-image-text'] = array(
    	'id' => 'citylogic-header-image-text',
    	'label'   => __( 'Text', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'textarea',
    	'description' => esc_html( __( 'Use <h2></h2> tags around heading text and <p></p> tags around body text.', 'citylogic' ) )
    );
    
	$options['citylogic-header-image-text-overlay-text-shadow'] = array(
		'id' => 'citylogic-header-image-text-overlay-text-shadow',
		'label'   => __( 'Display a drop shadow on the text overlay text', 'citylogic' ),
		'section' => $section,
		'type'    => 'checkbox',
		'default' => 0
	);
        
    $options['citylogic-header-image-has-min-width'] = array(
    	'id' => 'citylogic-header-image-has-min-width',
    	'label'   => __( 'Header image has a minimum width', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'checkbox',
    	'default' => 0
    );
    
    $options['citylogic-header-image-min-width'] = array(
    	'id' => 'citylogic-header-image-min-width',
    	'label'   => __( 'Minimum Width', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'pixels',
    	'default' => 600
    );

	
	// WooCommerce
	if ( citylogic_is_woocommerce_activated() ) {
	    $section = 'woocommerce';
	    
	    $sections[] = array(
	    	'id' => $section,
	    	'title' => __( 'WooCommerce', 'citylogic' ),
	    	'priority' => '35'
	    );
	    
	    $options['citylogic-layout-woocommerce-shop-full-width'] = array(
	    	'id' => 'citylogic-layout-woocommerce-shop-full-width',
	    	'label'   => __( 'Full width WooCommerce Shop page', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'checkbox',
	    	'default' => 0
	    );
	    
	    $options['citylogic-woocommerce-breadcrumbs'] = array(
	    	'id' => 'citylogic-woocommerce-breadcrumbs',
	    	'label'   => __( 'Display breadcrumbs', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'checkbox',
	    	'default' => 0
	    );
	    
	    $options['citylogic-woocommerce-product-image-zoom'] = array(
	    	'id' => 'citylogic-woocommerce-product-image-zoom',
	    	'label'   => __( 'Enable zoom on product image', 'citylogic' ),
	    	'section' => $section,
	    	'type'    => 'checkbox',
	    	'default' => 1
	    );    
	}
	
   
    // Fonts Settings
    $section = 'citylogic-fonts';
    $font_choices = customizer_library_get_font_choices();
    
    $sections[] = array(
    	'id' => $section,
    	'title' => __( 'Fonts', 'citylogic' ),
    	'priority' => '25'
    );

    $options['citylogic-site-title-font'] = array(
    	'id' => 'citylogic-site-title-font',
    	'label'   => __( 'Site Title', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $font_choices,
    	'default' => 'Montserrat'
    );
    
    $options['citylogic-navigation-menu-font'] = array(
    	'id' => 'citylogic-navigation-menu-font',
    	'label'   => __( 'Navigation Menu', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $font_choices,
    	'default' => 'Montserrat'
    );
    
    $options['citylogic-heading-font'] = array(
    	'id' => 'citylogic-heading-font',
    	'label'   => __( 'Heading', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $font_choices,
    	'default' => 'Montserrat'
    );
    
    $options['citylogic-body-font'] = array(
    	'id' => 'citylogic-body-font',
    	'label'   => __( 'Body Text', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'select',
    	'choices' => $font_choices,
    	'default' => 'Open Sans'
    );

    
    // Blog Settings
    $section = 'citylogic-blog';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Blog', 'citylogic' ),
        'priority' => '50'
    );
    
    $choices = array(
		'citylogic-blog-archive-layout-full' => 'Full Post',
		'citylogic-blog-archive-layout-excerpt' => 'Post Excerpt'
    );
    $options['citylogic-blog-archive-layout'] = array(
        'id' => 'citylogic-blog-archive-layout',
        'label'   => __( 'Archive Layout', 'citylogic' ),
        'section' => $section,
        'type'    => 'select',
        'choices' => $choices,
        'default' => 'citylogic-blog-archive-layout-full'
    );
    
    $options['citylogic-blog-excerpt-length'] = array(
    	'id' => 'citylogic-blog-excerpt-length',
    	'label'   => __( 'Excerpt Length', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => 55
    );
    
    $options['citylogic-blog-read-more-text'] = array(
    	'id' => 'citylogic-blog-read-more-text',
    	'label'   => __( 'Read More Text', 'citylogic' ),
    	'section' => $section,
    	'type'    => 'text',
    	'default' => __( 'READ MORE', 'citylogic' )
    );
    
    
    // website Text Settings
    $section = 'citylogic-website-text';

    $sections[] = array(
        'id' => $section,
        'title' => __( 'Website Text', 'citylogic' ),
        'priority' => '50'
    );
    $options['citylogic-website-text-404-page-heading'] = array(
        'id' => 'citylogic-website-text-404-page-heading',
        'label'   => __( '404 Page Heading', 'citylogic' ),
        'section' => $section,
        'type'    => 'text',
        'default' => __( '404!', 'citylogic' )
    );
    $options['citylogic-website-text-404-page-text'] = array(
        'id' => 'citylogic-website-text-404-page-text',
        'label'   => __( '404 Page Message', 'citylogic' ),
        'section' => $section,
        'type'    => 'textarea',
        'default' => __( 'The page you were looking for cannot be found!', 'citylogic' )
    );
    
    
	// Adds the sections to the $options array
	$options['sections'] = $sections;

	// Adds the panels to the $options array
	$options['panels'] = $panels;
	
	$customizer_library = Customizer_Library::Instance();
	$customizer_library->add_options( $options );

	// To delete custom mods use: customizer_library_remove_theme_mods();

}
add_action( 'init', 'citylogic_customizer_library_options' );
