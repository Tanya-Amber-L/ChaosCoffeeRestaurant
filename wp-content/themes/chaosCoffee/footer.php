<footer class="footer">
    <?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
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
                        <div class="footer__blog__image-wrapper">
                            <img src="<?= get_field('banner_image'); ?>" alt="" class="footer__blog__article">
                        </div>
                        <p class="footer__blog__date"><?= get_the_date(); ?></p>
                        <p class="footer__blog__title"><?= get_field('banner_title'); ?></p>
                        <p class="footer__blog__subtitle"><?= get_field('banner_subtitle'); ?></p>
                        <a href="<?= the_permalink(); ?>">More infos</a>
                    </article><?php
                endwhile;
            endif; 
            wp_reset_postdata();
        ?>
    </section>
    <section class="footer__newsletter">
        <h2 class="footer__newsletter__title">JOIN OUR NEWSLETTER</h2>
        <form action="POST" class="footer__newsletter__form">
            <input type="email" placeholder="Your Email Address">
            <input type="submit" value="SUBSCRIBE">
        </form>
    </section>
    <section class="footer__general">

    </section>
    <section class="footer__bottom">
        <p class="footer__bottom_text">
            © 2019 All Rights Reserved. Designed by the Chaos Coffee Team.
        </p>
    </section>
</footer>
<?php wp_footer() ?>
</body>
</html>