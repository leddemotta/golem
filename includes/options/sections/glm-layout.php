<span id="glm-layout" class="section active">

	<span class="title"> <i class="fab fa-buffer"></i> Layout</span> <!--- SECTION TITLE --->

	<span class="sub-menu">
		<ul>
			<li> <a glm-sub-item="#glm-sub-layout" class="active first"> <i class="fab fa-buffer"></i> Layout </a> </li>
			<li> <a glm-sub-item="#glm-sub-bg"> <i class="fab fa-delicious"></i> Background </a> </li>
			<li> <a glm-sub-item="#glm-sub-responsive"> <i class="fas fa-mobile-alt"></i> Responsive </a> </li>
			<!-- <li> <a glm-sub-item="#glm-sub-color"> <i class="fas fa-palette"></i> Color </a> </li> -->
		</ul>
	</span> <!--- SECTION SUB MENU --->

	<div class="clear"></div>

	<span id="glm-sub-layout" class="sub-tab active first">

		<span class="field" glm-field-name="glm-site-layout">

			<span class="column column-1">
				<label>Layout</label>
				<span class="desc">Select if the website will be "boxed" or "full-width".</span>
			</span>

			<span class="column column-2">
				<span class="glm-on-off">
					<input id="glm-site-layout-boxed" type="radio" name="glm-site-layout" value="boxed" <?php if( get_option('glm-site-layout') == "boxed" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-site-layout-boxed"> Boxed </label>

					<input id="glm-site-layout-full-width" type="radio" name="glm-site-layout" value="full-width" <?php if( get_option('glm-site-layout') == "full-width" ){ echo 'checked="checked"'; } ?> /> 
					<label for="glm-site-layout-full-width"> Full Width </label>
				</span>
			</span>

		</span> <!--- END FIELD --->

		<span class="field" glm-field-name="site-width">

			<span class="column column-1">
				<label>Website Width</label>
				<span class="desc">
					Adjust the site width. Insert a value including any CSS unit. <strong>Ex</strong>: 1080px, 80%.
				</span>
			</span>

			<span class="column column-2">
				<input type="text" name="glm-site-width" size="45" value="<?php echo get_option('glm-site-width'); ?>" />
			</span>

		</span> <!--- END FIELD --->

	</span>

	<span id="glm-sub-bg" class="sub-tab">

		<span class="field" glm-field-name="glm-site-bg-img">

			<span class="column column-1">
				<label>Background Image For Page</label>
				<span class="desc">Select an image to use for a full page background.</span>
			</span>

			<span class="column column-2">

				<span class="glm-upload">

					<span class="glm-img-prev"> 
						<img 
							class="glm-site-bg-prev img-prev" 
							src="<?php echo get_option('glm-site-bg-img'); ?>" 
							<?php if(!get_option('glm-site-bg-img')) { echo 'style="display: none"'; } ?>  /> 
					</span>

					<input type="text" class="glm-site-bg-img" name="glm-site-bg-img" value="<?php echo get_option('glm-site-bg-img'); ?>" /> 

					<a href="#" 
					   class="upload-btn"
					   glm-img-title="Background Image For Page" 
					   glm-img-btn-text="Select" 
					   glm-img-multiple="false"
					   glm-img-prev-target="glm-site-bg-prev"
					   glm-img-field-target="glm-site-bg-img"> Upload </a> 

					<a href="#" 
					   class="remove-btn"
					   glm-img-prev-target="glm-site-bg-prev"
					   glm-img-field-target="glm-site-bg-img"
					   <?php if(!get_option('glm-site-bg-img')) { echo 'style="display: none"'; } ?>> Remove </a>

				</span>

			</span>

		</span> <!--- END FIELD --->

		<span class="field" glm-field-name="glm-site-bg-color">

			<span class="column column-1">

				<label>Background Color For Page</label>
				<span class="desc">
					Controls the background color for the page. When the color value is set to anything below 100% opacity, 
					the color will overlay the background image if one is uploaded.
				</span>

			</span>

			<span class="column column-2">

				<span class="glm-color">
					<span class="glm-site-bg">
						<span class="glm-site-bg-color-prev color-preview-box" style="background: <?php echo get_option('glm-site-bg-color'); ?>"></span>
					</span>

					<input type="text" class="glm-site-bg-color" name="glm-site-bg-color" size="45" value="<?php echo get_option('glm-site-bg-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

				</span>

			</span>

		</span> <!--- END FIELD --->

	</span>

	<span id="glm-sub-responsive" class="sub-tab">

		<span class="field" glm-field-name="glm-responsive-grid-breakpoint">

			<span class="column column-1">

				<label>Grid Responsive Breakpoint</label>
				<span class="desc">
					Controls when grid layouts (blog/portfolio) start to break into smaller columns. Further breakpoints are auto calculated. Em pixels
				</span>

			</span>

			<span class="column column-2">

				<span class="glm-slider">
					<paper-slider name="glm-responsive-grid-breakpoint" value="<?php echo get_option('glm-responsive-grid-breakpoint'); ?>" min="200" max="1920" editable></paper-slider>
					<input type="hidden" class="glm-responsive-grid-breakpoint" name="glm-responsive-grid-breakpoint" value="<?php echo get_option('glm-responsive-grid-breakpoint'); ?>" />
				</span>

			</span>

		</span> <!--- END FIELD --->

		<span class="field" glm-field-name="glm-responsive-header-breakpoint">

			<span class="column column-1">

				<label>Header Responsive Breakpoint</label>
				<span class="desc">
					Controls when the desktop header changes to the mobile header. Em pixels
				</span>

			</span>

			<span class="column column-2">

				<span class="glm-slider">
					
					<paper-slider 
						name="glm-responsive-header-breakpoint" 
						value="<?php echo get_option('glm-responsive-header-breakpoint'); ?>" 
						min="200"
						max="1920" 
						editable>
					</paper-slider>
					
					<input 
						type="hidden" 
						class="glm-responsive-header-breakpoint" 
						name="glm-responsive-header-breakpoint" 
						value="<?php echo get_option('glm-responsive-header-breakpoint'); ?>" />
					
				</span>

			</span>

		</span> <!--- END FIELD --->

		<span class="field" glm-field-name="glm-responsive-content-breakpoint">

			<span class="column column-1">

				<label>Site Content Responsive Breakpoint</label>
				<span class="desc">
					Controls when the site content area changes to the mobile layout. This includes all content below the header including the footer. Em pixels
				</span>

			</span>

			<span class="column column-2">

				<span class="glm-slider">
					<paper-slider name="glm-responsive-content-breakpoint" value="<?php echo get_option('glm-responsive-content-breakpoint'); ?>" min="200" max="1920" editable></paper-slider>
					<input type="hidden" class="glm-responsive-content-breakpoint" name="glm-responsive-content-breakpoint" value="<?php echo get_option('glm-responsive-content-breakpoint'); ?>" />
				</span>

			</span>

		</span> <!--- END FIELD --->

		<span class="field" glm-field-name="glm-responsive-sidebar-breakpoint">

			<span class="column column-1">

				<label>Sidebar Responsive Breakpoint</label>
				<span class="desc">
					Controls when sidebars change to the mobile layout. Em pixels
				</span>

			</span>

			<span class="column column-2">

				<span class="glm-slider">
					<paper-slider name="glm-responsive-sidebar-breakpoint" value="<?php echo get_option('glm-responsive-sidebar-breakpoint'); ?>" min="200" max="1920" editable></paper-slider>
					<input type="hidden" class="glm-responsive-sidebar-breakpoint" name="glm-responsive-sidebar-breakpoint" value="<?php echo get_option('glm-responsive-sidebar-breakpoint'); ?>" />
				</span>

			</span>

		</span> <!--- END FIELD --->

	</span>

	<span id="glm-sub-color" class="sub-tab">

		<span class="field" glm-field-name="glm-site-default-color">

			<span class="column column-1">

				<label>Site Elements Color</label>
				<span class="desc">
					Controls the main highlight color throughout the theme.
				</span>

			</span>

			<span class="column column-2">

				<span class="glm-color">
					<span class="glm-site-bg">
						<span class="glm-site-default-color-prev color-preview-box" style="background: <?php echo get_option('glm-site-default-color'); ?>"></span>
					</span>

					<input type="text" class="glm-site-default-color" name="glm-site-default-color" size="45" value="<?php echo get_option('glm-site-default-color'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />

				</span>

			</span>

		</span> <!--- END FIELD --->

	</span>

</span>