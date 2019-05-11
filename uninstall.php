<?php

/**
* Triggers when plugin is uninstall
*
* @package SPDXSpecificationPlugin
*/

if(! defined( 'WP_UNINSTALL_PLUGIN' )) {
  die;
}

//Clear Database stored data
global $wpdb;
$wpdb->query( "DELETE FROM wp_posts WHERE post_type = 'spdxspecification' ");
$wpdb->query( "DELETE FROM wp_postmeta WHERE post_id NOT IN (SELECT id FROM wp_posts) ");
$wpdb->query( "DELETE FROM wp_term_relationships WHERE object_id NOT IN (SELECT id FROM wp_posts) ");
