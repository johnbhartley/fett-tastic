	<div id="footer-wrap">	<!-- can remove if background won't go full 100% -->
		<div id="footer">
        	
            <!-- content generated with Footbar widget -->
            <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Footer Widgets')) : else : ?>
            	<!-- arbitrary content if no widgets are in the Footer Widget section -->
            <?php endif; ?>
            <div class="clear"></div>	
			<p>&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></p>
		
        </div>
    </div><!-- end footer-wrap -->    
	</div><!-- end page-wrap -->

	<?php wp_footer(); ?>
	
	<!-- Don't forget analytics -->
	
</body>

</html>
