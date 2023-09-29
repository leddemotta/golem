<span id="glm-header" class="section">

	<span class="title"> <i class="far fa-window-maximize"></i> Header </span>

	<span class="sub-menu">
		<ul>
			<li> <a glm-sub-item="#glm-sub-header" class="active"> <i class="far fa-window-maximize"></i> Header </a> </li>
			<li> <a glm-sub-item="#glm-sub-header-top-bar"> <i class="far fa-window-maximize"></i> Top Bar </a> </li>
			<li> <a glm-sub-item="#glm-sub-header-logo-ico"> <i class="fas fa-chess-knight"></i> Logo & Ico </a> </li>
			<li> <a glm-sub-item="#glm-sub-header-sticky"> <i class="far fa-caret-square-down"></i> Sticky Header </a> </li>
		</ul>
	</span>

	<div class="clear"></div>

	<span id="glm-sub-header" class="sub-tab active first">

		<span class="field glm-header-field full-width" glm-field-name="glm-header-layout">

			<span class="column column-1">
				<label>Header Layout</label>
				<span class="desc">Controls the general layout of the header. Headers 2-5 allow additional content areas via the header content options 1-3. Header 6 only allows parent level menu items, no child levels will display. The main menu height, header padding and logo margin options will auto adjust based off your selection for ideal aesthetics.</span>
			</span>

			<span class="column column-2">
				
				<span class="glm-header-img">
					
					<input id="glm-header-layout-h1" type="radio" name="glm-header-layout" value="gh1" <?php if( get_option('glm-header-layout') == "gh1" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-header-layout-h1"> 
						<img src="https://golem.isasalmen.com/wp-content/uploads/2019/05/header-1.jpg" alt="Header Style #1" /> 
					</label><br>
					
					<input id="glm-header-layout-h2" type="radio" name="glm-header-layout" value="gh2" <?php if( get_option('glm-header-layout') == "gh2" ){ echo 'checked="checked"'; } ?>/> 
					<label for="glm-header-layout-h2"> 
						<img src="https://golem.isasalmen.com/wp-content/uploads/2019/05/header-2.jpg" alt="Header Style #1"  /> 
					</label><br>
					
					<input id="glm-header-layout-h3" type="radio" name="glm-header-layout" value="gh3" <?php if( get_option('glm-header-layout') == "gh3" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-header-layout-h3"> 
						<img src="https://golem.isasalmen.com/wp-content/uploads/2019/05/header-3.jpg" alt="Header Style #1" /> 
					</label><br>
					
					<input id="glm-header-layout-h4" type="radio" name="glm-header-layout" value="gh4" <?php if( get_option('glm-header-layout') == "gh4" ){ echo 'checked="checked"'; } ?> />
					<label for="glm-header-layout-h4"> 
						<img src="https://golem.isasalmen.com/wp-content/uploads/2019/05/header-4.jpg" alt="Header Style #1" /> 
					</label><br>
					
					<!--<input id="glm-header-layout-custom" type="radio" name="glm-header-layout" value="custom" <?php if( get_option('glm-header-layout') == "custom" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-header-layout-custom"> 
						<img src="https://golem.isasalmen.com/wp-content/uploads/2019/05/header-5.jpg" alt="Header Style #1" /> 
                    </label><br> -->
                    
                    <input id="glm-header-layout-ghcode" type="radio" name="glm-header-layout" value="ghcode" <?php if( get_option('glm-header-layout') == "ghcode" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-header-layout-ghcode"> 
						<img src="https://golem.isasalmen.com/wp-content/uploads/2019/05/header-5.jpg" alt="Header Style #1" /> 
                    </label>
                    
                    <script>
                    jQuery(function() {
                        jQuery('input[name="glm-header-layout"]').on('click', function() {	
                            var glm_field_val = jQuery(this).val();
                            if(glm_field_val == "ghcode"){
                                jQuery('.glm-header-code').removeClass('hide-glm-field');
                            }else{
                                jQuery('.glm-header-code').addClass('hide-glm-field');
                            }
                        });
                    });
                    </script>
					
				</span>
				
			</span>

        </span> <!------------------------ END FIELD ------------------------>

        <?php 
        if( get_option('glm-header-layout') != "ghcode" ){ 
            $glm_class = 'hide-glm-field'; 
        } ?>
        
        <span class="field glm-header-code glm-code-outer full-width <?php echo $glm_class; ?>" glm-field-name="glm-header-code">

            <span class="column column-1">

				<label>Header Code</label>
				<span class="desc">
                    The main menu height, header padding and logo margin options will auto adjust based off your selection for ideal aesthetics.<br><br>

                    [glm menu_id="565"]
                </span>

            </span>
            
            <span class="column column-2">

                <span class="glm-code">

                    <textarea name="glm-header-code" placeholder="Insert your code here"> 
                        <?php echo htmlentities( get_option('glm-header-code') ); ?> 
                    </textarea>

                    <div id="editor"><?php echo htmlentities( get_option('glm-header-code') ); ?> </div>

                    <script>
                    // ==================================================
                    // CÓDIGO PHP
                    // ==================================================

                    var editor = ace.edit("editor");
                    editor.setTheme("ace/theme/monokai");
                    editor.session.setMode("ace/mode/php");

                    var input = jQuery('textarea[name="glm-header-code"]');
                    editor.getSession().on("change", function () {
                        input.val(editor.getSession().getValue());
                    });
                    </script>

                    <style type="text/css" media="screen">
                    /* ================================================= */

                    /* ================================================= */
                    #editor {
                        position: absolute;
                        top: 0;
                        height: 800px;
                        width: 100%;
                        border-radius: 5px;
                    }
                    </style>

                </span>

            </span>

        </span> <!------------------------ END FIELD ------------------------>

		<span class="glm-style-box">

			<span class="title"><i class="fas fa-palette"></i> Style</span>

			<span class="field" glm-field-name="glm-header-width">

				<span class="column column-1">
					<label>Header Width</label>
					<span class="desc">Select if the website will be "boxed" or "full-width".</span>
				</span>

				<span class="column column-2">
					<span class="glm-on-off">
						<input id="glm-header-width-site" type="radio" name="glm-header-width" value="site" <?php if( get_option('glm-header-width') == "site" ){ echo 'checked="checked"'; } ?> /> 
						<label for="glm-header-width-site"> Site Box </label>

						<input id="glm-header-width-full" type="radio" name="glm-header-width" value="full" <?php if( get_option('glm-header-width') == "full" ){ echo 'checked="checked"'; } ?> /> 
						<label for="glm-header-width-full"> Full Width </label>
					</span>
				</span>

			</span> <!------------------------ END FIELD ------------------------>

			<span class="field" glm-field-name="glm-header-layout">

				<span class="column column-1">
					<label>Header Padding</label>
					<span class="desc">Controls the general layout of the header. </span>
				</span>

				<span class="column column-2">
					<span class="glm-padding">

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-header-pd-top" type="text" placeholder="Top" value="<?php echo get_option('glm-header-pd-top'); ?>" /></span>
							<span class="column">.</span>
						</span>

						<span class="line">
							<span class="column right"><input name="glm-header-pd-left" type="text"  placeholder="Left"  value="<?php echo get_option('glm-header-pd-left'); ?>" /></span>
							<span class="column directions"><i class="fas fa-arrows-alt"></i></span>
							<span class="column left"><input name="glm-header-pd-right" type="text"  placeholder="Right"  value="<?php echo get_option('glm-header-pd-right'); ?>" /></span>
						</span>

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-header-pd-bottom" type="text"  placeholder="Bottom" value="<?php echo get_option('glm-header-pd-bottom'); ?>" /></span>
							<span class="column">.</span>
						</span>

					</span>
				</span>

			</span> <!------------------------ END FIELD ------------------------>

			<span class="field" glm-field-name="glm-header-bg-color">

				<span class="column column-1">

					<label>Background Color For Header</label>
					<span class="desc">
						Controls the background color for the Header.
					</span>

				</span>

				<span class="column column-2">

					<span class="glm-color">
						<span class="glm-site-bg">
							<span class="glm-header-bg-color-prev color-preview-box" style="background: <?php echo get_option('glm-header-bg-color'); ?>"></span>
						</span>

						<input type="text" class="glm-header-bg-color" name="glm-header-bg-color" size="45" value="<?php echo get_option('glm-header-bg-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

					</span>

				</span>

			</span> <!------------------------ END FIELD ------------------------>

			<span class="field" glm-field-name="glm-header-border-color">

				<span class="column column-1">

					<label>Border Color For Header</label>
					<span class="desc">
						Controls the background color for the Header.
					</span>

				</span>

				<span class="column column-2">

					<span class="glm-color">
						<span class="glm-site-bg">
							<span class="glm-header-border-color-prev color-preview-box" style="background: <?php echo get_option('glm-header-border-color'); ?>"></span>
						</span>

						<input type="text" class="glm-header-border-color" name="glm-header-border-color" size="45" value="<?php echo get_option('glm-header-border-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

					</span>

				</span>

			</span> <!------------------------ END FIELD ------------------------>


			<span class="field" glm-field-name="glm-header-bg">

				<span class="column column-1">
					<label>Header Background Image</label>
					<span class="desc">Select an image to use for a full page background.</span>
				</span>

				<span class="column column-2">

					<span class="glm-upload">

						<span class="glm-img-prev"> 
							<img 
								class="glm-header-bg-prev img-prev" 
								src="<?php echo get_option('glm-header-bg'); ?>" 
								<?php if(!get_option('glm-header-bg')) { echo 'style="display: none"'; } ?>  /> 
						</span>

						<input type="text" class="glm-header-bg" name="glm-header-bg" value="<?php echo get_option('glm-header-bg'); ?>" /> 

						<a href="#" 
						   class="upload-btn"
						   glm-img-title="Header Background Image" 
						   glm-img-btn-text="Select" 
						   glm-img-multiple="false"
						   glm-img-prev-target="glm-header-bg-prev"
						   glm-img-field-target="glm-header-bg"> Upload </a> 

						<a href="#" 
						   class="remove-btn"
						   glm-img-prev-target="glm-header-bg-prev"
						   glm-img-field-target="glm-header-bg"
						   <?php if(!get_option('glm-header-bg')) { echo 'style="display: none"'; } ?>> Remove </a>

					</span>

				</span>

			</span> <!------------------------ END FIELD ------------------------>



		</span> <!------------------------ END FIELD ------------------------>

	</span>
	
	
	<span id="glm-sub-header-top-bar" class="sub-tab">
		
		<span class="field paper" glm-field-name="glm-header-email">

			<span class="column column-1">
				<label>Left Content</label>
				<span class="desc">This content will display if you have "Contact Info" selected for the Header Content 1 or 2 option above.</span>
			</span>

			<span class="column column-2">

				<span class="glm-dropdown">

					<?php
					$glm_header_left_content = get_option('glm-header-left-content'); 

					if($glm_header_left_content == "Contact info"){ $option = 0; }
					if($glm_header_left_content == "Social Networks"){ $option = 1; }
					if($glm_header_left_content == "Navigation"){ $option = 2; }
					if($glm_header_left_content == "Empty"){ $option = 3; } ?>

					<paper-dropdown-menu label="Select content" >
					  <paper-listbox slot="dropdown-content" class="dropdown-content" selected="<?php echo $option; ?>" glm-select-field="glm-header-left-content">
						<paper-item>Contact info</paper-item>
						<paper-item>Social Networks</paper-item>
						<paper-item>Navigation</paper-item>
						<paper-item>Empty</paper-item>
					  </paper-listbox>
					</paper-dropdown-menu>

					<input type="text" name="glm-header-left-content"  class="glm-header-left-content" value="<?php echo get_option('glm-header-left-content'); ?>" />

				</span>

			</span>


		</span> <!------------------------ END FIELD ------------------------>

		<span class="field paper" glm-field-name="glm-header-email">

			<span class="column column-1">
				<label>Right Content</label>
				<span class="desc">This content will display if you have "Contact Info" selected for the Header Content 1 or 2 option above.</span>
			</span>

			<span class="column column-2">

				<span class="glm-dropdown">

					<?php
					$glm_header_right_content = get_option('glm-header-right-content'); 

					if($glm_header_right_content == "Contact info"){ $option = 0; }
					if($glm_header_right_content == "Social Networks"){ $option = 1; }
					if($glm_header_right_content == "Navigation"){ $option = 2; }
					if($glm_header_right_content == "Empty"){ $option = 3; } ?>

					<paper-dropdown-menu label="Select content" >
					  <paper-listbox slot="dropdown-content" class="dropdown-content" selected="<?php echo $option; ?>" glm-select-field="glm-header-right-content">
						<paper-item>Contact info</paper-item>
						<paper-item>Social Networks</paper-item>
						<paper-item>Navigation</paper-item>
						<paper-item>Empty</paper-item>
					  </paper-listbox>
					</paper-dropdown-menu>

					<input type="text" name="glm-header-right-content"  class="glm-header-right-content" value="<?php echo get_option('glm-header-right-content'); ?>" />

				</span>

			</span>

		</span> <!------------------------ END FIELD ------------------------>

		<span class="field" glm-field-name="glm-header-contact-content">

			<span class="column column-1">
				<label>Contact Info Content</label>
				<span class="desc">This content will display if you have "Contact Info" selected for the Header Content 1 or 2 option above. HTML Supported.</span>
			</span>

			<span class="column column-2">
				<textarea name="glm-header-contact-content"><?php echo get_option('glm-header-contact-content'); ?></textarea>
				<!--<input type="text" name="glm-header-contact-content" size="45" value="<?php echo get_option('glm-header-contact-content'); ?>" /> -->
			</span>

		</span> <!------------------------ END FIELD ------------------------>
		
		<span class="glm-style-box">

			<span class="title"><i class="fas fa-palette"></i> Style</span>

			<span class="field" glm-field-name="glm-topbar-padding">

				<span class="column column-1">
					<label>Top Bar Padding</label>
					<span class="desc"> Description here... </span>
				</span>

				<span class="column column-2">
					<span class="glm-padding">

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-topbar-pd-top" type="text" placeholder="Top" value="<?php echo get_option('glm-topbar-pd-top'); ?>" /></span>
							<span class="column">.</span>
						</span>

						<span class="line">
							<span class="column right"><input name="glm-topbar-pd-left" type="text"  placeholder="Left"  value="<?php echo get_option('glm-topbar-pd-left'); ?>" /></span>
							<span class="column directions"><i class="fas fa-arrows-alt"></i></span>
							<span class="column left"><input name="glm-topbar-pd-right" type="text"  placeholder="Right"  value="<?php echo get_option('glm-topbar-pd-right'); ?>" /></span>
						</span>

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-topbar-pd-bottom" type="text"  placeholder="Bottom" value="<?php echo get_option('glm-topbar-pd-bottom'); ?>" /></span>
							<span class="column">.</span>
						</span>

					</span>
				</span>

			</span> <!------------------------ END FIELD ------------------------>

			<span class="field" glm-field-name="glm-topbar-bg-color">

				<span class="column column-1">

					<label>Background Color For Top Bar</label>
					<span class="desc">
						Description here...
					</span>

				</span>

				<span class="column column-2">

					<span class="glm-color">
						<span class="glm-site-bg">
							<span class="glm-topbar-bg-color-prev color-preview-box" style="background: <?php echo get_option('glm-topbar-bg-color'); ?>"></span>
						</span>

						<input type="text" class="glm-topbar-bg-color" name="glm-topbar-bg-color" size="45" value="<?php echo get_option('glm-topbar-bg-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

					</span>

				</span>

			</span> <!------------------------ END FIELD ------------------------>

			<span class="field" glm-field-name="glm-topbar-border-color" style="display: none">

				<span class="column column-1">

					<label>Border Color For Top Bar</label>
					<span class="desc">
						Controls the background color for the Header.
					</span>

				</span>

				<span class="column column-2">

					<span class="glm-color">
						<span class="glm-site-bg">
							<span class="glm-topbar-border-color-prev color-preview-box" style="background: <?php echo get_option('glm-topbar-border-color'); ?>"></span>
						</span>

						<input type="text" class="glm-topbar-border-color" name="glm-topbar-border-color" size="45" value="<?php echo get_option('glm-topbar-border-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

					</span>

				</span>

			</span> <!------------------------ END FIELD ------------------------>

		</span>
		
	</span>

	<span id="glm-sub-header-logo-ico" class="sub-tab">

		<span class="field" glm-field-name="glm-site-logo">

			<span class="column column-1">
				<label>Site Logo</label>
				<span class="desc">Select an image to use for a full page background.</span>
			</span>

			<span class="column column-2">

				<span class="glm-upload">

					<span class="glm-img-prev"> 
						<img 
							class="glm-site-logo-prev img-prev" 
							src="<?php echo get_option('glm-site-logo'); ?>" 
							<?php if(!get_option('glm-site-logo')) { echo 'style="display: none"'; } ?>  /> 
					</span>

					<input type="text" class="glm-site-logo" name="glm-site-logo" value="<?php echo get_option('glm-site-logo'); ?>" /> 

					<a href="#" 
					   class="upload-btn"
					   glm-img-title="Site Logo" 
					   glm-img-btn-text="Select" 
					   glm-img-multiple="false"
					   glm-img-prev-target="glm-site-logo-prev"
					   glm-img-field-target="glm-site-logo"> Upload </a> 

					<a href="#" 
					   class="remove-btn"
					   glm-img-prev-target="glm-site-logo-prev"
					   glm-img-field-target="glm-site-logo"
					   <?php if(!get_option('glm-site-logo')) { echo 'style="display: none"'; } ?>> Remove </a>

				</span>

			</span>

		</span> <!------------------------ END FIELD ------------------------>

		<span class="field" glm-field-name="glm-sticky-logo" style="display: none">

			<span class="column column-1">
				<label>Logo Sticky Header</label>
				<span class="desc">Select an image to use for a full page background.</span>
			</span>

			<span class="column column-2">

				<span class="glm-upload">

					<span class="glm-img-prev"> 
						<img 
							class="glm-sticky-logo-prev img-prev" 
							src="<?php echo get_option('glm-sticky-logo'); ?>" 
							<?php if(!get_option('glm-sticky-logo')) { echo 'style="display: none"'; } ?>  /> 
					</span>

					<input type="text" class="glm-sticky-logo" name="glm-sticky-logo" value="<?php echo get_option('glm-sticky-logo'); ?>" /> 

					<a href="#" 
					   class="upload-btn"
					   glm-img-title="Logo Sticky Header" 
					   glm-img-btn-text="Select" 
					   glm-img-multiple="false"
					   glm-img-prev-target="glm-sticky-logo-prev"
					   glm-img-field-target="glm-sticky-logo"> Upload </a> 

					<a href="#" 
					   class="remove-btn"
					   glm-img-prev-target="glm-site-bg-prev"
					   glm-img-field-target="glm-sticky-logo"
					   <?php if(!get_option('glm-sticky-logo')) { echo 'style="display: none"'; } ?>> Remove </a>

				</span>

			</span>

		</span> <!------------------------ END FIELD ------------------------>

		<span class="field" glm-field-name="glm-mobile-logo" style="display: none">

			<span class="column column-1">
				<label>Mobile Logo</label>
				<span class="desc">Select an image to use for a full page background.</span>
			</span>

			<span class="column column-2">

				<span class="glm-upload">

					<span class="glm-img-prev"> 
						<img 
							class="glm-mobile-logo-prev img-prev" 
							src="<?php echo get_option('glm-mobile-logo'); ?>" 
							<?php if(!get_option('glm-mobile-logo')) { echo 'style="display: none"'; } ?>  /> 
					</span>

					<input type="text" class="glm-mobile-logo" name="glm-mobile-logo" value="<?php echo get_option('glm-mobile-logo'); ?>" /> 

					<a href="#" 
					   class="upload-btn"
					   glm-img-title="Mobile Logo" 
					   glm-img-btn-text="Select" 
					   glm-img-multiple="false"
					   glm-img-prev-target="glm-mobile-logo-prev"
					   glm-img-field-target="glm-mobile-logo"> Upload </a> 

					<a href="#" 
					   class="remove-btn"
					   glm-img-prev-target="glm-mobile-logo-prev"
					   glm-img-field-target="glm-mobile-logo"
					   <?php if(!get_option('glm-mobile-logo')) { echo 'style="display: none"'; } ?>> Remove </a>

				</span>

			</span>

		</span> <!------------------------ END FIELD ------------------------>

		<span class="field" glm-field-name="glm-site-favicon">

			<span class="column column-1">
				<label>Favicon</label>
				<span class="desc">Select an image to use for a full page background.</span>
			</span>

			<span class="column column-2">

				<span class="glm-upload">

					<span class="glm-img-prev"> 
						<img 
							class="glm-site-favicon-prev img-prev" 
							src="<?php echo get_option('glm-site-favicon'); ?>" 
							<?php if(!get_option('glm-site-favicon')) { echo 'style="display: none"'; } ?>  /> 
					</span>

					<input type="text" class="glm-site-favicon" name="glm-site-favicon" value="<?php echo get_option('glm-site-favicon'); ?>" /> 

					<a href="#" 
					   class="upload-btn"
					   glm-img-title="Favicon" 
					   glm-img-btn-text="Select" 
					   glm-img-multiple="false"
					   glm-img-prev-target="glm-site-favicon-prev"
					   glm-img-field-target="glm-site-favicon"> Upload </a> 

					<a href="#" 
					   class="remove-btn"
					   glm-img-prev-target="glm-site-favicon-prev"
					   glm-img-field-target="glm-site-favicon"
					   <?php if(!get_option('glm-site-favicon')) { echo 'style="display: none"'; } ?>> Remove </a>

				</span>

			</span>

		</span> <!------------------------ END FIELD ------------------------>

	</span>

	

	<span id="glm-sub-header-sticky" class="sub-tab">

		<span class="field" glm-field-name="glm-sticky-header">

			<span class="column column-1">
				<label>Sticky Header</label>
				<span class="desc">Select if the website will be "boxed" or "full-width".</span>
			</span>

			<span class="column column-2">
				<span class="glm-on-off">
					<input id="glm-sticky-header-on" type="radio" name="glm-sticky-header" value="on" <?php if( get_option('glm-sticky-header') == "on" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-sticky-header-on"> On </label>

					<input id="glm-sticky-header-off" type="radio" name="glm-sticky-header" value="off" <?php if( get_option('glm-sticky-header') == "off" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-sticky-header-off"> Off </label>
				</span>
			</span>

		</span> <!------------------------ END FIELD ------------------------>

		<span class="field" glm-field-name="glm-sticky-header-mobile">

			<span class="column column-1">
				<label>Sticky Header on Mobile </label>
				<span class="desc">Select if the website will be "boxed" or "full-width".</span>
			</span>

			<span class="column column-2">
				<span class="glm-on-off">
					<input id="glm-sticky-header-mobile-on" type="radio" name="glm-sticky-header-mobile" value="on" <?php if( get_option('glm-sticky-header-mobile') == "on" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-sticky-header-mobile-on"> On </label>

					<input id="glm-sticky-header-mobile-off" type="radio" name="glm-sticky-header-mobile" value="off" <?php if( get_option('glm-sticky-header-mobile') == "off" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-sticky-header-mobile-off"> Off </label>
				</span>
			</span>

		</span> <!------------------------ END FIELD ------------------------>
		
		<span class="glm-style-box">

			<span class="title"><i class="fas fa-palette"></i> Style</span>

			<span class="field" glm-field-name="glm-sticky-bg-color">

				<span class="column column-1">

					<label>Background Color For Sticky Header</label>
					<span class="desc">
						Description here...
					</span>

				</span>

				<span class="column column-2">

					<span class="glm-color">
						<span class="glm-site-bg">
							<span class="glm-sticky-bg-color-prev color-preview-box" style="background: <?php echo get_option('glm-sticky-bg-color'); ?>"></span>
						</span>

						<input type="text" class="glm-sticky-bg-color" name="glm-sticky-bg-color" size="45" value="<?php echo get_option('glm-sticky-bg-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

					</span>

				</span>

			</span> <!------------------------ END FIELD ------------------------>

			<span class="field" glm-field-name="glm-sticky-font-color">

				<span class="column column-1">

					<label>Font Color For Sticky Header</label>
					<span class="desc">
						Description here...
					</span>

				</span>

				<span class="column column-2">

					<span class="glm-color">
						<span class="glm-site-bg">
							<span class="glm-sticky-font-color-prev color-preview-box" style="background: <?php echo get_option('glm-sticky-font-color'); ?>"></span>
						</span>

						<input type="text" class="glm-sticky-font-color" name="glm-sticky-font-color" size="45" value="<?php echo get_option('glm-sticky-font-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

					</span>

				</span>

			</span> <!------------------------ END FIELD ------------------------>

		</span>

	</span>

</span>