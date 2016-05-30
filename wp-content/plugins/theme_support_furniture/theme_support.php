<?php
/*
Plugin Name: Theme Support Furniture House (shared on wplocker.com)
Plugin URI: http://themeforest.net/user/JollyThemes
Description: This plugin is compatible with all jollythemes wordpress themes. 
Author: Shahbaz Ahmed
Author URI: http://wow-themes.com
Version: 1.4
Text Domain: SH_NAME
*/
if( !defined( 'SH_TH_ROOT' ) ) define('SH_TH_ROOT', plugin_dir_path( __FILE__ ));
if( !defined( 'SH_TH_URL' ) ) define( 'SH_TH_URL', plugins_url( '', __FILE__ ) );
if( !defined( 'SH_NAME' ) ) define( 'SH_NAME', 'wp_furniture' );
include_once( 'includes/loader.php' );