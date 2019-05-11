<?php
/**
*@package SPDXSpecificationPlugin
*/
/*
Plugin Name: SPDX Specification Plugin
Plugin URI: http://spdx.com/Plugin
Description: SPDX Specification Extension for wordpress
Version: 1.0.0
Authur: Nuvadga C. Tete
Authur URI: https://krysnuvadga.github.io
License: GPLv2 or later
Text Domain: spdx-spec-plugin
*/

/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright (C) 2019  Nuvadga C. Tete
*/

if( ! defined('ABSPATH')) {
  echo "Action not permmitted";
  die;
}

/**
 *
 */
class SPDXSpecificationPlugin {

  function __construct() {
    add_action( 'init', array( $this, 'custom_post_type'));
    add_shortcode('spdx-specs', array( $this, 'get_custom_post'));
  }

  function register_admin_script() {
    add_action('admin_enqueue_scripts', array( $this, 'enqueue'));
  }

  function custom_post_type() {
    register_post_type( 'SPDX Specification', ['public' => true, 'label' => 'SPDX Specifications', 'supports' => array('title', 'editor', 'thumbnail')] );
  }

  function get_custom_post() {
    $args = array(
            'posts_per_page' => -1,
            'post_type' => 'spdxspecification'
    );
    $myPosts = get_posts($args);
    $content = '';
    foreach ($myPosts as $key => $value) {
      $content .= '<a href="'.get_permalink($value->ID).'"><strong>'.$value->post_title. '</strong></a><br />';
    }
    return $content;
  }

  function enqueue() {
    //enqueue all scripts
    wp_enqueue_style( 'spdxpluginstyle', plugins_url('/assets/style.css', __FILE__));
    wp_enqueue_style( 'spdxpluginscript', plugins_url('/assets/script.js', __FILE__));
  }
}

// Initialize the SPDXSpecificationPlugin class
if (class_exists('SPDXSpecificationPlugin')) {
  $spdx_spec_plugin = new SPDXSpecificationPlugin();
  $spdx_spec_plugin->register_admin_script();
}

// activation
require_once plugin_dir_path(__FILE__) . 'inc/plugin-activate.php';
register_activation_hook( __FILE__, array( 'SPDXPluginActivate', 'activate' ));

//deactivation
require_once plugin_dir_path(__FILE__) . 'inc/plugin-deactivate.php';
register_deactivation_hook( __FILE__, array( 'SPDXPluginDeactivate', 'deactivate' ));

// uninstall
