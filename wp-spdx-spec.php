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

  function activate() {
    //generated a CPT
    //flush rewrite rules
  }

  function deactivate() {
    //flush rewrite rules

  }

  function uninstall() {
    // delete CPT
    // delete all the plugin data from the DB 

  }
}

// Initialize the SPDXSpecificationPlugin class
if (class_exists('SPDXSpecificationPlugin')) {
  $spdx_spec_plugin = new SPDXSpecificationPlugin();
}

// activation
register_activation_hook( __FILE__, array( $spdx_spec_plugin, 'activate' ));

//deactivation
register_deactivation_hook( __FILE__, array( $spdx_spec_plugin, 'deactivate' ));

// uninstall
