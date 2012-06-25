<?php get_header(); ?>

<div id="main-content">

            <div id="page-content">
	    
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                                    <h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
                        
                                    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
				    
                                    <div class="entry">
      						<?php the_post_thumbnail(); ?>
      						<?php the_excerpt(); ?>
                                    </div>
                
                                    <div class="postmetadata">
      						<?php the_tags('Tags: ', ', ', '<br />'); ?>
      						Posted in <?php the_category(', ') ?> | 
      						<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
                                    </div>
                		
                        </div>
            
            <?php endwhile; ?>
        
            <?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>
        
            <?php else : ?>
        
                <h2>The content you have requested is not here. Sorry about that. </h2>
        
            <?php endif; ?>
	    
            
            </div><!-- end page-content -->
        
           <?php get_sidebar(); ?>

</div><!-- end main-content -->

<?php get_footer(); ?>
