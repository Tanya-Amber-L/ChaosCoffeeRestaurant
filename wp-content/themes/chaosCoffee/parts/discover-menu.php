<!-- contient titre, texte, images ded presentation, bouton -->
<section class="menu">

    <div class="menu__images">
        <img src="<?= get_field('menu_image_1')['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_2')['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_3')['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_4')['url']; ?>" alt="">
    </div>
    <div class="menu__text">
        <div>
            <p class="subtitle"><?= get_field('menu_subtitle'); ?></p>
            <p class="title"><?= get_field('menu_title'); ?></p>
        </div>
        <p class="menu__text__detail"><?= get_field('menu_detail'); ?></p>
        <a class="menu__text__button" href="<?= get_field('menu_link')['url']; ?>"> <?= get_field('menu_link')['title']; ?> </a> 
    </div>

</section>