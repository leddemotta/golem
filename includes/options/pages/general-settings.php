<?php 

function global_custom_options() { 
	
    /* ======================================================= */	
    /* START IMAGE UPLOAD BUTTON
    /* ======================================================= */
         
    if( function_exists( 'wp_enqueue_media' ) ){
        wp_enqueue_media();
    } else {
        wp_enqueue_style('thickbox');
        wp_enqueue_script('media-upload');
        wp_enqueue_script('thickbox');
    } 
        
    // THEME OPTIONS CSS
    wp_enqueue_style( 'theme-options', get_template_directory_uri() . '/styles/options/theme-options.css',false,'1.2.4','all'); 
    wp_enqueue_style( 'fontselect', get_template_directory_uri() . '/styles/font-selector/fontselect.css',false,'1.2','all'); 
    
    wp_enqueue_script( 'general', get_template_directory_uri() . '/js/options/general.js',false,'1.4.7','all'); 
    wp_enqueue_script( 'jquery.fontselect', get_template_directory_uri() . '/js/font-selector/jquery.fontselect.js',false,'1.2','all'); 
    ?>
    
    <script>
    jQuery(document).ready(function($) {
      wp.codeEditor.initialize($('#fancy-textarea'), cm_settings);
    });
    </script>
    
    <div class="golem-wrap <?php if(get_option('glm-dev-theme') == "dark") { echo get_option('glm-dev-theme'); } ?>">
        
        <form id="glm-theme-options" method="post" action="options.php">
            
            <div id="saveResult"></div>
    
            <?php wp_nonce_field('update-options') ?>
    
            <?php 
            /* ======================================================================= */
            /* HEADER
            /* ======================================================================= */ 
            
            include_once( get_template_directory() . '/includes/options/structure/glm-header.php' ); ?>
    
            <div class="clear"></div>
            
            <?php
            /* ======================================================================= */
            /* SIDEBAR MENU 
            /* ======================================================================= */ 
            
            include_once( get_template_directory() . '/includes/options/structure/glm-side-menu.php' ); ?>
    
    
            <?php
            /* ======================================================================= */
            /* BODY
            /* ======================================================================= */ ?>
    
            <span class="glm-body">
    
                <?php
                // SECTIONS INCLUDES
                include_once( get_template_directory() . '/includes/options/sections/glm-layout.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-header.php'); 
                include_once( get_template_directory() . '/includes/options/sections/glm-menu.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-sidebar.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-footer.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-fonts.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-content.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-seo.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-social.php'); 
                include_once( get_template_directory() . '/includes/options/sections/glm-lightbox.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-forms.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-components.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-custom-css.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-custom-codes.php');
                include_once( get_template_directory() . '/includes/options/sections/glm-import.php'); ?>
    
            </span>
    
            <div class="clear"></div>
            
            <?php
            /* ======================================================================= */
            /* FOOTER
            /* ======================================================================= */ 
            
            include_once( get_template_directory() . '/includes/options/structure/glm-footer.php' ); ?>
    
        </form>
        
        <script type="text/javascript">
            jQuery(document).ready(function() {
                jQuery('#glm-theme-options').submit(function() { 
    
                    jQuery(this).ajaxSubmit({
                        
                        success: function(){
                            jQuery('#saveResult').html("<div id='saveMessage' class='successModal'></div>");
                            jQuery('#saveMessage').append("<?php echo htmlentities(__('Settings Saved Successfully','wp'),ENT_QUOTES); ?>").fadeIn(3000);
                            jQuery('.golem-wrap .save').prop('disabled', true);
                            jQuery('.glm-header .btn a').addClass('disabled');
                        }, 
                        timeout: 2000
                    }); 
                    setTimeout( "jQuery('#saveMessage').fadeOut(600); jQuery('.glm-header .btn a').removeClass('disabled'); jQuery('.golem-wrap .save').prop('disabled', false);" , 5000);
                    return false; 
                });
            });
        </script>
        
    </div>
    
    
    <?php }