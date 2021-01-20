<?php $pageId = 2; ?>
<!-- contient titre, texte, images ded presentation, bouton -->
<section class="menu">

    <div class="menu__images">
        <img src="<?= get_field('menu_image_1', $pageId)['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_2', $pageId)['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_3', $pageId)['url']; ?>" alt="">
        <img src="<?= get_field('menu_image_4', $pageId)['url']; ?>" alt="">
    </div>
    <div class="menu__text">
        <div>
            <p class="subtitle"><?= get_field('menu_subtitle', $pageId); ?></p>
            <p class="title"><?= get_field('menu_title', $pageId); ?></p>
        </div>
        <p class="menu__text__detail"><?= get_field('menu_detail', $pageId); ?></p>
        <a class="menu__text__button" href="<?= get_field('menu_link', $pageId)['url']; ?>"> <?= get_field('menu_link', $pageId)['title']; ?> </a>
    </div>

</section>