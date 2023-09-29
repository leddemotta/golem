<?php
/* ======================================================= */
/* Tornar o template disponível para tradução /languages
/* https://github.com/ajaxorg/ace
/* https://ace.c9.io/#nav=embedding
www.wplocker.com
`swiper.slideTo(3, 0)` 


GUIA PARA DFINIÇÃO DE VERSÃO
1. Uma mudança simples, como correção de bugs, altera o último dígito da versão 9.9.X
2. Uma mudança que insere/remove funcionalidades altera o dígito central 9.X.0
3. Uma mudança que altera completamente o funcionamento do plugin altera o dígito inicial X.0.0
*/
//'VERSION' => '3.9.2',

/*
PADRÃO DE DEFINIÇÃO DE BUILD

PADRÃO: ANO MES DIA HORA MINUTO (sem espaços, pontos ou qualquer outro caractere separando os valores)
Sendo: ANO com quatro dígitos
        MES e DIA com dois dígitos
        HORA e MINUTO com dois dígitos
*/
//'BUILD' => '201803201742',

/*
PADRÃO PARA DEFINIÇÃO DO JSVERSION

O JSVERSION é utilizado para ser exibido no console JavaScript do navegador quando o GDS é carregado para facilitar
a identificação de qual versão o cliente está rodando e tornar possível a identificação de problemas com cache.

PADRÃO: v MES DIA . HORA MINUTO (sem espaços separando os valores)
 * 
 * 
/* ======================================================= */

load_theme_textdomain( 'golem', TEMPLATEPATH . '/languages' );
 
$locale = get_locale();
$locale_file = TEMPLATEPATH . "/languages/$locale.php";
if ( is_readable($locale_file) )
   require_once($locale_file);

 
/* ======================================================= */
/* Qhitelist JWT
/* ======================================================= 

add_filter('api_bearer_auth_unauthenticated_urls', 'api_bearer_auth_unauthenticated_urls_filter', 10, 2);
   function api_bearer_auth_unauthenticated_urls_filter($custom_urls, $request_method) {
     var_dump($custom_urls);
     switch ($request_method) {
       case 'POST':
         $custom_urls[] = '/api-bearer-auth/v1/login';
         $custom_urls[] = '/users/register';
         $custom_urls[] = '/users/lost-password';
         break;
       case 'GET':
         $custom_urls[] = '/wp-json/myplugin/v1/something/other/?';
         break;
     }
     return $custom_urls;
   }

/* ======================================================= */
/* Puxar o número de página
/* ======================================================= */

function get_page_number() {
	if ( get_query_var('paged') ) {
		print ' - ' . __( 'Page ' , 'golem') . get_query_var('paged');
	}
} 

/* ======================================================= */
/* Verificar widgets nas Áreas de widgets
/* ======================================================= */

function is_sidebar_active( $index ){
	
	global $wp_registered_sidebars;
	$widgetcolums = wp_get_sidebars_widgets();
	if ($widgetcolums[$index]) return true;

	return false; // end is_sidebar_active
	
} 

/* ======================================================= */
/* Registrar áreas de widgets
/* ======================================================= */

function theme_widgets_init() {
	
 // Área 1
 register_sidebar( array (
	 'name' => 'Primary Widget Area',
	 'id' => 'primary_widget_area',
	 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	 'after_widget' => "</li>",
	 'before_title' => '<h3 class="widget-title">',
	 'after_title' => '</h3>',
  ) );
 
 // Área 2
 register_sidebar( array (
	 'name' => 'Secondary Widget Area',
	 'id' => 'secondary_widget_area',
	 'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
	 'after_widget' => "</li>",
	 'before_title' => '<h3 class="widget-title">',
	 'after_title' => '</h3>',
  ) );
	
} 
 
add_action( 'init', 'theme_widgets_init' );

/* ======================================================= */

$preset_widgets = array (
	'primary_widget_area'  => array( 'search', 'pages', 'categories', 'archives' ),
	'secondary_widget_area'  => array( 'links', 'meta' )
);

if ( isset( $_GET['activated'] ) ) {
	update_option( 'sidebars_widgets', $preset_widgets ); // update_option( 'sidebars_widgets', NULL );
}


/* ======================================================= */
/* Golem is Mobile
/* ======================================================= */

function glm_mobile() {
    return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
}


/* ======================================================= */
/* Golem is Mobile
/* ======================================================= */

if(get_option('glm-dev-theme') == "dark") { 

	function glm_dev_theme( $classes ) {

		$classes .= 'dark';
		return $classes;

	}
	add_filter( 'admin_body_class', 'glm_dev_theme' );
	
}

/* ======================================================= */
/* Golem is Mobile
/* ======================================================= */

function myPlugin_admin_scripts() {
   if ( is_admin() ){ // for Admin Dashboard Only
      // Embed the Script on our Plugin's Option Page Only
      if ( isset($_GET['page']) && $_GET['page'] == 'golem-settings' ) {
         wp_enqueue_script('jquery');
				 wp_enqueue_script( 'jquery-form' );
      }
   }
}
add_action( 'admin_init', 'myPlugin_admin_scripts' );



add_action('admin_enqueue_scripts', 'codemirror_enqueue_scripts');
 
function codemirror_enqueue_scripts($hook) {
  $cm_settings['codeEditor'] = wp_enqueue_code_editor(array('type' => 'text/css'));
  wp_localize_script('jquery', 'cm_settings', $cm_settings);
 
  wp_enqueue_script('wp-theme-plugin-editor');
  wp_enqueue_style('wp-codemirror');
}


// ========================================================================================
// ADD OPTIONS PAGE LINK
// ========================================================================================

function add_global_custom_options() {
	
	add_menu_page('Golem Settings', 'Golem Settings', 'manage_options', 'golem-settings', 'global_custom_options');
	
	if( get_option("glm-header-layout") == "custom" ) {
	    add_submenu_page( 'golem-settings', 'Header Builder', 'Header Builder', 'manage_options', 'glm-header-builder', 'glm_options_page_header_builder');
	}
	
}

add_action('admin_menu', 'add_global_custom_options');


// ========================================================================================
// ADD OPTIONS PAGE LINK WP BAR
// ========================================================================================

function my_new_toolbar_item( $wp_admin_bar ) {

	$args = array(
		'id'    => 'golem-settings',
		'title' => 'Golem Settings',
		'href'  => admin_url().'admin.php?page=golem-settings'
    );
    
	$wp_admin_bar->add_node( $args );

}

add_action( 'admin_bar_menu', 'my_new_toolbar_item', 999 );



// ========================================================================================
// GOLEM OPTIONS PAGE INCLUDES
// ======================================================================================== 

add_action("after_switch_theme", "create_options_table");

$glm_theme_version = '1.0';

function create_options_table(){
    global $wpdb;

    require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
    $table_name = $wpdb->prefix . "golem"; 
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
      id int(10) unsigned NOT NULL AUTO_INCREMENT,
      gml_option_name varchar(255) NOT NULL,
      glm_option_value varchar(255) NOT NULL,
    
      PRIMARY KEY  (id),
      KEY Index_2 (gml_option_name),
      KEY Index_3 (glm_option_value)
    ) $charset_collate;";

    dbDelta( $sql );

    add_option( 'glm_theme_version', $glm_theme_version );

}

// GENERAL OPTIONS
include_once( get_template_directory().'/includes/options/pages/general-settings.php' ); 

// HEADER BUILDER
include_once( get_template_directory().'/includes/options/pages/header-builder.php' ); 

// 

function wpb_custom_new_menu() {
    register_nav_menus(
      array(
        'glm-main-menu' => __( 'Golem Main Menu' ),
        'glm-top-menu' => __( 'Golem Top Menu' )
      )
    );
  }
  add_action( 'init', 'wpb_custom_new_menu' );