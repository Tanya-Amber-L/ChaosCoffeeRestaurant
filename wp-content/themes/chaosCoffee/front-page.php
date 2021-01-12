<?php get_header(); ?>

<!-- bannière contient notre titre, lien vers les menus + 3 qualités mises en avant  -->
<section class="banner">

    <div class="banner__title">
        <h2 class="main-subtitle"></h2>
        <h1 class="main-title"></h1>
        <a href="<?= get_template_directory_uri();?> /menu.php"></a> 
        <!-- pas sure de la syntaxe du lien -->
    </div>

    <div class="banner__pros">
        <div class="banner__pros__box">
            <img src="" alt="">
            <p class="title"></p>
            <p></p>
        </div>
        <div class="banner__pros__box">
            <img src="" alt="">
            <p class="title"></p>
            <p></p>
        </div>
        <div class="banner__pros__box">
            <img src="" alt="">
            <p class="title"></p>
            <p></p>
        </div>
    </div>

</section>


<!-- intro cintient une image et un bloc -->
<!-- bloc contient titre, texte, et signature -->
<section class="intro">

    <img src="<?php echo get_template_directory_uri(); ?>/img/image.png" alt="">
    <!-- corriger lien de l'image -->

    <div class="intro__text">
        <p class="title"></p>
        <p class="subtitle"></p>
        <p></p>
        <p class="signature">
            <p class="subtitle"></p>
            <p class="title"></p>
        </p>
    </div>

</section>


<!-- contient titre, et 1 bloc / restaurants (faire une boucle) -->
<section class="restau">

    <p class="subtitle"></p>
    <p class="title"></p>

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
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
        <img src="" alt="">
    </div>
    <div class="menu__text">
        <p class="subtitle"></p>
        <p class="title"></p>
        <p></p>
        <button></button>
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
