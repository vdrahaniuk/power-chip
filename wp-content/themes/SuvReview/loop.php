<div class="post-wrap">
<?php
    global $theme;
    if (have_posts()) : while (have_posts()) : the_post();
?>

   


    
        <div <?php post_class('post clearfix'); ?> id="post-<?php the_ID(); ?>">
        
            <h3 class="title_mod"><a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'themater' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
            
          
       
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
<hr>
<p style="font-size: 18px; display: block;"> Если Вы не нашли своей марки, скачайте свежий каталог моделей </p>
<a style="font-size: 18px;"  href="/catalog.xls"> Скачать полный каталог </a>
 </div>