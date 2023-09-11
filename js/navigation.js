/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

//alert when entering page, use jquery
jQuery(document).ready(function() {
    var isMenuOpen = false;
    var $menuToggle = jQuery('.menu-toggle');
    var $mobileNavigation = jQuery('.mobile-navigation');

    // Click event handler for the menu toggle button
    $menuToggle.click(function() {
        if (!isMenuOpen) {
            // Menu is closed, open it
            isMenuOpen = true;
            $menuToggle.attr('aria-expanded', 'true');
            $mobileNavigation.slideDown();
        } else {
            // Menu is open, close it
            isMenuOpen = false;
            $menuToggle.attr('aria-expanded', 'false');
            $mobileNavigation.slideUp();
        }
    });

    // Resize event handler to close the menu if the screen is wider than 770px
    jQuery(window).resize(function() {
        if (jQuery(window).width() > 770 && isMenuOpen) {
            isMenuOpen = false;
            $menuToggle.attr('aria-expanded', 'false');
            $mobileNavigation.css('display', 'none');
        }
    });
});
