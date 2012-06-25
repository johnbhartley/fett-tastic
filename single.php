<?php get_header(); ?>

<div id="main-content">
        
            <div id="page-content">
            
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        
                        <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                            
                                    <h2><?php the_title(); ?></h2>
                                    
                                    <?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>
                        
                                    <div class="entry">
                                        
                                                <?php the_content(); ?>
                                
                                                <?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
                                                
                                                <?php the_tags( 'Tags: ', ', ', ''); ?>
                        
                                    </div>
                        
                        </div>
        
            <?php comments_template(); ?>
        
            <?php endwhile; endif; ?>
            
            </div><!-- end page-content -->
            
            <?php get_sidebar(); ?>

</div><!-- end main-content -->    

<?php get_footer(); ?>