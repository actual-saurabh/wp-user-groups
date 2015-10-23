<?php

/**
 * User Groups Admin
 *
 * @package UserGroups/Admin
 */

// Exit if accessed directly
defined( 'ABSPATH' ) || exit;

/**
 * Tweak admin styling for a user groups layout
 *
 * @since 0.1.4
 */
function wp_user_groups_admin_assets() {
	wp_enqueue_style( 'wp_user_groups', wp_user_groups_get_plugin_url() . '/assets/css/user-groups.css', false, wp_user_groups_get_asset_version(), false );
}


/**
 * Add new section to User Profiles
 *
 * @since 0.1.9
 *
 * @param array $sections
 */
function wp_user_groups_add_profile_section( $sections = array() ) {

	// Copy for modifying
	$new_sections = $sections;

	// Add the "Activity" section
	$new_sections['groups'] = array(
		'slug' => 'groups',
		'name' => esc_html__( 'Groups', 'wp-user-activity' ),
		'cap'  => 'edit_user'
	);

	// Filter & return
	return apply_filters( 'wp_user_groups_add_profile_section', $new_sections, $sections );
}
