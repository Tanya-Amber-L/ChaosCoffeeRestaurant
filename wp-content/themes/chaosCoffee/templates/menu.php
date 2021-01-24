<?php
/*
	Template Name: Menu
*/
get_header();
?>


<main>

	<section class="banner">

		<div class="banner__title">
			<img class="banner__title__img" src="<?= get_field('image')['url']; ?>" alt="">
			<img class="banner__title__hatch" src="<?php echo get_template_directory_uri(); ?>/assets/images/hachures-blanches.png" alt="">
			<div class="banner__title__text">
				<h2 class="main-subtitle"> <?= get_field('top_subtitle'); ?> </h2>
				<h1 class="main-title"> <?= get_field('top_title'); ?> </h1>
				<a href="<?= get_field('link')['url']; ?>"> &horbar;&horbar; <?= get_field('link')['title']; ?> </a>
			</div>
		</div>

	</section>

	<section class="menu-list-container">

		<p class="subtitle"><?= get_field('subtitle'); ?></p>
		<p class="title"><?= get_field('title'); ?></p>

		<?php //boucle qui contient les trois types de listes (entrée, plat, dessert)

            if( have_rows('menu_list') ):  while( have_rows('menu_list') ) : the_row(); ?>

				<div class="menu-list">

					<p class="menu-list__title"><?= get_sub_field('title'); ?></p>

					<?php //sous boucle qui contient les plats et prix
					

						if( have_rows('choice') ): while( have_rows('choice') ) : the_row(); ?>
								
							<div class="menu-list__recipe <?= get_sub_field('selection') ? "chef-selection" : "" ; ?> ">
								<div class="dotted-line"></div>
								<div class="name-and-price">
									<p class="recipe__name"><?= get_sub_field('recipe_title'); ?></p>
									<p class="recipe__price"><?= get_sub_field('price'); ?> &euro; </p>
								</div>
								<div class="menu-list__detail"><?= get_sub_field('detail'); ?></div>
							</div>

					<?php endwhile; endif;?>
				
				</div>

        <?php endwhile; endif;?>

	</section>

</main>


<?php
get_footer();
?>