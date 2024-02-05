<section class="banner">
    <div class="container">
        <div class="content">
            <h1><?php the_field('banner_title'); ?></h1>
            <p><?php the_field('banner_text'); ?></p>

            <div class="content__button">
                <?php 
                    $linkButtonBanner = get_field('banner_button_link');
                    
                    if( $linkButtonBanner ) { 
                        $linkButtonBanner_url = $linkButtonBanner['url'];
                        $linkButtonBanner_title = $linkButtonBanner['title'];
                        $linkButtonBanner_target = $linkButtonBanner['target'] ? $linkButtonBanner['target'] : '_self';
                        
                        echo <<<BUTTONBANNERLINK
                        <a class="button" href="$linkButtonBanner_url" target="$linkButtonBanner_target">
                        $linkButtonBanner_title
                        </a>
                        BUTTONBANNERLINK;
                    } 
                ?>
            </div>
        </div>

        <?php
            $img = get_field('banner_image');
            $imgUrl = $img['url'];
            $imgAlt = $img['alt'];
        
            if (!empty($img)) {
                echo <<<BANNERPICTURE
                    <img class="banner-picture" src="$imgUrl" alt="$imgAlt">
                BANNERPICTURE;
            }
        ?>
    </div>
</section>