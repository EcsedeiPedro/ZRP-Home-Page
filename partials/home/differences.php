<section class="differences">
    <div class="container">
        <div class="background"></div>
        <div class="box-content">
            <div class="box-content__title">
                <h2><?php the_field('differences_title'); ?></h2>
            </div>

            <article class="box-content__text">
                <?php 
                    the_field('editor'); 
                    
                    $linkDifferencesButton= get_field('banner_differences_link');
                
                    if( $linkDifferencesButton ) { 
                        $linkDifferencesButton_url = $linkDifferencesButton['url'];
                        $linkDifferencesButton_title = $linkDifferencesButton['title'];
                        $linkDifferencesButton_target = $linkDifferencesButton['target'] ? $linkDifferencesButton['target'] : '_self';
                        
                        echo <<<BUTTONBANNERLINK
                            <a class="button" href="$linkDifferencesButton_url" target="$linkDifferencesButton_target">
                                $linkDifferencesButton_title
                            </a>
                        BUTTONBANNERLINK;
                    } 
                ?>
            </article>
        </div>
    </div>
</section>