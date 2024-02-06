<section class="services" data-aos="fade-up" data-aos-duration="1000">
    <div class="container">
        <h3 class="title"><?php the_field('services_title'); ?></h3>

        <div class="boxes">
            <?php if( have_rows('boxes') ): while( have_rows('boxes') ) : the_row(); ?> 
                <div class="boxes__item" data-aos="fade-up" data-aos-duration="1500"> 
                    <span class="boxes__item--title"><?php the_sub_field('box_title'); ?></span>
                    <span class="boxes__item--description"><?php the_sub_field('box_description'); ?></span>
                </div>
            <?php endwhile; endif; ?>
        </div>

        <?php  
            $linkServicesButton= get_field('services_button_link');
        
            if( $linkServicesButton ) { 
                $linkServicesButton_url = $linkServicesButton['url'];
                $linkServicesButton_title = $linkServicesButton['title'];
                $linkServicesButton_target = $linkServicesButton['target'] ? $linkServicesButton['target'] : '_self';
                
                echo <<<SERVICESBUTTON
                    <a class="button" href="$linkServicesButton_url" target="$linkServicesButton_target">
                        $linkServicesButton_title
                        <div class="arrow-icon"></div>
                    </a>
                SERVICESBUTTON;
            } 
        ?>
    </div>
</section>