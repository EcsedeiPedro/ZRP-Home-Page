<section class="faq">
    <div class="container">
        <div class="esq">
            <h3><?php the_field('title'); ?></h3>
            <p><?php the_field('text'); ?></p>
            
            <?php  
                $linkFaqButton= get_field('faq_button_link');
            
                if( $linkFaqButton ) { 
                    $linkFaqButton_url = $linkFaqButton['url'];
                    $linkFaqButton_title = $linkFaqButton['title'];
                    $linkFaqButton_target = $linkFaqButton['target'] ? $linkFaqButton['target'] : '_self';
                    
                    echo <<<FAQBUTTON
                        <a class="button" href="$linkFaqButton_url" target="$linkFaqButton_target">
                            $linkFaqButton_title
                            <div class="arrow-icon"></div>
                        </a>
                    FAQBUTTON;
                } 
            ?>
        </div>

        <div class="faqs">
            <?php if( have_rows('faqs') ): while( have_rows('faqs') ) : the_row(); ?>
                <div class="faqs__item">
                    <div class="faqs__item--header">
                        <?php the_sub_field('faq_title'); ?>
                        <div class="open-close-icon"></div>
                    </div>

                    <div class="faqs__item--content">
                        <?php the_sub_field('editor'); ?>
                    </div>
                </div>
            <?php endwhile; endif; ?>
        </div>
    </div>
</section>

<script>
    (function($) {
        $('.faqs__item--content').hide();

        $('.faqs__item--header').on('click', function() {
            var content = $(this).next('.faqs__item--content');
            $('.faqs__item--content').not(content).slideUp(300);
            content.slideToggle(300);

            $('.faqs__item--header .open-close-icon').not($(this).find('.open-close-icon')).removeClass('active');
            $(this).find('.open-close-icon').toggleClass('active');
        });
    })(jQuery);
</script>