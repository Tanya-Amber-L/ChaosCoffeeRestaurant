<!-- CONDITION + BOUCLE - POST RESTAURANT - START -->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<!-- POST RESTAURANT - START -->
<section class="restaurant__container">
    <!-- BANNER - START -->
    <div class="restaurant__banner" style="background-image:url('<?= get_field('top_image')['url']; ?>');">
        <p class="subtitle restaurant__banner--p"><?= get_field('top_subtitle'); ?></p>
        <h1 class="main-title restaurant__banner--h1"><?= get_field('top_main_title'); ?></h1>
        <a class="restaurant__banner--a menu-text" href="#">&horbar;&nbsp;Check our menu</a>
<!--        <img src="--><?//= get_field('top_image')['url']; ?><!--" alt="background">-->
    </div>
    <!-- BANNER - END -->

    <!-- PRESENTATION - START -->
    <div class="restaurant__presentation">
        <p class="subtitle restaurant__presentation--p"><?= get_field('presentation_subtitle'); ?></p>
        <h2 class="title restaurant__presentation--h2"><?= get_field('presentation_title'); ?></h2>
        <?php
        if( have_rows('presentation_repeater') ):
            while( have_rows('presentation_repeater') ): the_row();
        ?>
            <div class="restaurant__presentation__div">
                <div class="restaurant__presentation__img" style="background-image:url('<?= get_sub_field('presentation_repeater_image')['url']; ?>');">
                </div>
                <div class="restaurant__presentation__text">
                    <p class="subtitle restaurant__presentation__div--p"><?= get_sub_field('presentation_repeater_subtitle') ?></p>
                    <h3 class="title restaurant__presentation__div--h3"><?= get_sub_field('presentation_repeater_title') ?></h3>
                    <p class="restaurant__presentation__div__textArea"><?= get_sub_field('presentation_repeater_textArea') ?></p>
                </div>
            </div>

                <div class="restaurant__presentation__div">
                    <div class="restaurant__presentation__img" style="background-image:url('<?= get_sub_field('presentation_repeater_image')['url']; ?>');">
                    </div>
                    <div class="restaurant__presentation__text">
                        <p class="subtitle restaurant__presentation__div--p"><?= get_sub_field('presentation_repeater_subtitle') ?></p>
                        <h3 class="title restaurant__presentation__div--h3"><?= get_sub_field('presentation_repeater_title') ?></h3>
                        <p class="restaurant__presentation__div__textArea"><?= get_sub_field('presentation_repeater_textArea') ?></p>
                    </div>
                </div>

            <div class="restaurant__presentation__gray"></div>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    <!-- PRESENTATION - END -->

    <!-- LOCATION - START -->
    <div class="restaurant__location">
        <h3 class="title restaurant__location--h3"><?= get_field('location_subtitle'); ?></h3>
        <h2 class="title restaurant__location--h2"><?= get_field('location_title'); ?></h2>
        <div class="restaurant__location--map"><?= get_field('location_map'); ?></div>
    </div>
    <!-- LOCATION - END -->
</section>
<!-- POST RESTAURANT - END -->

<!-- RESERVATION - START -->
<?= get_template_part( "parts/reservation" ); ?>
<!-- RESERVATION - END -->

<!-- DISCOVER - START -->
<?= get_template_part( "parts/discover-menu" ); ?>
<!-- DISCOVER - END -->

<?php endwhile; endif; ?>
<!-- CONDITION + BOUCLE - POST RESTAURANT - END -->

