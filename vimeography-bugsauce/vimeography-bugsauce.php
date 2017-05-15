<?php
/*
Plugin Name: Vimeography Theme: Bugsauce
Plugin URI: https://vimeography.com/themes
Theme Name: Bugsauce
Theme URI: https://vimeography.com/themes/bugsauce
Version: 2.0
Description: is the base theme that comes prepackaged with Vimeography.
Author: Dave Kiss
Author URI: https://vimeography.com
Copyright: Dave Kiss
*/

if ( ! class_exists('Vimeography_Themes_Bugsauce') ) {
  class Vimeography_Themes_Bugsauce {
    /**
     * The current version of this theme
     *
     * @var string
     */
    public $version = '2.0';


    /**
     * Include this theme in the Vimeography theme loader.
     */
    public function __construct() {
      add_action('plugins_loaded', array( $this, 'load_theme' ) );
    }


    /**
     * Has to be public so the wp actions can reach it.
     * @return [type] [description]
     */
    public function load_theme() {
      do_action('vimeography/load-addon-plugin', __FILE__);
    }


    /**
     * Register js + css dependencies used by this theme
     *
     * @return void
     */
    public static function load_dependencies() {
      // if ( defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ) {
      //   wp_register_script('')
      // }
    }

  }
  new Vimeography_Themes_Bugsauce;
}
