<?php get_header(); ?>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>style/flexslider.css">

<!-- bannière contient notre titre, lien vers les menus + 3 qualités mises en avant  -->
<section class="banner">

    <div class="banner__title">
        <img class="banner__title__img" src="<?= get_field('banner_top_image')['url']; ?>" alt="">
        <img class="banner__title__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">
        <div class="banner__title__text">
            <h2 class="main-subtitle"> <?= get_field('banner_top_main_subtitle'); ?> </h2>
            <h1 class="main-title"> <?= get_field('banner_top_main_title'); ?> </h1>
            <a href="<?= get_field('banner_top_link')['url']; ?>"> &horbar;&horbar; <?= get_field('banner_top_link')['title']; ?> </a> 
        </div>
    </div>

    <div class="banner__pros">
        <div class="banner__pros__box">
            <img src="<?= get_field('banner_top_presentation_1_image')['url']; ?>" alt="">
            <div>
                <p class="title"> <?= get_field('banner_top_presentation_1_title'); ?> </p>
                <p class="detail"> <?= get_field('banner_top_presentation_1_detail'); ?> </p>
            </div>
        </div>
        <div class="banner__pros__box">
            <img src="<?= get_field('banner_top_presentation_2_image')['url']; ?>" alt="">
            <div>
                <p class="title"> <?= get_field('banner_top_presentation_2_title'); ?> </p>
                <p class="detail"> <?= get_field('banner_top_presentation_2_detail'); ?> </p>
            </div>
        </div>
        <div class="banner__pros__box">
            <img src="<?= get_field('banner_top_presentation_3_image')['url']; ?>" alt="">
            <div>
                <p class="title"> <?= get_field('banner_top_presentation_3_title'); ?> </p>
                <p class="detail"> <?= get_field('banner_top_presentation_2_detail'); ?> </p>
            </div>
        </div>
    </div>

</section>


<!-- intro contient une image et un bloc -->
<!-- bloc contient titre, texte, et signature -->
<section class="intro">

    <img class="intro__img" src="<?= get_field('intro_image')['url']; ?>" alt="">

    <div class="intro__text">
        <p class="title"> <?= get_field('intro_title'); ?> </p>
        <p class="subtitle"> <?= get_field('intro_subtitle'); ?> </p>
        <p> <?= get_field('intro_text'); ?> </p>
        <p class="signature">
            <p class="subtitle"> <?= get_field('intro_signature_subtitle'); ?> </p>
            <p class="title"> <?= get_field('intro_signature_title'); ?> </p>
        </p>
    </div>

    <img class="intro__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">

</section>


<!-- contient titre, et 1 bloc / restaurants (faire une boucle) -->
<section class="restau">

    <p class="subtitle"> <?= get_field('restaurants_subtitle'); ?> </p>
    <p class="title"> <?= get_field('restaurants_title'); ?> </p>

    <?php get_template_part('parts/restaurants') ?>

    <img class="restau__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">

</section>


<!-- section menu: contient titre, texte, images ded presentation, bouton -->
<!-- creation du document dans /parts parce qu'on aura besoin de l'appeler sur d'autres pages -->
<?php get_template_part('parts/discover-menu') ?>


<!-- contient un icone, texte, et signature / avis (faire une boucle) -->
<section class="testimony">

    <div class="slider">

        <?php
            if( have_rows('testimony') ): ?>

                <img class="testimony__top__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">

                <?php while( have_rows('testimony') ) : the_row(); ?>

                    <div class="slide-only">
                        <div class="slide-text">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/svg/right-quotation-mark.svg" alt="">
                            <p><?= get_sub_field("opinion"); ?></p>
                            <p class="signature">&horbar;<?= get_sub_field('author'); ?></p>
                        </div>
                        <img class="slide-img" src="<?= get_sub_field('image'); ?>" alt="">
                    </div>

                <?php endwhile;?>

                <div class="icon-arrow" id="prev" onclick="previousSlide()">
                    <svg height="50px" id="Layer_1" style="enable-background:new 0 0 50 50;" version="1.1" viewBox="0 0 512 512" width="50px" color="#fff" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg>
                </div>

                <div class="icon-arrow" id="next" onclick="nextSlide()">
                    <svg height="50px" id="Layer_1" style="enable-background:new 0 0 50 50;" version="1.1" viewBox="0 0 512 512" width="50px" color="#fff" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><polygon points="352,115.4 331.3,96 160,256 331.3,416 352,396.7 201.5,256 "/></svg>
                </div>

                <img class="testimony__btm__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">

        <?php endif;?>

    </div>

</section>

<?php get_template_part('parts/slider-script'); ?>
<?php get_template_part('parts/burger-menu-script'); ?>


<?php get_footer(); ?>