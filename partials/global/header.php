<header class="header">
    <div class="container-header">
        <?php 
            $homeUrl = get_home_url();
            $logoImg = get_field('logo_image', 'option');

            echo <<<LOGO
                <a href="$homeUrl" class="logo">
                    <img src="$logoImg" alt="Logo ZRP">
                </a>
            LOGO;
        ?>

        <nav id="site-navigation" class="main-navigation">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'primary',
                    'menu_id' => 'primary-menu',
                ));
            ?>
        </nav>

        <div class="right">
            <?php 
                $link = get_field('contact_button', 'option');

                if( $link ) { 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';

                    echo <<<BUTTON
                        <a class="button" href="$link_url" target="$link_target">
                            $link_title
                        </a>
                    BUTTON;
                } 
            ?>

            <div class="mobile-menu-button" id="js-menu-toggle">
                <div></div>
            </div>
        </div>
    </div>
</header>