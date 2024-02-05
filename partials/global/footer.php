<footer class="footer">
    <div class="container">
        <div class="brand">
            <?php 
                $homeUrlFooter = get_home_url();
                $logoFooterImg = get_field('logo_footer_image', 'option');
                
                echo <<<FOOTERLOGO
                    <a href="$homeUrlFooter" class="logo">
                        <img src="$logoFooterImg" alt="Logo ZRP">
                    </a>
                FOOTERLOGO;
            ?>

            <span>Consultoria Tecnológica e de Produtos Digitais</span>
        </div>

        <nav id="footer-navigation" class="footer-menu">
            <?php
                wp_nav_menu(array(
                    'theme_location' => 'footer',
                    'menu_id' => 'footer-menu',
                ));
            ?>
        </nav>

        <div class="social-media">
            <?php if( have_rows('social_media_links', 'option') ): while( have_rows('social_media_links', 'option') ) : the_row();
                $link = get_sub_field('social_media_item', 'option');
                
                if( $link ) { 
                    $link_url = $link['url'];
                    $link_title = $link['title'];
                    $link_target = $link['target'] ? $link['target'] : '_self';

                    echo <<<BUTTON
                        <a class="social-links" href="$link_url" target="$link_target">
                            $link_title
                        </a>
                    BUTTON;
                } 
            endwhile; else : endif; ?>
        </div>
    </div>

    <section class="footer__bottom">
        <div class="container">

        </div>
    </section>
</footer>