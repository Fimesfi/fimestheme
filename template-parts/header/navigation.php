    <nav id="site-navigation" class="main-navigation">
        <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><svg width="32px" height="32px" stroke-width="1.5" viewBox="0 0 24 24" fill="#F6F6F6" xmlns="http://www.w3.org/2000/svg" color="#F6F6F6"><path d="M3 5h18M3 12h18M3 19h18" stroke="#F6F6F6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
        <?php
            wp_nav_menu(
                array(
                    'theme_location' => 'menu-1',
                    'menu_id'        => 'primary-menu',
                    'menu_class'     => 'nav-menu',
                )
            );
        ?>
    </nav>
</div>
<div class="mobile-navigation">
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'menu-1'
            )
        );
    ?>
</div>