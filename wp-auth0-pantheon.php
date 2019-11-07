<?php
/**
 * Plugin Name: WP Auth0 Pantheon Helper
 * Plugin URL: https://auth0.com/docs/cms/wordpress
 * Description: Login by Auth0 provides improved username/password login, Passwordless login, Social login, MFA, and Single Sign On for all your sites.
 * Version: 3.11.1
 * Author: Tyler Fahey
 * Author URI: https://twf.dev
 * Text Domain: wp-auth0
 */


function wp_auth0_pantheon_add_styx_prefix_to_state()
{
    return 'STYXKEY_auth0_state';
}

function wp_auth0_pantheon_add_styx_prefix_to_nonce()
{
    return 'STYXKEY_auth0_nonce';
}

add_filter('auth0_state_cookie_name', 'wp_auth0_pantheon_add_styx_prefix_to_state');
add_filter('auth0_nonce_cookie_name', 'wp_auth0_pantheon_add_styx_prefix_to_nonce');
