<?php
/*
 * Plugin Name: Picafto
 * Plugin URI:  https://mel-macaluso.me/plugins/picafto
 * Description: Instantly, automatically and painlessly make your website faster by reducing image payload and lazy loading them.
 * Version:     1.1
 * Author:      Mel Macaluso
 * Author URI:  https://mel-macaluso.me
 * Text Domain: picafto
 * License:     GPL2
 * Copyright: Mel Macaluso
 */

if(!defined('PICAFTO_PATH'))
  define('PICAFTO_PATH', plugin_dir_path( __FILE__ ));
if(!defined('PICAFTO_URL'))
define('PICAFTO_URL', plugin_dir_url( __FILE__ ));


class Picafto {

  function __construct(){
    include( PICAFTO_PATH . 'includes/filter_content.php');

    function picafto_init() {
      wp_enqueue_script('picafto_script', PICAFTO_URL . 'build/js/picafto.min.js', [], false);
    }
    add_action( 'init', 'picafto_init' );

  }

}

new Picafto();