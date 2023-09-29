<?php 

function glm_options_page_header_builder() { 
    
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
    
    wp_enqueue_script( 'general', get_template_directory_uri() . '/js/options/general.js',false,'1.4.2','all'); 
    wp_enqueue_script( 'jquery.fontselect', get_template_directory_uri() . '/js/font-selector/jquery.fontselect.js',false,'1.2','all'); 
    ?>
    
    <script>
    jQuery(document).ready(function($) {
      wp.codeEditor.initialize($('#fancy-textarea'), cm_settings);
    })
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
    
            <div id="glm-builder">

                <span class="title"><i class="fab fa-buffer"></i> Golem Builder - Header</span>

                <span class="content">  

                    <span class="components header"> EEEE </span>
                    <span class="draggable-area header"> AAAAA </span>
                
                </span>
            
            </div>

            <style>
            #glm-builder {
                float: left;
                background: #fffffe;
                display: block;
                width: 100%;
                box-sizing: border-box;
                border-radius: 15px;
                margin-top: 12px;
                margin-bottom: 30px;
                border: 1px solid #ddd;

                background: #000000 !important;
                border: 1px solid #22282d !important;
            }

            #glm-builder .title {
                float: left;
                padding: 15px 20px 20px 20px;
                display: block;
                width: 100%;
                font-size: 20px;
                border-bottom: 1px dashed #22282d;
                font-weight: 600;
                box-sizing: border-box;
            }

            #glm-builder .title i {
                font-size: 26px;
                color: #c9854c;
                position: relative;
                bottom: -4px;
                margin-right: 5px;
            }

            #glm-builder .content {
                float: left;
                padding: 15px 20px;
                display: block;
                width: 100%;
                min-height: 300px;
            }
            </style>
            
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
    
    
    <?php
    
    
    }