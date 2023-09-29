<?php get_header(); ?>

<div id="container">

    <div id="content">

        <div class="post error404 not-found">

            <h1 class="entry-title"><?php _e( 'Not Found', 'golem' ); ?></h1>
            
            <div class="entry-content">
                <p> <?php _e( 'Apologies, but we were unable to find what you were looking for. Perhaps searching will help.', 'golem' ); ?> </p>
                <?php get_search_form(); ?>
            </div>

        </div>

    </div>

</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>