
<style type="text/css">

<?php
if ( $citylogic_slider_has_min_width ) {
?>

/* Minimum slider width */
.slider-container.default .slider .slide img {
	min-width: <?php echo $citylogic_slider_min_width; ?>px;
}
	
<?php
}
?>

<?php
if ( $citylogic_header_image_has_min_width ) {
?>

/* Minimum slider width */
.header-image img {
	min-width: <?php echo $citylogic_header_image_min_width; ?>px;
}
	
<?php
}
?>

/* Solidify the navigation menu */
<?php
echo '@media only screen and (max-width: ' .$solidify_breakpoint. 'px) {';
?>
	.header-image-padder,
	.slider-padder,
	.header-image .overlay-container,
	.slider-container.default .slider .slide .overlay-container {
		padding-top: 0 !important;
	}
	.slider-container.default .controls-container {
		margin-top: 0 !important;
	}
}

/* Mobile Menu and other mobile stylings */
<?php
echo '@media only screen and (max-width: ' .$mobile_menu_breakpoint. 'px) {';
?>
    
    /* Mobile Menu Color */
	#main-menu {
		background-color: #03b2c7;
	}

	/* Menu toggle button */
    .header-menu-button {
	    display: block;
	    padding: 8px 10px 8px 10px !important;
		padding: 14px 10px 14px 10px !important;
	    color: #FFF;
	    text-transform: uppercase;
    	text-align: center;
	    cursor: pointer;
	}
	
	.site-header-right .header-menu-button {
		padding: 8px 10px 8px 10px !important;
		margin: 8px 0 9px 0;
	    display: inline-block;
	}
	
	.header-menu-button .fa.fa-bars {
    	font-size: 21px;
    	font-size: 28px;
	}
	
	/* Menu close button */
    .main-menu-close {
        display: block;
    	background-color: rgba(0, 0, 0, 0.2);
    	border-radius: 100%;
        position: absolute;
        top: 15px;
        left: 15px;
        font-size: 28px;
		letter-spacing: 0;
        text-align: center;
        padding: 0 6px 0 10px;
        height: 36px;
    	width: 36px;
        line-height: 32px;
        cursor: pointer;
    	
	    -webkit-transition: all 0.2s ease 0s;
	     -moz-transition: all 0.2s ease 0s;
	      -ms-transition: all 0.2s ease 0s;
	       -o-transition: all 0.2s ease 0s;
	          transition: all 0.2s ease 0s;
	}

	.main-menu-close:hover {
		background-color: rgba(0, 0, 0, 0.3);
	}
	/* 
    .main-menu-close:hover .fa {
    	font-weight: 700 !important;
	}
	*/
	.main-menu-close .fa-angle-left {
        position: relative;
        left: -4px;
    }
	
	/* Remove the rollover functionality from the desktop menu */
    .main-navigation ul {
        display: block;
		visibility: visible !important;
		opacity: 1 !important;
    }
	
	.main-navigation #main-menu.animate {
        -webkit-transition: right 0.4s ease 0s;
        -moz-transition: right 0.4s ease 0s;
        -ms-transition: right 0.4s ease 0s;
        -o-transition: right 0.4s ease 0s;
        transition: right 0.4s ease 0s;
	}
	
    /* Mobile Menu Font Color */
    .main-navigation #main-menu,
	.main-navigation .search-button .fa,
	.menu-dropdown-btn,
    .open-page-item .fa-angle-down,	
    .main-menu-close,
	.main-navigation a,
    .main-navigation li a,
    .main-navigation ul ul a {
        color: #FFFFFF !important;
    }

    .main-navigation #main-menu {
        box-shadow: 1px 0 1px rgba(255, 255, 255, 0.04) inset;
        position: fixed;
        top: 0;
        right: -280px;
        width: 280px;
        max-width: 100%;
        -ms-box-sizing: border-box;
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        padding: 70px 0 30px 0;
        z-index: 100000;
        height: 100%;
        overflow: auto;
    }
    
    .main-navigation .main-navigation-inner {
    	display: block;
    }
	
	.main-navigation .menu > ul .indicator,
	.main-navigation ul.menu .indicator,
	.main-navigation .search-button .indicator {
		display: none;
	}
	
	.main-navigation .search-button {
		display: block !important;
		padding: 0 !important;
		float: none !important;
	}
	
	.main-navigation ul ul {
		left: 0 !important;
		transform: none !important;
		width: auto;
	}
    
	.main-navigation.centered-submenu ul ul {
		-webkit-transform: none;
	}
	
	#main-menu .menu > ul,
    #main-menu ul.menu {
    	float: none;
		display: block;
	}
		
	.main-navigation li {
        display: block;
        float: none !important;
        position: relative;
		padding: 0 !important;
		border: none !important;
    }
	
	.main-navigation .menu > ul > li > a,
	.main-navigation ul.menu > li > a {
        white-space: normal !important;
		box-shadow: none;
		display: block;
        float: none;
        padding: 10px 30px 10px 18px !important;
        font-size: 14px;
        text-align: left;
  	}
    #main-menu li a {
    	border-bottom-color: #FFFFFF;
	}
    #main-menu li a:hover {
    	background-color: rgba(0, 0, 0, 0.2); 
  	}
  	
  	.main-navigation ul ul a {
    	text-transform: none;
		white-space: normal !important;
		text-align: left !important;
  	}

    .main-navigation ul ul li a {
        padding: 6px 30px 6px 30px !important;
        width: auto;
    }
	
    .main-navigation ul ul ul li a {
        padding: 6px 39px 6px 39px !important;
    }
    .main-navigation ul ul ul ul li a {
        padding: 6px 47px 6px 47px !important;
    }
    .main-navigation ul ul ul ul ul li a {
        padding: 6px 55px 6px 55px !important;
    }

    .main-navigation ul ul {
        position: relative !important;
    	box-shadow: none;
        top: 0 !important;
        left: 0 !important;
        float: none !important;
    	background-color: transparent;
        padding: 0;
        margin: 0;
        display: none;
    	border: none !important;
    }
	.main-navigation ul ul ul {
		left: 0 !important;
	}
	.menu-dropdown-btn {
    	display: block;
    }
    .open-page-item > ul.children,
    .open-page-item > ul.sub-menu {
    	display: block !important;
    }
    .open-page-item .fa-angle-down {
    	font-weight: 700 !important;
    }
    
    /* 1st level selected item */
    #main-menu a:hover,
	#main-menu li.current-menu-item > a,
	#main-menu li.current_page_item > a,
	#main-menu li.current-menu-parent > a,
	#main-menu li.current_page_parent > a,
	#main-menu li.current-menu-ancestor > a,
	#main-menu li.current_page_ancestor > a {
		background-color: rgba(0, 0, 0, 0.2) !important;
	}

	/* 2nd level selected item */
	#main-menu ul ul li.current-menu-item > a,
	#main-menu ul ul li.current_page_item > a,
	#main-menu ul ul li.current-menu-parent > a,
	#main-menu ul ul li.current_page_parent > a,
	#main-menu ul ul li.current-menu-ancestor > a,
	#main-menu ul ul li.current_page_ancestor > a {
		background-color: rgba(0, 0, 0, 0.2);
	}
	
	/* 3rd level selected item */
	#main-menu ul ul ul li.current-menu-item > a,
	#main-menu ul ul ul li.current_page_item > a,
	#main-menu ul ul ul li.current-menu-parent > a,
	#main-menu ul ul ul li.current_page_parent > a,
	#main-menu ul ul ul li.current-menu-ancestor > a,
	#main-menu ul ul ul li.current_page_ancestor > a {
		background-color: rgba(0, 0, 0, 0.2);
	}
	
 	.search-slidedown {
		margin-top: 10px;
    	position: relative;
    	top: 0;
    }
    	
    .main-navigation .search-slidedown .search-block {
		left: 18px !important;
		width: 200px;
    	margin-left: 0;
	}
	.main-navigation .search-slidedown .search-block label {
    	display: block;	
    }
    	
	.main-navigation .search-slidedown .search-block .search-field {
    	width: 100%;
	}
    	
	.slider-placeholder {
		display: none;
	}
	
}

</style>
