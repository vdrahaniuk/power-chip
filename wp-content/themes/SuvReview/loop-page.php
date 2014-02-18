<?php if (have_posts()) while (have_posts()) : the_post(); ?> 
        
    <div class="post-wrap post-wrap-page">
    

	
        <div <?php post_class('post clearfix'); ?> id="post-<?php the_ID(); ?>">
            <h1 class="title"><?php the_title(); ?></h1>

<div class="breadcrumbs">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>	

            <?php
                if(is_user_logged_in())  {
                    ?><div class="postmeta-primary"><span class="meta_edit"><?php edit_post_link(); ?></span></div><?php
                } 
            ?>
            <div class="entry clearfix">
                    
                <?php
                    if(has_post_thumbnail())  {
                        the_post_thumbnail(
                            array(565, 400),
                            array("class" => "alignleft featured_image")
                        );
                    }
                ?>
                <!--  array(300, 225), array("class" => "alignleft featured_image") -->
                <?php
                    the_content(''); 
                    wp_link_pages( array( 'before' => '<p><strong>' . __( 'Pages:', 'themater' ) . '</strong>', 'after' => '</p>' ) );
                ?>

            </div>
            
        </div><!-- Page ID <?php the_ID(); ?> -->
        
    </div><!-- .post-wrap -->
    
    <?php 
        if(comments_open( get_the_ID() ))  {
       #     comments_template('', true); 
        }
    ?>
    
<?php endwhile; ?>