    <div class="glm-clear"></div>
        
    <footer id="footer">
        <div class="glm-box">
            <div id="site-info">
                © 2019 Golem Template – Todos os Direitos Reservados
            </div>
        </div>
    <footer>

</div>

<?php wp_footer(); ?>

<style>

<?php if( get_option('glm-site-layout') == "boxed" ){ ?>
#glm-boxed {
    width: <?php echo get_option('glm-site-width'); ?>;
    margin: 0 auto;
    border: 1px solid #f2f2f2;
    border-width: 0 1px;
    background: #FFF;
}

.glm-box {
    width: 100% !important;
    padding: 0 20px;
}
<?php } ?>


<?php if( get_option('glm-site-bg-img')){ ?>
body {
    background-image: url(<?php echo get_option('glm-site-bg-img'); ?>);
    background-size: cover;
    background-position: center;
}
<?php } ?>

<?php if( get_option('glm-site-bg-color')){ ?>
body {
    background-color: <?php echo get_option('glm-site-bg-color'); ?>;
}
<?php } ?>

.glm-header {
    padding: <?php echo get_option('glm-header-pd-top'); ?> <?php echo get_option('glm-header-pd-right'); ?> <?php echo get_option('glm-header-pd-bottom'); ?> <?php echo get_option('glm-header-pd-left'); ?>;
}

#glm-top-bar {
    padding: <?php echo get_option('glm-topbar-pd-top'); ?> <?php echo get_option('glm-topbar-pd-right'); ?> <?php echo get_option('glm-topbar-pd-bottom'); ?> <?php echo get_option('glm-topbar-pd-left'); ?>;
}

/* ========================================== */


@media only screen and (min-device-width : 0px) and (max-width : 960px) {

.glm-menu-full, .glm-menu {
    display: none;
}

}

@media only screen and (min-device-width : 0px) and (max-width : <?php echo get_option('glm-responsive-grid-breakpoint'); ?>px) {


}


@media only screen and (min-device-width : 0px) and (max-width : <?php echo get_option('glm-responsive-header-breakpoint'); ?>px) {

.glm-menu-full ul li {
    width: 100% !important;
    text-align: center;
}


#glm-top-bar .content-right ul li {
    padding-left: 10px;
}

}

@media only screen and (min-device-width : 0px) and (max-width : <?php echo get_option('glm-responsive-content-breakpoint'); ?>px) {

#glm-boxed {
    width: 100% !important;
}

#content {
    float: left;
    width: 100% !important;
    padding-right: 0;
}


}

@media only screen and (min-device-width : 0px) and (max-width : <?php echo get_option('glm-responsive-sidebar-breakpoint'); ?>px) {

.glm-sidebar {
    width: 100% !important;
}

}


</style>

</body>

</html>