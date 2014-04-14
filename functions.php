<?php
	
	/* 
	 * Aspire wordpress theme by kerron gordon  
	*/
	
	 // Register custom navigation walker
    require_once('wp_bootstrap_navwalker.php');

    
    //add the css file and the javascrips files 
    function aspire_style_script() {
    	wp_register_style( 'aspire_bootstrap', get_template_directory_uri() . '/css/bootstrap.css', '', '', 'screen' );
		wp_register_style( 'font-awesome', get_template_directory_uri() . '/font-awesome-4.0.3/css/font-awesome.min.css', '', '', 'screen' );
		wp_register_style( 'main-style', get_template_directory_uri() . '/style.css', '', '', 'screen' );
		wp_register_script( 'aspire_bootstrap_js', get_template_directory_uri() . '/js/bootstrap.min.js', array( 'jquery' ), '', TRUE);
		wp_register_script( 'columnizer', get_template_directory_uri() . '/js/jquery.columnizer.js', array( 'jquery' ), '', TRUE);
		wp_register_script( 'main_js', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '', TRUE);
		
		//wp_enqueue_script( 'jquery' );	
			
		wp_enqueue_style( 'aspire_bootstrap' );
		wp_enqueue_style( 'font-awesome' );
		wp_enqueue_style( 'main-style' );
		wp_enqueue_script( 'columnizer' );
		wp_enqueue_script( 'aspire_bootstrap_js' );
		wp_enqueue_script( 'main_js' );
    }

    add_action( 'wp_enqueue_scripts', 'aspire_style_script' );
	
	
	//Make the "read more" link to the post
	function new_excerpt_more( $more ) {
	return ' <div class="post-btn"><a class="read-more btn btn-primary" href="'. get_permalink( get_the_ID() ) . '">' . __('<i class="fa fa-share"></i> Read More', 'your-text-domain') . '</a></div>';
	}
	
	add_filter( 'excerpt_more', 'new_excerpt_more' );
	
	
	//Set the Post Thumbnail Size
	the_post_thumbnail();                  // without parameter -> Thumbnail

	the_post_thumbnail('thumbnail');       // Thumbnail (default 150px x 150px max)
	the_post_thumbnail('medium');          // Medium resolution (default 300px x 300px max)
	the_post_thumbnail('large');           // Large resolution (default 640px x 640px max)
	the_post_thumbnail('full');            // Original image resolution (unmodified)

	the_post_thumbnail( array(100,100) );  // Other resolutions
	
	add_theme_support( 'post-thumbnails' ); 
	
	
	//add menu
	register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'aspire' ),
	) );
	
	function aspire_menu() {
		wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'depth'             => 2,
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse',
        		'container_id'      => 'bs-example-navbar-collapse-1',
                'menu_class'        => 'nav navbar-nav navbar-right',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker())
            );
	}
	
	
	/**
	 * Register our sidebars and widgetized areas.
	 *
	 */
	function aspire_register_sidebar() {

		register_sidebar( array(
			'name' => 'Home right sidebar',
			'id' => 'home_right_1',
			'before_widget' => '<div class="sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'page sidebar right',
			'id' => 'page_sidebar_right',
			'before_widget' => '<div class="sidebar">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'footer1',
			'id' => 'footer1',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'footer2',
			'id' => 'footer2',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'footer3',
			'id' => 'footer3',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'footer4',
			'id' => 'footer4',
			'before_widget' => '<div class="footer-widget">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'home main',
			'id' => 'home_main',
			'before_widget' => '<div class="home-main col-md-4">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'slide',
			'id' => 'slide',
			'before_widget' => '<div class="slide">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
		
		register_sidebar( array(
			'name' => 'contact',
			'id' => 'contact',
			'before_widget' => '<div class="contact col-md-6">',
			'after_widget' => '</div>',
			'before_title' => '<h3 class="rounded">',
			'after_title' => '</h3>',
		) );
	}
	
	add_action( 'widgets_init', 'aspire_register_sidebar' );
	
	
	
	
	
	
	
	