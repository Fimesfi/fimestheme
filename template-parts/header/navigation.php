<nav id="site-navigation" class="main-navigation">
    <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><svg width="32px" height="32px" stroke-width="1.5" viewBox="0 0 24 24" fill="#F6F6F6" xmlns="http://www.w3.org/2000/svg" color="#F6F6F6"><path d="M3 5h18M3 12h18M3 19h18" stroke="#F6F6F6" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg></button>
    <?php
        wp_nav_menu(
            array(
                'theme_location' => 'main-navigation',
                'menu_id'        => 'primary-menu',
                'menu_class'     => 'nav-menu',
            )
        );
    ?>
</nav>

<div class="cta-container">
    <a href="#" class="button icon-button">
        <div class="button-container">
            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M16.4868 22V19.7071C16.5175 19.3256 16.4646 18.9441 16.3317 18.5835C16.1979 18.2227 15.988 17.8948 15.7163 17.6223C18.2923 17.3429 21 16.3915 21 12.0298C21 10.9148 20.5594 9.84156 19.7692 9.0342C20.1436 8.05959 20.117 6.97646 19.6954 6.02136C19.6954 6.02136 18.7268 5.74198 16.4868 7.20409C14.6047 6.70794 12.6261 6.70794 10.744 7.20409C8.504 5.74198 7.53538 6.02259 7.53538 6.02259C7.11443 6.97698 7.08789 8.05909 7.46154 9.03297C6.66955 9.83785 6.22725 10.9228 6.23077 12.052C6.23077 16.3829 8.93846 17.3331 11.5145 17.6444C11.2457 17.9146 11.0376 18.2389 10.904 18.5958C10.7714 18.95 10.7168 19.3287 10.744 19.7059V22M10.744 20.4025C8.28246 21.1791 6.23077 20.4025 5 18.005" stroke="#E9FBFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M13.5 26C20.4037 26 26 20.4037 26 13.5C26 6.59625 20.4037 1 13.5 1C6.59625 1 1 6.59625 1 13.5C1 20.4037 6.59625 26 13.5 26Z" stroke="#E9FBFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            Github
        </div>
    </a>  
</div>
