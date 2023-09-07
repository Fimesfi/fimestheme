<?php

/* Functions */

if(!function_exists('themetemplate_setup')) {
    function themetemplate_setup() {

    }
}

// Run function after theme setup
add_action('after_setup_theme', 'themetemplate_setup');

// Function to register menus
function register_themetemplate_menus() {
    register_nav_menus(array(
        'primary' => __('Navigointi')
    ));
}

// Poistaa käyttäjätunnuksen linkitetyistä embedeistä
add_filter( 'oembed_response_data', 'disable_embeds_filter_oembed_response_data_' );
function disable_embeds_filter_oembed_response_data_( $data ) {
    unset($data['author_url']);
    unset($data['author_name']);
    return $data;
}
