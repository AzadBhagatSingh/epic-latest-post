<?php
	/*
	*	Plugin Name: Epic-Latest-Post
	*	Plugin URI: https://www.epicbusinesses.com/
	*	Description: This plugin displays latest post in page.
	*	Author: Azad Bhagat Singh
	*	Author URI: https://www.epicbusinesses.com/
	*	Version: 1.0.0
	*/

	if(!defined("ABSPATH")){
		exit;
	}

	if(!defined("EB_LP_DIR_PATH")){
		define("EB_LP_DIR_PATH",plugin_dir_path( __FILE__ ) );
	}

	if (!defined("EB_LP_URL")) {
		define("EB_LP_URL", plugins_url() . '/epic-latest-post' );
	}

	/*Plugin menu*/
	function eb_lp_menu(){
		add_menu_page( "Epic-Latest-Post", 'Epic Latest Post', 'manage_options', 'epic-latest-post', "eb_lp_menu_view", "" );
	}
	add_action( "admin_menu","eb_lp_menu" );

	function eb_lp_menu_view(){
		include_once( EB_LP_DIR_PATH . '/view/epic_lp_help_view.php' );
	}

	/*for Latest post*/
	function view_epic_latest_post() {
	    ob_start();
	    include_once('view/view_latest_post.php');
	    return ob_get_clean();
	}

	add_shortcode('epic_latest_post', 'view_epic_latest_post');
	/*end of Latest post code*/