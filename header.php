<!doctype html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>

<head profile="http://gmpg.org/xfn/11">
	
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	
	<title>
	<?php
	if ( is_single() ) { single_post_title(); }
	elseif ( is_home() || is_front_page() ) { bloginfo('name'); print ' - '; bloginfo('description'); get_page_number(); }
	elseif ( is_page() ) { single_post_title(''); }
	elseif ( is_search() ) { bloginfo('name'); print ' - Search results for ' . wp_specialchars($s); get_page_number(); }
	elseif ( is_404() ) { bloginfo('name'); print ' - Not Found'; }
	else { bloginfo('name'); wp_title('-'); get_page_number(); }
	?>
	</title>
	
	<meta name="description" content="#" />
	
	<!-- DEFAULT METAS -->
	<meta http-equiv="content-type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
	
    <!-- LIBS DEFAULT -->
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" />
	<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" title="<?php printf( __( '%s latest posts', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('comments_rss2_url') ?>" title="<?php printf( __( '%s latest comments', 'your-theme' ), wp_specialchars( get_bloginfo('name'), 1 ) ); ?>" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	
    <!-- CUSTOM LIBS -->
    <script src="https://kit.fontawesome.com/14e0534219.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	
</head>
	
<body <?php body_class( 'golem' ); ?>>

<div id="glm-<?php echo get_option('glm-site-layout'); ?>">

    <?php if( get_option('glm-header-layout') == "ghcode" ) { ?>

        <?php eval( "?> " .get_option('glm-header-code'). " <?php " ); ?>
    
    <?php } else { ?>
    
        <?php if( get_option('glm-header-layout') == "gh2" || get_option('glm-header-layout') == "gh3" ) { ?>

        <div id="glm-top-bar" style="backgrounds-color: <?php echo get_option('glm-topbar-bg-color'); ?>">
            <div class="glm-box <?php echo get_option('glm-header-width'); ?>">
                <span class="content-left">
                    <ul class="glm-socials">
                        <li> <a href="#"> <i class="fab fa-facebook-f"></i> </a> </li>  
                        <li> <a href="#"> <i class="fab fa-instagram"></i> </a> </li>   
                        <li> <a href="#"> <i class="fab fa-twitter"></i> </a> </li> 
                    </ul>
                </span>
                <span class="content-right">
                    <?php wp_nav_menu( array( 'theme_location' => 'glm-top-menu', 'container_class' => 'glm-top-menu' ) ); ?>
                </span>
            </div>
        </div>

        <?php } ?>
            
        <?php if( get_option('glm-header-layout') == "gh1" || get_option('glm-header-layout') == "gh2" || get_option('glm-header-layout') == "gh3" || get_option('glm-header-layout') == "gh4" ) { ?>
        <header id="header">
            <div class="glm-header" style="background-color: <?php echo get_option('glm-header-bg-color'); ?>; border-color: <?php echo get_option('glm-header-border-color'); ?>; background-image: url(<?php echo get_option('glm-header-bg'); ?>);">
                <div class="glm-box <?php echo get_option('glm-header-width'); ?>">
                    <span class="logo">
                        <?php if(get_option('glm-site-logo')){ ?>
                            <a href="<?php bloginfo( 'url' ) ?>/" title="<?php bloginfo( 'name' ) ?>" rel="home"> <img src="<?php echo get_option('glm-site-logo'); ?>" width="180" /> </a>
                        <?php } ?>
                    </span>
                    <?php if( get_option('glm-header-layout') == "gh1" || get_option('glm-header-layout') == "gh2" ) { ?>
                    <nav class="glm-menu">
                        <?php wp_nav_menu( array( 'theme_location' => 'glm-main-menu', 'container_class' => 'glm-main-menu' ) ); ?>
                    </nav>
                    <?php } ?>

                    <?php if( get_option('glm-header-layout') == "gh4") { ?>
                    <nav class="glm-menu side-menu">
                            <i class="fas fa-bars"></i>
                    </nav>
                    <?php } ?>

                </div>
            </div>

            <?php if( get_option('glm-header-layout') == "gh3" ) { ?>
            <nav class="glm-menu-full">
                <div class="glm-box <?php echo get_option('glm-header-width'); ?>">
                    <!--<div class="skip-link"><a href="#content" title="<?php _e( 'Skip to content', 'your-theme' ) ?>"><?php _e( 'Skip to content', 'your-theme' ) ?></a></div>-->
                    <?php wp_nav_menu( array( 'theme_location' => 'glm-main-menu', 'container_class' => 'glm-main-menu' ) ); ?>
                </div>
            </nav>
            <?php } ?>

        </header>

        <?php } ?>

    <?php } ?>

    <div class="glm-clear"></div>