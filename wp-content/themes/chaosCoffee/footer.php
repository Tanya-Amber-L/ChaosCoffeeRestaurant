<footer class="footer">
    <div class="footer__container-light">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" class="footer__top__light">
        <section class="footer__blog">
            <?php 
                $args = array('post_type' => 'post', 'category_name' => 'recipe');
                $the_query = new WP_Query( $args );
                if( $the_query->have_posts() ) :
                    $i = 0;
                    while( $the_query->have_posts() AND $i < 4) :
                        $the_query->the_post(); 
                        $i++; ?>
                        <article class="footer__blog__article">
                            <div class="footer__blog__top">
                                <div class="footer__blog__image-wrapper">
                                    <img src="<?= get_field('banner_image'); ?>" alt="" class="footer__blog__image">
                                </div>
                                <div class="footer__blog__content">
                                    <p class="footer__blog__date">
                                        <img src="<?= get_template_directory_uri(); ?>/assets/svg/time-clock.svg" alt="" class="footer__blog__clock"> 
                                        <?= get_the_date(); ?>
                                    </p>
                                    <p class="footer__blog__title"><?= get_field('banner_title'); ?></p>
                                    <p class="footer__blog__subtitle"><?= substr( get_field('banner_subtitle'), 0, 100 )."…"; ?></p>
                                </div>
                            </div>
                            <div class="footer__blog__link">
                                <hr class="footer__blog__line">
                                <a href="<?= the_permalink(); ?>" class="footer__blog__more">READ MORE</a>
                            </div>
                        </article><?php
                    endwhile;
                endif;
                wp_reset_postdata();
            ?>
        </section>
        <section class="footer__newsletter">
            <img src="<?= get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" class="footer__top__dark">
            <h2 class="footer__newsletter__title">JOIN OUR NEWSLETTER</h2>
            <form action="POST" class="footer__newsletter__form">
                <input type="email" placeholder="Your Email Address">
                <input type="submit" value="SUBSCRIBE">
            </form>
        </section>
    </div>
    <div class="footer__container-dark">
        <img src="<?= get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" class="footer__top__dark">
        <section class="footer__general">
            <div class="footer__general__element1">
                <?php dynamic_sidebar( 'footer1' ); ?>
            </div>
            <div class="footer__general__element2">
                <?php dynamic_sidebar( 'footer2' ); ?>
            </div>
            <div class="footer__general__element2">
                <?php dynamic_sidebar( 'footer3' ); ?>
            </div>
            <div class="footer__general__element3">
                <?php dynamic_sidebar( 'footer4' ); ?>
            </div>
            <!-- <div class="footer__general__background"></div> -->
        </section>
        <section class="footer__bottom">
            <p class="footer__bottom_text">
                © 2019 All Rights Reserved. Designed by the Chaos Coffee Team.
            </p>
        </section>
    </div>
</footer>
<?php wp_footer() ?>
</body>
</html>