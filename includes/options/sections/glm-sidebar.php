<span id="glm-sidebar" class="section">

	<span class="title"> <i class="far fa-window-maximize" style="transform: rotate(90deg)"></i> Sidebar </span>

	<span class="sub-menu">
		<ul>
			<li> <a glm-sub-item="#glm-sub-sidebar" class="active first"> <i class="far fa-window-maximize" style="transform: rotate(90deg)"></i> Sidebar </a> </li>
			<!-- <li> <a glm-sub-item="#glm-sub-sidebar-style"> <i class="fas fa-palette"></i> Style </a> </li> -->
		</ul>
	</span>

	<div class="clear"></div>

	<span id="glm-sub-sidebar" class="sub-tab active first"> 

    <span class="glm-style-box">

			<span class="title"><i class="fas fa-palette"></i> Style</span>

			<span class="field" glm-field-name="glm-sidebar-padding">

				<span class="column column-1">
					<label>Sidebar Padding</label>
					<span class="desc"> Padding spacing for sidebar. </span>
				</span>

				<span class="column column-2">
					<span class="glm-padding">

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-sidebar-pd-top" type="text" placeholder="Top" value="<?php echo get_option('glm-sidebar-pd-top'); ?>" /></span>
							<span class="column">.</span>
						</span>

						<span class="line">
							<span class="column right"><input name="glm-sidebar-pd-left" type="text"  placeholder="Left"  value="<?php echo get_option('glm-sidebar-pd-left'); ?>" /></span>
							<span class="column directions"><i class="fas fa-arrows-alt"></i></span>
							<span class="column left"><input name="glm-sidebar-pd-right" type="text"  placeholder="Right"  value="<?php echo get_option('glm-sidebar-pd-right'); ?>" /></span>
						</span>

						<span class="line">
							<span class="column">.</span>
							<span class="column"><input name="glm-sidebar-pd-bottom" type="text"  placeholder="Bottom" value="<?php echo get_option('glm-sidebar-pd-bottom'); ?>" /></span>
							<span class="column">.</span>
						</span>

					</span>
				</span>

			</span> <!------------------------ END FIELD ------------------------>

            <!-- CAMPOS 

            TIPO DE SIDEBAR - RADIO BUTTONS - LEFT - RIGHT - L & R <br><br>
			WIDTH SIDEBAR LEFT  <br><br>
			WIDTH SIDEBAR RIGHT  <br><br>
			SIDEBAR HEADING TAG FONT SIZE  <br><br>
			SIDEBAR HEADING TAG COLOR  <br><br>--> 

        </span>


	</span>

	<span id="glm-sub-sidebar-style" class="sub-tab"> 
    
		SIDEBAR STYLE

        <span class="glm-style-box">

            <span class="title"><i class="fas fa-palette"></i> Style </span>

            <!-- CAMPOS -->

        </span>

	</span>

</span>