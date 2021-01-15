<?php
$args = array('post_type' => 'post', 'category_name' => 'restaurant');

$the_query = new WP_Query( $args );
?>

<?php if( $the_query->have_posts() ) : while( $the_query->have_posts() ) : $the_query->the_post(); ?>

    <div class="restau__presentation">
        <div class="restau__presentation__text">
            <p class="subtitle"><?= get_field('top_subtitle'); ?></p>
            <p class="title"><?= get_field('top_main_title'); ?></p>

            <?php
            if( have_rows('presentation_repeater') ):
                
                while( have_rows('presentation_repeater') ) : the_row();?>

                    <p> <?php the_sub_field('presentation_repeater_wysiwig'); ?> </p>
            
            <?php endwhile; endif;?>
            
            <a href="single-restaurant.php"> More infos </a>
        </div>
        <img src="<?= get_field('top_image')['url']; ?>" alt="">
    </div>

<?php endwhile; endif;
wp_reset_postdata();
?>