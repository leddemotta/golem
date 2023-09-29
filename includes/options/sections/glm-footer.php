<span id="glm-footer" class="section">

	<span class="title"> <i class="far fa-window-maximize" style="transform: rotate(180deg)"></i> Footer </span>

	<span class="sub-menu">
		<ul>
			<li> <a glm-sub-item="#glm-sub-footer" class="active first"> <i class="far fa-window-maximize" style="transform: rotate(180deg)"></i> Footer </a> </li>
			<!-- <li> <a glm-sub-item="#glm-sub-footer-widgets"> <i class="fas fa-columns"></i> Widgets </a> </li> -->
		</ul>
	</span>

	<div class="clear"></div>

	<span id="glm-sub-footer" class="sub-tab active first"> 

		<!-- FOOTER -->
        <span class="glm-style-box">

			<span class="title"><i class="fas fa-palette"></i> Style</span>

			<span class="field" glm-field-name="glm-footer-padding">

				<span class="column column-1">
					<label>Footer Padding</label>
					<span class="desc"> Padding spacing for footer. </span>
				</span>

				<span class="column column-2">
					<span class="glm-padding">

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-footer-pd-top" type="text" placeholder="Top" value="<?php echo get_option('glm-footer-pd-top'); ?>" /></span>
							<span class="column">.</span>
						</span>

						<span class="line">
							<span class="column right"><input name="glm-footer-pd-left" type="text"  placeholder="Left"  value="<?php echo get_option('glm-footer-pd-left'); ?>" /></span>
							<span class="column directions"><i class="fas fa-arrows-alt"></i></span>
							<span class="column left"><input name="glm-footer-pd-right" type="text"  placeholder="Right"  value="<?php echo get_option('glm-footer-pd-right'); ?>" /></span>
						</span>

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-footer-pd-bottom" type="text"  placeholder="Bottom" value="<?php echo get_option('glm-footer-pd-bottom'); ?>" /></span>
							<span class="column">.</span>
						</span>

					</span>
				</span>

			</span> <!------------------------ END FIELD ------------------------>

        </span>

	</span>

	<span id="glm-sub-footer-widgets" class="sub-tab"> 
		WIDGETS
	</span>

</span>