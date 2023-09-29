<?php get_header(); ?>
   
    <section id="main">

        <div class="glm-box">
            
            <div id="content">
            
                <?php the_post(); ?>
                
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <h1 class="entry-title"><?php the_title(); ?></h1>
                        <div class="entry-content">
                            <?php the_content(); ?>
                            <?php wp_link_pages('before=<div class="page-link">' . __( 'Pages:', 'seu-template' ) . '&after=</div>') ?>
                        </div><!– .entry-content –>
                    </div><!– #post-<?php the_ID(); ?> –>  
                
                <?php if ( get_post_custom_values('comments') ) comments_template(); ?>  
                
            </div><!– #content –>

            <?php get_sidebar(); ?>

        </div>

    </section>
 
<?php get_footer(); ?>