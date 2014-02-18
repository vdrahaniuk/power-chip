<?php
    global $theme;
    if (have_posts()) : while (have_posts()) : the_post();
?>

    <div class="post-wrap">
    
        <div <?php post_class('post clearfix'); ?> id="post-<?php the_ID(); ?>">
        
        <h1 class="title"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themater' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
            
          
            
      
               
        </div>
    </div><!-- Post ID <?php the_ID(); ?> -->
                
    <?php endwhile; ?>
    <?php else : ?>

    <div class="post-wrap">
    
        <div class="post">
        
            <div class="entry">

                <p><?php _e('No results were found for the requested archive.','themater'); ?></p>
            
            </div>

            <div id="search-wrap">
                
                <?php get_search_form(); ?>
            
            </div>
            
        </div>
        
    </div>
<?php endif; ?>
    
<?php if (  $wp_query->max_num_pages > 1 ) { ?>

    <div class="navigation clearfix">
        
        <?php
            if(function_exists('wp_pagenavi')) {
                wp_pagenavi();
            } else {
        ?><div class="alignleft"><?php next_posts_link( __( '<span>&laquo;</span> Older posts', 'themater' ) );?></div>
        <div class="alignright"><?php previous_posts_link( __( 'Newer posts <span>&raquo;</span>', 'themater' ) );?></div><?php
        } ?> 
        
    </div><!-- .navigation -->
    
<?php } ?>