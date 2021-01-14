<?php
$args = array('post_type' => 'post', 'category_name' => 'restaurant');

$the_query = new WP_Query( $args );
?>

<?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="restau__presentation">
        <div class="restau__presentation__text">
            <p class="subtitle"><?= get_field('banner_top_main_subtitle'); ?></p>
            <p class="title"><?= get_field('banner_top_main_title'); ?></p>
            <p><?= get_field('presentation_qualities'); ?></p>
            <a href="single-restaurant.php"> More infos </a>
            <!-- lien à changer -->
        </div>
        <img src="<?= get_field('banner_top_image')['url']; ?>" alt="">
    </div>

<?php endwhile; endif;
wp_reset_postdata();
?>