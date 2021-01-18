<!-- CONDITION + BOUCLE - POST RESTAURANT - START -->
<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>

<!-- POST RESTAURANT - START -->
<section class="restaurant__container">
    <!-- BANNER - START -->
    <div class="restaurant__banner" style="background-image:url('<?= get_field('top_image')['url']; ?>');">
        <p class="subtitle"><?= get_field('top_subtitle'); ?></p>
        <h1 class="main-title"><?= get_field('top_main_title'); ?></h1>
        <a class="menu-text" href="#">Check our menu</a>
<!--        <img src="--><?//= get_field('top_image')['url']; ?><!--" alt="background">-->
    </div>
    <!-- BANNER - END -->

    <!-- PRESENTATION - START -->
    <div class="restaurant__presentation">
        <p class="subtitle"><?= get_field('presentation_subtitle'); ?></p>
        <h2 class="title"><?= get_field('presentation_title'); ?></h2>
        <?php
        if( have_rows('presentation_repeater') ):
            while( have_rows('presentation_repeater') ): the_row();
        ?>
                <img src="<?= get_sub_field('presentation_repeater_image')['url']; ?>" alt="restaurant">
                <p class="subtitle"><?= get_sub_field('presentation_repeater_subtitle') ?></p>
                <h3 class="title"><?= get_sub_field('presentation_repeater_title') ?></h3>
                <p class="restaurant__wysiwig"><?= get_sub_field('presentation_repeater_wysiwig') ?></p>
        <?php
            endwhile;
        endif;
        ?>
    </div>
    <!-- PRESENTATION - END -->

    <!-- LOCATION - START -->
    <div class="restaurant__location">
        <h3 class="title"><?= get_field('location_subtitle'); ?></h3>
        <h2 class="title"><?= get_field('location_title'); ?></h2>
        <div><?= get_field('location_map'); ?></div>
    </div>
    <!-- LOCATION - END -->
</section>
<!-- POST RESTAURANT - END -->

<?php endwhile; endif; ?>
<!-- CONDITION + BOUCLE - POST RESTAURANT - END -->

