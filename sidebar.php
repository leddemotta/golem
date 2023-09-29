<aside class="glm-sidebar">

    <?php if ( is_sidebar_active('primary_widget_area') ) { ?>

        <div id="primary" class="widget-area">
            <ul class="xoxo">
                <?php dynamic_sidebar('primary_widget_area'); ?>
            </ul>
        </div>

    <?php } ?>  

</aside>