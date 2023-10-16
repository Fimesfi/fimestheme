<div class="site-branding">
    <a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>">
        <span class="screen-reader-text"><?php bloginfo( 'name' ); ?></span>
        <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                echo '<img width="100" height="100" class="logo no-hover" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
            } else {
                echo '<h1>' . get_bloginfo('name') . '</h1>';
            }
        ?>
    </a>
</div>