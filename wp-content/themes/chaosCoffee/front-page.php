<?php get_header(); ?>

<!-- bannière contient notre titre, lien vers les menus + 3 qualités mises en avant  -->
<section class="banner">

    <div class="banner__title">
        <img class="banner__title__img" src="<?= get_field('banner_top_image')['url']; ?>" alt="">
        <!-- <img class="hachures-blanches" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt=""> -->
        <div class="banner__title__text">
            <h2 class="main-subtitle"> <?= get_field('banner_top_main_subtitle'); ?> </h2>
            <h1 class="main-title"> <?= get_field('banner_top_main_title'); ?> </h1>
            <a href="<?= get_field('banner_top_link')['url']; ?>"> &horbar;&horbar; <?= get_field('banner_top_link')['title']; ?> </a> 
        </div>
    </div>

    <div class="banner__pros">
        <div class="banner__pros__box">
            <img src="<?= get_field('banner_top_presentation_1_image')['url']; ?>" alt="">
            <p class="title"> <?= get_field('banner_top_presentation_1_title'); ?> </p>
            <p> <?= get_field('banner_top_presentation_1_detail'); ?> </p>
        </div>
        <div class="banner__pros__box">
            <img src="<?= get_field('banner_top_presentation_2_image')['url']; ?>" alt="">
            <p class="title"> <?= get_field('banner_top_presentation_2_title'); ?> </p>
            <p> <?= get_field('banner_top_presentation_2_detail'); ?> </p>
        </div>
        <div class="banner__pros__box">
            <img src="<?= get_field('banner_top_presentation_3_image')['url']; ?>" alt="">
            <p class="title"> <?= get_field('banner_top_presentation_3_title'); ?> </p>
            <p> <?= get_field('banner_top_presentation_2_detail'); ?> </p>
        </div>
    </div>

</section>


<!-- intro contient une image et un bloc -->
<!-- bloc contient titre, texte, et signature -->
<section class="intro">

    <img src="<?= get_field('intro_image')['url']; ?>" alt="">

    <div class="intro__text">
        <p class="title"> <?= get_field('intro_title'); ?> </p>
        <p class="subtitle"> <?= get_field('intro_subtitle'); ?> </p>
        <p> <?= get_field('intro_text'); ?> </p>
        <p class="signature">
            <p class="title"> <?= get_field('intro_signature_title'); ?> </p>
            <p class="subtitle"> <?= get_field('intro_signature_subtitle'); ?> </p>
        </p>
    </div>

</section>


<!-- contient titre, et 1 bloc / restaurants (faire une boucle) -->
<section class="restau">

    <p class="subtitle"><?= get_field('restaurants_subtitle'); ?></p>
    <p class="title"><?= get_field('restaurants_title'); ?></p>

    while (have_restaurants) {

        <div class="restau__presentation">
            <div class="restau__presentation__text">
                <p class="subtitle"></p>
                <p class="title"></p>
                <p></p>
                <button></button>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" alt="">
            <!-- lien de l'image à changer -->
        </div>

    }
    <!-- la condition de la boucle est à changer!!!! -->

</section>


<!-- contient titre, texte, images ded presentation, bouton -->
<section class="menu">

    <div class="menu__images">
        <img src="<?= get_field('menu_image_1')['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_2')['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_3')['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_4')['url']; ?>" alt="">
    </div>
    <div class="menu__text">
        <p class="subtitle"><?= get_field('menu_subtitle'); ?></p>
        <p class="title"><?= get_field('menu_title'); ?></p>
        <p><?= get_field('menu_detail'); ?></p>
        <a href="<?= get_field('menu_link')['url']; ?>"> <?= get_field('menu_link')['title']; ?> </a> 
    </div>

</section>


<!-- contient un icone, texte, et signature / avis (faire une boucle) -->
<section class="testimony">

    while (commentaires) {

        <!-- icon , maybe with fontawesome -->
        <p></p>
        <p class="signature"></p>

    }
    <!-- condition à changer!!!!!! -->

</section>



<section class="recipes">

</section>

<?php get_footer(); ?>
