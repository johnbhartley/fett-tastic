<?php
	
      // Add RSS links to <head> section
      automatic_feed_links();
      
      // Load jQuery
      if ( !is_admin() ) {
	    wp_deregister_script('jquery');
	    wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"), false);
	    wp_enqueue_script('jquery');
      }
      
      
      // register Custom Sidbear ... use get_sidebar() to display
      if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	    'name' => 'Sidebar Widgets',
	    'id'   => 'sidebar-widgets',
	    'description'   => 'These is widgets for the sidebar.',
	    'before_widget' => '<div id="%1$s" class="widget %2$s">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h2>',
	    'after_title'   => '</h2>'
	    ));
      }
      
      // register Footbar ... use dynamic_sidebar('Footbar') to display
      if (function_exists('register_sidebar')) {
	    register_sidebar(array(
	    'name' => 'Footer Widgets',
	    'id'   => 'footbar',
	    'description'   => 'These are widgets for the sidebar.',
	    'before_widget' => '<div id="%1$s" class="widget footbar">',
	    'after_widget'  => '</div>',
	    'before_title'  => '<h2>',
	    'after_title'   => '</h2>'
	    ));
      }

      if ( function_exists( 'add_theme_support' ) ) { 
	    add_theme_support( 'post-thumbnails' ); 
      }
      
      // custom excerpt length
      function custom_excerpt_length( $length ) {
	    return 75;
      }
      
      add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
      
      
      // change what is said at the end of the excerpt
      function new_excerpt_more($more) {
	    global $post;
	    return ' <a href="'. get_permalink($post->ID) . '">Read more...</a>';
      }
      
      add_filter('excerpt_more', 'new_excerpt_more');

      //no p tags around images
      	function filter_ptags_on_images($content){
		   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
		}

		add_filter('the_content', 'filter_ptags_on_images');

		// add ie conditional html5 shim to header
		function add_ie_html5_shim () {
		    echo '<!--[if lt IE 9]>';
		    echo '<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>';
		    echo '<![endif]-->';
		}
		add_action('wp_head', 'add_ie_html5_shim');

?>