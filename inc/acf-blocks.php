<?php

//Gutenberg styles setup
function fimestheme_blocks_setup() {
    add_theme_support( 'editor-styles' );
    add_editor_style( '/css/gutenberg.css' );
}

add_action('after_setup_theme', 'fimestheme_blocks_setup');

//Register blocks
function acf_blocks_init() {
    if(function_exists('acf_register_block')) {
        register_block_type(get_theme_file_path('/blocks/hero/'));
    }
}

add_action('acf/init', 'acf_blocks_init');