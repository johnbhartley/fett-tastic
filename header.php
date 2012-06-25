<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
	<?php if (is_search()) { ?>
	   <meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<?php wp_head(); ?>
    
	<meta name="viewport" content="initial-scale=1.0, width=device-width" /><!-- crucial element for responsiveness -->
	<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon" />
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" /><!-- style.css -->
    
	<script src="<?php bloginfo('template_url'); ?>/js/respond.min.js"></script> <!-- allows for responsiveness in IE6-8 thanks to @scottjehl -->
	<script type="text/javascript">
	jQuery(document).ready(function() {
			jQuery( "#footer > .footbar.widget:nth-child(4n)" ).addClass('last');
			
			// build <select> dropdown
			jQuery("<select />").appendTo("div.menu-main-menu-container");

			//Create deafult option "Go to..."
			jQuery("<option />", {
				"selected": "selected",
				"value": "",
				"text": "Go to..."	
			}).appendTo(".menu-main-menu-container select");

			//Populate
			jQuery(".menu-main-menu-container ul li a").each(function() {
				var el = jQuery(this);
		    		if(el.parents('.menu-main-menu-container ul ul').length) {
		        		jQuery('<option />', {
		            	'value': el.attr('href'),
		          		'text':  '- ' + el.text()
		        	}).appendTo('.menu-main-menu-container select');
		    		} else {
		        		jQuery('<option />', {
		            	'value': el.attr('href'),
		            	'text': el.text()
		        	}).appendTo('.menu-main-menu-container select');
	    		}
			});

			//make links work 
			jQuery(".menu-main-menu-container select").change(function() {
				window.location = jQuery(this).find("option:selected").val();
			});
		});
	</script>

	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	
</head>

<body <?php body_class(); ?>>
	
        <div id="page-wrap">
    		<div id="header-wrap"> <!-- can remove if background won't go full 100% -->
                <div id="header">
                    <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1><!-- default Site Title -->
                    <div class="description"><?php bloginfo('description'); ?></div><!-- default Info Description -->  
                    <?php wp_nav_menu( array('menu' => 'Main Menu' )); ?> <!-- Main Menu, created in Appearance -->
                    <div class="clear"></div> 
                </div>
                	
            </div>    
            

