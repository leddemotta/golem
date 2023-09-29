<span id="glm-menu" class="section">

	<span class="title"><i class="fas fa-bars"></i> Menu</span>

	<span class="sub-menu">
		<ul>
			<li> <a glm-sub-item="#glm-sub-menu-item" class="active first"> <i class="fas fa-bars"></i> Main Menu </a> </li>
			<!--<li> <a glm-sub-item="#glm-sub-top-menu"> <i class="fas fa-bars"></i> Top Menu </a> </li>
			<li> <a glm-sub-item="#glm-sub-mobile-menu"> <i class="fas fa-mobile-alt"></i> Mobile Menu </a> </li> -->
		</ul> 
	</span>

	<div class="clear"></div>

	<span id="glm-sub-menu-item" class="sub-tab active first"> 
		
		<span class="glm-style-box">

            <span class="title"><i class="fas fa-palette"></i> Style</span>
            
			<span class="field" glm-field-name="glm-menu-padding">

				<span class="column column-1">
					<label>Main Menu Container Padding</label>
					<span class="desc"> Description here... </span>
				</span>

				<span class="column column-2">
					<span class="glm-padding">

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-menu-pd-top" type="text" placeholder="Top" value="<?php echo get_option('glm-menu-pd-top'); ?>" /></span>
							<span class="column">.</span>
						</span>

						<span class="line">
							<span class="column right"><input name="glm-menu-pd-left" type="text"  placeholder="Left"  value="<?php echo get_option('glm-menu-pd-left'); ?>" /></span>
							<span class="column directions"><i class="fas fa-arrows-alt"></i></span>
							<span class="column left"><input name="glm-menu-pd-right" type="text"  placeholder="Right"  value="<?php echo get_option('glm-menu-pd-right'); ?>" /></span>
						</span>

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-menu-pd-bottom" type="text"  placeholder="Bottom" value="<?php echo get_option('glm-menu-pd-bottom'); ?>" /></span>
							<span class="column">.</span>
						</span>

					</span>
				</span>

			</span> <!------------------------ END FIELD ------------------------>
			
			<span class="field" glm-field-name="glm-menu-item-padding">

				<span class="column column-1">
					<label>Main Menu itens Padding</label>
					<span class="desc"> Description here... </span>
				</span>

				<span class="column column-2">
					<span class="glm-padding">

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-menu-item-pd-top" type="text" placeholder="Top" value="<?php echo get_option('glm-menu-item-pd-top'); ?>" /></span>
							<span class="column">.</span>
						</span>

						<span class="line">
							<span class="column right"><input name="glm-menu-item-pd-left" type="text"  placeholder="Left"  value="<?php echo get_option('glm-menu-item-pd-left'); ?>" /></span>
							<span class="column directions"><i class="fas fa-arrows-alt"></i></span>
							<span class="column left"><input name="glm-menu-item-pd-right" type="text"  placeholder="Right"  value="<?php echo get_option('glm-menu-item-pd-right'); ?>" /></span>
						</span>

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-menu-item-pd-bottom" type="text"  placeholder="Bottom" value="<?php echo get_option('glm-menu-item-pd-bottom'); ?>" /></span>
							<span class="column">.</span>
						</span>

					</span>
				</span>

            </span> <!------------------------ END FIELD ------------------------>
            
            <span class="field" glm-field-name="glm-menu-font">

				<span class="column column-1">

					<label>Main Menu Typography</label>
					<span class="desc">
						Description here...
					</span>

				</span>

				<span class="column column-2">

                    <span class="glm-font-box"> 

                        <span class="glm-font-prev"> 
                            <textarea style="font-family: <?php echo str_replace('+', ' ', get_option('glm-menu-font'));?> !important; font-size: <?php echo get_option('glm-menu-font-size');?> !important; letter-spacing: <?php echo get_option('glm-menu-font-spacing');?>; color: <?php echo get_option('glm-menu-font-color-idle'); ?>; font-weight: <?php echo get_option('glm-menu-font-weight'); ?>;  ">1 2 3 4 5 6 7 8 9 0 A B C D E F G H I J K L M N O P Q R S T U V W X Y Z a b c d e f g h i j k l m n o p q r s t u v w x y z</textarea> 
                        </span>

                        <span class="glm-font-select"> 
                            <input type="text" id="font" class="glm-menu-font" name="glm-menu-font" size="45" value="<?php echo get_option('glm-menu-font');?>" /> 
                        </span> 

                        <div class="clear"></div>

                        <span class="glm-font-styles">

                             <span class="col value glm-font-size">
                                <label>Font size:</label> <input type="text" class="glm-menu-font-size" name="glm-menu-font-size" size="45" value="<?php echo get_option('glm-menu-font-size');?>" />
                             </span>

                             <span class="col value glm-font-spacing">
                                <label>Letter spacing:</label> <input type="text" class="glm-menu-font-spacing" name="glm-menu-font-spacing" size="45" value="<?php echo get_option('glm-menu-font-spacing');?>" />
                             </span>,

                             <span class="col value glm-font-weight">
                                <label>Font weight:</label> <input type="text" class="glm-menu-font-weight" name="glm-menu-font-weight" size="45" value="<?php echo get_option('glm-menu-font-weight');?>" />
                             </span>

                             <span class="col value glm-line-height">
                                <label>Line Height:</label> <input type="text" class="glm-menu-line-height" name="glm-menu-line-height" size="45" value="<?php echo get_option('glm-menu-line-height');?>" />
                             </span>

                             <div class="clear"></div>

                             <span class="col color glm-font-color-idle">

                                <label>Font Color Idle State</label>
                                <span class="glm-color">
                                    <span class="glm-site-bg glm-menu-font-color-idle">
                                        <span class="glm-menu-font-color-idle-prev color-preview-box" style="background: <?php echo get_option('glm-menu-font-color-idle'); ?>"></span>
                                    </span>

                                    <input type="text" class="glm-menu-font-color-idle" name="glm-menu-font-color-idle" size="45" value="<?php echo get_option('glm-menu-font-color-idle'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />
                                </span>

                             </span>

                             <span class="col color glm-font-color-hover">

                                <label>Font Color Hover State</label>
                                <span class="glm-color">
                                    <span class="glm-site-bg glm-menu-font-color-hover">
                                        <span class="glm-menu-font-color-hover-prev color-preview-box" style="background: <?php echo get_option('glm-menu-font-color-hover'); ?>"></span>
                                    </span>

                                    <input type="text" class="glm-menu-font-color-hover" name="glm-menu-font-color-hover" size="45" value="<?php echo get_option('glm-menu-font-color-hover'); ?>" data-wheelcolorpicker  data-wcp-format="rgba" data-wcp-format="css" data-wcp-format="css" data-wcp-sliders="wsvap" data-wcp-cssclass="glm-color-block" data-wcp-autoresize="false" />
                                </span>

                             </span>

                        </span>

                    </span>

				</span>

            </span> <!------------------------ END FIELD ------------------------>
            
            <div class="clear"></div>

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

            <div class="clear"></div>

			<span class="field" glm-field-name="glm-topbar-border-color">

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

	<span id="glm-sub-top-menu" class="sub-tab"> 
		
		TOP
		
	</span>

	<span id="glm-sub-mobile-menu" class="sub-tab"> 
		
		MOBILE
		
	</span>

</span>