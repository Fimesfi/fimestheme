<?php
/**
 * Custom template tags for this theme
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package Fimestheme
 */

 
if ( ! function_exists( 'fimestheme_post_thumbnail_url' ) ) :
    /**
     * Retrieves the post thumbnail URL.
     *
     * Returns the URL of the post thumbnail image.
     *
     * @return string|false The post thumbnail URL, or false if no thumbnail is available.
     */
    function fimestheme_post_thumbnail_url() {
        if ( post_password_required() || is_attachment() || ! has_post_thumbnail() ) {
            return false;
        }

        // Get post thumbnail URL
        $thumbnail_id = get_post_thumbnail_id();
        $thumbnail_url = wp_get_attachment_image_src( $thumbnail_id, 'thumbnail' );

        if ( $thumbnail_url ) {
            return $thumbnail_url[0];
        } else {
            return false;
        }
    }
endif;


if ( ! function_exists( 'wp_body_open' ) ) :
	/**
	 * Shim for sites older than 5.2.
	 *
	 * @link https://core.trac.wordpress.org/ticket/12563
	 */
	function wp_body_open() {
		do_action( 'wp_body_open' );
	}
endif;
