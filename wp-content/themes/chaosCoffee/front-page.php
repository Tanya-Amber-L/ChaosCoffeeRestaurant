<?php get_header(); ?>

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

    <?php get_template_part('parts/restaurants') ?>

</section>


<!-- section menu: contient titre, texte, images ded presentation, bouton -->
<!-- creation du document dans /parts parce qu'on aura besoin de l'appeler sur d'autres pages -->
<?php get_template_part('parts/discover-menu') ?>


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
