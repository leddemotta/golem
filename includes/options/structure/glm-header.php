<!-- CSS REFERENCIES -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
<link rel="stylesheet" href="https://files.raffer.one/jquery/wheelcolorpicker/example-v3/css/wheelcolorpicker.css">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/iron-icon/iron-icon.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-input/paper-input.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-dropdown-menu/paper-dropdown-menu.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-item/paper-item.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-listbox/paper-listbox.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/iron-icons/iron-icons.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-button/paper-button.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-checkbox/paper-checkbox.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-tabs/paper-tabs.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-slider/paper-slider.html">					
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/paper-toggle-button/paper-toggle-button.html">
<link rel="import" href="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/iron-form-element-behavior/iron-form-element-behavior.html">	
<link href="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/css/select2.min.css" rel="stylesheet" />

<!-- JS REFERENCIES -->
<script src="https://cdn.rawgit.com/download/polymer-cdn/1.5.0/lib/webcomponentsjs/webcomponents-lite.min.js"></script>
<script src="https://files.raffer.one/jquery/wheelcolorpicker/example-v3/jquery.wheelcolorpicker.js"></script>
<script src="https://ace.c9.io/build/src/ace.js" type="text/javascript" charset="utf-8"></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.0.12/dist/js/select2.min.js"></script>

<span class="glm-header">

	<span class="menu"> 
        <!-- <i class="fas fa-bars"></i> -->
        <ul>
            <li><a href="/wp-admin/admin.php?page=golem-settings">Theme Options</a></li>
        </ul>
    </span>

	<span class="logo"> 
		<span class="version">V.1.0.0</span>
	</span> 

	<span class="btn">

        <input class="save" type="submit" name="Submit" value="Save Options" />
        
		<!-- <a class="reset-all">Reset All</a>
        <a class="rest-section">Reset Section</a>-->
        
        <a class="theme-switch <?php if( get_option('glm-dev-theme') == "dark" ) { echo get_option('glm-dev-theme'); } ?>"> 
        
            <input id="glm-dev-theme-dark" type="radio" name="glm-dev-theme" value="dark" <?php if( get_option('glm-dev-theme') == "dark" ){ echo 'checked="checked"'; } ?> /> 
            <label for="glm-dev-theme-dark" title="Night Mode"> <i class="fas fa-moon"></i>  </label>
            
			<input id="glm-dev-theme-light" type="radio" name="glm-dev-theme" value="light" <?php if( get_option('glm-dev-theme') == "light" ){ echo 'checked="checked"'; } ?> /> 
            <label for="glm-dev-theme-light" title="Day Mode"> <i class="fas fa-sun"></i>  </label>
            
		</a>

	</span>

</span>