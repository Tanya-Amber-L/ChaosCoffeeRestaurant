<section class="restau">

    <p class="subtitle"> <?= get_field('restaurants_subtitle'); ?> </p>
    <p class="title"> <?= get_field('restaurants_title'); ?> </p>

        <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

            <div class="restau__presentation">
                <img class="restau__img" src="<?= get_field('top_image')['url']; ?>" alt="">

                <div class="restau__presentation__text">
                    <p class="subtitle"><?= get_field('top_subtitle'); ?></p>
                    <p class="title"><?= get_field('top_main_title'); ?></p>

                    <?php if( have_rows('presentation_repeater') ): the_row();?>

                        <div class="normal-text"><?= get_sub_field('presentation_repeater_textArea'); ?></div>
                
                    <?php endif;?>
                    
                    <a href="<?php the_permalink(); ?>"> More infos </a>
                </div>
            </div>

        <?php endwhile; endif;
        ?>
    <img class="restau__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">

</section>